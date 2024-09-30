<?php
require_once "core/database.php";

class ActiveRecord
{
  private $attributes = [];

  public function __construct() {}

  public function __set(string $atribute, $value)
  {
    $this->attributes[$atribute] = $value;
  }

  public function __get(string $atribute)
  {
    return $this->attributes[$atribute] ?? null;
  }

  public function __isset($atribute)
  {
    return isset($this->attributes[$atribute]);
  }

  protected static function getTableName()
  {
    $class = static::class;
    $className = strtolower((new ReflectionClass($class))->getShortName());
    
    if (substr($className, -1) === 'y')
    {
      return substr($className, 0, -1) . 'ies';
    }
    
    return $className . 's';
  }

  public static function all()
  {
    $table = static::getTableName();
    $class = static::class;
    
    $sql = "SELECT * FROM $table";
    $results = [];

    Database::useConnection(function($connection) use ($sql, &$results, $class) {
      $result = $connection->query($sql);
      while ($item = $result->fetchObject($class)) {
        $results[] = $item;
      }
    });

    return $results;
  }

  public static function count()
  {
    $table = static::getTableName();
    
    $sql = "SELECT count(*) FROM $table";
    $count = null;

    Database::useConnection(function($connection) use ($sql, &$count) {
      $count = $connection->query($sql)->fetchColumn();
    });

    return $count ? (int) $count : false;
  }

  public static function find($id)
  {
    $table = static::getTableName();
    $class = static::class;
    
    $sql = "SELECT * FROM $table WHERE id = :id";
    $item = false;

    Database::useConnection(function($connection) use ($sql, $id, &$item, $class) {
      $statement = $connection->prepare($sql);
      $statement->bindParam(':id', $id, PDO::PARAM_INT);
      $statement->execute();

      if ($statement->rowCount() > 0) {
        $item = $statement->fetchObject($class);
      }
    });

    return $item;
  }

  public static function destroy($id)
  {
    $table = static::getTableName();
    
    $sql = "DELETE FROM $table WHERE id = :id";
    $success = false;

    Database::useConnection(function($connection) use ($sql, $id, &$success) {
      $statement = $connection->prepare($sql);
      $statement->bindParam(':id', $id, PDO::PARAM_INT);
      $statement->execute();
      $success = $statement->rowCount() > 0;
    });

    return $success;
  }

  public function save()
  {
    $columns = $this->prepare($this->attributes);
    $sql = $this->saveSQL($columns);
    $count = false;

    Database::useConnection(function($connection) use ($sql, &$count) {
      $statement = $connection->prepare($sql);

      if ($statement->execute()) {
        $count = $statement->rowCount();
      }
    });

    return $count;
  }

  private function escape(string $data)
  {
    if(is_string($data) & !empty($data))
    {
      return "'" . addslashes($data) . "'";
    } 
    
    if(is_bool($data)) { return $data ? 'TRUE' : 'FALSE'; }
    if($data !== '') { return $data; }

    return 'NULL';
  }
  
  private function prepare($data)
  {
    $result = array();

    foreach($data as $key => $value)
    {
      if(is_scalar($value)) { $result[$key] = $this->escape($value); }
    }

    return $result;
  }

  private function saveSQL($columns)
  {
    if(!isset($this->id)) { return $this->createSQL($columns); }

    return $this->updateSQL($columns);
  }

  private function createSQL($columns)
  {
    $table = static::getTableName();

    $sql = "INSERT INTO {$table} (" .
      implode(',', array_keys($columns)) .
      ") VALUES (" .
      implode(',', array_values($columns)) .
      ")";

    return $sql;
  }

  private function updateSQL($columns)
  {
    $table = static::getTableName();
    $set = array();
    
    foreach($columns as $key => $value)
    {
      if($key !== 'id') { $set[] = "{$key}={$value}"; }
    }

    return "UPDATE {$table} SET " .
           implode(',', $set) .
           " WHERE id={$this->id}";
  }
}
?>