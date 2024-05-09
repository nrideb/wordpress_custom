<?php 

get_header();
$catdata=get_queried_object();
// echo "<pre>";
// print_r($catdata);
?>
<h1><?php echo $catdata->name; ?></h1>

<?php
$wparr=array(
    "post_type"=>"news",
    "post_status"=>"publish",
    "tax_query"=>array(
        array(
            'taxonomy'=>'news_category',
            'field'=>'term_id',
            'terms'=>$catdata->term_id
        )
    )
);
$wpbquery = new WP_Query($wparr);
while($wpbquery->have_posts()){
    $wpbquery ->the_post();
 
    
    // Get the post's featured image
    $thumbnail_url = get_the_post_thumbnail_url();
    // $post_id = 90;

    ?>
  
  <div class="card">
        <h2><?php the_title() ?></h2>
        <!-- <h5>Title description, Dec 7, 2017</h5> -->
        <!-- <div class="fakeimg" style="height:200px;"> -->
        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="Image" >
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>"><button>Read More</button></a>
        <!-- <p><?php  //the_content() ?></p> -->
      <!-- </div> -->
        
      
      </div>
  
    <?php
  }
  ?>


  <?php echo wp_pagenavi(); ?>


<?php get_footer(); ?>