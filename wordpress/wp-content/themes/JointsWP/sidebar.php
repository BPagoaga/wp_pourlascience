<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar1" class="sidebar small-0 medium-12 align-right large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
    <div class="medium-12 cell">
		<?php dynamic_sidebar( 'sidebar1' ); ?>
    </div>
	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>