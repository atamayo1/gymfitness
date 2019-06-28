<?php get_header(); ?>

<h1>Hola desde page.php</h1>

<?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
<?php endwhile; ?>

<?php get_footer(); ?>