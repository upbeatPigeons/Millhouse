
<!--Sends post id as GET in url with $post->get_id()
    and action create to initiate switch function in comment controller
 -->
 <?php
require_once "validation_functions.php";
?>
<div class="container comment_field">
	<form action="../includes/comment_controller.php?action=create&id=<?php echo $post->get_id();?>" method="POST">
		<div class="row form-group">
			<label for="comment" class="sr-only">Leave a comment</label>
			<textarea type="text-area" class="col-12 text-area" name="comment" placeholder="Leave your Comment"></textarea>
			 <!-- Gets error and formats it -->
			<div><?php show_error_messages($_GET["error"]); ?></div>
	  	<button class="btn comment_button col-12" type="submit">Submit</button>	
		</div>
	</form>	 
</div>