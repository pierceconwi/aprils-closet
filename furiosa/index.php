<?php if ( have_posts() ) :?>
		<?php while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			<?php the_content() ?>
		<?php endwhile;?>
	<?php else :?>
		<p>There are no posts here.</p>
		<?php endif;?>