<?php 

require_once "validation_functions.php";

?>

<?php 
// Retrive the post we are going to edit with its ID
$post_methods = new PostMethods($pdo);
$post = $post_methods->list_single_post($_GET["id"]);
?>

<form action="../views/edit_post_page.php?action=edit&id=<?=$post->get_id()?>" method="POST">
	<div class="form-group">
		<label for="title" class="content">Edit blog title</label> 
		<input type="text" value="<?=$post->get_title()?>" class="form-control borders" name="title"><div class="<?php get_class_for_error_message($empty_title)?>"><?php echo $empty_title_error_message;?></div>
	</div>
	<div class="form-group borders">
		<label for="image" class="content">Edit image URL</label>
		<input type="text" class="form-control borders" name="image" value="<?=$post->get_image()?>"><div class="<?php get_class_for_error_message($empty_title)?>"><?php echo $empty_image_error_message;?></div>
	</div>

	<div class="form-group">
		<label for="category" class="content">Edit category</label>
		<select class="form-control borders" name="category">
			<option value="Clothing">Clothing</option>
			<option value="Accessories">Accessories</option>
			<option value="Interior">Interior</option>
		</select>
		<div class="<?php get_class_for_error_message($empty_category)?>"><?php echo $empty_category_error_message;?></div>
	</div>
	<div class="form-group">
		<label for="description" class="content">Edit text</label>
		<textarea class="form-control borders" name="description" rows="10"cols="30"><?=$post->get_description()?> </textarea>
		<div class="<?php get_class_for_error_message($empty_description)?>"><?php echo $empty_description_error_message;?></div>
	</div>
	<div class="cta_area">
		<button type="submit" class="btn create-post-button primory_btn btn-block">EDIT POST</button>
		<a class="btn cancel-action-button primory_btn btn-block" href="../views/home_page.php" role="button">CANCEL</a>
	</div>
</form>
