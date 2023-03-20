<aside class="widget inner-padding widget_related_links">

	<h2 class="widget-title">Related Links</h2>

	<?php if( have_rows('link') ): ?>
	<ul class="widget-menu">
	<?php while ( have_rows('link') ) : the_row(); ?>
	
	
		<?php $link_title = get_sub_field('link_title'); ?>
		<?php 
			$link_url = get_sub_field('link_url'); 
			$link_target = '';
			$link_target = TMP_CheckExternalLink($link_url);			
			if($link_target == true)
			{
				$link_target = 'target="_blank"';
			}
			
		?>
		<li><a href="<?php echo $link_url; ?>" <?php echo $link_target;?>><?php echo $link_title; ?></a></li>
		
	<?php endwhile; ?>
	</ul>
	<?php else :
	endif;
	?>
		
	
</aside>
