 <!-- Footer section -->
 <footer class="section-p1">
      <div class="col">
        <img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" />
        <h4>Contact</h4>
        <p><strong>Address:</strong><?php the_field('address') ?></p>
        <p><strong>Mobile:</strong><?php the_field('phone_number'); ?></p>
        <p><strong>Email:</strong><?php the_field( 'email' ); ?> </p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-pinterest"></i>
            <i class="fa fa-youtube"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About Us</h4>
        <a href="#abc">About us</a>
        <a href="#abc">Delievery Information</a>
        <a href="#abc">Privacy Policy</a>
        <a href="#abc">Terms & Conditions</a>
        <a href="#abc">Contact us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#abc">Sign In</a>
        <a href="#abc">View Cart</a>
        <a href="#abc">My Wishlist</a>
        <a href="#abc">Track My Order</a>
        <a href="#abc">Help</a>
      </div>
      <div class="col install">
        <h4>Recent Posts </h4>
        <!-- <h4>Install App</h4>
        <p>From PlayStore or Google Playstore</p>
        <div class="row">
          <img src="<?php //echo get_template_directory_uri();?>/images/pay/app.jpg" alt="" />
          <img src="<?php //echo get_template_directory_uri();?>/images/pay/play.jpg" alt="" />
        </div>
        <p>Secured and Protected. State Bank Authorized</p>
        <img src="<?php //echo get_template_directory_uri();?>/images/pay/pay.png" alt="" /> -->
        <div class="row">
          <?php 
            dynamic_sidebar('sidebar');
          ?>
        </div>
      </div>
     
    </footer>

    <!-- <script src="<?php //echo get_template_directory_uri();?>/js/script.js"></script> -->
    <!-- <script src="script.js"></script> -->
    <?php wp_footer(); ?>
  </body>
</html>