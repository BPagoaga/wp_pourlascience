<div id="sidebar1" class="sidebar small-0 large-4 align-right medium-4 columns row" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	<div class="medium-10 columns">
		<?php dynamic_sidebar( 'sidebar1' ); ?>
	</div>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>