<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="span3 hidden-phone">
                <?php get_template_part('nav');?>
            </div>
            <div class="span8">
<h1>Blog Archive</h1>
<?php
    $year = 0;
    $allPosts = get_posts(array('numberposts' => -1));
?>

<?php foreach ($allPosts as $post) : ?>
    <?php
    if (get_the_time('Y') != $year) {
        $year = get_the_time('Y');
        echo "<h2>$year</h2>";
    }
    ?>
    <span style="width: 4em; display: inline-block; text-align: right;"><time datetime="<?php the_date('Y-m-d') ?>"><?php the_time('M d:'); ?></time></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
<?php endforeach; ?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>