<?php 

require_once "validation_functions.php";

?>
<form action="create_post_page.php?action=create" method="POST">
	<div class="form-group">
		<label for="title" class="content">Enter blog title</label>
		<input type="text" class="form-control borders" name="title" placeholder="Title"><div class="<?php get_class_for_error_message($empty_title)?>"><?php echo $empty_title_error_message;?></div>
	</div>

	<div class="form-group">
		<label for="image" class="content">Enter image URL</label>
		<input type="text" class="form-control borders" name="image" placeholder="http://example.com/image.jpg"><div class="<?php get_class_for_error_message($empty_image)?>"><?php echo $empty_image_error_message;?></div>
	</div>

	<div class="form-group">
		<label for="category" class="content">Select category</label>
		<select class="form-control borders" name="category">
			<option value="Clothing">Clothing</option>
			<option value="Accessories">Accessories</option>
			<option value="Interior">Interior</option>
		</select>
		<div class="<?php get_class_for_error_message($empty_category)?>"><?php echo $empty_category_error_message;?></div>
	</div>

	<div class="form-group">
		<label for="description" class="content">Enter text</label>
		<textarea class="form-control borders" name="description" rows="10"cols="30"></textarea>
		<div class="<?php get_class_for_error_message($empty_description)?>"><?php echo $empty_description_error_message;?></div>
	</div>

	<div class="cta_area">
		<button type="submit" class="btn create-post-button primory_btn_inverse btn-block">CREATE POST</button>
		<a class="btn cancel-action-button primory_btn_inverse btn-block" href="../views/home_page.php" role="button">CANCEL</a>
	</div>
</form>
