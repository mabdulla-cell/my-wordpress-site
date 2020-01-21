<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <?php dynamic_sidebar('footer-1')?>
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                     <?php dynamic_sidebar('footer-2')?>
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                   <?php dynamic_sidebar('footer-3')?>
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Cloud</a> Design By : <a href="https://www.wedoitdigitally/">Wedoitdigitally</a></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


	
    <?php wp_footer();?>

        <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>

     <?php echo do_shortcode('[wampum_popup type="exit" style="modal"] // HTML content here [/wampum_popup]')?>

</body>
</html>