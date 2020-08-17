<div class="gallery">
    <?php
if( have_rows('gallery') ):
while ( have_rows('gallery') ) : the_row();?>

    <?php if( get_row_layout() == 'fullwidth' ):?>
    <div class="gallery__fullwidth slide-up">
        <?php $image = get_sub_field('image');?>
        <?php $imageHeight = get_sub_field('height');?>
        <?php $imageType = get_sub_field('inline_item');?>
        <?php if($imageType == 'yes') :?>
        <div class="inline-wrapper">
            <a href="<?php echo $image['url']; ?>" class="inline">
                <img src="<?php echo $image['url']; ?>" />
            </a>
        </div>
        <?php endif;?>
        <?php if($imageType == 'no') :?>
        <a href="<?php echo $image['url']; ?>" class="lightbox-gallery <?php echo $imageType;?>"
            alt="<?php echo $image['alt']; ?>"
            style="background-image: url(<?php echo $image['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $image['caption']; ?>--></a>
        <?php endif;?>

    </div>
    <!--fullwidth-->

    <?php elseif( get_row_layout() == 'halves' ):?>
    <?php $imageHeight = get_sub_field('height');?>
    <div class="gallery__halves slide-up">
        <?php if( have_rows('half_images') ):
        while ( have_rows('half_images') ) : the_row();
        $halfImage = get_sub_field('half_image');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'onethird-twothird' ):?>
    <?php $alignment = get_sub_field('alignment');?>
    <div class="gallery__onethird-twothird <?php echo $alignment;?> slide-up">
        <?php $imageHeight = get_sub_field('height');?>
        <?php if( have_rows('half_images') ):
        while ( have_rows('half_images') ) : the_row();
        $halfImage = get_sub_field('half_image');?>

        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>); height:<?php echo $imageHeight;?>vh;">
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'three-images' ):?>
    <?php $imageHeight = get_sub_field('height');?>
    <?php $alignment = get_sub_field('alignment');?>
    <div class="gallery__three-images <?php echo $alignment;?> slide-up" style="height:<?php echo $imageHeight;?>vh;">
        <?php if( have_rows('tri_images') ):
        while ( have_rows('tri_images') ) : the_row();
        $halfImage = get_sub_field('tri_image');?>
        <a href="<?php echo $halfImage['url']; ?>" class="lightbox-gallery" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $halfImage['url']; ?>);">
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endwhile; endif; //image repeater?>
    </div>


    <?php elseif( get_row_layout() == 'video' ):?>
    <?php $alignment = get_sub_field('alignment');?>
    <?php $thumbImage = get_sub_field('thumbnail_image');?>
    <?php $video = get_sub_field('background_video');?>
    <?php if($video) :?>
    <div class="gallery__video slide-up" style="height:35vh;">

        <a href="<?php echo $video['url']; ?>" class="mfp-iframe" alt="<?php echo $halfImage['alt']; ?>"
            style="background-image: url(<?php echo $thumbImage['url']; ?>);">
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endif; //image repeater?>
    </div>

    <?php elseif( get_row_layout() == 'videoembed' ):?>
    <?php $alignment = get_sub_field('alignment');?>
    <?php $thumbImage = get_sub_field('embed_thumbnail');?>
    <?php $videolink = get_sub_field('embed_video');?>
    <?php if($videolink) :?>
    <div class="gallery__video slide-up" style="height:35vh;">

        <a href="<?php echo $videolink; ?>" class="mfp-iframe"
            style="background-image: url(<?php echo $thumbImage['url']; ?>);">>
            <!--<?php echo $halfImage['caption']; ?>--></a>
        <?php endif; //image repeater?>
    </div>






    <?php endif; //else if halves?>
    <?php endwhile; endif; //main gallery loop?>
</div>