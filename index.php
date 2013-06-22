<?php get_header(); ?>

        <?php
            while(have_posts()):
                the_post();
                // Display content from the post here
        ?>

        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <h3><?php the_date(); ?></h3>

        <?php the_excerpt(); ?>
        

        <hr />

        <?php
            endwhile;
        ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>