<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('title'); ?></h1>
            <span><?php bloginfo('description'); ?></span>
        </div>
    </header>

    <div class="main">
        <div class="container">
            <?php if(have_posts()) :  ?>
                <?php while(have_posts()): the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <div class="meta">
                        Created By <?php the_author(); ?> on <?php  the_time('F j, Y g:i a'); ?>
                    </div>
                    <?php the_content(); ?>
                <?php endwhile ?>
            <?php else : ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php the_date('Y'); ?> &mdash; <?php bloginfo('name'); ?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>