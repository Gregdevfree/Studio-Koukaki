<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section id class="banner">
            <video class="bannerVideo" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
            <source src="<?php echo get_theme_file_uri() . '/assets/video/videoStudioKoukaki.mp4'; ?>" type="video/mp4" alt="video animation de chats">
            <!-- Texte alternatif pour les navigateurs qui ne supportent pas la balise video -->
            Votre navigateur ne prend pas en charge la vidéo. Veuillez utiliser un navigateur compatible ou activer JavaScript.
            </video>
            <img class="bannerImage" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>

        <section id="story" class="story">
            <h2><span class="storyTitle fadeInTitle">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- swiper characters -->
            <?php get_template_part( 'templates/characters' ) ;?>
           
            <article id="place" class="placeTitle fadeInTitle">
                <div>
                    <h3>
                        <span class="leTitle fadeInTitle">Le</span>
                        <span class="lieuTitle fadeInTitle">lieu</span>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>

                    <div class="clouds">
                        <div class="bigCloud" style="background-image: url('<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>');"></div>
                        <div class="littleCloud" style="background-image: url('<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>');"></div>
                    </div>
                </div>
            </article>
        </section>

        <section id="studio" class="studioKoukakiTitle fadeinTitle">
            <h2>
                <span class="studioTitle fadeInTitle">Studio</span>
                <span class="koukakiTitle fadeInTitle">Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <!-- Oscars Section -->
            <?php get_template_part( 'templates/oscars' );?>
 
    </main><!-- #main -->

<?php
get_footer();
