<?php
/**
 * ============== Template Name: Work
 *
 * 
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('banner_image');?>
<div class="single single-work">
    <div class="outer-container hero">
        <div class="container">


            <div class="content">
                <h3 class="heading heading__2"><?php the_field('heading');?></h3>
                <p><?php the_field('copy');?></p>
                <?php get_template_part("inc/img/arrow");?>
                <h3 class="heading heading__5 mt3"><?php the_field('sub_heading');?></h3>
                <p><?php the_field('main_copy');?></p>
            </div>

        </div>
    </div>
</div>
<div class="outer-container mb10">
    <div class="container content">
        <div class="work-gallery">
            <?php get_template_part('template-parts/flexible-gallery');?>

        </div>
    </div>
</div>
<div class="outer-container">
    <?php if (get_field('cta_heading')):?>
    <?php $ctaBackground = get_field('cta_background_image');?>
    <div class="container content cta" style="background:url(<?php echo $ctaBackground['url'];?>);">
        <div class="content">
            <h3 class="heading heading__4"><?php the_field('cta_heading');?></h3>
            <span class="link-highlight"></span>
            <a href="<?php the_field('cta_button_target');?>"
                class="button button__bare"><?php the_field('cta_button_text');?></a>
        </div>
    </div>
    <?php endif;?>
</div>
<div class="container-overflow-right mb10">
    <div class="content-wrapper light-wrapper">
        <div class="work-leaders">
            <div class="container">
                <h3 class="heading heading__3">Other Projects</h3>
                <?php
                    $currentID = get_the_ID();
                    $loop = new WP_Query(
                        array(
                            'post_type' => 'work',
                            'posts_per_page' => -1,
                            'post__not_in' => array($currentID),
                        )
                    );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $leaderImage = get_field('thumbnail_image', $post->ID);
                    $text = get_field('copy', $post->ID);
                    if ( '' != $text ) {
                        $text = strip_shortcodes( $text );
                        $text = apply_filters('the_content', $text);
                        $text = str_replace(']]>', ']]>', $text);
                        $excerpt_length = 22; // 20 words
                        $excerpt_more = apply_filters('excerpt_more', '' . '...');
                        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
                    }?>

                <div class="content">
                    <h3 class="heading heading__7"><?php the_title(); ?></h4>
                        <p><?php echo $text; ?></p>
                        <a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand"
                            alt="silverless studio | <?php the_title(); ?>">Read More</a>
                </div>
                <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>

                <?php endwhile;
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
    </div>
</div>

</div>
<!--wrapper-->

<?php get_footer();?>