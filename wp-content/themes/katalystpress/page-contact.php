<?php
/*
Template Name: Contact Page
*/
get_header();
?>
<main class="max-w-3xl mx-auto py-12 px-4">
    <?php get_template_part('template-parts/contact-hero'); ?>
    <div class="prose prose-lg mt-8">
        <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>
<?php get_footer(); ?> 