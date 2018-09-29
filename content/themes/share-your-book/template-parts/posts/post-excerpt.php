<article class="article">
    <div class="article__descriptif">
        <h2   id="livres"  class="article__title"><?php the_title() ; ?></h2>
        <p class="article__text"></p>
            <a href="<?php the_permalink(); ?>">
                <p><?php the_excerpt() ; ?></p>

        <!-- Code php permettant de traiter la date -->
            <?php
                $now = new DateTime();

                $postDate = new DateTime(get_the_date('d-m-Y H:i:s'));

                $interval = $postDate->diff($now);
             ?>

             <p>Publié il y a <?php echo $interval->format('%a') ?> jours par <?php the_author() ; ?></p>
    </div>
</article>
