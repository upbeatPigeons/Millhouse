   <div class="container">
      <h3 class="smaller_title">Contact us</h3>
      <form class="login" action="../includes/mail.php" method="POST">
         <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control borders" id="name" name="name" placeholder="Your name">
            <p><?php if(isset($name_error)) echo $name_error; ?></p>
         </div>
    
      <div class="form-group">
         <label for="email">Email address</label>
         <input type="text" class="form-control borders" id="email" name="email" placeholder="Your email address">
         <p><?php if(isset($email_error)) echo $email_error; ?></p>
      </div>

      <div class="form-group">
         <label for="subject">Subject</label>
         <input type="text" class="form-control borders" id="subject" name="subject" placeholder="Subject">
         <p><?php if(isset($subject_error)) echo $subject_error; ?></p>
      </div>

      <div class="form-group">
		   <label for="message">Write a message</label>
         <textarea class="form-control borders" name="message" rows="5"cols="30" placeholder="Write something to us"></textarea>
         <p><?php if(isset($message_error)) echo $message_error; ?></p>
      </div>  
      <div class="cta_area"> 
	  	<input type="submit" class="btn contact_button primory_btn btn-block" value="SUBMIT">
      <input class="btn contact_button primory_btn btn-block" type="reset" value="CLEAR">
   </div>
	</form>
</div> <!-- end of container --> 

