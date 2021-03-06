<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('small-12 columns'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">

		<?php if (!is_front_page()) : ?>
			<h1 class="page-title"><?php the_title(); ?></h1>
		<?php endif ?>
		
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->