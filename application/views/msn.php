<!DOCTYPE html>
<html lang="en-ES">
<?php include 'plantilla/head.php'; ?>
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
					<h1>Mensaje enviado</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="index.html">Inicios</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Mensaje enviado
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	

	



<section id="our_work" class="dzen_section_DD ">
		<header>
			<div class="dzen_container" >
				<br><br>
				<h3><?php echo $mensaje?></h3>
					<br><br>

			</div>
			
		</header>
		<div class="dzen_section_content">
			<div class="dzen_container">

				
				<div class="dzen_column_DD_span12">
					
					<h1></h1>
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