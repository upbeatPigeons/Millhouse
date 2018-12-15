  <?php 

    /* These alerts will show if the email is sent successfully or if something went wrong
    * Made with https://getbootstrap.com/docs/4.0/components/alerts/
    * Is used on about_page.php
    */
    
    ?>

    <?php if (isset($_GET["email_sent"])) {
    // This alert will show if the email is sent succesfully
      if ($_GET["email_sent"] == "true") { ?>
        <div class="alert alert-success alert-dismissible fade show content" role="alert">
          <strong>Email sent!</strong> Thank you for your message.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } else { 
      // This alert will show if there was a problem with sending the email ?>
      <div class="alert alert-danger alert-dismissible fade show content" role="alert">
        <strong>There was a problem sending your email.</strong> Please wait a few minutes and try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php }
  }?>