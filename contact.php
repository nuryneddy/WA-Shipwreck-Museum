<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>

      <!-- contact section start -->
      <section class="contact_section layout_padding">
        <div class="container">
          <h1 class="contact_title">Enquire</h1>
          <div class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Number" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="message-bt" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
             </div>
             <div class="send_btn"><a href="#">SEND</a></div>
          </div>
        </div>
      </div>
      <!-- contact section end -->
   </section>
   <?php get_footer(); ?>