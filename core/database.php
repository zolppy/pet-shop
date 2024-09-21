<?php
class Database
{
  private static $connection;

  private function __construct() {}

  public static function getConnection()
  {
    if(is_null(self::$connection))
    {
      try { self::connect(); }
      catch(PDOException $e) { die($e->getMessage()); }
    }

    return self::$connection;
  }

  private static function connect()
  {
    $connection_string = sprintf
    (
      "mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4",
      getenv('MYSQL_HOST'),
      getenv('MYSQL_PORT'),
      getenv('MYSQL_DB'),
    );

    self::$connection = new PDO
    (
      $connection_string,
      getenv('MYSQL_USER'),
      getenv('MYSQL_PASSWORD')
    );

    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>