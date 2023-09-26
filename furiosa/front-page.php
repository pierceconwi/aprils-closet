<?php
	// Loads header.php.
	get_header();
?>
<!-- Begin banner -->
</div>
            <div class="row">
                <div id="pmc-banner" class="col-sm-12">
                <?php if ( get_header_image() ) : ?>
                <div id="site-header">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
                </div>
                <?php endif; ?>
                </div>
            </div>
 <!-- End banner -->
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