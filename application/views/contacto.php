<!DOCTYPE html>
<html lang="es-MX">
<head>
	<?php include 'plantilla/head.php'; ?>
</head>

<body>
	<header id="dz_main_header" class="clearfix">
		<?php echo $menu; ?>
	</header>
	<div id="dz_header_spacer">
	</div>

	<section id="title_breadcrumbs_bar">
		<div class="container">
			<div class="row">
				<div class="span8">
					<h1>Contacto</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="<?php echo site_url('') ?>">Inicio</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Contácto
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD">
		<header>
			<div class="dzen_container">
				<h3>Envianos un mensaje</h3>
				
			</div>
		</header>
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span6">
					<div class="dzencf" id="dzencf-wrapper" dir="ltr">
						<form action="<?php echo site_url('') ?>welcome/eviarEmail"  method="post" class="contact-form">
							<input type="text" name="nombre" size="40" class="dzencf-text" placeholder="NOMBRE " required="">
							<input type="email" name="email" size="40" class="dzencf-text dzencf-email dzencf-validates-as-email" placeholder="CORREO ELECTRONICO" required="">
							<input type="tel" name="telefono" size="40" class="dzencf-text" placeholder="TÉLEFONO " required="">
							<input type="text" name="asunto" size="40" class="dzencf-text" placeholder="ASUNTO" required="">
							<textarea name="mensaje" cols="40" rows="10" class="dzencf-textarea" placeholder="MENSAJE" required=""></textarea>
							<input type="submit" value="ENVIAR" class="dzencf-submit" >
						</form>
						<div class="dzencf-response-output dzencf-display-none"></div>
					</div>
				</div>
				<div class="dzen_column_DD_span6">
					<h3 class="column_title_left">
						<span>Contáctanos
						</span>
					</h3>
					<table>
						<tbody>
							<tr>
								<td>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-envelope"></i></span><a href="mailto:gomezluisnutricion@hotmail.com">gomezluisnutricion@hotmail.com</a>
									</p>
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-home"></i></span>Pedro Moreno # 81-A. Colonia: Centro C.P.: 47700 ,Jalisco, México
									</p>
									<!-- <p class="contact_page_info">
										<span class=""><i class="ABdev_icon-globe"></i></span>somewebsitehere.net
									</p> -->
									<p class="contact_page_info">
										<span class=""><i class="ABdev_icon-phonealt"></i></span>378 113 05 44
									</p>
								</td>
								<td>
									
									<!-- <p class="contact_page_info">
										<span class=""><i class="ABdev_icon-draft"></i></span>378 113 05 44
									</p> -->
								</td>
							</tr>
						</tbody>
					</table>
					<h3 class="column_title_left">
						<span>Siguenos</span>
					</h3>
					<div class="dzen_follow_us">
						<a title="Siguenos en Facebook" class="dzen_socialicon_facebook dzen_tooltip" data-gravity="s" href="https://www.facebook.com/SNTCenter.SportNutritionandTrainningCenter/" target="_blank"><i class="ABdev_icon-facebook"></i></a>
						<a title="Siguenos en Twitter" class="dzen_socialicon_twitter dzen_tooltip" data-gravity="s" href="https://twitter.com/SNT_Center" target="_blank"><i class="ABdev_icon-twitter"></i></a>
						<!-- <a title="Siguenos en Google+" class="dzen_socialicon_googleplus dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-googleplus"></i></a>
						 -->
						<a title="Siguenos en Linkedin" class="dzen_socialicon_linkedin dzen_tooltip" data-gravity="s" href="https://www.linkedin.com/in/luis-alberto-g%C3%B3mez-mart%C3%ADn-758125b0/" target="_blank"><i class="ABdev_icon-linkedin"></i></a>
						<a title="Siguenos en Youtube" class="dzen_socialicon_youtube dzen_tooltip" data-gravity="s" href="https://www.youtube.com/channel/UC4JiqN4IHp_SKLOVwZb4Isw?view_as=subscriber" target="_blank"><i class="ABdev_icon-youtube"></i></a>
						<!-- <a title="Our RSS feed" class="dzen_socialicon_feed dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-rss"></i></a>
						<a title="Our Vimeo Profile" class="dzen_socialicon_vimeo dzen_tooltip" data-gravity="s" href="#" target="_blank"><i class="ABdev_icon-vimeo"></i></a> -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dzen_section_DD no_padding section_body_fullwidth">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span12">
					<div id="dzen_google_map_1" 
					data-map_type="ROADMAP" 
					data-lat="20.8240341" 
					data-lng="-102.58918019999999" 
					data-zoom="17" 
					data-scrollwheel="0" 
					data-maptypecontrol="1" 
					data-pancontrol="1" 
					data-zoomcontrol="1" 
					data-scalecontrol="1" 
					data-markertitle="Our Company" 
					data-markericon="images/map-pointer.png" 
					data-markercontent="Our Address" 
					data-markerlat="20.8240341" 
					data-markerlng="-102.58918019999999" 
					class="dzen_google_map" style="height:400px;width:100%;">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="dzen_section_DD no_padding callout_box_blue">
	<?php include 'plantilla/suscribete.php'; ?>
</section>
<footer id="dz_main_footer">
	<?php include 'plantilla/footer.php'; ?>
</footer>

<?php include 'plantilla/js.php'; ?>

</body>
</html>