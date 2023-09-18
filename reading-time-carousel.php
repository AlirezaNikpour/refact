<?php
/*
Plugin Name: Post Carousel with Reading Time
Description: Display posts in a carousel with reading time estimates as a test for Refact.
Version: 1.0
Author: Alireza Nikpour
*/


add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function enqueue_custom_styles() {
    wp_enqueue_style('post-carousel-styles', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
function calculate_reading_time($content) {
    // Calculate reading time based on the average reading speed (200 words per minute)
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);

    // Format the reading time
    if ($reading_time == 1) {
        $timer = " minute";
    } else {
        $timer = " minutes";
    }
    return $reading_time . $timer;
}

function post_carousel_with_reading_time_shortcode() {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2, 
    );

    $query = new WP_Query($args);

    $output = '<div class="carousel-container">'; 

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $image = get_the_post_thumbnail();
            $title = get_the_title();
            $excerpt = get_the_excerpt();
            $reading_time = calculate_reading_time(get_the_content());

            $output .= '<div class="carousel-item">';
            $output .= '<div class="carousel-image">' . $image . '</div>';
            $output .= '<div class="carousel-content">';
            $output .= '<h2>' . $title . '</h2>';
            $output .= '<p>' . $excerpt . '</p>';
            $output .= '<p>Reading Time: ' . $reading_time . '</p>';
            $output .= '</div>';
            $output .= '</div>';
        }
    }

    $output .= '</div>';

    wp_reset_postdata();

    return $output;
}
add_shortcode('post_carousel_with_reading_time', 'post_carousel_with_reading_time_shortcode');
