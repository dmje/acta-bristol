<?php
/**
 * The Template for displaying all single posts.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit(); // Exit if accessed directly.
}

get_header();
?>

	<div <?php generate_do_attr('content'); ?>>
		<main <?php generate_do_attr('main'); ?>>
			<?php
   /**
    * generate_before_main_content hook.
    *
    * @since 0.1
    */
   do_action('generate_before_main_content');

   if (generate_has_default_loop()) {
   	while (have_posts()):
   		the_post();

   		//generate_do_template_part( 'single' );
   		get_template_part('partials/acta_whatson', 'single');
   	endwhile;
   }

   /**
    * generate_after_main_content hook.
    *
    * @since 0.1
    */
   do_action('generate_after_main_content');
   ?>
		</main>
	</div>

	<?php
 /**
  * generate_after_primary_content_area hook.
  *
  * @since 2.0
  */
 do_action('generate_after_primary_content_area');

 generate_construct_sidebars();

 get_footer();
 ?>

