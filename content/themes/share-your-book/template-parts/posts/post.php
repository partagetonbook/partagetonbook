<article class="article">

<img class="article__img" src="<?php the_post_thumbnail_url(); ?>" alt="logo share your book">
    <div class="article__descriptif">
        <h2   id="livres"  class="article__title"><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></h2>
        <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="auteur"]'); ?></h2>
        <p class="article__text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
        <!-- Code php permettant de traiter la date -->
            <?php
                $now = new DateTime();

                $postDate = new DateTime(get_the_date('d-m-Y H:i:s'));

                $interval = $postDate->diff($now);
             ?>
             <p>Publié il y a <?php echo $interval->format('%a') ?> jours par <?php the_author() ; ?></p>


    </div>
    </article>
    <?php wp_footer() ?>
