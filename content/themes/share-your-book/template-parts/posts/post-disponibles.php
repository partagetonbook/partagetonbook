  <article class="don">
      <i class="fa fa-handshake-o"></i>

      <div class="article__descriptif">
        <h2   id="livres"  class="article__title"><?php the_title() ; ?></h2>
        <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="auteur"]'); ?></h2>
        <h2 class="article__auteur"></h2>
        <p class="article__text"><?php the_content(); ?></p>
        
        <!-- Code php permettant de traiter la date -->
            <?php
                $now = new DateTime();

                $postDate = new DateTime(get_the_date('d-m-Y H:i:s'));

                $interval = $postDate->diff($now);
             ?>
             <p>Publié il y a <?php echo $interval->format('%a') ?> jours par <?php the_author() ; ?></p>

        <h2 class="article__auteur"><?php echo do_shortcode('[wpuf-meta name="votre_choix"]'); ?></h2>
      </div>
          <img class="don__img" src="<?php the_post_thumbnail_url(); ?>" alt="logo share your book">
  </article>
