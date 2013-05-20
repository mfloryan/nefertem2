<?php get_header(); ?>
<div class="container">
<div class="row">
    <div class="span3 hidden-phone">
        <?php get_template_part('nav');?>
    </div>
    <div class="span8">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('content'); ?>
        <?php endwhile; ?>

</div>
</div>
</div>
<?php get_footer(); ?>