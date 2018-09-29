<?php
get_header(); ?>

<article class="article">
    <?php if (have_posts()): ?>
       <?php while (have_posts()): ?>
           <?php the_post(); ?>

           <img class="article__img" src="<?php the_post_thumbnail_url(); ?>" alt="logo share your book">
               <div class="article__descriptif">
                   <h2   id="livres"  class="article__title"><?php the_title(); ?>
                       </h2>
                   <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="auteur"]'); ?></h2>
                   <p class="article__text"><?php the_content(); ?></p>

                   <!-- Code php permettant de traiter la date -->
                       <?php
                           $now = new DateTime();

                           $postDate = new DateTime(get_the_date('d-m-Y H:i:s'));

                           $interval = $postDate->diff($now);
                        ?>

                        <p>Publié il y a <?php echo $interval->format('%a') ?> jours par <?php the_author() ; ?></p>

                        <p></p>
               </div>


       <?php endwhile; ?>
   <?php endif; ?>
<article>
<?php
get_footer();
