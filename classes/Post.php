<?php 

/*
* This class represents a post.
* It encapsulates its properties behind setter and getter methods
* That means that the properties are private and cannot be modified after the object has been constructed
* The only way to access the properties is through the getter methods 
*/

class Post 
{
	private $title;
	private $description;
	private $created_by;
	private $image;
	private $date;
	private $category;
	private $id;

  // Because we use FETCH:: CLASS, we don't include parameters in the constructor 
	public function __construct() {
		// We only initialize the date in the constructor
		$this->date = date("Y-m-d H:m"); // Prints SQL friendly date 2018-11-22 18:11:24
	}

	// Setter methods below
	public function set_title($title) {
		$this->title = $title;
	}

	public function set_description($description) {
		$this->description = $description;
	}

	public function set_created_by($created_by) {
		$this->created_by = $created_by;
	}

	public function set_category($category) {
		$this->category = $category;
	}

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

	public function get_id() {
		return $this->id;
	}
}

?>