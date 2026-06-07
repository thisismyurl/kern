<?php
/**
 * Title: Brief
 * Slug: kern/brief
 * Categories: kern-contact
 * Description: A project intake contact form shell. Replace the form plugin placeholder with Contact Form 7, WPForms, Gravity Forms, or Jetpack Forms.
 * Inserter: true
 *
 * [SKIN] The working brief contact form — a layout shell, not a functional form.
 *
 * Architecture: this pattern provides the two-column layout (intro copy left,
 * form area right) and the accessible label/field CSS treatment. The inner
 * form itself MUST be provided by a form plugin because:
 *
 *   1. PHP block patterns execute at INSERTION time. Any nonce or CSRF token
 *      baked into the saved HTML expires after 24 hours — the form would
 *      permanently reject submissions from day two onward.
 *   2. WordPress themes on WP.org cannot include server-side form handlers
 *      (admin_post_, mail(), wp_mail()) without routing the user to a plugin.
 *
 * How to use:
 *   1. Insert this pattern into your Contact page.
 *   2. In the form plugin placeholder (right column), click "Replace".
 *   3. Insert your form plugin's shortcode or block.
 *   4. Update the email in the left column to your studio address.
 *
 * Compatible with: Contact Form 7, WPForms, Gravity Forms, Jetpack Forms,
 * Forminator, Ninja Forms. The kern-brief-form wrapper class applies
 * consistent label/input styling to all of them.
 *
 * WCAG 1.3.1 / 3.3.2: accessible labels are the form plugin's responsibility.
 * All major form plugins produce properly labelled fields by default.
 *
 * @package kern
 */
?>
<!-- wp:group {"className":"kern-section kern-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-section kern-band--ground" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section header -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:heading {"level":2,"fontSize":"sm","className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
		<h2 class="wp-block-heading has-sm-font-size is-style-kern-eyebrow has-studio-mid-color has-text-color"><?php esc_html_e( 'Start a Brief', 'kern' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- Two-column layout: intro (left) + form plugin area (right) -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|12"},"blockGap":"var:preset|spacing|16"}}} -->
	<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--12)">

		<!-- Left: intro copy and contact anchor -->
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"300","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.01em","lineHeight":"1.2"},"color":{"text":"var:preset|color|studio-black"}}} -->
			<h3 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);font-size:var(--wp--preset--font-size--2xl);font-weight:300;letter-spacing:-0.01em;line-height:1.2;color:var(--wp--preset--color--studio-black)"><?php esc_html_e( 'Every project begins with a brief.', 'kern' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|studio-ink"},"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);line-height:1.7;color:var(--wp--preset--color--studio-ink);margin-top:var(--wp--preset--spacing--5)"><?php esc_html_e( 'Tell us what you\'re building. The more context you give, the better we can assess fit. We respond to every brief within two business days.', 'kern' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|studio-press"},"spacing":{"margin":{"top":"var:preset|spacing|8"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--studio-press);margin-top:var(--wp--preset--spacing--8)"><a href="mailto:<?php echo esc_attr( get_option( 'admin_email' ) ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html( get_option( 'admin_email' ) ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- Right: form plugin placeholder.
		     ► After inserting this pattern, click "Replace" below and add your
		       form plugin block or shortcode. The kern-brief-form CSS class on
		       the wrapper applies consistent styling to all major form plugins. -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:group {"className":"kern-brief-form","layout":{"type":"default"},"style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-group kern-brief-form">

				<!-- wp:html -->
				<div class="kern-brief-plugin-placeholder" style="padding:2.5rem;background:var(--wp--preset--color--studio-ground);border:2px dashed var(--wp--preset--color--studio-rule);text-align:center;">
					<p style="font-family:var(--wp--preset--font-family--jakarta, sans-serif);font-size:0.875rem;color:var(--wp--preset--color--studio-mid);margin:0;">
						<strong style="display:block;margin-bottom:0.5rem;color:var(--wp--preset--color--studio-press);">⬤ Replace this block with your form plugin</strong>
						Insert a Contact Form 7, WPForms, Gravity Forms, or Jetpack Forms block here.<br>
						The <code>kern-brief-form</code> wrapper applies consistent label and input styling automatically.
					</p>
				</div>
				<!-- /wp:html -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
