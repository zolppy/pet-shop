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
      "pgsql:host=%s;port=%s;dbname=%s",
      getenv('POSTGRES_HOST'),
      getenv('POSTGRES_PORT'),
      getenv('POSTGRES_DB')
    );

    self::$connection = new PDO
    (
      $connection_string,
      getenv('POSTGRES_USER'),
      getenv('POSTGRES_PASSWORD')
    );

    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
}
?>