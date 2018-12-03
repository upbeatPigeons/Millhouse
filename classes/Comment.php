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
		private $createdBy;
	  private $date;
	

	// Because we will use FETCH:: CLASS don't need to include parameters in construct
    public function __construct(){
	
 //date() creates a datestamp automatically
			$this->date = date("Y-m-d H:m");
    }
	
	
	//getter functions to access private properties of class Comment
	   public function get_content(){
			 
			 return $this->content;
		 }
	
		 public function get_postId(){
			 
			 return $this->postId;
		 }
	
	   public function get_createdBy(){
			 
			 return $this->createdBy;
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

		public function set_createdBy($createdBy){
			 	
			  $this->createdBy = $createdBy;
		}

	 
	
}
