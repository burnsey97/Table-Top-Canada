<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Table_Top_Canada
 */

?>

	<footer id="colophon" class="site-footer">
	<div id="primary" class="content-area"> 
		<div class="site-info">
			<div class="footerSect"> 
				<h2> Proudly Canadian</h2> 
				<h2> EST. 2022</h2>
				<p class="footPara"> We are a local Canadian based company. Its safe to say we've played a few board games and just absolutely love them. And thats what were here to do. Share are love of board games with you!</p>
			</div>
			<div class="footerSect"> 
			<h2 class="footMidTitle1"> Get In Touch!</h2> 
			<ul class="socialList"> 
			<a> <li> Instagram: Instagram.com/TableTopCanada</li> </a>
			<a> <li> Email: TableTopCanada@tabletopcanada.ca</li> </a>
			<a> <li> Twitter: Twitter.com/TableTopCanada</li> </a>
			<a> <li> Facebook: Facebook.com/TableTopCanada</li> </a>


			</ul>	
			</div>
			<div class="footerSect"> 
			<h2 class="footMidTitle1"> Shipping Info</h2> 
				<p class="shippingInfo">
				Recieve Free shipping to Canada or The United States whenever you purchase $110 or more. 
Customers will recieve an email directly after purchase. The email will have an invoice and tracking number. Please note, the tracking will not become avaliable until it is picked up or scanned by a mail courier. If you have any
 concerns about your order, or need 
information help. Feel free to message via email, our contact form or on social media. 
<br> 
Thank you. TableTop Canada 	
			</p>
			</div>
			<?php 
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tbtcan' ), 'tbtcan', '<a  class="tbtcanLink" href="https://zacharyburnswebdesign.ca">Zachary Burns</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div> 
<?php wp_footer(); ?>

</body>
</html>
