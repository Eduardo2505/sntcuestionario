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
					<h1><?php echo $titulo?></h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="index.html">Inicios</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current"><?php echo $titulo?>
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	

	
	<section id="our_work" class="dzen_section_DD ">
		<header>

			<div class="dzen_container">
				<h3>
					¿Qué tenemos para ti?
				</h3>
			</div>
			<div class="dzen_container">
				<div class="dzen_column_DD_span12">
					<img src="<?php echo site_url('') ?>images/<?php echo $imagen?>" alt="">
				</div>
				<div class="dzen_column_DD_span3">
					
				</div>
			</div>

		</header>
	</section>


<section class="dzen_section_DD no_padding_top">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span6 ">
					<div class="dzen_pricing-table-2">
						<div class="dzen_plan dzen_plan5">
							<div class="dzen_pricebox_header">
								<span class="dzen_pricebox_name">Plan Total</span>
								<span class="dzen_pricebox_currency">$</span>
								<span class="dzen_pricebox_price"><?php echo $costoProgramaTotal?> MXN</span>
							
							</div>
							<span class="dzen_pricebox_feature"><?php echo $numConsultas ?> consultas</span>
							<span class="dzen_pricebox_feature"><?php echo $meses?></span>
							
							<div class="dzen_pricebox_feature dzen_pricebox_feature_button">
								<a href="<?php echo $linkProgramaTotal?>" target="_self" class="dzen-button dzen-button_gray dzen-button_large">Comprar</a>
							</div>          
						</div>
					</div>
				</div>
				<div class="dzen_column_DD_span6 ">
					<div class="dzen_pricing-table-2">
						<div class="dzen_plan dzen_plan6 dzen_popular-plan">
							<div class="dzen_pricebox_header">
								<span class="dzen_pricebox_name">Consulta</span>
								<span class="dzen_pricebox_currency">$</span>
								<span class="dzen_pricebox_price"><?php echo $costoConsulta?> MXN</span>
							</div>
							<span class="dzen_pricebox_feature">1 Consulta</span>
							<span class="dzen_pricebox_feature">N/A</span>
							<div class="dzen_pricebox_feature dzen_pricebox_feature_button">
								<a href="<?php echo $linkConsulta?>" target="_self" class="dzen-button dzen-button_blue dzen-button_large">Comprar</a>
							</div>          
						</div>
					</div>
				</div>
			<!-- 	<div class="dzen_column_DD_span3 ">
					<div class="dzen_pricing-table-2">
						<div class="dzen_plan dzen_plan7">
							<div class="dzen_pricebox_header">
								<span class="dzen_pricebox_name">Paquete A</span>
								<span class="dzen_pricebox_currency">$</span>
								<span class="dzen_pricebox_price">3,135 MXN</span>
					
							</div>
						   <span class="dzen_pricebox_feature">3 consultas</span>
							<span class="dzen_pricebox_feature">3, 6, 9 y 12 meses</span> 
							<div class="dzen_pricebox_feature dzen_pricebox_feature_button">
								<a href="shortcodes.html" target="_self" class="dzen-button dzen-button_gray dzen-button_large">Comprar</a>
							</div>          
						</div>
					</div>
				</div>

				<div class="dzen_column_DD_span3">
					<div class="dzen_pricing-table-2">
						<div class="dzen_plan dzen_plan7">
							<div class="dzen_pricebox_header">
								<span class="dzen_pricebox_name">Paquete B</span>
								<span class="dzen_pricebox_currency">$</span>
								<span class="dzen_pricebox_price">2,970 MXN</span>
					
							</div>
						   <span class="dzen_pricebox_feature">3 consultas</span>
							<span class="dzen_pricebox_feature">3, 6, 9 y 12 meses</span> 
							<div class="dzen_pricebox_feature dzen_pricebox_feature_button">
								<a href="shortcodes.html" target="_self" class="dzen-button dzen-button_gray dzen-button_large">Comprar</a>
							</div>          
						</div>
					</div>
				</div>
 -->
			</div>
		</div>
	</section>




	<section id="our_work" class="dzen_section_DD section_with_gray_body" >
		
		<div class="dzen_container" >
			
			<span>* El Plan integral de 96 semanas, aplica mensualidades 
				(3, 6, 9 y 12 meses) por pago en PayPal con las tarjetas de
				 crédito participantes, y tiene 5% de descuento adicional liquidando el total en un solo pago. </span>


				<br><br><strong style="text-transform: uppercase;">¿Qué promociones tienen 
				los paquetes de Planes integrales (no aplican para la consulta simple)?</strong>
