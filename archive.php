<?php get_header(); ?>

        <h1>WOW LOOK IT IS A CATEGORY TEMPLATE!!!</h1>

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

        <nav>
            <a href="<?php the_permalink(); ?>">Read more...</a>
        </nav>

        <hr />

        <?php
            endwhile;
        ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>