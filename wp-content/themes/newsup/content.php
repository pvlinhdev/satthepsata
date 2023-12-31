<?php
/**
 * The template for displaying the content.
 * @package Newsup
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- mg-posts-sec mg-posts-modul-6 -->
    <div class="mg-posts-sec mg-posts-modul-6">
        <!-- mg-posts-sec-inner -->
        <div class="mg-posts-sec-inner">
            <?php while(have_posts()){ the_post(); ?>
            <article class="d-md-flex mg-posts-sec-post align-items-center">
                <?php newsup_post_image_display_type($post); ?>
                <div class="mg-sec-top-post py-3 col">
                    <div class="mg-blog-category"> 
                        <?php newsup_post_categories(); ?>
                    </div>

                    <h4 class="entry-title title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <?php newsup_post_meta(); ?>
                    <div class="mg-content">
                        <p><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>
                    </div>
                </div>
            </article>
            <?php } 
                newsup_page_pagination();
            ?>
        </div>
        <!-- // mg-posts-sec-inner -->
    </div>
    <!-- // mg-posts-sec block_6 --> 
</div>