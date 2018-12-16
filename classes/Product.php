<?php

/*
* This class represents a product
* It encapsulates its properties behind getter methods
* That means that the properties are private and cannot be modified after the object has been constructed
* The only way to access the properties is through the getter methods 
*/

class Product
{
    private $id;
		private $image;
	  private $title;
		private $price;
    private $category;
    
    // Method to create a new product
    public function __construct(){

    }

    // Getter methods to access private properties of class Product
    public function get_id(){
			 
      return $this->id;
    }
   
    public function get_image(){
        
      return $this->image;
    }
   
    public function get_title(){
        
      return $this->title;
    }
   
    public function get_price(){
        
      return $this->price;
    }
   
    public function get_category(){
        
      return $this->category;
    }
  }
	
