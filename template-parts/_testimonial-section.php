<div class="container-overflow-right mb10">
    <div class="content-wrapper">
        <div class="container">
            <div class="carousel-wrapper">
                <div class="owl-carousel testimonial-carousel">
                    <?php if( have_rows('testimonial', 'options') ):
					while( have_rows('testimonial', 'options') ): the_row();?>
                    <div class="quote">
                        <?php get_template_part("inc/img/quote"); ?>
                        <p class="copy"><?php the_sub_field('quote');?></p>
                        <p class="attrib"><?php the_sub_field('attrib');?></p>
                    </div>
                    <?php endwhile; endif;?>
                </div>
                <div class="testimonial-carousel--next"><?php get_template_part("inc/img/arrow"); ?></div>
                <div class="testimonial-carousel--prev"><?php get_template_part("inc/img/arrow"); ?></div>
            </div>
        </div>
    </div>
</div>