<?php 

get_header();
// the_post();


?>

<h1>Blog page</h1>

<?php


while(have_posts()){
 
  the_post();
  $image_path=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
  ?>

<div class="card">
      <h2><?php the_title() ?></h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">
      <img src="<?php echo $image_path[0]; ?>" alt="Image" >
    </div>
      
    
    </div>

  <?php
}
?>


<?php
    get_footer();
?>