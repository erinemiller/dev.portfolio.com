<?php get_header(); ?>
<section id="content" role="main">
    <header class="header">
        <h1 class="entry-title">All projects</h1>
    </header>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_title();?>
        <?php the_content();?>
        
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>