<?php get_header(); ?>
<main class="section" style="padding-top: calc(var(--header-height) + 36px + 60px); min-height: 60vh;">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="section-title" style="margin-bottom: 32px;"><?php the_title(); ?></h1>
            <div class="glass-panel" style="padding: 40px; max-width: 860px; margin: 0 auto;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
