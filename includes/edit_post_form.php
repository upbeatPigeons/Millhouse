<?php 

require_once "validation_functions.php";

?>

<?php 
$post_methods = new PostMethods($pdo);
$post = $post_methods->list_single_post($_GET["id"]);
?>

<form action="../views/edit_post_page.php?action=edit&id=<?=$post->get_id()?>" method="POST">
	<div class="form-group">
		<label for="title">Edit blog title</label> 
		<input type="text" value="<?=$post->get_title()?>" class="form-control" name="title" placeholder="Title"><div class="<?php get_class_for_error_message($empty_title)?>"><?php echo $empty_title_error_message;?></div>
	</div>
	<div class="form-group">
		<label for="image">Edit image URL</label>
		<input type="text" class="form-control" name="image" value="<?=$post->get_image()?>" placeholder="http://example.com/image.jpg">
	</div>

	<div class="form-group">
		<label for="category">Edit category</label>
		<select class="form-control" name="category">
			<option value="Clothing">Clothing</option>
			<option value="Accessories">Accessories</option>
			<option value="Interior">Interior</option>
		</select>
		<div class="<?php get_class_for_error_message($empty_category)?>"><?php echo $empty_category_error_message;?></div>
	</div>
		<div class="form-group">
		<label for="description">Edit text</label>
		<textarea class="form-control" name="description" rows="10"cols="30"> <?=$post->get_description()?> </textarea>
		<div class="<?php get_class_for_error_message($empty_description)?>"><?php echo $empty_description_error_message;?></div>
	</div>
	<button type="submit" class="create-post-button">Edit post</button>
</form>
