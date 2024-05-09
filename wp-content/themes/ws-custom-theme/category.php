<?php 

get_header();
// the_post();


?>

<h1>Blogs</h1>

<?php
while(have_posts()){
 
    the_post();
    // Get the post's featured image
    $thumbnail_url = get_the_post_thumbnail_url();

    ?>
  
  <div class="card">
        <h2><?php the_title() ?></h2>
        <!-- <h5>Title description, Dec 7, 2017</h5> -->
        <!-- <div class="fakeimg" style="height:200px;"> -->
        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="Image" >
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>"><button>Read More</button></a>
        <!-- <p><?php  //the_content() ?></p> -->
      <!-- </div> -->
        
      
      </div>
  
    <?php
  }
  ?>
  <?php echo wp_pagenavi(); ?>
  <?php get_footer(); ?>