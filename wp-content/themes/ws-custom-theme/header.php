<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" /> -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> -->

    <link rel="icon" href="<?php echo get_template_directory_uri();?>images/redWhiteYinYang.png" />

    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

    <link
      type="image/png"
      sizes="32x32"
      rel="icon"
      href="<?php echo get_template_directory_uri();?>/images/icons8-galaxy-store-32.png"
    />
   
    <title><?php bloginfo('name') ?><?php wp_title(); ?> 
    <?php
      if(is_front_page()){
        echo '|';
        bloginfo('description');
      }
     
     ?>
          </title>
  </head>
  <body <?php
  if(is_front_page()){
    body_class(); 
  }
  
  
  ?>
    data-aos-easing="ease"
    data-aos-duration="400"
    data-aos-delay="0"
    class="body__move"
    
  >
    <!-- <script
      src="https://kit.fontawesome.com/a076d05399.js"
      crossorigin="anonymous"
    ></script> -->
    <script>
      AOS.init();
    </script>

    <div class="topnav__main">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      <span class="call__number">Call: <a href="">03073591744</a></span>
    </div>

    <!-- nav -->
    <div class="main__nav">
      <!-- <svg class="icon__toggler" onclick="Change()">
        <use href="images/sprite.svg#menu"></use>
      </svg> -->
      <i
        class="fa fa-align-center icon__toggler"
        style="font-size: 2rem"
        onclick="Change()"
      ></i>
      <?php
        // wp_nav_menu(array(
        //     'theme_location' => 'primary-menu', // Replace 'primary-menu' with your menu location
        //     'container' => false, // Remove the outer container
        //     'items_wrap' => '%3$s', // Display menu items without the <ul> wrapper
        //     'link_before' => '', // No additional markup before the link
        //     'link_after' => '', // No additional markup after the link
        //     'fallback_cb' => false, // Do not fallback to wp_page_menu()
        // ));
    ?>

<ul>
    <!-- <li class="product" style="border: 0px solid red">
        <a href="">Products<i class="fa fa-solid fa-angle-down" style="color: black"></i></a>
        <div class="product__submenu" onmouseover="display()" onmouseleave="hide()">
            <a href="#" onclick="getValue('cloth')">About</a>
            <a href="#" onclick="getValue('decoration')">Customer Reviews</a>
        </div>
    </li> -->
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu', // Replace 'primary-menu' with your menu location
        // 'container' => false, // Remove the outer container
        // 'items_wrap' => '%3$s', // Display menu items without the <ul> wrapper
        // 'link_before' => '', // No additional markup before the link
        // 'link_after' => '', // No additional markup after the link
        // 'fallback_cb' => false, // Do not fallback to wp_page_menu()
        // 'depth' => 1, // Limit the depth to top-level items only
    ));
    ?>
</ul>
      <!-- <ul>
        <li class="product" style="border: 0px solid red">
          <a href=""
            >Products<i
              class="fa fa-solid fa-angle-down"
              style="color: black"
            ></i
          ></a>
        </li>
        <div
          class="product__submenu"
          onmouseover="display()"
          onmouseleave="hide()"
        >
          <a href="#" onclick="getValue('cloth')">clothing line</a>
          <a href="#" onclick="getValue('decoration')">Decoration</a>
          <a href="#abc" onclick="getValue('bags')">Bags</a>
          <a href="#abc" onclick="getValue('Jewellery')">Jewellory</a>
          <a href="#abc" onclick="getValue('skincare')">skincare</a>
          <a href="#abc" onclick="getValue('shoes')">Footwear</a>
          <a href="#abc" onclick="getValue('Perfume')">Perfume</a>
          <a href="#abc" onclick="getValue('lighting')">lighting</a>
        </div>
        <li><a href="">Customer Reviews</a></li>
        <li><a href="">About</a></li>
      </ul> -->

      <a href="index.html" class="regular__logo" style="display: block">
        <div class="regular__logo">
          <?php $logo_image=get_header_image(); ?>
          <img src="<?php echo $logo_image;?>" />
        </div>
      </a>
      <div class="icons">
        <i class="fa fa-search icon__item" onclick="showSearchBar()"></i>
        <i class="fa fa-user icon__item"></i>
        <i
          class="fa fa-shopping-cart icon__item"
          id="cart-button"
          onclick="toggleCart()"
        ></i>
      </div>
      
    </div>
    <!-- nav end-->
    <!-- dopdown for products -->
    <div class="productDropdown">
      <a href="bags.html">Bags</a>
      <a href="iphones.html">iphones</a>
    </div>

    <!-- mobile nav -->

    <div class="mobile__nav">
      <div class="nav__header">
        Menu
        <i class="fa fa-close" onclick="Change1()" style="float: right"></i>
      </div>
      <div>NEW ARRIVAL</div>
      <div>
        clothing line<i class="fa fa-plus plus__icon" style="float: right"></i>
      </div>
      <div>Deals</div>
      <div>Bags<i class="fa fa-plus plus__icon" style="float: right"></i></div>
      <div>
        Jewellory<i class="fa fa-plus plus__icon" style="float: right"></i>
      </div>
      <div>
        Accessories<i class="fa fa-plus plus__icon" style="float: right"></i>
      </div>
      <div>FootWear</div>
      <div>Clearance Sell</div>
      <div>About US</div>
      <div>Login/Register</div>
    </div>