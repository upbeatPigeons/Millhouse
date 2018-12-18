<?php

require_once "validation_functions.php";
?>
	<form action="../views/single_post_page.php?action=create_comment&id=<?=$post->get_id();?>" method="POST">
		<div class="row form-group comment_form justify-content-center">
			<div class="col-12 col-md-9 comment_field_title">
				<h2 class="subheading">Leave a comment</h2>
			</div>

			<label for="comment" class="sr-only">Leave a comment</label>
			<textarea type="text-area" class="col-12 col-md-9 text-area" name="comment"></textarea>

			<!-- Error div -->
			<div class="<?php get_class_for_error_message($comment_error)?>"><?=$comment_error;?></div>

	  	<button class="btn comment_button primory_btn_inverse col-12 col-md-9" type="submit">SUBMIT</button>	
		</div>
	</form>