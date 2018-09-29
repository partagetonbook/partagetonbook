<?php
get_header();
 ?>
   <?php
       $args = array(
           'post_type' => 'post',
           'posts_per_page' => 3,
           'order' => 'DESC',
           'orderby' => 'date'
       );
       $wp_query = new WP_Query($args);

       if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();

            get_template_part('template-parts/posts/post', 'author');

       endwhile; endif;
       wp_reset_postdata();

 get_footer(); ?>
