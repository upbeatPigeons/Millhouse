<?php 

require_once "validation_functions.php";

?>
<div class="container">
	<form class="login" action="about_page.php?action=send" method="POST">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control borders" id="name" name="name" placeholder="Your name">
			<div class="<?php get_class_for_error_message($name_error)?>"><?php echo $name_error;?></div>
		</div>

		<div class="form-group">
			<label for="email">Email address</label>
			<input type="text" class="form-control borders" id="email" name="email" placeholder="Your email address">
			<div class="<?php get_class_for_error_message($email_error)?>"><?php echo $email_error;?></div>
		</div>

		<div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" class="form-control borders" id="subject" name="subject" placeholder="Subject">
			<div class="<?php get_class_for_error_message($subject_error)?>"><?php echo $subject_error;?></div>
		</div>

		<div class="form-group">
			<label for="message">Write a message</label>
			<textarea class="form-control borders" name="message" rows="5"cols="30" placeholder="Write something to us"></textarea>
			<div class="<?php get_class_for_error_message($message_error)?>"><?php echo $message_error;?></div>
		</div> 

		<div class="cta_area"> 
			<input type="submit" class="btn contact_button primory_btn btn-block" value="SUBMIT">
			<input class="btn contact_button primory_btn btn-block" type="reset" value="CLEAR">
		</div>
	</form>
</div> <!-- end of container --> 

