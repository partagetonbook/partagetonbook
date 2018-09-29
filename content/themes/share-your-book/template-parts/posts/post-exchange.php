<h2 class="exchange"><?php the_author() ; ?> <?php echo do_shortcode('[wpuf-meta name="le_choix"]'); ?></h2>
    <article class="contact">

         <i class="fa fa-handshake-o"></i>

            <div class="contact__descriptif">
                    <h2 class="contact__title"><?php the_title() ; ?></h2>
                    <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="auteur"]'); ?></h2>

                <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="le_choix"]'); ?></h2>
            </div>
                <img class="contact__img" src="<?php the_post_thumbnail_url(); ?>" alt="image de livre">

    </article>
