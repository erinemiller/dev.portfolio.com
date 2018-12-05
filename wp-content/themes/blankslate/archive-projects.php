<?php get_header(); ?>
<section id="content" role="main">
    <header class="header">
        <h1 class="entry-title">All projects</h1>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>