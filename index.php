<?php
	get_header();
?>
	
		<article class="content px-3 py-5 p-md-5">
			<?php
				
				// global $wp;
				// $thisUrl = home_url( $wp->request );
				// echo $thisUrl;
				// if($thisUrl == "http://localhost/wpthemedev/blog-post/"){
				// 	get_template_part('template-parts/content','ref');
				// }

				// elseif(have_posts()){
				if(have_posts()){

					while(have_posts()){
						the_post();
						get_template_part('template-parts/content','archive');
					}
				}

            ?>
            <?php
                the_posts_pagination();
            ?>
		</article>

<?php
	get_footer();
?>