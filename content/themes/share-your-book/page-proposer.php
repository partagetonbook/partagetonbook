<?php
get_header();

 $page_query_args = [
    'post_type' => 'page',
    'pagename'  => 'Proposer'
];
$page_query = new WP_Query($page_query_args);

if($page_query->have_posts()):
    $page_query->the_post();

 get_template_part('template-parts/posts/post', 'proposer');

endif;
 get_footer(); ?>
