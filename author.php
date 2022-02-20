<?php get_header(); ?>

<article class="container my-4">

    <!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>
    <h1 class="display-4 my-2"><?php _e('O autorze:', 'gold-train'); ?></h1>
    <section class="d-flex">
        <div>
            <?php echo get_avatar(get_the_author_meta('ID')); ?>
        </div>
        <div class="mx-2 justify-self-start">
            <h2 class="my-2"><?php echo $curauth->nickname; ?></h2>
            <p><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></p>
        </div>
    </section>
    <section class="my-4">
        <h4><?php _e('Social Media:','gold-train'); ?></h4>
        <div id="author-social-icons" class="d-flex flex-row">
        <a class="mx-1" href="https://www.facebook.com/<?php echo get_the_author_meta('twitter') ?>"><i class="fab fa-twitter"></i></a>
        <a class="mx-1" href="https://www.facebook.com/<?php echo get_the_author_meta('facebook') ?>"><i class="fab fa-facebook social-icon"></i></a>
        <a class="mx-1" href="https://www.facebook.com/<?php echo get_the_author_meta('youtube') ?>"><i class="fab fa-youtube social-icon"></i></a>
        </div>
    </section>
    <section class="my-4 ">
        <h3><?php _e('Bio:', 'gold-train'); ?></h3>
        <p><?php echo $curauth->user_description; ?></p>
    </section>
    <section class="my-2">
        <h2><?php _e('Wrzucone przez', 'gold-train'); ?> <?php echo $curauth->nickname; ?>:</h2>

        <ul>
            <!-- The Loop -->

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                            <?php the_title(); ?></a>,
                        <?php the_time('d M Y'); ?> <?php _e('w', 'gold-train'); ?> <?php the_category('&'); ?>
                    </li>

                <?php endwhile;
            else : ?>
                <p><?php _e('No posts by this author.', 'gold-train'); ?></p>

            <?php endif; ?>

            <!-- End Loop -->

        </ul>
    </section>
</article>
<?php get_footer(); ?>