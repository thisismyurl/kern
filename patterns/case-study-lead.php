<?php
/**
 * Title: Case Study Lead
 * Slug: kern/case-study-lead
 * Categories: kern-work
 * Description: Opening section for a case study — asymmetric 2/3 + 1/3 layout with project title, summary, metadata, and hero image.
 * Inserter: true
 *
 * [SKIN] The opening section for a case study page or long-form work post.
 *
 * Structure: project metadata (client · year · services) + a summary paragraph
 * + a full-width hero image. The metadata reads as a caption, not a table —
 * it's the same eyebrow treatment used throughout Kern, applied to project
 * facts. The field labels are in the annotation style; the values are in
 * the Jakarta xs style.
 *
 * Teaching note: the `kern-case-grid` CSS class (defined in skin.css) creates
 * the asymmetric 2/3 + 1/3 layout that lets the summary and metadata sit
 * side-by-side without a hard column definition in the block markup. This is
 * the correct approach in FSE: define a CSS utility class for complex layout
 * geometry rather than fighting the columns block's 50/50 constraint.
 *
 * Pillar 1 (Integrity over Perfection): the metadata fields here are labelled
 * with the real category names that design clients care about — Client, Year,
 * Services — not the WordPress taxonomy labels that power them internally.
 */
?>
<!-- wp:group {"className":"kern-section kern-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<div class="wp-block-group kern-section kern-band--ground" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Top rule: project number / category eyebrow -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"baseline"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"},"border":{"bottom":{"color":"var:preset|color|studio-rule","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--studio-rule)">
		<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
		<p class="is-style-kern-eyebrow has-studio-mid-color has-text-color">Case Study</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"is-style-kern-annotation"} -->
		<p class="is-style-kern-annotation">01</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Project lead: title + summary (left, 2/3) and metadata (right, 1/3) -->
	<!-- The kern-case-grid class in skin.css handles the 2/3 + 1/3 split -->
	<!-- wp:group {"className":"kern-case-grid","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|8"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group kern-case-grid" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

		<!-- Left: project title + summary -->
		<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"300","fontSize":"var:preset|font-size|display","letterSpacing":"-0.02em","lineHeight":"1.05"},"color":{"text":"var:preset|color|studio-black"}}} -->
			<h1 class="wp-block-heading" style="font-family:var(--wp--preset--font-family--fraunces);font-size:var(--wp--preset--font-size--display);font-weight:300;letter-spacing:-0.02em;line-height:1.05;color:var(--wp--preset--color--studio-black)">Project Title</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontWeight":"300","fontSize":"var:preset|font-size|lg","lineHeight":"1.6"},"color":{"text":"var:preset|color|studio-ink"}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--lg);font-weight:300;line-height:1.6;color:var(--wp--preset--color--studio-ink)">A short summary of the project — what was the brief, what was the design challenge, what did we make. Two to three sentences. The full story continues below the hero image.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- Right: project metadata as definition list equivalent -->
		<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
		<div class="wp-block-group">

			<!-- Client -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
				<p class="is-style-kern-eyebrow has-studio-mid-color has-text-color">Client</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|studio-ink"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--studio-ink)">Client Name</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Year -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
				<p class="is-style-kern-eyebrow has-studio-mid-color has-text-color">Year</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|studio-ink"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--studio-ink)">2024</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- Services -->
			<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|1"}}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"is-style-kern-eyebrow","style":{"color":{"text":"var:preset|color|studio-mid"}}} -->
				<p class="is-style-kern-eyebrow has-studio-mid-color has-text-color">Services</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|studio-ink"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--studio-ink)">Brand Identity, Type Direction, Collateral</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- Hero image: full-width, no border-radius (skin.css blocks layer) -->
	<!-- wp:image {"align":"full","sizeSlug":"kern-hero","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
	<figure class="wp-block-image alignfull" style="margin-top:var(--wp--preset--spacing--10)">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/placeholder-hero.svg" alt="<?php esc_attr_e( 'Project hero image — replace with your case study photography', 'kern' ); ?>" />
	</figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->
