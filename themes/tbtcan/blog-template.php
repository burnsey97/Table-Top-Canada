<?php
/**
 * Template Name: Blog Template
 *@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Table_Top_Canada
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="grid-container">
        <div class="grid-x grid-margin-x grid-margin-y"> 
        <?php
if (is_page_template( 'templates/blog-template.php' )  ) {
	$test_args = array (
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' =>  2, 
	);
	
	$test_query = new WP_Query( $test_args );


	if( $test_query->have_posts() ) {
	while ($test_query->have_posts()) {
		$test_query->the_post();	
		?>
		<!-- // Create Custome Html  -->
		<h5><a class="entry-title"href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h5>
		<img><a class="custom-blog-image" href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a> </img>
		
		<?php
		// the_post_thumbnail();
		// created custom blog loop
		
		the_excerpt();
	}
}
}
?>



        </div>
    </div>
</main>