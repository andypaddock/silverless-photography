<?php /** Header @package silverlessstudio */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $blog_title = get_bloginfo(); ?></title>

    <link rel="stylesheet" href="https://use.typekit.net/ibi2glu.css">
    <!--TYPEKIT INJECT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="cta-contact-header">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <div class="col">
                        <a href="/photography/contact" class="button button__global">
                            <i class="fas fa-phone"></i>
                            <span>Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-offscreen">
        <div class="wrapper">
            <div class="outer-container">
                <div class="container">
                    <span class="accent"></span>
                    <div class="col">
                        <?php wp_nav_menu(array(
						'theme_location'  => 'main-menu',
						'container_class' => 'mainMenu'
					));?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <main>
        <!--main closes in footer-->

        <div class="wrapper">

            <div class="outer-container mobile-nav">
                <div class='sidebar'>
                    <div class="nav-trigger">
                        <div class="hamburger-menu"></div>
                    </div>
                    <div class="quick-links">
                        <a href="/contact" class="icon">
                            <i class="fas fa-phone"></i>
                        </a>
                        <a href="mailto:hello@silverless.co.uk" class="icon">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <?php get_template_part("template-parts/social");?>
                    </div>
                </div>
                <div class="container content">
                    <a href="<?php echo get_home_url(); ?>" alt="" title="">
                        <?php get_template_part("template-parts/logo"); ?>
                    </a>
                </div>
            </div>



            <div class="outer-container">
                <div class='sidebar'>
                    <div class=sidebar__top>
                        <a href="<?php echo get_home_url(); ?>" alt="" title="">
                            <?php get_template_part("template-parts/logo"); ?>
                        </a>
                        <div class="nav-trigger">
                            <div class="hamburger-menu"></div>
                            <span>Menu</span>
                        </div>
                    </div>
                    <div class="sidebar__bottom">
                        <div class="slide-nav">
                            <?php if( have_rows('top_carousel') ):
						$i = 1;
						while( have_rows('top_carousel') ): the_row();?>
                            <div id="slide<?php echo $i;?>" class="slide-nav__item" ref-slide="<?php echo $i;?>">0
                                <?php echo $i;?>.</div>

                            <?php $i++; endwhile; endif;?>

                        </div>
                    </div>
                </div>