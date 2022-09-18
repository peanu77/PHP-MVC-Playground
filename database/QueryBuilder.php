<?php

/* 
  This class returns a helpful functions that may help for the queries on the database;
*/

class QueryBuilder
{
  protected $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    // Query
    $statement = $this->pdo->prepare("SELECT * FROM {$table}");
    // Execute Query
    $statement->execute();
    // Return Result
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }
}
