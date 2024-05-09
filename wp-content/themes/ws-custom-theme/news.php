<?php
    // Template Name:news page
?>
<?php 

get_header();
the_post();
$paged=get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$search_data=(isset($_GET['search']))?$_GET['search']:'';

?>

<h1>News</h1>

<div class="search-container">
    <form method="get">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><?php echo apply_filters("change_text","Submit") ?></button>
    </form>
  </div>
<a href="<?php echo site_url("add-news") ?>">Add news</a>

<?php
$wparr=array(
    "post_type"=>"news",
    "post_status"=>"publish",
    "s"=>$search_data,
    "posts_per_page"=>1,
    "paged"=>$paged
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
        <p><?php the_field('news_date',get_the_ID()) ?> </p>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>"><button>Read More</button></a>
        <!-- <p><?php  //the_content() ?></p> -->
      <!-- </div> -->
        
      
      </div>
  
    <?php
  }
  ?>


  <?php  wp_pagenavi(array("query"=>$wpbquery)); 
    wp_reset_postdata();
  ?>

  <div><h1>Categories</h1></div>
  <?php $cat=get_terms(['taxonomy'=>'news_category','hide_empty'=>false,'orderby'=>'name','order'=>'DESC','parent'=>0]); ?>
  <?php foreach ($cat as $c){
    ?>
    <a href='<?php echo get_category_link($c->term_id) ?>'>
      <div class="tag tag-<?php echo strtolower($c->name)?>"><?php echo $c->name ?></div>
    </a>
    <?php
  }
  ?>


  <?php get_footer(); ?>
