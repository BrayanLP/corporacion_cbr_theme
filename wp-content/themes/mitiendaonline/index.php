<?php
get_header(); 
?>


        <section class="products ">
            <div class="container">
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>		
                </header>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php 
                        // get_template_part( 'loop' );
                        
                        the_content();
                    ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php 
                        get_template_part( 'content', 'none' );
                    ?>
                <?php endif; ?>
            </div>
        </section> 

<?php 
get_footer();
