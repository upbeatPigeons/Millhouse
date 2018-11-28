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
	private $id;

  // Method to create a new post. 
	public function __construct($title, $description, $created_by, $category) 
	{
		$this->title = $title;
		$this->description = $description;
		$this->date = date("Y-m-d"); // Prints the date to today's date like 2018-11-22
		$this->created_by = $created_by;
		$this->category = $category; 
	}

	/*
	* This function will be used by Posts_access.php to build a post from the database. 
	* It returns each row of the query result set as a Post object.
	* The parameters should always match the order of the columns in the datase.
	*/ 

	public static function build_post_from_pdo($id, $title, $description, $created_by, $image, $date, $category) {
		// use the constructor to create the post instance
		$post_from_database = new self($title, $description, $created_by, $category);
		// since my constructor doesn't have id, image or date, we need to 
		$post_from_database->set_id($id);
		$post_from_database->set_image($image);
		$post_from_database->set_date($date); // This will overwrite the date from the constructor and instead use the date from the database 
		return $post_from_database;
	}

	// Setter methods below
	public function set_image($image) {
		$this->image = $image;
	}

	/*
	* These setters below are private because nothing outside of this class is going to use them
	* Only to be used in the build_post_from_pdo function
	*/

	private function set_id($id) {
		$this->id = $id;
	}

	private function set_date($date) {
		$this->date = $date;
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