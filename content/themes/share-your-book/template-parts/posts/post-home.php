
<img class="article__img" src="<?php echo get_template_directory_uri() ?>/images/le jour où.jpg" alt="logo share your book">

    <div class="article__descriptif">
        <h2   id="livres"  class="article__title"><?php the_title();?></h2>
        <h2 class="article__auteur"><?php the_subtitle(); ?></h2>
        <p class="article__text"><?php the_content();?></p>
        <!-- Code php permettant de traiter la date -->
            <?php
                $now = new DateTime();

                $postDate = new DateTime(get_the_date('d-m-Y H:i:s'));

                $interval = $postDate->diff($now);
             ?>

             <p>Publié il y a <?php echo $interval->format('%a') ?> jours par <?php the_author() ; ?></p>
    </div>
