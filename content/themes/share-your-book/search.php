<?php get_header();?>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // jQuery
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

        _e("<h2 class='result__search' style='font-weight:bold;color:#000'>Résultat de recherche pour : ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
?>
                   <article class="article">

                   <img class="article__img" src="<?php the_post_thumbnail_url(); ?>" alt="logo share your book">
                       <div class="article__descriptif">
                           <h2   id="livres"  class="article__title"><a href="<?php the_permalink(); ?>">
                               <?php the_title(); ?>
                               </a></h2>
                    </article>
             <?php
                }
            }
            else
            {

             _e("<h2 class='result__search' style='font-weight:bold;color:#000'>Désolée, nous n'avons rien trouvé pour : ".get_query_var('s')."</h2>");}
            ?>
<?php
get_footer();
?>