<br>Promoción A: En la contratación de dos planes (aplicable a 12, 24 y 36 semanas): 5% de descuento adicional a cada uno. 
<br>Promoción B: En la contratación de tres planes (aplicable a 12, 24 y 36 semanas): 10% de descuento adicional a cada uno. 
<br>Promoción C: En la contratación de dos planes (aplicable a 48, 60 72 semanas): 15% de descuento adicional a cada uno.
<br>Promoción D: En la contratación de tres planes (aplicable a 48, 60 y 72 semanas): 20% de descuento adicional a cada uno.

		</div>
	</section>





	<section id="our_work" class="dzen_section_DD ">
		<header>
			<div class="dzen_container" >
				<h3>¿Qué contiene?</h3>

			</div>
			<div class="dzen_container" >
				<p style="text-align: justify">
					<br>A) Envió de un cuestionario en formato Word (vía Messenger (inbox), WhatsApp o Correo electrónico) para obtener la mayor cantidad de información posible sobre el cliente/paciente. Cualquier duda sobre el llenado del cuestionario, favor de preguntar con total confianza. 
					<br>B) Análisis de la información en el cuestionario inicial para diseñar los planes de manera personalizada, acorde a la meta del cliente/paciente (duración estimada de 1 a 2 días, dependiendo de la saturación del trabajo). 
					<br>C) Llamada telefónica, video-llamada por Messenger (inbox), WhatsApp o Skype de mínimo 5 a máximo 30 minutos para aclarar cualquier duda respecto al plan y diseñarlo según las necesidades específicas de cada cliente/paciente (día y hora en la que ambos podamos agendar ese tiempo). 
					<br>D) En consulta presencial, medición antropométrica (porcentaje de grasa corporal y de masa muscular) completa y en el caso de la consulta en línea, registro fotográfico frontal, lateral y trasera para evaluar los cambios corporales, junto con el nuevo peso en ayunas, esto, en cada consulta. 
					<br>E) Diagnostico nutricional según datos antropométricos, información de estilo de vida, experiencia dietética y de ser necesario, estudios de laboratorio. Planificación de metas realistas a corto, mediano y largo plazo. 
					<br>F) Dieta ya sea por el método de equivalentes o menú fijo, según las particularidades de cada cliente/paciente, respetando gustos y acoplando estilos dietéticos. Horarios sugeridos de cada comida, suplementos necesarios y recomendaciones generales. 
					<br>G) Rutina de entrenamiento en gimnasio adaptada a las metas específicas y al nivel actual de cada cliente/paciente. Dicho plan especifica la planeación semanal, los ejercicios específicos de cada grupo muscular, las series, repeticiones, tempo de contracción y tiempo de descanso específicos para cada ejercicio. Así como el método de entrenamiento, el tipo de contracción y rango de movimiento articular. 
					<br>H) Envió del plan integral por Messenger (inbox), WhatsApp o correo electrónico. 
					<br>I) Resolución de dudas y preguntas ilimitadas mientras el plan sea vigente, por medio de Messenger (inbox) a mi perfil personal en Facebook (L.N. Luis Alberto Gómez Martín), mi fanpage en Facebook (SNT Center - Sport Nutrition and Trainning Center), en mi WhatsApp (378 113 05 44) o por correo electrónico (gomezluisnutricion@hotmail.com). 

				</p>
			</div>
		</header>
		
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