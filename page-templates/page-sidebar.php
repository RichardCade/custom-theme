<?php
/*
Template Name: Sidebar
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="container">
	<div class="grid">
		<main class="main-content-sidebar">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
