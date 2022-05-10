<?php get_header(); ?>

<div class="archive-page-width">
  <h1>Here is a list of my favorite skincare products</h1>

  <div class="skincare-list-wrapper">
    <?php 
      $skincareProducts = new WP_Query(array(
        'posts_per_page' => 18,
        'post_type' => 'Product'
      ));

      while($skincareProducts->have_posts()) {
        $skincareProducts->the_post(); ?>
        <div class="product-item">
          <a href="<?php the_permalink(); ?>">
            <div class="product-item-image">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="product-info-wrapper">
              <div class="product-title">
                <?php the_title(); ?>
              </div>
              <div class="product-brandname-review-container">
                <div class="product-brandname">
                <?php 
                  $brandName = the_field('brand_name'); 
                  echo $brandName; 
                ?>
                </div>
                <div class="product-review">
                  <?php 
                    $review = the_field('review'); 
                    echo $review;
                  ?>
                </div>
              </div>
              <p class="product-description">
                <?php 
                  echo wp_trim_words(get_the_content(), 18)
                ?>
              </p>
              <p class="learn-more">
                Learn more
              </p>
            </div>
          </a>
        </div>
      <?php }
    ?>
  </div>
</div>

<?php get_footer(); ?>
