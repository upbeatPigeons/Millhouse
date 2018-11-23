<form action="create_post_page.php?action=create" method="POST">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" placeholder="Title">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<input type="text" class="form-control" name="description" placeholder="Description">
	</div>

	<div class="form-group">
		<label for="created-by">Created by</label>
		<input type="text" class="form-control" name="created-by" placeholder="Created by">
	</div>

	<div class="form-group">
		<label for="image">Image</label>
		<input type="file" class="form-control-file" name="image" placeholder="Image">
	</div>

	<div class="form-group">
		<label for="category">Category</label>
		<select multiple  class="form-control" name="category">
			<option value="Clothing">Clothing</option>
			<option value="Accessories">Accessories</option>
			<option value="Interior">Interior</option>
		</select>
	</div>
	<p>Text here</p>
	<button type="submit" class="create-post-button">Create post</button>
</form>
