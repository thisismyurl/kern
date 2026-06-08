<?php
/**
 * Title: Main Navigation
 * Slug: kern/main-navigation
 * Categories: kern-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: A horizontal header — the Kern wordmark set in Fraunces italic on the left, primary links on the right, closed by a thin studio-rule separator. Set on studio-paper.
 *
 * @package kern
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"kern-main-nav","backgroundColor":"studio-paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"bottom":{"color":"var:preset|color|studio-rule","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull kern-main-nav has-studio-paper-background-color has-background" style="border-bottom-color:var(--wp--preset--color--studio-rule);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6)">

	<!-- wp:group {"className":"kern-main-nav__bar","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group kern-main-nav__bar">

		<!-- wp:site-title {"level":0,"className":"kern-main-nav__wordmark","style":{"typography":{"fontStyle":"italic","fontWeight":"400","letterSpacing":"-0.01em","lineHeight":"1"}},"textColor":"studio-black","fontSize":"lg","fontFamily":"fraunces"} /-->

		<!-- wp:navigation {"overlayMenu":"mobile","className":"kern-main-nav__links","style":{"typography":{"fontWeight":"500","letterSpacing":"0.01em"},"spacing":{"blockGap":"var:preset|spacing|7"}},"textColor":"studio-ink","fontSize":"sm","fontFamily":"jakarta","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal"}} -->
		<!-- wp:navigation-link {"label":"Work","url":"#work","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Type","url":"#type","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Studio","url":"#studio","kind":"custom","isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"label":"Contact","url":"#contact","kind":"custom","isTopLevelLink":true} /-->
		<!-- /wp:navigation -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
