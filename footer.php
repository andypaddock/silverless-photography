<?php
/**
 * The template for displaying the footer
 * @package silverlessstudio
 */
?>
</main>
<?php $footerImage = get_field('background_image', 'options');?>
<footer class="footer">
    <div class="wrapper">
        <div class="container-overflow-right">
            <?php if (!is_page( array('2', '15' ))): ?>
            <div class="content-wrapper image-wrapper dark-overlay"
                style="background:url(<?php echo $footerImage['url'];?>);">
                <div class="container">
                    <div class="footer-upper-content">
                        <h2 class="heading heading__2">Silverless <span class="no-wrap">Design & Marketing</span></h2>
                        <p>Websites<br>Brochures<br>Exhibition<br>Branding<br>Digital Marketing
                        </p>
                        <a href="<?php the_sub_field('button_target');?>" class="button">Find Out More</a>
                    </div>
                </div>
            </div>
            <div class="content-wrapper dark-wrapper">
                <div class="container">
                    <a href="<?php echo get_home_url(); ?>"
                        class="silverless"><?php get_template_part('inc/img/silverless', 'logo');?></a>
                    <div class="footer-contact">
                        <p>
                            <a href="tel:<?php the_field('phone_number', 'options');?>">Phone:
                                <?php the_field('phone_number', 'options');?></a>
                            <a href="mailto:<?php the_field('email_-_general', 'options');?>" target="_blank">Email:
                                <?php the_field('email_-_general', 'options');?></a>
                        </p>

                        <?php get_template_part("template-parts/social");?>

                        <a href="<?php the_sub_field('button_target');?>"
                            class="button button__ghost mb3">Directions</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="content-wrapper darkest-wrapper">
                <div class="container">
                    <div class="mandatory">
                        <p>© Silverless Ltd <?php echo date('Y');?><br />Registered in England, No. 8437159 <span
                                class="no-wrap">VAT No. GB 101 7040 78</span>
                            <span class="no-wrap">
                                <a href="/photography/privacy-policy/">Privacy policy</a>
                                <a href="/photography/terms-conditions/">Terms & Conditions</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>