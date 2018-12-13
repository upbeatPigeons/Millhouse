<?php

require "Product.php";

class ProductMethod{

  private $pdo;

  public function __construct($pdo){
   
    /* Making pdo connection available within this class by 
     * We can call it with $this-> pdo
     */ 

    $this->pdo =$pdo;
  } 
  
  /* Creating new function to be able to list the products with relevant category to the post */

  public function list_relevant_products($category){

    try{
      $statement = $this->pdo->prepare("SELECT * FROM products WHERE category = :category ORDER BY RAND() LIMIT 4");
      $statement->execute([
      ":category" => $category
      ]
    );
      /* 
		  * We will use FETCH_CLASS to return an array consisting of       
		  * objects from the Comment class
      * FETCH_CLASS fetches database rows into an object
      */
      return $statement->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Product");
        }catch (PDOException $exception) {
          echo "Connection error" . $exception->getMessage();
        }
      }
    }

?>