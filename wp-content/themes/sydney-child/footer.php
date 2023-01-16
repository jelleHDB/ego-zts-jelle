<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
$link1 = get_field('link-footer_1', 'option');
$link2 = get_field('link-footer_2', 'option');
$link3 = get_field('link-footer_3', 'option');
$link4 = get_field('link-footer_4', 'option');
$link5 = get_field('link-footer_5', 'option');
$link6 = get_field('link-footer_6', 'option');
$link7 = get_field('link_linkedin', 'option');
$link8 = get_field('link_instagram', 'option');
$link9 = get_field('link_facebook', 'option');
$link10 = get_field('telefoonnummer_link', 'option');
$link11 = get_field('email_link', 'option');
$link12 = get_field('link-footer_7', 'option');
$link13= get_field('link-footer_8', 'option');
$link14= get_field('telefoonnummer_link_bedrijf', 'option');
?>
				</div>
			</div>
		</div><!-- #content -->
	</div>

	<div id="footer">
		<div id="content-in-footer">
			<div id="footer-kolom-1">
				<?php if( get_field('titel-footer-1', 'option') ): ?>
					<h2 class="titel-footer-1"><?php the_field('titel-footer-1', 'option'); ?></h2>
				<?php endif; ?>
				<?php if( $link1 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link1 ); ?>"><?php the_field('tekst_link_1', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link2 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link2 ); ?>"><?php the_field('tekst_link_2', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link3 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link3 ); ?>"><?php the_field('tekst_link_3', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link4 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link4 ); ?>"><?php the_field('tekst_link_4', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link5 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link5 ); ?>"><?php the_field('tekst_link_5', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link6 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link6 ); ?>"><?php the_field('tekst_link_6', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link12 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link12 ); ?>"><?php the_field('tekst_link_7', 'option'); ?></a>
				<?php endif; ?> 
				<?php if( $link13 ): ?>
					<a class="footer-link" href="<?php echo esc_url( $link13 ); ?>"><?php the_field('tekst_link_8', 'option'); ?></a>
				<?php endif; ?> 
				<div id="hover-icon-footer">
					<?php if( get_field('logo-footer-c1', 'option') ): ?>
						<img id="logo-footer-c1" src="<?php the_field('logo-footer-c1', 'option'); ?>" /></a>
					<?php endif; ?>
				</div>
			</div>
			<div id="footer-kolom-2">
				<div id="hover-icon-footer">
					<?php if( get_field('logo-footer', 'option') ): ?>
						<a href=""><img id="logo-footer" src="<?php the_field('logo-footer', 'option'); ?>" /></a>
					<?php endif; ?>
				</div>
				<?php if( get_field('icon_linkedin', 'option') ): ?>
					<a target="blank" href="<?php echo esc_url( $link7 ); ?>"><img id="icon_linkedin" src="<?php the_field('icon_linkedin', 'option'); ?>" /></a>
				<?php endif; ?>
				<?php if( get_field('icon_instagram', 'option') ): ?>
					<a target="blank" href="<?php echo esc_url( $link8 ); ?>"><img id="icon_instagram" src="<?php the_field('icon_instagram', 'option'); ?>" /></a>
				<?php endif; ?>
				<?php if( get_field('icon_facebook', 'option') ): ?>
					<a target="blank" href="<?php echo esc_url( $link9 ); ?>"><img id="icon_facebook" src="<?php the_field('icon_facebook', 'option'); ?>" /></a>
				<?php endif; ?>
			</div>
			<div id="footer-kolom-3">
				<?php if( get_field('titel-footer-3', 'option') ): ?>
					<h2 class="titel-footer-3"><?php the_field('titel-footer-3', 'option'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('adres_regel_1', 'option') ): ?>
					<h5 class="adres_regel_1"><?php the_field('adres_regel_1', 'option'); ?></h5>
				<?php endif; ?>
				<?php if( get_field('adres_regel_2', 'option') ): ?>
					<h5 class="adres_regel_2"><?php the_field('adres_regel_2', 'option'); ?></h5>
				<?php endif; ?>
				<?php if( get_field('adres_regel_3', 'option') ): ?>
					<h5 class="adres_regel_3"><?php the_field('adres_regel_3', 'option'); ?></h5>
				<?php endif; ?>
				<div id="phone-footer">
					<?php if( $link10 ): ?>
						<a class="phone-link" href="<?php echo esc_url( $link10 ); ?>">
							<i class="fas fa-phone-alt"></i>
							<?php the_field('telefoonnummer_tekst', 'option'); ?>
						</a>
					<?php endif; ?> 
				</div>
				<div id="phone-footer">
					<?php if( $link14 ): ?>
						<a class="phone-link" href="<?php echo esc_url( $link14 ); ?>">
							<i class="far fa-building"></i>
							<?php the_field('telefoonnummer_bedrijf', 'option'); ?>
						</a>
					<?php endif; ?> 
				</div>
				<div id="mail-footer">
					<?php if( $link11 ): ?>
						<a class="mail-link" href="<?php echo esc_url( $link11 ); ?>">
							<i class="far fa-envelope-open"></i>
							<?php the_field('email_tekst', 'option'); ?>
						</a>
					<?php endif; ?> 
				</div>
			</div>
		</div>
	</div>

	<?php $credits 		= sydney_footer_credits(); ?>
	<div style="width: 100%;" class="col-md-6">
		<?php echo wp_kses_post( $credits ); ?>
	</div>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
