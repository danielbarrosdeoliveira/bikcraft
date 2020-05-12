<?php
// Template Name: Portfolio
get_header();
?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">
				<?php if(have_rows('comentario_clientes')): while(have_rows('comentario_clientes')) : the_row(); ?>
					<li>
						<blockquote class="quote_clientes">
							<?php the_sub_field('comentario'); ?>
							<cite><?php the_sub_field('nome_cliente'); ?></cite>
						</blockquote>
					</li>
				<?php endwhile; else: endif; ?>		
			</ul>
		</section>

		<section class="portfolio">
  		<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>
		
	<?php endwhile; else: endif; ?>
<?php get_footer(); ?>