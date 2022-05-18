<?php 
  function skincare_files() {
    wp_enqueue_style('custom-google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap');
    wp_enqueue_style('skincare_styles', get_theme_file_uri('./style.css'));
  }
  
  add_action('wp_enqueue_scripts', 'skincare_files');
?>
