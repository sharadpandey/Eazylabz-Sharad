<footer>
	<div class="backToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	<div class="mainfooter">
		<div class="container">
			<div class="footerwidgetWrapper">
				<div class="footerwidget TestFooter">
					<h3>Our Products</h3>
					<ul>
						<li><a href="#">Disposable Gloves</a></li>
						<li><a href="#">Laboratory Glassware</a></li>
						<li><a href="#">Laboratory Plastic Wares</a></li>
						<li><a href="#">Laboratory Instruments</a></li>
					</ul>
					<ul>
						<li><a href="#">Microscope Accessoreis</a></li>
						<li><a href="#">Others</a></li>
						<li><a href="#">Browse By Brands</a></li>
					</ul>
				</div>
				<div class="footerwidget AddressFooter">
					<h3><?php the_field('get_in_touch_heading','options');?></h3>
					<ul>
						<li class="add">
							<p><i class="fa fa-map-marker"></i><?php the_field('footer_address','options');?></p>
						</li>
						<li class="call">
							<p><i class="fa fa-phone"></i><a href="tel:<?php $string=get_field('header_phone_number','options'); echo $string = str_replace(['(', '+', ' ',')'], '', $string);?>">
							<?php the_field('header_phone_number','options');?></a></p>
						</li>
						<li class="fax">
							<p><i class="fa fa-tty"></i><?php the_field('footer__fax_number','options');?></p>
						</li>
						<li class="mail">
							<p><i class="fa fa-envelope-o"></i><a href="mailto:<?php the_field('header_email','options');?>"><?php the_field('header_email','options');?></a></p>
						</li>
					</ul>
				</div>
				<div class="footerwidget InfoFooter">
					<h3><?php the_field('information_text_heading','options');?></h3>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#" data-toggle="modal" data-target="#tac">Terms and Conditions</a></li>
						<li><a href="faq.php">FAQs</a></li>
					</ul>
				</div>
				<div class="footerwidget NewsletterFooter">
					<?php the_field('newsletter_heading','options');?>
					<form>
						<div class="newsletter labelHide">
							<div class="form-group">
								<input class="form-control" type="text" name="newsletterEmail" id="newsletterEmail">
								<label for="newsletterEmail">Enter email address</label>
								<button type="submit"><i class="fa fa-envelope"></i></button>
							</div>
						</div>
					</form>
					<div class="socialDetails">
						<ul>
							<li><a href="<?php the_field('facebook','options');?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php the_field('twitter','options');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php the_field('google-plus','options');?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="<?php the_field('linkedin','options');?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="<?php the_field('youtube','options');?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<li><a href="<?php the_field('pinterest','options');?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="<?php the_field('instagram','options');?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="<?php the_field('tumblr','options');?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyFooter">
		<div class="container">
		<input type="hidden" id="site_url" value="<?php echo site_url();?>" name="site_url" class="cls_site_url">
			<div class="row">
				<div class="col-sm-6">
					<p class="copy">Copyright &copy; <?php echo date('Y');?> easylabz. All Rights Reserved.</p>
				</div>
				<div class="col-sm-6">
					<p class="text-right">Powered By - <a href="https://www.imarkinfotech.com/" target="_blank">iMark Infotech</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Modal -->
<div class="modal fade" id="tac" role="dialog" aria-labelledby="tacLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title" id="tacLabel">Terms &amp; Conditions</h2>
			</div>
			<div class="modal-body">
				<?php the_field('terms_and_conditions_popup_description','options');?>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>	
</body>
</html>