<?php get_header(); ?>

<div class="single-page-width">

<?php while (have_posts()) {
    the_post(); ?>

  <h2><?php the_title(); ?></h2>
  <div class="single-product-item">
    <div class="single-product-item-image">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="single-product-info-wrapper">
      <div class="single-product-brandname-review-container">
        <div class="single-product-brandname">
          Brand name:
        <?php 
          $brandName = the_field('brand_name'); 
          echo $brandName; 
        ?>
        </div>
        <div class="single-product-review">
          My review:
          <?php 
            $review = the_field('review'); 
            echo $review;
          ?>
        </div>
      </div>
      <p class="single-product-description">
        <?php echo get_the_content(); ?>
      </p>
    </div>
  </div>
</div>

<?php }

 get_footer(); ?>
