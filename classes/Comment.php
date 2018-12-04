Comment.php

<?php

/*
* This class represents a comment.
* It encapsulates its properties behind setter and getter methods
* That means that the properties are private and cannot be modified after the object has been constructed
* The only way to access the properties is through the getter methods 
*/

class Comment
{
//Include all the properties that a class has
	
    private $id;
		private $content;
	  private $postId;
		private $created_by;
	  private $date;
	

	// Because we will use FETCH:: CLASS don't need to include parameters in construct
    public function __construct(){
	
 //date() creates a datestamp automatically
			$this->date = date("Y-m-d H:i:s");
    }
	
	
	//getter functions to access private properties of class Comment
	   public function get_id(){
			 
			 return $this->id;
		 }
	
	   public function get_content(){
			 
			 return $this->content;
		 }
	
		 public function get_postId(){
			 
			 return $this->postId;
		 }
	
	   public function get_created_by(){
			 
			 return $this->created_by;
		 }
	
	   public function get_date(){
			 
			 return $this->date;
		 }
	
//setter functions 
	
     public function set_content($content){
			   $this->content = $content;	 
		 }
	  
		public function set_postId($postId){
			 	
			  $this->postId = $postId;
		}

		public function set_created_by($created_by){
			 	
			  $this->created_by = $created_by;
		}

	 
	
}
