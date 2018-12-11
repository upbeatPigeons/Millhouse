
<!--Sends post id as GET in url with $post->get_id()
    and action create to initiate switch function in comment controller
 -->
 <?php
require_once "validation_functions.php";
?>
	<form action="../includes/comment_controller.php?action=create&id=<?php echo $post->get_id();?>" method="POST">
		<div class="row form-group comment_form justify-content-center">
			<div class="col-12 col-md-9">
				<h3 class="smaller_title">Leave a comment</h3>
			</div>
			<label for="comment" class="sr-only">Leave a comment</label>
			<textarea type="text-area" class="col-12 col-md-9 text-area" name="comment" placeholder="Leave your Comment" required></textarea>
	  	<button class="btn comment_button col-12 col-md-9" type="submit">Submit</button>	
		</div>
	</form>	 