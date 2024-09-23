<?php
class Database
{
  private static $connection;
  private const DATABASE_NAME_PATTERN = '/^[a-zA-Z0-9_]+$/';

  private function __construct() {}

  public static function useConnection(callable $callback)
  {
    $connection = self::getConnection();
    
    try
    {
      $connection->beginTransaction();
      $callback($connection);
      $connection->commit();
    }
    catch (Exception $e)
    {
      $connection->rollBack();
      throw $e;
    }
  }

  public static function reset()
  {
    self::recreate();
    self::migrate();
  }

  public static function recreate()
  {
    $connection = self::getConnectionWithoutDatabase();
    $dbName = getenv('MYSQL_DB');

    if(preg_match(self::DATABASE_NAME_PATTERN, $dbName))
    {
      $connection->exec('DROP DATABASE IF EXISTS ' . $dbName);
      $connection->exec('CREATE DATABASE IF NOT EXISTS ' . $dbName);
      return;
    }

    throw new RuntimeException("Invalid database name: " . $dbName);
  }

  public static function migrate()
  {
    $migrations = glob('database/migrations/*.sql');
    $connection = self::getConnection();

    foreach($migrations as $migration)
    {
      $connection->exec(file_get_contents($migration));
    }
  }

  private static function getConnection()
  {
    if(is_null(self::$connection))
    {
      try { self::connect(); }
      catch(PDOException $e)
      {
        throw new RuntimeException
        (
          "Database connection failed: " . $e->getMessage()
        );
      }
    }

    return self::$connection;
  }

  private static function getConnectionWithoutDatabase()
  {
    $connectionString = sprintf
    (
      "mysql:host=%s;port=%s;charset=utf8mb4",
      getenv('MYSQL_HOST'),
      getenv('MYSQL_PORT')
    );

    try {
      $connection = new PDO
      (
        $connectionString,
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD')
      );

      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $connection;
    }
    catch(PDOException $e)
    { 
      throw new RuntimeException
      (
        "Database connection failed: " . $e->getMessage()
      );
    }
  }

  private static function connect()
  {
    $connectionString = sprintf
    (
      "mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4",
      getenv('MYSQL_HOST'),
      getenv('MYSQL_PORT'),
      getenv('MYSQL_DB'),
    );

    self::$connection = new PDO
    (
      $connectionString,
      getenv('MYSQL_USER'),
      getenv('MYSQL_PASSWORD')
    );

    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>