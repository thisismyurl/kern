<?php
/**
 * Title: Works Grid
 * Slug: kern/works-grid
 * Categories: kern-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: A three-column grid of studio projects — image placeholder, a 2xs Jakarta caps project type, and a lg Fraunces project name. Set on the studio-ground field.
 *
 * @package kern
 */
?>
<!-- wp:group {"tagName":"section","align":"full","className":"kern-works-grid","backgroundColor":"studio-ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<section class="wp-block-group alignfull kern-works-grid has-studio-ground-background-color has-background" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">

	<!-- wp:heading {"level":2,"className":"kern-works-grid__title","style":{"typography":{"fontWeight":"400","lineHeight":"1.1","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|9"}}},"textColor":"studio-black","fontSize":"2xl","fontFamily":"fraunces"} -->
	<h2 class="wp-block-heading kern-works-grid__title has-studio-black-color has-text-color has-fraunces-font-family has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--9);font-weight:400;letter-spacing:-0.02em;line-height:1.1">Selected work</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"kern-works-grid__row","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|9","left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns kern-works-grid__row">

		<!-- wp:column {"className":"kern-works-grid__item"} -->
		<div class="wp-block-column kern-works-grid__item">
			<!-- wp:image {"className":"kern-works-grid__thumb","aspectRatio":"3/2","scale":"cover","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large kern-works-grid__thumb"><img alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"kern-works-grid__type","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"studio-mid","fontSize":"2xs","fontFamily":"jakarta"} -->
			<p class="kern-works-grid__type has-studio-mid-color has-text-color has-jakarta-font-family has-2-xs-font-size" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3);font-weight:600;letter-spacing:0.12em;line-height:1.4;text-transform:uppercase">Typeface Design</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"kern-works-grid__name","style":{"typography":{"fontWeight":"400","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-black","fontSize":"lg","fontFamily":"fraunces"} -->
			<h3 class="wp-block-heading kern-works-grid__name has-studio-black-color has-text-color has-fraunces-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;letter-spacing:-0.01em;line-height:1.15">Marot Display</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kern-works-grid__item"} -->
		<div class="wp-block-column kern-works-grid__item">
			<!-- wp:image {"className":"kern-works-grid__thumb","aspectRatio":"3/2","scale":"cover","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large kern-works-grid__thumb"><img alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"kern-works-grid__type","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"studio-mid","fontSize":"2xs","fontFamily":"jakarta"} -->
			<p class="kern-works-grid__type has-studio-mid-color has-text-color has-jakarta-font-family has-2-xs-font-size" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3);font-weight:600;letter-spacing:0.12em;line-height:1.4;text-transform:uppercase">Brand Identity</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"kern-works-grid__name","style":{"typography":{"fontWeight":"400","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-black","fontSize":"lg","fontFamily":"fraunces"} -->
			<h3 class="wp-block-heading kern-works-grid__name has-studio-black-color has-text-color has-fraunces-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;letter-spacing:-0.01em;line-height:1.15">Atelier Voss</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"kern-works-grid__item"} -->
		<div class="wp-block-column kern-works-grid__item">
			<!-- wp:image {"className":"kern-works-grid__thumb","aspectRatio":"3/2","scale":"cover","sizeSlug":"large"} -->
			<figure class="wp-block-image size-large kern-works-grid__thumb"><img alt="" style="aspect-ratio:3/2;object-fit:cover"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"kern-works-grid__type","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase","lineHeight":"1.4"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"studio-mid","fontSize":"2xs","fontFamily":"jakarta"} -->
			<p class="kern-works-grid__type has-studio-mid-color has-text-color has-jakarta-font-family has-2-xs-font-size" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3);font-weight:600;letter-spacing:0.12em;line-height:1.4;text-transform:uppercase">Lettering</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"kern-works-grid__name","style":{"typography":{"fontWeight":"400","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"studio-black","fontSize":"lg","fontFamily":"fraunces"} -->
			<h3 class="wp-block-heading kern-works-grid__name has-studio-black-color has-text-color has-fraunces-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:400;letter-spacing:-0.01em;line-height:1.15">Ribbon &amp; Press</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
