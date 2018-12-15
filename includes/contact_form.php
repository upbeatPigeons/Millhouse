   <div class="container">
      <form class="login" action="mail.php" method="POST">
         <div class="form-group">
            <label for="fname">Name</label>
            <input type="text" class="form-control borders" id="fname" name="firstname" placeholder="Your name">
         </div>
    
      <div class="form-group">
         <label for="email">Email address</label>
         <input type="text" class="form-control borders" id="email" name="lastname" placeholder="Your email address" required>
      </div>

      <div class="form-group">
		   <label for="message">Write a message</label>
         <textarea class="form-control borders" name="message" rows="5"cols="30" placeholder="Write something to us" required></textarea>
      </div>  
      <div class="cta_area"> 
	  	<button class="btn contact_button primory_btn btn-block" type="submit" value="send">SEND</button>
      <input class="btn contact_button primory_btn btn-block" type="reset" value="CLEAR">
   </div>
	</form>
</div> <!-- end of container --> 

