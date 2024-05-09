<?php
    // Template Name:home page
?>

<?php 
// echo get_template_directory_uri();
//   bloginfo('template_directory');
get_header();
?>



    <!-- searchBar -->

    <!-- **************************************** 
*******************Main Page content********** 
*************************************************-->

    <section class="hero-image" data-aos="fade-up" data-aos-duration="1500">
      <img src="<?php echo get_template_directory_uri();?>/images/homepage/hero-image.webp" alt="" />
    </section>
    <div id="includedContent"></div>
    <section
      class="show-categories"
      data-aos="zoom-out"
      data-aos-duration="2000"
    >
      <div class="cat" class="cat" onclick="getValue('decoration')">
        <a href="buttonSlider.html">
          <img src="<?php echo get_template_directory_uri();?>/images/homepage/sale.webp" alt="" class="cat-image" />
        </a>
      </div>
      <div
        class="cat"
        onclick="getValue('Shoes')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img
            src="<?php echo get_template_directory_uri();?>/images/homepage/footwear.webp"
            alt=""
            class="cat-image"
          />
        </a>
      </div>
      <div
        class="cat"
        class="cat"
        onclick="getValue('sunglasses')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img src="<?php echo get_template_directory_uri();?>/images/homepage/glasses.webp" alt="" class="cat-image" />
        </a>
      </div>
      <div
        class="cat"
        onclick="getValue('tops')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img src="<?php echo get_template_directory_uri();?>/images/homepage/gloves.webp" alt="" class="cat-image" />
        </a>
      </div>
      <div
        class="cat"
        onclick="getValue('womens-bags')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img
            src="<?php echo get_template_directory_uri();?>/images/homepage/handbags.webp"
            alt=""
            class="cat-image"
          />
        </a>
      </div>
      <div
        class="cat"
        onclick="getValue('Jewellery')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img
            src="<?php echo get_template_directory_uri();?>/images/homepage/jewellory.webp"
            alt=""
            class="cat-image"
          />
        </a>
      </div>

      <div
        class="cat"
        onclick="getValue('Perfumes')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img href="#abc" src="<?php echo get_template_directory_uri();?>/images/homepage/perfumes.webp" alt="" />
        </a>
      </div>

      <div
        class="cat"
        onclick="getValue('skincare')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img src="<?php echo get_template_directory_uri();?>/images/homepage/premium.webp" alt="" class="cat-image" />
        </a>
      </div>
      <div
        class="cat"
        onclick="getValue('Shirts')"
        data-aos="zoom-out"
        data-aos-duration="2000"
      >
        <a href="buttonSlider.html">
          <img src="<?php echo get_template_directory_uri();?>/images/homepage/cloths.webp" alt="" class="cat-image" />
        </a>
      </div>
    </section>

    <!-- products section -->
    <section id="search-area">
      <div class="search-row">
        <input
          type="text"
          class="search-input"
          placeholder="Search products..."
        />
        <button class="search-button">Search</button>
        <button
          class="search-button"
          style="margin-top: 2px"
          onclick="hideSearchBar()"
        >
          Close
        </button>
      </div>
      <div class="search-results"></div>
    </section>
    <div id="cart" class="cart-hidden">
      <div class="cart-row">
        <h2 style="text-align: center">Your Cart</h2>
        <i
          class="fa fa-close icon__item"
          id="cart-button"
          onclick="toggleCart()"
        ></i>
      </div>
      <!-- Cart section -->
      <ul id="cart-items"></ul>
      <h3 style="margin: auto; padding: 10px 0px" id="cart-total">Total: $0</h3>
      <button id="clear-cart" onclick="clearCart()">Clear Cart</button>
    </div>
   
    <?php get_footer(); ?>
