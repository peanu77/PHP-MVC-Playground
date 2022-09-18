<?php

class Connection
{
  // This will make a connection to the DB 
  public static function make($config)
  {

    try {
      return new PDO(
        $config['connection'] . ';dbname=' . $config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}
