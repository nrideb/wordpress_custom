<?php /* Template Name: about-page */ ?>
<?php 
get_header();
the_post();
?>
<style>
    :root {
  --var-color1: #0A1931;
  --var-color2: #185ADB;
  --var-color3: #FFC947;
  --var-color4: #EFEFEF;
}

/* * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
} */



/* body {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--var-color1);
  width: 100%;
  height: 100vh;
  overflow: hidden;
} */


.content{
    width: 65%;
    height: 50%;
    display: flex;
    gap: 1vw;
}

.box {
    position: relative;
    height: 100%;
    width: 23vw;
    min-width: 10vw;
    max-width: 23vw;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: ease-in 0.8s;
    overflow: hidden;
    background-color: var(--var-color1);
    border-radius: 10px;
    border: 2px solid var(--var-color3);
    color: var(--var-color4); 
}

.box:nth-child(1) {
    animation: apparitionBox 1.5s ease-in-out;
}

.box:nth-child(2) {
    animation: apparitionBox 2s ease-in-out;
}

.box:nth-child(3) {
    animation: apparitionBox 2.5s ease-in-out;
}

.box:nth-child(4) {
    animation: apparitionBox 3s ease-in-out;
}

.box a {
    text-decoration: none;
    color: var(--var-color4);
}

.box p {
    rotate: -90deg;
    font-size: 4.7em;
    font-weight: 300;
    font-family: 'Lilita One', cursive;
    transition: ease-in 0.8s;

    @include respond(tab-port){
        font-size: 7vw;
        rotate: 0deg;
    }
}

.box:hover {
    width: 50vw;
    max-width: 50vw;
    background-color: var(--var-color3);
    color: var(--var-color1);
    transition: ease 0.8s;
}

.box:hover a {
    color: var(--var-color1);
    transition: ease-in 0.8s;
}

.box:hover p {
    rotate: 0deg;
    transition: ease-in 0.8s;
}

@keyframes apparitionBox {
    0% {
        opacity: 0;
        transform: translateY(-100%);
    }

    100% {
        opacity: 1;
        transform: translateY(0%);
    }
}
</style>
    
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
               $image_path=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
              //  echo "<pre>";
              //  print_r($image_path);
               ?>
               <img src="<?php echo $image_path[0]; ?>" alt="" />
            </p>
                
            </div>
        </div>
    </section>
    <h2>Categories</h2>
    <?php
    
    $cat=get_categories(array('taxonomy'=>'category'));
    if(!empty($cat)){
        foreach($cat as $data){
            ?>
                 <div class="content">
                    <div class="box">
                        <a href="<?php echo get_category_link($data->term_id) ?>">
                            <p><?php echo $data->name; ?>(<?php echo  $data->count;?> )</p>
                        </a>
                    </div>
            <?php

        }
        ?>
       
        
    </div>
        <?php
    }
    ?>
    
    

