
<!--Sends post id as GET in url with $post->get_id()
    and action create to initiate switch function in comment controller
 -->
 
<form action="../includes/comment_controller.php?action=create&id=<?php echo $post->get_id();?>" method="POST">
	<div class="form-group">
		<label for="comment">Leate a comment</label>
		<textarea type="text-area" class="text-area" name="comment" placeholder="Leave your Comment"></textarea>
	  <button type="submit">Submit</button>	
	</div>
</form>	 

	