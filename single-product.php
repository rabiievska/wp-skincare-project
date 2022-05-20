<?php get_header(); ?>

<div class="single-page-width">
  <div class="single-content">
    <?php while (have_posts()) {
        the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div class="single-product-item">
      <div class="single-product-item-image">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="single-product-info-wrapper">
        <p class="single-product-description">
          <?php echo get_the_content(); ?>
        </p>
        <div class="single-product-brandname-review-container">
          <div class="single-product-brandname">
            <?php 
              $brandName = the_field('brand_name'); 
              echo $brandName; 
            ?>
          </div>
          <div class="single-product-review">
            <?php 
                $review = the_field('review'); 
                echo $review;
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php }


 get_footer(); ?>
