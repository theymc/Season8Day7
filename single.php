<?php get_header(); ?>

        <h1>YES!!! IT IS A SINGLE POST PAGE!!! I AM SO EXCITED I CAN HARDLY CONTAIN MYSELF.</h1>

        <?php
            while(have_posts()):
                the_post();
                // Display content from the post here
        ?>
        <h2>
                <?php the_title(); ?>
        </h2>

        <h3><?php the_date(); ?></h3>

        <?php the_content(); ?>
        

        <hr />

        <?php
            endwhile;
        ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>