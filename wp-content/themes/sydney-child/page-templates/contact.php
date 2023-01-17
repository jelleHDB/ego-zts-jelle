<?php
/*
Template Name: Contact
*/

$linksocials = get_field('socials-contact');

get_header(); ?>

<div id="slider-contact" style="background-position: center; background-size: cover;background-image: -webkit-linear-gradient(right,rgb(0 0 0 / 65%) 0%,rgb(0 0 0 / 65%) 100%), url(<?php the_field('achtergrond_slider-contact'); ?>); ">
    <?php if( get_field('titel_slider-contact') ): ?>
        <h2 class="titel_slider-contact"><?php the_field('titel_slider-contact'); ?></h2>
    <?php endif; ?>
</div>
<div id="contact-gegevens">
    <?php if( get_field('titel-contact') ): ?>
        <h2 class="titel-contact"><?php the_field('titel-contact'); ?></h2>
    <?php endif; ?>
    <div id="contact-gegevens-c1">
        <?php if( get_field('bedrijfsnaam-contact') ): ?>
            <h6 class="bedrijfsnaam-contact"><?php the_field('bedrijfsnaam-contact'); ?></h6>
        <?php endif; ?>
        <div id="bezoekadres-div">

            <?php
                if( have_rows('bezoekadres-contact') ):
                while( have_rows('bezoekadres-contact') ) : the_row();
                ?>

                    <?php if( get_sub_field('titel-bezoekadres') ): ?>   
                        <p class="titel-bezoekadres"><?php the_sub_field('titel-bezoekadres'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('adres_1-bezoekadres') ): ?>
                        <p class="adres_1-bezoekadres"><?php the_sub_field('adres_1-bezoekadres'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('adres_2-bezoekadres') ): ?>
                        <p class="adres_2-bezoekadres"><?php the_sub_field('adres_2-bezoekadres'); ?></p>
                    <?php endif; ?>
                    
            <?php endwhile; endif; ?>

        </div>
        <div id="postadres-div">
            <?php
                if( have_rows('postadres-contact') ):
                while( have_rows('postadres-contact') ) : the_row();
                ?>

                    <?php if( get_sub_field('titel-postadres') ): ?>   
                        <p class="titel-postadres"><?php the_sub_field('titel-postadres'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('adres_1-postadres') ): ?>
                        <p class="adres_1-postadres"><?php the_sub_field('adres_1-postadres'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('adres_2-postadres') ): ?>
                        <p class="adres_2-postadres"><?php the_sub_field('adres_2-postadres'); ?></p>
                    <?php endif; ?>
                    
            <?php endwhile; endif; ?>

        </div>
        <div id="telefoonnummer-div">
        <?php
            if( have_rows('socials-contact') ):
            while( have_rows('socials-contact') ) : the_row();
            ?>

            <?php if( $linksocials ): ?>
                <a class="link-phone-contact" href="<?php echo esc_url( $linksocials['telefoonnummer-contact']); ?>">
                    <i class="fas fa-phone-alt"></i>
                    <?php the_sub_field('tekst_telefoonnummer-contact'); ?>
                </a>
            <?php endif; ?>
            <?php if( $linksocials ): ?>
                <a class="e-mailadres-contact" href="<?php echo esc_url( $linksocials['e-mailadres-contact']); ?>">
                    <i class="far fa-envelope-open"></i>
                    <?php the_sub_field('tekst_e-mailadres-contact'); ?>
                </a>
            <?php endif; ?>
                
        <?php endwhile; endif; ?>
        </div>
        <div id="openingstijden-div">

            <?php
                if( have_rows('openingstijden-contact') ):
                while( have_rows('openingstijden-contact') ) : the_row();
                ?>

                    <?php if( get_sub_field('titel-openingstijden-contact') ): ?>   
                        <p class="titel-openingstijden-contact"><?php the_sub_field('titel-openingstijden-contact'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('openingstijd_1-contact') ): ?>
                        <p class="openingstijd_1-contact"><?php the_sub_field('openingstijd_1-contact'); ?></p>
                    <?php endif; ?>
                    <?php if( get_sub_field('openingstijd_2-contact') ): ?>
                        <p class="openingstijd_2-contact"><?php the_sub_field('openingstijd_2-contact'); ?></p>
                    <?php endif; ?>
                    
            <?php endwhile; endif; ?>

        </div>
    </div>
    <div id="contact-gegevens-c2">
        <?php if( get_field('contact_form-contact') ): ?>
            <?php the_field('contact_form-contact'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div id="googlemaps-contact">
    <?php if( get_field('google_maps-contact') ): ?>
        <?php the_field('google_maps-contact'); ?></p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>

