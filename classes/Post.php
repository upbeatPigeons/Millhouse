<?php 

/*
* This class represents a post.
* It encapsulates its properties behind setter and getter methods
* That means that the properties are private and cannot be modified after the object has been constructed
* The only way to access the properties is through the getter methods 
*/

class Post 
{
  // Properties below
	private $title;
	private $description;
	private $created_by;
	private $image;
	private $date;
	private $category;

  // Method to create a new post. 
	public function __construct($title, $description, $created_by, $category) 
	{
		$this->title = $title;
		$this->description = $description;
		$this->date = date("l jS \of F Y h:i:s A"); // Prints something like: Monday 8th of August 2005 03:12:46 PM
		$this->created_by = $created_by;
		$this->category = $category; 
	}

	// Setter methods below
	public function set_image($image) {
		$this->image = $image;
	}

	// Below are all the getters methods for the class properties

	public function get_title() {
		return $this->title;
	}

	public function get_description() {
		return $this->description;
	}

	public function get_date() {
		return $this->date;
	}

	public function get_created_by() {
		return $this->created_by;
	}

	public function get_image() {
		return $this->image;
	}

	public function get_category() {
		return $this->category;
	}

}




?>