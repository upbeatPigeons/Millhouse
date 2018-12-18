<?php

require "Product.php";

class ProductMethod{

  private $pdo;

  // PDO object gets passed as a parameter to encapsulate the database operations for Products inside this class
  public function __construct($pdo)
  {
    $this->pdo =$pdo;
  } 
  
  // Lists relevant products
  public function list_relevant_products($category)
  {
    try {
      $statement = $this->pdo->prepare(
        "SELECT * FROM products WHERE category = :category ORDER BY RAND() LIMIT 4"
      );
      $statement->execute([
      ":category" => $category
      ]);

      /* 
		  * We will use FETCH_CLASS to return an array consisting of       
		  * objects from the Product class
      * FETCH_CLASS fetches database rows into an object
      */

      return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Product");

    }catch (PDOException $exception) {
      echo "Connection error" . $exception->getMessage();
    }
  }
}

?>