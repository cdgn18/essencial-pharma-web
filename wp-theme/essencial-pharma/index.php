<?php
// Fallback template requerido por WordPress.
// El contenido principal se maneja desde front-page.php y woocommerce.php.
get_header();
?>
<main class="section" style="padding-top: calc(var(--header-height) + 36px + 60px); min-height: 60vh;">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
