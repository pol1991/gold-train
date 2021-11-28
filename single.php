<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Gold Train
 */
  
get_header(); ?>
  
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
  
        <?php
        // Start the loop.
        if (have_posts()) : while (have_posts()) : the_post(); 
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'template-parts/blog/content-post');
  
            // If comments are open or we have at least one comment, load up the comment template.
            ?>
            <section id="comments" class="m-2 p-4 ">
            <?php if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif; ?>
            </section> <?php
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'gold-train' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'gold-train' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'gold-train' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'gold-train' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
    endif;
        ?>
  
        </main><!-- .site-main -->
    </div><!-- .content-area -->
  
<?php get_footer(); ?>