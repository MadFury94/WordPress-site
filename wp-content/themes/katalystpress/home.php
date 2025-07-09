<?php
/*
Template Name: Blog Home
*/
get_header();
?>
<main class="max-w-3xl mx-auto py-12 px-4">
    <?php get_template_part('template-parts/blog-hero'); ?>
    <div class="prose prose-lg mt-8">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="mb-8 border-b pb-4">
                    <h2 class="text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline"><?php the_title(); ?></a></h2>
                    <div class="text-gray-600 text-sm mb-2"><?php the_time('F j, Y'); ?></div>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
            <div class="mt-8">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?> 