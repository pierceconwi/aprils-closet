<?php
	// Loads header.php.
	get_header();
?>
		<header class="page-title theme-bg-light text-center gradient py-5">
            <!-- Dynamically loads the title for the page/post -->
			<h1 class="heading"><?php the_title(); ?></h1>
		</header>    
		<article class="content px-3 py-5 p-md-5">
		<?php
		// If posts exist...
		if ( have_posts() ){
			// And while there are still posts to display...
			while( have_posts() ){
				// Display the post!
				the_post();
				// Display the content of the post.
				the_content();

			}

		}

		?>

	    </article>
	  
<?php
	// Loads footer.php.
	get_footer();
?>