<?php
/**
 * Title: Footer Variant
 * Slug: moka-blocks/footer-variant
 * Categories: featured
 */
?>

<!-- wp:group {"backgroundColor":"variant-background-secondary","className":"site-footer","paddingTop":10,"paddingBottom":10} -->
<div class="wp-block-group site-footer has-variant-background-secondary-background-color has-background pt__10 pb__10"><!-- wp:ainoblocks/grid-container {"className":"site-info footer-content"} -->
<div class="wp-block-ainoblocks-grid-container alignwide site-info footer-content"><div class="wp-block-ainoblocks-grid-container__inner"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":1,"gridColumnEndDesktop":13,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"alignItem":"center","justifyItem":"stretch","marginTopDesktop":0,"className":"center"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 align-self__center justify-self__stretch no-stacking mt_d__0 center"><!-- wp:paragraph {"align":"left","textColor":"variant-font-secondary","fontSize":"text-xs"} -->
<p class="has-text-align-left has-variant-font-secondary-color has-text-color has-text-xs-font-size"><?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'moka-blocks' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'moka-blocks' ) ) . '" rel="nofollow">WordPress</a>'
			);
			?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:ainoblocks/grid-item --></div></div>
<!-- /wp:ainoblocks/grid-container --></div>
<!-- /wp:group -->