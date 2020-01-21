<?php get_header()?>

<div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Welcome to My Post</h3>
                    <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
                </div>
            </div><!-- end title -->
        	<?php
	            $about_args = array(
	            'post_type' => 'post',
	            'post_per_page' => 2,

	            );
	            $about_posts = new WP_Query($about_args);
	            while($about_posts->have_posts()){
	            	$about_posts->the_post();
	            

        	?>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4><?php the_title()?></h4>
                        <!-- <h2>Awards Winner Support Center</h2> -->
                        <p><?php the_excerpt()?></p>


                        <a href="<?php the_permalink() ?>" class="hover-btn-new"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <?php the_post_thumbnail('home-about');?>
                    </div><!-- end media -->
                </div><!-- end col -->
			</div>
		<?php }?>
		<?php wp_reset_postdata()?>
			<!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


<?php get_footer()?>