<?php
/*
 * Pour mettre en place une barre latérale sur le thème,
 * avec possibilité de l'appeler via get_sidebar();
 * (souvent juste avant get_footer();)
 */
?>

<div class="sidebar">
    <ul>
        <li id="search">
            <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        </li>
        <li id="calendar">
            <h2>Calendrier</h2>
            <?php get_calendar(); ?>
        </li>
        <?php wp_list_categories('title_li=<h2>Catégories</h2>&show_count=1'); ?>
        <?php wp_list_pages('title_li=<h2>Pages</h2>') ?>
        <li>
            <h2>Archives</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>
        <li>
            <h2>Infos Meta</h2>
            <ul>
                <?php wp_register(); ?>
                <li>
                    <?php wp_loginout(); ?>
                </li>
                <?php wp_meta(); ?>
            </ul>
        </li>
        <li>
            <h2>Abonnez-vous au blog !</h2>
            <ul>
                <li>
                    <a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a>
                </li>
                <li>
                    <a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a>
                </li>
            </ul>
        </li>
    </ul>
</div>