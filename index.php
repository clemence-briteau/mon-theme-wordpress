<?php
//Ce fichier sert à générer par défaut les affichages de toutes vos pages

//Fonction de WP permettant de récupérer le contenu de header.php
get_header();
?>

    <div id="content">

        <?php
            //S'il y a des posts à afficher (des articles, des pages, etc.)
            if(have_posts()) {

                //Alors tant qu'il y en a à afficher
                while (have_posts()) {

                    //On prépare le post (sert à pouvoir utiliser ensuite plusieurs fonctions pratiques (the_title, the_content, etc.)
                    the_post(); ?>

                    <div class="post" id="<?php the_ID(); ?>">
                        <h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p class="postmetadata">
                            Dernière modification le <?php the_modified_date(); ?>
                            |
                            Auteur : <?php the_author(); ?>
                            |
                            Catégorie : <?php the_category(', '); ?>
                            |
                            <?php comments_popup_link('Pas encore de commentaires', '1 Commentaire', '% Commentaires'); ?>
                            |
                            <?php edit_post_link('Editer', '', '') ?>
                        </p>

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>


                    </div>
                    <?php

                }
            }
            ?>
    </div>

<?php get_sidebar(); ?>


    </div>

</body>
</html>


<?php


//Fonction de WP permettant de récupérer le contenu de footer.php
get_footer();