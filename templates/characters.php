<?php
// Configuration du template Swiper
$characters_query = new WP_Query([
    'post_type'      => 'characters',         
    'posts_per_page' => -1,                   
    'meta_key'       => '_main_char_field',   
    'orderby'        => 'meta_value_num',    
]);
?>

<article id="characters" class="characters-swiper">
    <div class="main-character fadeInTitle catName">
        <h3 class="charTitle">
            <span class="lesTitle fadeInTitle">Les</span>
            <span class="personnagesTitle fadeInTitle">personnages</span>
        </h3>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php if ($characters_query->have_posts()) : ?>
                    <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
                        <figure class="swiper-slide">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</article>