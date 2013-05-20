<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date('D, j F Y'); ?></time>
    <section class="tags">
    <?php the_tags('<span class="nobr"><i class="icon-tag"></i>','</span> <span class="nobr"><i class="icon-tag"></i>', '</span>'); ?>
    </section>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
    <?php the_content(); ?>

</article>
