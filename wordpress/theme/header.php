<?php
wp_enqueue_script( "jquery" );
wp_enqueue_script( 'bootstrap-tooltip', get_template_directory_uri().'/js/bootstrap-tooltip.js', array('jquery'), '1.0', true );
wp_enqueue_script( 'nefertem2', get_template_directory_uri().'/js/nefertem2.js', array('jquery'), '1.0', true );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name'); wp_title();?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Monda:400,700|Open+Sans:300,800' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" type='text/css'>

    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 feed - all posts" href="<?php echo get_feed_link('rss2'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 feed - comments" href="<?php echo get_feed_link('comments_rss2'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="ATOM Feed - all posts" href="<?php echo get_feed_link('atom'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="ATOM Feed - comments" href="<?php echo get_feed_link('comments_atom'); ?>" />
</head>
<body>
