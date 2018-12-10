
<!--Sends post id as GET in url with $post->get_id()
    and action create to initiate switch function in comment controller
 -->
<?php
require_once "validation_functions.php";
?>
          
<form action="../includes/comment_controller.php?action=create&id=<?php echo $post->get_id();?>" method="POST">
	<div class="form-group">
		<label for="content">Write a comment</label>
    <p>You are commenting as <?php echo $_SESSION["username"]?></p>
		<textarea type="text-area" class="form-control squared-border" name="comment" rows="7" cols="20"></textarea>
		<!-- Gets error and formats it -->
		<div><?php show_error_messages($_GET["error"]); ?></div>
	  <button type="submit" class="btn btn-outline-primary btn-m btn-block">Submit comment</button>	
	</div>
</form>	 
