<?php
/**
 * ============== Template Name: Contact
 *
 * @package silverlessstudio
 */
get_header();?>

</div>
<!--outer-container-->
<?php $heroBackground = get_field('background_image');?>
<div class="container-overflow-right hero content">
    <div class="content-wrapper contact" style="background:url(<?php echo $heroBackground['url'];?>);"></div>
    <div class="container">
        <div class="content">
            <h3 class="heading heading__2"><?php the_field('heading');?></h3>
            <p><?php the_field('copy');?></p>
            <?php get_template_part("inc/img/arrow");?>
        </div>
    </div>
</div>

<div class="outer-container mb10">
    <div class="container content">
        <div class="contact-details">
            <div class="sticky">
                <h2 class="heading heading__7">Silverless Ltd</h2>
                <p><?php the_field('address', 'options');?></p>
                <a href="https://what3words.com/potato.balanced.argue" class="naked-link mt1">///
                    potato.balanced.argue</a>
                <a href="mailto:<?php the_field('email_-_careers', 'options');?>"
                    class="naked-link mt1"><?php the_field('email_-_careers', 'options');?></a>
                <br />
                <a href="tel:<?php the_field('phone_number', 'options');?>"
                    class="naked-link"><?php the_field('phone_number', 'options');?></a>
                <?php get_template_part("template-parts/social");?>
            </div>
        </div>
        <div class="form-section">
            <?php if( have_rows('form_section') ):
                while( have_rows('form_section') ): the_row();?>
            <h2 class="heading heading__7 mb1"><?php the_sub_field('heading');?></h2>
            <p class="mb1"><?php the_sub_field('copy');?></p>
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');?>
            <?php endwhile; endif;?>
        </div>
    </div>
</div>

</div>
<!--wrapper-->

<?php get_footer();?>