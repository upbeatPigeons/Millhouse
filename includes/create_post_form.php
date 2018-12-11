<?php 

require_once "validation_functions.php";

?>

<form action="create_post_page.php?action=create" method="POST">
	<div class="form-group">
		<label for="title">Enter blog title</label>
		<input type="text" class="form-control" name="title" placeholder="Title"><div class="<?php get_class_for_error_message($empty_title)?>"><?php echo $empty_title_error_message;?></div>
	</div>
	<div class="form-group">
		<label for="image">Enter image URL</label>
		<input type="text" class="form-control" name="image" placeholder="http://example.com/image.jpg">
	</div>

	<div class="form-group">
		<label for="category">Select category</label>
		<select class="form-control" name="category">
			<option value="Clothing">Clothing</option>
			<option value="Accessories">Accessories</option>
			<option value="Interior">Interior</option>
		</select>
		<div class="<?php get_class_for_error_message($empty_category)?>"><?php echo $empty_category_error_message;?></div>
	</div>
		<div class="form-group">
		<label for="description">Enter text</label>
		<textarea class="form-control" name="description" rows="10"cols="30"></textarea>
		<div class="<?php get_class_for_error_message($empty_description)?>"><?php echo $empty_description_error_message;?></div>
	</div>
	<p>Text here</p>
	<button type="submit" class="create-post-button primory_btn">Create post</button>
</form>
