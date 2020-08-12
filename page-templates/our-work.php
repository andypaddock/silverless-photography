<?php
/**
 * ============== Template Name: Our Work
 *
 * @package silverlessstudio
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>
    <div class="container">
        <div class="content">
            <h3 class="heading heading__2"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>
<div class="outer-container leaders">

    <div class="container">
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

        <div class="copy">
            <h3 class="heading heading__7"><?php the_title(); ?></h4>
                <p><?php echo $text; ?></p>
                <span class="dark-highlight"></span>
                <a href="<?php the_permalink(); ?>" class="button button__arrowright"
                    alt="silverless studio | <?php the_title(); ?>">Read
                    More<?php get_template_part("inc/img/arrow");?></a>
        </div>
        <div class="image" style="background:url(<?php echo $leaderImage['url'];?>);"></div>

        <?php endwhile;
                    wp_reset_postdata();
                    ?>
    </div>

</div>
<div class="outer-container leaders">
    <?php if( have_rows('leader_section') ):
			while( have_rows('leader_section') ): the_row();
            $leaderBackground = get_sub_field('background_image');?>
    <div class="container content">
        <div class="copy">
            <h3 class="heading heading__4"><?php the_sub_field('heading');?></h3>
            <p><?php the_sub_field('copy');?></p>
            <a href="<?php the_sub_field('button_target');?>"
                class="button button__bare button__bare--brand"><?php the_sub_field('button_text');?></a>
        </div>
        <div class="image" style="background:url(<?php echo $leaderBackground['url'];?>);">
            <a href="<?php the_sub_field('button_target');?>"></a>
        </div>
    </div>
    <!--container-->
    <?php endwhile; endif;?>
</div>



<?php get_template_part('template-parts/_testimonial-section');?>

</div>
<!--wrapper-->

<?php get_footer();?>