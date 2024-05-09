<?php
// Template Name: Contact Page Template
// Description: A page template for contact information.

?>

<?php 
get_header();
the_post();
?>
    
    <section class="about">
        <h1><?php the_title() ?> </h1>
        <?php
          the_post_thumbnail();
          // the_post_thumbnail('thumbnail');
        ?>
       
        <div class="about-info">
           
            <div>
            <p> 
              <?php
              //  the_content(); 
               echo get_the_content();
              
              //  print_r($image_path);
               ?>
             
            </p>
                
            </div>
        </div>
    </section>


<?php
    get_footer();
?>