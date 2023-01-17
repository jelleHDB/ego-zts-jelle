<?php
/*
Template Name: Home
*/

$link1 = get_field('button-home');
$link2 = get_field('button-p3');
$link3 = get_field('link_kolom_1');
$link4 = get_field('link_kolom_2');
$link5 = get_field('link_kolom_3');

get_header(); ?>

<div id="home-slider" style="background-position: center; background-size: cover; background-image: -webkit-linear-gradient(right,rgba(0,0,0,0) 0%,rgb(0 0 0) 100%), url(<?php the_field('achtergrond_slider-home'); ?>); ">
    <div id="content-slider">
        <?php if( get_field('titel_slider_1') ): ?>
			<h2 class="titel_slider_1"><?php the_field('titel_slider_1'); ?></h2>
		<?php endif; ?>
        <?php if( get_field('titel_slider_1') ): ?>
			<h2 class="titel_slider_1">
                <i class='fas fa-angle-right'></i>
                <?php the_field('titel_slider_1'); ?>
            </h2>
		<?php endif; ?>
        <?php if( get_field('informatie_1-home') ): ?>
			<h2 class="informatie_1-home">
                <i class='fas fa-angle-right'></i>
                <?php the_field('informatie_1-home'); ?>
            </h2>
		<?php endif; ?>
        <?php if( get_field('informatie_2-home') ): ?>
			<h2 class="informatie_2-home">
                <i class='fas fa-angle-right'></i>
                <?php the_field('informatie_2-home'); ?>
            </h2>
		<?php endif; ?>
        <?php if( get_field('informatie_3-home') ): ?>
			<h2 class="informatie_3-home">
                <i class='fas fa-angle-right'></i>
                <?php the_field('informatie_3-home'); ?>
            </h2>
		<?php endif; ?>
        <?php if( $link1 ): ?>
			<a class="slider-link button" href="<?php echo esc_url( $link1 ); ?>"><?php the_field('tekst_button-home'); ?></a>
		<?php endif; ?> 
    </div>
</div>
<div id="assortiment">
    <?php if( get_field('titel-assortiment') ): ?>
		<h2 class="titel-assortiment"><?php the_field('titel-assortiment'); ?></h2>
	<?php endif; ?>
    <div id="assortiment-producten">
        <?php if( get_field('assortiment-home') ): ?>
            <?php the_field('assortiment-home'); ?>
        <?php endif; ?>
    </div>
</div>
<div id="p3-home">
    <div id="p3-home-img"  style="background-image: -webkit-linear-gradient(right,rgb(0 0 0 / 65%) 0%,rgb(0 0 0 / 65%) 100%), url(<?php the_field('achtergrond_afbeelding-p3'); ?>); ">
        <div id="content-p3">
            <?php if( get_field('titel-p3') ): ?>
                <h2 class="titel-p3"><?php the_field('titel-p3'); ?></h2>
            <?php endif; ?>
            <?php if( get_field('informatie-p3') ): ?>
                <p class="informatie-p3"><?php the_field('informatie-p3'); ?></p>
            <?php endif; ?>
            <?php if( $link2 ): ?>
                <a class="button-p3 button" href="<?php echo esc_url( $link2 ); ?>"><?php the_field('tekst_button-p3'); ?></a>
            <?php endif; ?> 
        </div>
    </div>
</div>
<div id="p4-home">
    <div id="p4-content">
            <?php if( get_field('titel-p4') ): ?>
                <h2 class="titel-p4"><?php the_field('titel-p4'); ?></h2>
            <?php endif; ?>
        <div id="p4-columns">
            <div id="p4-c1" style="background-size: cover; background-position: center; background-image: -webkit-linear-gradient(right,rgb(0 0 0 / 64%) 0%,rgb(0 0 0 / 66%) 100%), url(<?php the_field('afbeelding_p4_1'); ?>); ">
                <?php if( $link3 ): ?>
                    <a class="link-image-p4" href="<?php echo esc_url( $link3 ); ?>"><?php the_field('titel_kolom_1'); ?></a>
                <?php endif; ?> 
            </div>
            <div id="p4-c2" style="background-size: cover; background-position: center; background-image: -webkit-linear-gradient(right,rgb(0 0 0 / 64%) 0%,rgb(0 0 0 / 66%) 100%), url(<?php the_field('afbeelding_p4_2'); ?>); ">
                <?php if( $link4 ): ?>
                    <a class="link-image-p4" href="<?php echo esc_url( $link4 ); ?>"><?php the_field('titel_kolom_2'); ?></a>
                <?php endif; ?> 
            </div>
            <div id="p4-c3" style="background-size: cover; background-position: center; background-image: -webkit-linear-gradient(right,rgb(0 0 0 / 64%) 0%,rgb(0 0 0 / 66%) 100%), url(<?php the_field('afbeelding_p4_3'); ?>); ">
                <?php if( $link5 ): ?>
                    <a class="link-image-p4" href="<?php echo esc_url( $link5 ); ?>"><?php the_field('titel_kolom_3'); ?></a>
                <?php endif; ?> 
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

