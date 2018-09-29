<?php get_header();?>

            <h1 class="section__h1">  "Un livre c'est un arbre qui cherche comment dire à toute la forêt qu'il y a une vie... après la vie.
            Gilles V.</h1>
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => 'je partage',
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
                     get_template_part('template-parts/posts/post');
                endwhile; endif;
                wp_reset_postdata();
                ?>
                    <?php if (( is_user_logged_in() )) { ?>
                    <h1>Livres disponibles Pour échange</h1>
                     <?php } ?>
                         <?php
                             $args = array(
                                 'post_type' => 'post',
                                 'posts_per_page' => 3,
                                 'category_name' => 'échange',
                                 'order' => 'DESC',
                                 'orderby' => 'date'
                             );
                             $wp_query = new WP_Query($args);

                             if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
                                  get_template_part('template-parts/posts/post','disponibles');
                             endwhile; endif;
                             wp_reset_postdata();
                             ?>
               <div class="">
                   <h1></h1>
               </div>

            </div>
            <!-- fin -->
            <div class="connexion" id="connexion">
                    <div class="form__logo">
                        <img class="form__logo__img" src="<?php echo get_template_directory_uri() ?>/images/logo2.png" alt="logo share your book">
                        <p class="form__logo__text">" Ne laisse jamais personne te dire ce dont tu es capable " Laurent G.</p>
                        <!-- Croix de sortie du formulaire -->
                        <a href="#"><i class="fa fa-times form__cross"></i></a>
                    </div>
            </div>
             <div class="">
                <?php if (( is_user_logged_in() )) { ?>
                 <h1>Livres disponibles Pour Don</h1>
                 <?php } ?>
             </div>
            <?php
                if (( is_user_logged_in() )) {
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => 'Don',
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
                     get_template_part('template-parts/posts/post','exchange');
                     // Soyez le prochain à proposer un livre dans le else. Mettre un lien pour rediriger vers le formulaire de don de livres.
                     if (( is_user_logged_in() )) {
                            get_template_part('template-parts/posts/post','contact');
                        }
                endwhile; endif;
                wp_reset_postdata();
            }
                ?>
    </section>
<?php
get_footer();
?>
