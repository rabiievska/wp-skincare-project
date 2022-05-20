<?php get_header(); ?>

<div class="archive-page-width">
  <div class="archive-content">
    <h1>Here is a list of my favorite skincare products</h1>

    <div class="archive-skincare-list-wrapper">
      <?php 
        $skincareProducts = new WP_Query(array(
          'posts_per_page' => 18,
          'post_type' => 'Product'
        ));

        while($skincareProducts->have_posts()) {
          $skincareProducts->the_post(); ?>
      <div class="archive-product-item">
        <a href="<?php the_permalink(); ?>">
          <div class="archive-product-item-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="archive-product-info-wrapper">
            <div class="archive-product-title">
              <?php the_title(); ?>
            </div>
            <div class="archive-product-brandname-review-container">
              <div class="archive-product-brandname">
                <?php 
                      $brandName = the_field('brand_name'); 
                      echo $brandName; 
                    ?>
              </div>
              <div class="archive-product-review">
                <?php 
                      $review = the_field('review'); 
                      echo $review;
                    ?>
              </div>
            </div>
            <p class="archive-product-description">
              <?php 
                    echo wp_trim_words(get_the_content(), 18)
                  ?>
            </p>
            <div class="archive-learn-more-wrapper">
              <div class="learn-more">
                Learn more
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php }
    ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
