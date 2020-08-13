<?php
/**
 * ============== Template Name: News
 *
 * 
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero content">
    <div class="content-wrapper" style="background:url(<?php echo $heroBackground['url'];?>);">
    </div>
    <div class="container">
        <div class="content">
            <h3 class="heading heading__2 heading__light"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>

<div class="outer-container">
    <div class="container content">
        <div class="controls">
            <!-- Get a list of all categories in the database, excluding those not assigned to posts -->
            <span class="filter-heading">Filter</span>
            <ul>
                <li type="button" data-filter="all">All</li>
                <?php
    $all_categories = get_categories(array(
        'hide_empty' => true
    ));
    ?>

                <!-- Iterate through each category -->

                <?php foreach($all_categories as $category): ?>
                <!-- Output control button markup, setting the data-filter attribute as the category "slug" -->

                <li type="button" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="container news-feed content">

        <?php global $switched;
    switch_to_blog(1);
    echo 'You switched from blog ' . $switched . ' to 1';
    restore_current_blog();
    echo 'You switched back.'; $silverlessPosts = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'posts_per_page'=>16
			));
			if ( $silverlessPosts->have_posts() ) :
			while ( $silverlessPosts->have_posts() ) :
            $silverlessPosts->the_post();
            $categories = get_the_category();
        $slugs = wp_list_pluck($categories, 'slug');
        $class_names = join(' ', $slugs);
			$postThumbImage = get_field('thumbnail_image'); ?>
        <div class="news-feed__item mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
            <div class="image" style="background:url(<?php echo $postThumbImage['url'];?>);"><a
                    href="<?php the_permalink(); ?>"></a></div>
            <p class="date"><?php echo get_the_date('d.m.Y'); ?></p>
            <h3 class="heading heading__7"><?php the_title(); ?></h4>
                <?php the_excerpt(); ?>
                <span class="dark-highlight"></span>
                <a href="<?php the_permalink(); ?>" class="button button__bare button__bare--brand">Read
                    More</a>
        </div>
        <?php endwhile; wp_reset_postdata();endif; ?>
    </div>

</div>
<script>
var mixer = mixitup('.news-feed', {
    controls: {
        toggleLogic: 'and'
    }
});
</script>





</div>
<!--wrapper-->

<?php get_footer();?>