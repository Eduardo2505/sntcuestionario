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
					<h1>Cuestionario</h1>
				</div>
				<div class="span4 right_aligned">
					<div class="breadcrumbs">
						<a href="index.html">Inicios</a> 
						<i class="ABdev_icon-chevron-right"></i> 
						<span class="current">Cuestionario
						</span>
					</div>									
				</div>
			</div>
		</div>
	</section>

	<section id="our_team" class="dzen_section_DD ">
		<div class="dzen_section_content">
			<div class="dzen_container">
				<div class="dzen_column_DD_span12 ">

					<h3 class="column_title_left">
						<span>CUESTIONARIO PARA LA OBTENCION DE DATOS EN LA PRIMERA CONSULTA. </span>
					</h3>
					<div class="dzen-tabs" data-selected="1" data-break_point="449" data-effect="slide">
						<ul>
							<li>
								<a href="#tab-1">Paso 1</a>
							</li>
							<li>
								<a href="#tab-2">Paso 2</a>
							</li>
							<li>
								<a href="#tab-3">Paso 3</a>
							</li>
							<li>
								<a href="#tab-4">Paso 4</a>
							</li>
							<li>
								<a href="#tab-5">Paso 5</a>
							</li>
							<li>
								<a href="#tab-6">Paso 6</a>
							</li>
							<li>
								<a href="#tab-7">Paso 7</a>
							</li>
							<li>
								<a href="#tab-8">Paso 8</a>
							</li>
							<li>
								<a href="#tab-9">Paso 9</a>
							</li>

						</ul>

						
						<div class="dzen-tabs-wrapper">
							<div id="tab-1">
								<form action="#" method="post" class="contact-form">
									<div>
										Información general: Este cuestionario tiene la finalidad de obtener la mayor cantidad de información personal posible, esto para poder realizar el mejor plan de Alimentación y Entrenamiento totalmente personalizado acorde a sus necesidades, objetivos y nivel actual, y de esta manera poder fijar metas realistas y asegurar la consecución de las mismas. Le pedimos de la manera más atenta que sea lo más específico posible al contestar. 
									</div>


									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text" name="nombreCompleto" maxlength="350" class="dzencf-text" placeholder="Nombre completo" required="">

										<select name="sexo" class="dzencf-text" required="">
											<option value="">Seleccione Género</option>
											<option value="Mujer">Mujer</option>
											<option value="Hombre">Hombre</option>
											
										</select>
										<input type="date" name="fecha"  
										required=""  class="dzencf-text" 
										placeholder="Fecha exacta de nacimiento (día-mes-año)">
										<input type="text" name="telefono" maxlength="350" class="dzencf-text" placeholder="WhatsApp" required="">
										<input type="text" name="WhatsApp" maxlength="350" class="dzencf-text" placeholder="Télefono" >
										<input type="text" name="email" maxlength="350" class="dzencf-text" placeholder="Correo Electrónico" required="">
										<input type="text" name="perfil" maxlength="350" class="dzencf-text" placeholder="Perfil en Facebook " >
										
										
										<!-- <div class="dzencf-response-output dzencf-display-none"></div> -->
									</div>

									<div>
										Lugar de residencia:Este apartado nos servirá para futuras referencias al momento de hacerle llegar algún paquete y/o producto. 
									</div>

									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text" name="domicio" maxlength="350" class="dzencf-text" placeholder="Domicilio" required="">
										<input type="text" name="colonia" maxlength="350" class="dzencf-text" placeholder="Colonia" required="">
										<input type="text" name="ciudad" maxlength="350" class="dzencf-text" placeholder="Ciudad" required="">
										<input type="text" name="estado" maxlength="350" class="dzencf-text" placeholder="Estado" required="">
										<input type="text" name="Pais" maxlength="350" class="dzencf-text" placeholder="País" required="">
										<input type="text" name="cp" maxlength="350" class="dzencf-text" placeholder="Código postal" required="">
									</div>
									<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
									<!--<a href="#enviar" style="background-color:#eeeeee" class="dzen-button dzen-button_light dzen-button_large">Siguiente</a>-->
								</form>
							</div>
							<div id="tab-2">
								<div>
									Este apartado nos servirá para poder saber de qué manera podremos adaptar las estrategias nutricionales y de entrenamiento a su vida actual sin que estas cambien demasiado su calidad de vida, ya que trabajamos con seres humanos integrales y no solo con números y datos.
								</div>
								<div class="dzencf" id="dzencf-wrapper" dir="ltr">

									<select name="nivelEducativo" class="dzencf-text" required="">
										<option value="">Nivel educativo terminado</option>
										<option value="Secuandario">Secuandario</option>
										<option value="Preparatoria">Preparatoria</option>
										<option value="Media Superior">Media Superior</option>

									</select>


									<input type="text" name="actividadLaboral" maxlength="350" class="dzencf-text" placeholder="Actividad laboral remunerada" required="">

									<select name="nivelSocioeconomico" class="dzencf-text" required="">
										<option value="">Nivel socio-económico</option>
										<option value="Alto">Alto</option>
										<option value="Medio">Medio</option>
										<option value="Bajo">Bajo</option>

									</select>

									<input type="text" name="actividadocio" maxlength="350" class="dzencf-text" placeholder="Actividades de ocio y placer" required="">

									<select name="estadocivil" class="dzencf-text" required="">
										<option value="">Estado civil actual</option>
										<option value="Casado(a)">Casad@</option>
										<option value="Divorciado(a)">Divorciado (a)</option>
										<option value="Soltero(a)">Soltero(a)</option>
										<option value="Unión Libre">Unión Libre</option>
										<option value="Viudo(a)">Viudo(a)</option>

									</select>


									<input type="text" name="cuantosHijos" maxlength="350" class="dzencf-text" placeholder="¿Cuántos hijos tiene?" required="">
									<input type="text" name="conquienvives" maxlength="350" class="dzencf-text" placeholder="¿Con quién vive?" required="">
									<input type="text" name="quienpreparaTucomida" maxlength="350" class="dzencf-text" placeholder="¿Quién prepara su comida? " required="">


									<select name="niveldeEstres" class="dzencf-text" required="">
										<option value="">Nivel de estrés diario</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>

									</select>

									<select name="horasdeTiempo" class="dzencf-text" required="">
										<option value="">Horas de sueño</option>
										<option value="Ininterrumpido">Ininterrumpido</option>
										<option value="Lapsos">Lapsos</option>


									</select>


									<input type="text" name="cuantasvecesdefecta" maxlength="350" class="dzencf-text" placeholder="¿Cuántas veces defeca en promedio al día?" required="">
									<input type="text" name="cuantasVecesOrina" maxlength="350" class="dzencf-text" placeholder="¿Cuántas veces orina en promedio al día?" required="">

								</div>
							</div>
							<div id="tab-3">
								<div>
									Instrucciones y objetivos específicos: Este apartado nos mostrara sus objetivos y aspiraciones con el plan de Alimentación y de Entrenamiento, así como definir la rigurosidad de los mismos, dependiendo esto de su nivel de motivación y apego a ellos. 
								</div>

								<select name="niveldeMotivacion" class="dzencf-text" required="">
									<option value="">Nivel de Motivación</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>

								</select>
								<input type="text" name="objetivoPrinConsulta" maxlength="350" class="dzencf-text" placeholder="Objetivo principal de la consulta" required="">


								Instrucciones y objetivos específicos: Este apartado nos mostrara sus objetivos y aspiraciones con el plan de Alimentación y de Entrenamiento, así como definir la rigurosidad de los mismos, dependiendo esto de su nivel de motivación y apego a ellos. 
								<br> <br><strong>Historial de lesiones con implicancia deportiva (luxaciones, esguinces y desagarres)
								</strong><br><br>



								<div class="dzen_container">
									<div class="dzen_column_DD_span11">
										<div class="dzen-accordion" data-expanded="3" role="tablist">
											<!---- NUEVA ENTRADA -->

											<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-11" 
											aria-controls="ui-accordion-1-panel-11" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>	Vértebras cervicales
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-11" 
										aria-labelledby="ui-accordion-1-header-11" role="tabpane11" aria-expanded="false" aria-hidden="true">
										<div class="dzen_column_DD_span3">

											<div class="margin_bottom">
												<input type="text" name="vertebraCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
											</div>
										</div>
										<div class="dzen_column_DD_span8">

											<div class="margin_bottom">

												<input type="text" name="vertebraComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

											</div>
										</div>
									</div>

									<!-- FIN ENTRADA -->
									<!---- NUEVA ENTRADA -->

									<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-10" 
									aria-controls="ui-accordion-1-panel-10" aria-selected="false" tabindex="0">
									<span class="ui-accordion-header-icon"></span>Vertebras dorsales 
								</h3>
								<div class="ui-accordion-content" id="ui-accordion-1-panel-10" 
								aria-labelledby="ui-accordion-1-header-10" role="tabpane10" aria-expanded="false" aria-hidden="true">
								<div class="dzen_column_DD_span3">

									<div class="margin_bottom">
										<input type="text" name="vdorsalesCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
									</div>
								</div>
								<div class="dzen_column_DD_span8">

									<div class="margin_bottom">

										<input type="text" name="vdorsalesComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

									</div>
								</div>
							</div>

							<!-- FIN ENTRADA -->
							<!---- NUEVA ENTRADA -->

							<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-9" 
							aria-controls="ui-accordion-1-panel-9" aria-selected="false" tabindex="0">
							<span class="ui-accordion-header-icon"></span>Vértebras lumbares
						</h3>
						<div class="ui-accordion-content" id="ui-accordion-1-panel-9" 
						aria-labelledby="ui-accordion-1-header-9" role="tabpane9" aria-expanded="false" aria-hidden="true">
						<div class="dzen_column_DD_span3">

							<div class="margin_bottom">
								<input type="text" name="vdLumbaresCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
							</div>
						</div>
						<div class="dzen_column_DD_span8">

							<div class="margin_bottom">

								<input type="text" name="vdLumbaresComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

							</div>
						</div>
					</div>

					<!-- FIN ENTRADA -->
					<!---- NUEVA ENTRADA -->

					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-8" 
					aria-controls="ui-accordion-1-panel-8" aria-selected="false" tabindex="0">
					<span class="ui-accordion-header-icon"></span>Articulación del hombro
				</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-8" 
				aria-labelledby="ui-accordion-1-header-8" role="tabpane8" aria-expanded="false" aria-hidden="true">
				<div class="dzen_column_DD_span3">

					<div class="margin_bottom">
						<input type="text" name="aHombroCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
					</div>
				</div>
				<div class="dzen_column_DD_span8">

					<div class="margin_bottom">

						<input type="text" name="aHombroComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

					</div>
				</div>
			</div>

			<!-- FIN ENTRADA -->
			<!---- NUEVA ENTRADA -->

			<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-7" 
			aria-controls="ui-accordion-1-panel-7" aria-selected="false" tabindex="0">
			<span class="ui-accordion-header-icon"></span>Articulación del codo
		</h3>
		<div class="ui-accordion-content" id="ui-accordion-1-panel-7" 
		aria-labelledby="ui-accordion-1-header-7" role="tabpane7" aria-expanded="false" aria-hidden="true">
		<div class="dzen_column_DD_span3">

			<div class="margin_bottom">
				<input type="text" name="aCodoCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
			</div>
		</div>
		<div class="dzen_column_DD_span8">

			<div class="margin_bottom">

				<input type="text" name="aCodoComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

			</div>
		</div>
	</div>

	<!-- FIN ENTRADA -->
	<!---- NUEVA ENTRADA -->

	<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-6" aria-controls="ui-accordion-1-panel-6" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>Articulación de la muñeca</h3>
	<div class="ui-accordion-content" id="ui-accordion-1-panel-6" 
	aria-labelledby="ui-accordion-1-header-6" role="tabpane6" aria-expanded="false" aria-hidden="true">
	<div class="dzen_column_DD_span3">

		<div class="margin_bottom">
			<input type="text" name="aMunecaCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
		</div>
	</div>
	<div class="dzen_column_DD_span8">

		<div class="margin_bottom">

			<input type="text" name="aMunecaComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

		</div>
	</div>
</div>

<!-- FIN ENTRADA -->
<!---- NUEVA ENTRADA -->

<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-5" aria-controls="ui-accordion-1-panel-5" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>Articulación de los dedos</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-5" aria-labelledby="ui-accordion-1-header-5" role="tabpane5" aria-expanded="false" aria-hidden="true">
	<div class="dzen_column_DD_span3">

		<div class="margin_bottom">
			<input type="text" name="adedosCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
		</div>
	</div>
	<div class="dzen_column_DD_span8">

		<div class="margin_bottom">

			<input type="text" name="adedosComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

		</div>
	</div>
</div>

<!-- FIN ENTRADA -->
<!---- NUEVA ENTRADA -->

<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-4" 
aria-controls="ui-accordion-1-panel-4" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>	Articulación de la cadera
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-4" 
aria-labelledby="ui-accordion-1-header-4" role="tabpane4" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="aCaderaCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="aCaderaComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>

<!-- FIN ENTRADA -->

<!-- NUEVA ENTRADA -->

<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-3" 
aria-controls="ui-accordion-1-panel-3" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Articulación de la rodilla
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-3" 
aria-labelledby="ui-accordion-1-header-3" role="tabpane3" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="aRodillaCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="aRodillaComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>

<!-- FIN ENTRADA -->

<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-2" 
aria-controls="ui-accordion-1-panel-2" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Articulación del tobillo  
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-2" 
aria-labelledby="ui-accordion-1-header-2" role="tabpane2" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="aTobilloCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="aTobilloComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>

</div>
</div>
</div>


<strong>Historial de lesiones con implicancia deportiva (fracturas y fisuras)</strong>

<br><br>




<div class="dzen_container">
	<div class="dzen_column_DD_span11">


		<div class="dzen-accordion" data-expanded="2" role="tablist">
			<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-11" 
			aria-controls="ui-accordion-1-panel-11" aria-selected="false" tabindex="0">
			<span class="ui-accordion-header-icon"></span>Humero 
		</h3>
		<div class="ui-accordion-content" id="ui-accordion-1-panel-11" 
		aria-labelledby="ui-accordion-1-header-11" role="tabpane11" aria-expanded="false" aria-hidden="true">
		<div class="dzen_column_DD_span3">

			<div class="margin_bottom">
				<input type="text" name="humeroCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
			</div>
		</div>
		<div class="dzen_column_DD_span8">

			<div class="margin_bottom">

				<input type="text" name="humeroComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

			</div>
		</div>
	</div>


	<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-10" 
	aria-controls="ui-accordion-1-panel-10" aria-selected="false" tabindex="0">
	<span class="ui-accordion-header-icon"></span>Radio  
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-10" 
aria-labelledby="ui-accordion-1-header-10" role="tabpane10" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="radioCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="radioComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>




<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-9" 
aria-controls="ui-accordion-1-panel-9" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Cubito
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-9" 
aria-labelledby="ui-accordion-1-header-9" role="tabpane9" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="cubitoCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="cubitoComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>


<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-8" 
aria-controls="ui-accordion-1-panel-8" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Carpianos 
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-8" 
aria-labelledby="ui-accordion-1-header-8" role="tabpane8" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="carpianosCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="carpianosComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>



<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-7" 
aria-controls="ui-accordion-1-panel-7" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Falanges
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-7" 
aria-labelledby="ui-accordion-1-header-7" role="tabpane7" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="falangesCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="falangesComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>






<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-6" 
aria-controls="ui-accordion-1-panel-6" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Clavículas 
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-6" 
aria-labelledby="ui-accordion-1-header-6" role="tabpane6" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="claviculasCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="claviculasComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>


<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-5" 
aria-controls="ui-accordion-1-panel-5" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Costillas
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-5" 
aria-labelledby="ui-accordion-1-header-5" role="tabpane5" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="costillasCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="costillasComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>



<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-4" aria-controls="ui-accordion-1-panel-4" aria-selected="false" tabindex="0">
	<span class="ui-accordion-header-icon">

	</span>Cráneo
</h3>

<div class="ui-accordion-content" id="ui-accordion-1-panel-4" aria-labelledby="ui-accordion-1-header-4" role="tabpane4" aria-expanded="false" aria-hidden="true">

	<div class="dzen_column_DD_span3">

		<div class="margin_bottom">
			<input type="text" name="craneoCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
		</div>
	</div>
	<div class="dzen_column_DD_span8">

		<div class="margin_bottom">

			<input type="text" name="craneoComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

		</div>
	</div>
</div>



<h3 class="ui-accordion-header" role="tab" 
id="ui-accordion-1-header-3" aria-controls="ui-accordion-1-panel-3" 
aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon">

</span>Cadera  
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-3" 
aria-labelledby="ui-accordion-1-header-3" role="tabpane3" 
aria-expanded="false" aria-hidden="true">

<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="caderaCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="caderaComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>



<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-0" 
aria-controls="ui-accordion-1-panel-0" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon ui-icon-triangle-1-e">

</span>Fémur 
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-0" 
aria-labelledby="ui-accordion-1-header-0" role="tabpanel" 
aria-expanded="false" aria-hidden="true">

<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="femurCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="femurComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>
<h3 class="ui-accordion-header ui-accordion-header-active" role="tab" id="ui-accordion-1-header-1" aria-controls="ui-accordion-1-panel-1" aria-selected="true" tabindex="0">
	<span class="ui-accordion-header-icon ui-icon-triangle-1-s">

	</span>	Tibia   
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-1" aria-labelledby="ui-accordion-1-header-1" role="tabpanel" aria-expanded="false" aria-hidden="false">
	<div class="dzen_column_DD_span3">

		<div class="margin_bottom">
			<input type="text" name="tibiaCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
		</div>
	</div>
	<div class="dzen_column_DD_span8">

		<div class="margin_bottom">

			<input type="text" name="tibiaComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

		</div>
	</div>

</div>
<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-2" aria-controls="ui-accordion-1-panel-2" aria-selected="false" tabindex="-1">
	<span class="ui-accordion-header-icon ui-icon-triangle-1-e">

	</span>Peroné   
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-2" aria-labelledby="ui-accordion-1-header-2" role="tabpanel" aria-expanded="false" aria-hidden="true">
	<div class="dzen_column_DD_span3">

		<div class="margin_bottom">
			<input type="text" name="peroneCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
		</div>
	</div>
	<div class="dzen_column_DD_span8">

		<div class="margin_bottom">

			<input type="text" name="peroneComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

		</div>
	</div>

</div>


<!---- NUEVA ENTRADA -->

<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" 
aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0">
<span class="ui-accordion-header-icon"></span>Tarsianos 
</h3>
<div class="ui-accordion-content" id="ui-accordion-1-panel-12" 
aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
<div class="dzen_column_DD_span3">

	<div class="margin_bottom">
		<input type="text" name="tarsianosCuantotiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">
	</div>
</div>
<div class="dzen_column_DD_span8">

	<div class="margin_bottom">

		<input type="text" name="tarsianosComosetrato" maxlength="350" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" required="">

	</div>
</div>
</div>

<!-- FIN ENTRADA -->


</div>
</div>

</div>


</div>
<!-- tab 4 -->

<div id="tab-4">
	<div>
		Información general: Este cuestionario tiene la finalidad de obtener la mayor cantidad de información personal posible, esto para poder realizar el mejor plan de Alimentación y Entrenamiento totalmente personalizado acorde a sus necesidades, objetivos y nivel actual, y de esta manera poder fijar metas realistas y asegurar la consecución de las mismas. Le pedimos de la manera más atenta que sea lo más específico posible al contestar. 
	</div></br>
	<strong>Historial de enfermedades personales</strong>
	<br><br><textarea class="dzencf-text" name="padeces"  placeholder="¿Padece alguna enfermedad crónica? (Diabetes, Presión elevada, enfermedades del corazón, hígado riñones, etc.)"></textarea>
	<textarea class="dzencf-text" name="padecesprobelmas"  placeholder="¿Padece algún problema gastrointestinal? (estreñimiento, colitis, gastritis, ulceras, etc.)"></textarea>
	<div>
		
		Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué experiencia tiene realizando deportes, ya sea nivel competitivo o recreacional. 

	</div></br>
	<strong>Historial de actividad física y deportiva</strong>

	<div class="dzen_container">
		<div class="dzen_column_DD_span11">
			<div class="dzen-accordion" data-expanded="3" role="tablist">

				<!-- nueva -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				¿Practica actividad física o deporte no competitivo?</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span12"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="pFnctipo" maxlength="350" class="dzencf-text" placeholder="¿Qué tipo de actividad?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="pFnchace" maxlength="350" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo?" required="">

						</div>
					</div>


					

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="pFncCuantos" maxlength="350" class="dzencf-text" placeholder="¿Cuántos días a la semana?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="pFncCuantas" maxlength="350" class="dzencf-text" placeholder="¿Cuántas horas al día?" required="">

						</div>
					</div>

					
				</div>

				<!-- fin nueva -->

				<!-- nueva -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-13" aria-controls="ui-accordion-1-panel-13" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				¿Practica actividad física o deporte competitivo?</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-13" aria-labelledby="ui-accordion-1-header-13" role="tabpane13" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="pFctipo" maxlength="350" class="dzencf-text" placeholder="¿Qué tipo de actividad?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="pFchace" maxlength="350" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo?" required="">

						</div>
					</div>


					

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="pFcCuantos" maxlength="350" class="dzencf-text" placeholder="¿Cuántos días a la semana?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="pFcCuantas" maxlength="350" class="dzencf-text" placeholder="¿Cuántas horas al día?" required="">

						</div>
					</div>

					
				</div>

				<!-- fin nueva -->

			</div>
		</div>
	</div>

	<div>Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué experiencia tiene en el Fitness y Acondicionamiento físico, ya sea a nivel competitivo o de salud. 
	</div>
	<strong>Historial de actividades Fitness</strong>
	<br></br>
	<input type="checkbox" name="hasEntrenado" class="dzencf-text" value="SI">¿Ha entrenado antes en un centro Fitness (Gym)?<br>
	<input type="checkbox" name="hasEntrenadoPersonal" class="dzencf-text" value="SI">¿Contrato a un entrenador personal?<br>


	<select name="entrabaInsCuenta" class="dzencf-text" required="">
		<option value="">¿Entrenaba por su propia cuenta con el instructor de piso?</option>
		<option value="Por mi Cuenta">Por mi Cuenta</option>
		<option value="Intructor de piso">Intructor de piso</option>

	</select>
	<input type="text" name="desdecuendo" maxlength="350" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo ha entrenado en un Gym? " >
	<input type="text" name="cuentosDiasEn" maxlength="350" class="dzencf-text" placeholder="¿Cuántos días a la semana entrena actualmente?" >
	<input type="text" name="cuentosHorasEn" maxlength="350" class="dzencf-text" placeholder="¿Cuántas horas al día entrena actualmente? " >
	<select name="utilizasMaPe" class="dzencf-text" required="">
		<option value="">¿Utiliza las máquinas y pesos libres?</option>
		<option value="Máquina">Máquina</option>
		<option value="Peso Libre">Peso Libre</option>

	</select>

	<input type="text" name="utilizasClases" maxlength="350" class="dzencf-text" placeholder="¿Usa las clases grupales? (zumba, spinning, ritmos latinos, etc.)" >
</div>


<!-- fin tab 4 -->
<!-- inicio tab 5 -->
<div id="tab-5">
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para poder tener claro cuánto tiempo se dispone para diseñar el plan de Entrenamiento y sacar el máximo provecho a su estilo de vida, así como acoplar el plan de Alimentación a los horarios del entrenamiento y así optimizar los resultados de ambos. 
	</div>
	<strong>Disponibilidad para la actividad física y deportiva</strong>
	<br></br>

	<input type="text" name="cuantasHorasd" maxlength="350" class="dzencf-text" placeholder="¿Cuántas horas al día dispone para hacer ejercicio? " >
	<select name="utilizasMaPe" class="dzencf-text" required="">
		<option value="">¿Cuántos días a la semana dispone para hacer ejercicio?</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
	</select>
	<input type="text" name="conqueHorario" maxlength="350" class="dzencf-text" placeholder="¿Con que horario cuentas al día para hacer ejercicio?" >
	<input type="text" name="quediasDispones" maxlength="350" class="dzencf-text" placeholder="¿Con que días a la semana cuentas para hacer ejercicio? " >
	<input type="text" name="cuantotiempoAlGym" maxlength="350" class="dzencf-text" placeholder="¿Cuánto tiempo duras en trasladarte el Gym? " >

	<input type="text" name="conqueEquipocardioc" maxlength="350" class="dzencf-text" placeholder="¿Con que equipo para ejercicio cardiovascular cuenta?" >
	<input type="text" name="conqueEquipoPesocuen" maxlength="350" class="dzencf-text" placeholder="¿Con que equipo para ejercicio de pesas cuenta?" >
	<input type="text" name="quetipoClaseGruputilizar" maxlength="350" class="dzencf-text" placeholder="¿Qué tipo de clases grupales puede realizar?" >
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para conocer exactamente qué objetivos, metas y expectativas tiene con el programa de Entrenamiento y así no perder tiempo, dinero y esfuerzo en algo que no le interese. 
	</div>
	<strong>Objetivos del programa de entrenamiento</strong><br><br>
	Mejora del rendimiento deportivo especifico
	<br></br>

	<input type="checkbox" name="objmejorDepoEspecificaresistencia" class="dzencf-text" value="SI">¿Resistencia cardiorrespiratoria?<br>

	<input type="checkbox" name="objmejorDepoEspecificaFuerza" class="dzencf-text" value="SI">¿Fuerza y/o Potencia?<br>
	<input type="checkbox" name="objmejorDepoEspecificaFlexibilidad" class="dzencf-text" value="SI">¿Flexibilidad?<br>
	<br> Razones estéticas y de belleza
	<br></br>
	<input type="checkbox" name="objmejorDepoEspecificaBPErdida" class="dzencf-text" value="SI">
	¿Perdida de grasa corporal?<br>
	<input type="checkbox" name="objmejorDepoEspecificaBGanacia" class="dzencf-text" value="SI">
	¿Ganancia de masa muscular?<br>

	<br>Mejora del estado de salud y calidad de vida
	<br></br>

	<input type="text" name="opemsvcro" maxlength="350" class="dzencf-text" 
	placeholder="¿Prevención de enfermedades crónicas? " >
	<input type="text" name="opemsvespe" maxlength="350" class="dzencf-text" 
	placeholder="¿Tratamiento de enfermedad especifica?" >


	<br>Aspecto sociocultural del ejercicio
	<br></br>

	<input type="text" name="opeSocialSensacion" maxlength="350" class="dzencf-text" 
	placeholder="¿Qué sensaciones y experiencias tiene con el ejercicio? " >
	<input type="text" name="opeSocialExpectativas" maxlength="350" class="dzencf-text" 
	placeholder="¿Qué expectativas y compromiso tiene con el plan de entrenamiento?" >
</div>

<!-- fin tab 5 -->
<!-- inicio tab 6 -->
<div id="tab-6">
	<div>
		Instrucciones y objetivos específicos: Este apartado nos permitirá saber 
		que conocimientos y experiencia tiene con el uso de Farmacología deportiva, 
		el nivel de calidad del protocolo que uso y si es que está interesado 
		en usar nuevamente o por primera ocasión con nosotros. 
	</div>
	<strong>Uso y experiencia con Farmacología deportiva</strong>
	<br></br>
	<input type="checkbox" id="vefarma" name="usoFarma" class="dzencf-text" value="SI">
	¿Ha usado ayudas farmacológicas?<br>

	<div id="FormularioFarma" style="display: none">
		<input type="text" name="vefarHacecuanto" maxlength="350" class="dzencf-text" 
		placeholder="¿Hace cuánto tiempo las uso?" >
		<input type="text" name="vefarDuranteCuanto" maxlength="350" class="dzencf-text" 
		placeholder="¿Durante cuánto tiempo las uso?" >
		<input type="text" name="vefarQuienlerecomendo" maxlength="350" class="dzencf-text" 
		placeholder="¿Quién le recomendó usarlas?" >
		<input type="text" name="vefarQuelomotivo" maxlength="350" class="dzencf-text" 
		placeholder="¿Qué lo motivo a usarlas?" >
		<input type="text" name="vefarQuienloasesoro" maxlength="350" class="dzencf-text" 
		placeholder="¿Quién le asesoro en su uso?" >
		<input type="text" name="vefarQuefuequelauso" maxlength="350" class="dzencf-text" 
		placeholder="¿Cómo fue que las uso?" >
		<input type="text" name="vefarQuetipodefarmauso" maxlength="350" class="dzencf-text" 
		placeholder="¿Qué tipo de fármacos uso?" >

		<input type="text" name="vefarQueObjetivologrouso" maxlength="350" class="dzencf-text" 
		placeholder="¿Qué objetivos logro con su uso?" >

		<input type="text" name="vefarUsaActualmentefarma" maxlength="350" class="dzencf-text" 
		placeholder="¿Usa actualmente farmacología?" >

		<input type="text" name="vefarTienePensadousarfarma" maxlength="350" class="dzencf-text" 
		placeholder="¿Tiene pensado usar farmacología? " >

		<input type="text" name="vefarObjetivostieneeluso" maxlength="350" class="dzencf-text" 
		placeholder="¿Qué objetivos tiene con su uso? " >
	</div>

	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para saber que conocimientos y experiencia tiene con el uso de Suplementos nutricionales, así como tener una base para la futura planificación de los mismo en su nuevo plan de Alimentación, todo esto acurde a sus necesidades y posibilidades específicas y personales. 
	</div>
	<strong>Experiencia y uso de Suplementos nutricionales</strong>
	<br></br>

	<div class="dzen_container">
		<div class="dzen_column_DD_span11">
			<div class="dzen-accordion" data-expanded="3" role="tablist">

				<!-- incio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Suplemento 1</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple1Nombre" maxlength="350" class="dzencf-text" placeholder="Nombre" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple1Caracteristicas" maxlength="350" class="dzencf-text" placeholder="Características" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple1Motivo" maxlength="350" class="dzencf-text" placeholder="Motivo de uso" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple1Tiempo" maxlength="350" class="dzencf-text" placeholder="Tiempo de uso" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple1Cantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad usada" required="">
						</div>
					</div>
				</div>
				<!-- fin -->


				<!-- incio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Suplemento 2</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple2Nombre" maxlength="350" class="dzencf-text" placeholder="Nombre" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple2Caracteristicas" maxlength="350" class="dzencf-text" placeholder="Características" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple2Motivo" maxlength="350" class="dzencf-text" placeholder="Motivo de uso" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple2Tiempo" maxlength="350" class="dzencf-text" placeholder="Tiempo de uso" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple2Cantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad usada" required="">
						</div>
					</div>
				</div>
				<!-- fin -->

				<!-- incio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Suplemento 3</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple3Nombre" maxlength="350" class="dzencf-text" placeholder="Nombre" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple3Caracteristicas" maxlength="350" class="dzencf-text" placeholder="Características" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple3Motivo" maxlength="350" class="dzencf-text" placeholder="Motivo de uso" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple3Tiempo" maxlength="350" class="dzencf-text" placeholder="Tiempo de uso" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple3Cantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad usada" required="">
						</div>
					</div>
				</div>
				<!-- fin -->

				<!-- incio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Suplemento 4</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple4Nombre" maxlength="350" class="dzencf-text" placeholder="Nombre" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple4Caracteristicas" maxlength="350" class="dzencf-text" placeholder="Características" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple4Motivo" maxlength="350" class="dzencf-text" placeholder="Motivo de uso" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple4Tiempo" maxlength="350" class="dzencf-text" placeholder="Tiempo de uso" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple4Cantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad usada" required="">
						</div>
					</div>
				</div>
				<!-- fin -->

				<!-- incio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Suplemento 5</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span13"></div>
					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple5Nombre" maxlength="350" class="dzencf-text" placeholder="Nombre" >
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple5Caracteristicas" maxlength="350" class="dzencf-text" placeholder="Características" >

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple5Motivo" maxlength="350" class="dzencf-text" placeholder="Motivo de uso" >
						</div>
					</div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

							<input type="text" name="suple5Tiempo" maxlength="350" class="dzencf-text" placeholder="Tiempo de uso" >

						</div>
					</div>

					<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
							<input type="text" name="suple5Cantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad usada" >
						</div>
					</div>
				</div>
				<!-- fin -->


				


			</div>
		</div>
	</div>



	<!-- inicio componente -->
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para ubicar el nivel de consumo de sustancias no nutricionales que pueden afectar la consecución de sus objetivos y poder planificar la modificación de dichos hábitos dañinos, cambiándolos por hábitos responsables en su consumo.
	</div>
	<strong>Consumo de sustancias bioactivas</strong>
	<br></br>
	<div class="dzen_container">
		<div class="dzen_column_DD_span11">
			<div class="dzen-accordion" data-expanded="3" role="tablist">
				<!-- inicio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Alcohol</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">
							<input type="text" name="consumoSusAlcolTipo" maxlength="350" class="dzencf-text" placeholder="Tipo" >
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="consumoSusAlcolcantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad">

						</div>
					</div>

					<div class="dzen_column_DD_span3">

						<div class="margin_bottom">
							<input type="text" name="consumoSusAlcolFrecuencia" maxlength="350" class="dzencf-text" placeholder="Frecuencia" >
						</div>
					</div>
					
				</div>
				<!-- fin -->

				<!-- inicio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Tabaco</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">
							<input type="text" name="consumoSusTabacoTipo" maxlength="350" class="dzencf-text" placeholder="Tipo" >
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="consumoSusTabacocantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad" >

						</div>
					</div>

					<div class="dzen_column_DD_span3">

						<div class="margin_bottom">
							<input type="text" name="consumoSusTabacoFrecuencia" maxlength="350" class="dzencf-text" placeholder="Frecuencia" >
						</div>
					</div>
					
				</div>
				<!-- fin -->

				<!-- inicio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Cafeína</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">
							<input type="text" name="consumoSusCafeinaTipo" maxlength="350" class="dzencf-text" placeholder="Tipo" >
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="consumoSusCafeinacocantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad" >

						</div>
					</div>

					<div class="dzen_column_DD_span3">

						<div class="margin_bottom">
							<input type="text" name="consumoSusCafeinaFrecuencia" maxlength="350" class="dzencf-text" placeholder="Frecuencia" >
						</div>
					</div>
					
				</div>
				<!-- fin -->

				<!-- inicio -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				Otras drogas</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
					
					
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">
							<input type="text" name="consumoSusOtrasTipo" maxlength="350" class="dzencf-text" placeholder="Tipo" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="consumoSusOtrascocantidad" maxlength="350" class="dzencf-text" placeholder="Cantidad" >

						</div>
					</div>

					<div class="dzen_column_DD_span3">

						<div class="margin_bottom">
							<input type="text" name="consumoSusOtrasFrecuencia" maxlength="350" class="dzencf-text" placeholder="Frecuencia" >
						</div>
					</div>
					
				</div>
				<!-- fin -->

			</div>
		</div>
	</div>

	<!-- fin componenete -->
	<!-- incio componenete -->
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para conocer con mayor exactitud sus variables fisiológicas y así determinar su nivel de aptitud física y en última instancia, determinar el adecuado y correcto nivel de intensidad y exigencia al momento de diseñar el plan de Entrenamiento. 
	</div>
	<strong>Datos fisiológicos</strong>
	<br></br>
	<input type="text" name="dfFcar" maxlength="350" class="dzencf-text" placeholder="Frecuencia cardiaca en reposo (pulsaciones por minuto)" >
	
	<input type="text" name="dfFcarres" maxlength="350" class="dzencf-text" placeholder="Frecuencia respiratoria en reposo (respiración por minuto)" >
	
	<!-- fin componenete -->
	<!-- incio componenete -->
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para ubicar sus preferencias alimenticias personales y poder diseñar un plan de Alimentación individualizado, con el cual se sienta lo más cómodo posible y este le ayude al apego del mismo, logrando así sus metas y objetivos. 
	</div>
	<strong>Características dietéticas personales</strong>
	<br></br>

	

	<input type="text" name="cdipersoAli" maxlength="350" class="dzencf-text" placeholder="¿Alimentos evitados? " >

	
	<input type="text" name="cdipersoAliporque" maxlength="350" class="dzencf-text" placeholder="¿Por qué? " >



	<select name="cdipersoANivel" class="dzencf-text" required="">
		<option value="">Nivel de apetito </option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
	</select>

	<input type="text" name="cdipersoANivelCambios" maxlength="350" class="dzencf-text" placeholder="¿Cambios recientes en el apetito? " required="">

	<input type="text" name="cdipersoAlergias" maxlength="350" class="dzencf-text" placeholder="¿Tiene alguna alergia alimentaria? " required="">
	<input type="text" name="cdipersoIntoleranciaalimen" maxlength="350" class="dzencf-text" placeholder="¿Tiene alguna intolerancia alimentaria?" required="">

	<input type="text" name="cdipersoAlinoconsumir" maxlength="350" class="dzencf-text" placeholder="¿Qué alimentos no puede conseguir fácilmente?" required="">

	<!-- fin componenete -->
</div>

<!-- fin tab 6 -->

<!-- inicio tab 7 -->
<div id="tab-7">
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué experiencia tiene al seguir planes de Alimentación, ya sea con profesionales en el área o no, entender que técnicas y estrategias ya conoce y cuáles de ellas funcionan y cuáles no, para así aprovechar el tiempo de la mejor manera posible. 
	</div></br>
	<strong>Experiencia dietética previa</strong>
	<!-- inicio desplegable -->
	<div class="dzen_container">
		<div class="dzen_column_DD_span11">
			<div class="dzen-accordion" data-expanded="1" role="tablist">
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-23" aria-controls="ui-accordion-1-panel-23" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				¿Dietas auto-prescritas?</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-23" aria-labelledby="ui-accordion-1-header-23" role="tabpane23" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="edpduraTiempo" maxlength="350" class="dzencf-text" placeholder="¿Durante cuánto tiempo?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="edpcuantoTiempo" maxlength="350" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" required="">

						</div>
					</div>


					

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="edpcResulobtuvo" maxlength="350" class="dzencf-text" placeholder="¿Qué resultados obtuvo?" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="edpcxqAbandono" maxlength="350" class="dzencf-text" placeholder="¿Por qué abandono?" required="">

						</div>
					</div>

					
				</div>
				<!-- fin entrada -->
			</div>
		</div>
	</div>
	<!-- fin desplegable -->
	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para obtener los datos corporales básicos necesarios para el cálculo de sus requerimientos diarios de energía (kcal). Para obtener esta información se necesita una únicamente una báscula y un estadimetro (instrumento para medir la talla total de la persona). 
	</div></br>
	<strong>Datos antropométricos básicos</strong><br>
	<input type="text" name="dabasiPeso" maxlength="350" class="dzencf-text" placeholder="Peso total (kg.g)" r>
	<input type="text" name="dabasiAltura" maxlength="350" class="dzencf-text" placeholder="Estatura total (cm)" >

	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para hacer comparaciones de su progreso a través del tiempo, pudiendo así modificar los planes de Alimentación y Entrenamiento. Para obtener esta información se necesita una báscula de Bioimpedancia o con un profesional capacitado para la realización de las mediciones antropométricas (ISAK 1)
	</div></br>
	<strong>Datos antropométricos especializados</strong><br>
	<input type="text" name="datosAntroespgrasa" maxlength="350" class="dzencf-text" placeholder="Grasa corporal (kg)" >
	<input type="text" name="datosAntroespgrasaporce" maxlength="350" class="dzencf-text" placeholder="Grasa corporal (%)" >
	<input type="text" name="datosAntroespmasakg" maxlength="350" class="dzencf-text" placeholder="Masa magra (kg)" >
	<input type="text" name="datosAntroespmasaporcen" maxlength="350" class="dzencf-text" placeholder="Masa magra (%)" >
	<input type="text" name="datosAntroespmasapmuskg" maxlength="350" class="dzencf-text" placeholder="Masa muscular (kg)" >
	<input type="text" name="datosAntroespmasapmusporcentaje" maxlength="350" class="dzencf-text" placeholder="Masa muscular (%)" >


	<div>
		Instrucciones y objetivos específicos: Este apartado nos servirá para conocer actualmente cuál es su manera general de comer y así poder definir los aspectos generales de su plan de Alimentación. 
	</div></br>
	<strong>Patrón de alimentación</strong><br>
	Tiempo de comida<br>
	<!-- inicio desplegable -->
	<div class="dzen_container">
		<div class="dzen_column_DD_span11">
			<div class="dzen-accordion" data-expanded="1" role="tablist">
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-23" aria-controls="ui-accordion-1-panel-23" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				1° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-23" aria-labelledby="ui-accordion-1-header-23" role="tabpane23" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic1h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic1l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic1d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-24" aria-controls="ui-accordion-1-panel-24" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				2° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-24" aria-labelledby="ui-accordion-1-header-24" role="tabpane24" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic2h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic2l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic2d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-25" aria-controls="ui-accordion-1-panel-25" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				3° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-25" aria-labelledby="ui-accordion-1-header-25" role="tabpane25" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic3h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic3l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic3d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-26" aria-controls="ui-accordion-1-panel-26" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				4° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-26" aria-labelledby="ui-accordion-1-header-26" role="tabpane26" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic4h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic4l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic4d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-27" aria-controls="ui-accordion-1-panel-27" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				5° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-27" aria-labelledby="ui-accordion-1-header-27" role="tabpane27" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic5h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic5l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic5d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
				<!-- nueva entrada -->
				<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-28" aria-controls="ui-accordion-1-panel-28" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
				6° Comida</h3>
				<div class="ui-accordion-content" id="ui-accordion-1-panel-28" aria-labelledby="ui-accordion-1-header-28" role="tabpane28" aria-expanded="false" aria-hidden="true">
					
					<div class="dzen_column_DD_span11"></div>
					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic6h" maxlength="350" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
						</div>
					</div>
					<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

							<input type="text" name="patronalic6l" maxlength="350" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

						</div>
					</div>

					<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
							<input type="text" name="patronalic6d" maxlength="350" class="dzencf-text" placeholder="Duración (min)" required="">
						</div>
					</div>
					
				</div>
				<!-- fin entrada -->
			</div>
		</div>
	</div>
	<!-- fin desplegable -->

</div>

<!-- fin tab 7 -->
<!-- inicio tab 8 -->
<div id="tab-8">
	<form action="#" method="post" class="contact-form">
		<div>
			Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué tan activo es su estilo de vida, esto nos servirá para poder calcular de la manera más exacta posible la energía (kcal) que necesita cada día para lograr alcanzar sus metas y objetivos. Esta primera tabla hace alusión a los días que entrena y/o hace ejercicio. (Deben sumar 24 horas)
		</div><br>

		<strong>Patrón de actividades diarias (Días de entrenamiento)</strong><br>
		Tipo de actividad<hr>
		<h4>Dormido</h4>
		Actividad : Dormido profundamente
		<input type="text" name="padDormido" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Recostado</h4>
		Actividad : Despierto, descansando acostado sin hacer nada
		<input type="text" name="padRecostado" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy sedentario</h4>
		Actividad : Sentado, mirando TV o escuchando música, viajar
		<input type="text" name="padMuysedentario" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Sedentario </h4>
		Actividad : Trabajo de oficina, conducir, hablar, leer
		<input type="text" name="padsedentario" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy ligeramente activo </h4>
		Actividad : Caminar ligero, estar de pie, moverse poco
		<input type="text" name="padmuyligeramenteactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Ligeramente activo</h4>
		Actividad : Limpieza doméstica, trabajo de taller, cuidar niños
		<input type="text" name="padligeramenteactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Moderadamente activo</h4>
		Actividad : Trotar, bicicleta suave, limpieza pesada, mesero
		<input type="text" name="padmoderadamenteactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Activo</h4>
		Actividad : Correr, bailar, carpintero, jardinero, cargar cosas
		<input type="text" name="padactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy activo</h4>
		Actividad : Albañil, agricultor, ganadero, cargar cosa pesada
		<input type="text" name="padmuyactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Extremadamente activo</h4>
		Actividad : Deportes y entrenamiento de moderada-alta intensidad
		<input type="text" name="padExtemadamenteactivo" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >

		<div>
			Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué tan activo es su estilo de vida, esto nos servirá para poder calcular de la manera más exacta posible la energía (kcal) que necesita cada día para lograr alcanzar sus metas y objetivos. Esta segunda tabla hace alusión a los días que descansa o no puede hacer ejercicio por cualquier razón. (Deben sumar 24 horas en total).
		</div><br>

		<strong>Patrón de actividades diarias (Días de descanso)</strong><br>
		Tipo de actividad<hr>
		<h4>Dormido</h4>
		Actividad : Dormido profundamente
		<input type="text" name="padDormidodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Recostado</h4>
		Actividad : Despierto, descansando acostado sin hacer nada
		<input type="text" name="padRecostadodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy sedentario</h4>
		Actividad : Sentado, mirando TV o escuchando música, viajar
		<input type="text" name="padMuysedentariodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Sedentario </h4>
		Actividad : Trabajo de oficina, conducir, hablar, leer
		<input type="text" name="padsedentariodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy ligeramente activo </h4>
		Actividad : Caminar ligero, estar de pie, moverse poco
		<input type="text" name="padmuyligeramenteactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Ligeramente activo</h4>
		Actividad : Limpieza doméstica, trabajo de taller, cuidar niños
		<input type="text" name="padligeramenteactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Moderadamente activo</h4>
		Actividad : Trotar, bicicleta suave, limpieza pesada, mesero
		<input type="text" name="padmoderadamenteactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Activo</h4>
		Actividad : Correr, bailar, carpintero, jardinero, cargar cosas
		<input type="text" name="padactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Muy activo</h4>
		Actividad : Albañil, agricultor, ganadero, cargar cosa pesada
		<input type="text" name="padmuyactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
		<h4>Extremadamente activo</h4>
		Actividad : Deportes y entrenamiento de moderada-alta intensidad
		<input type="text" name="padExtemadamenteactivodes" maxlength="350" class="dzencf-text" placeholder="Horas diarias en esas actividades" >


		<div>
			Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué tan activo es su estilo de vida, que horarios dispone para comer, para preparar sus comidas, para entrenar y a qué hora duerme y se levanta, todo esto con el fin de personalizar el plan de Alimentación y Entrenamiento a su estilo de vida. 
		</div><br>

		<strong>Patrón de Estilo de vida</strong><br>
		Tipo de actividad<hr>
		<div class="dzen_container">
			<div class="dzen_column_DD_span11">

				<div class="dzen_column_DD_span11"></div>
				<div class="dzen_column_DD_span6">

					<div class="margin_bottom">
						<input type="text" name="pEVidaTipo" maxlength="350" class="dzencf-text" placeholder="Tipo de actividad diaria, Ejemplo :Despertarse por la mañana" >

					</div>
				</div>
				<div class="dzen_column_DD_span4">

					<div class="margin_bottom">

						<input type="text" name="pEVidaTipo" maxlength="350" class="dzencf-text" placeholder="Horario" >

					</div>
				</div>

				<div class="dzen_column_DD_span1">

					<div class="margin_bottom">
						<a href="#" target="_self" class="dzen-button dzen-button_blue dzen-button_rounded dzen-button_small">+</a>
					</div>
				</div>

			</div>
		</div>
		<!-- fin del contenido -->
		<!-- inicia contenido -->
		<div>
			Instrucciones y objetivos específicos: Este apartado nos servirá para conocer actualmente cuál es su manera de comer día a día y así poder definir los aspectos específicos de su plan de Alimentación. 
		</div></br>
		<strong>Recordatorio de alimentos de 41 horas</strong><br>
		Tiempo de comida<br>
		<!-- inicio desplegable -->
		<div class="dzen_container">
			<div class="dzen_column_DD_span11">
				<div class="dzen-accordion" data-expanded="1" role="tablist">
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-40" aria-controls="ui-accordion-1-panel-40" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					1° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-40" aria-labelledby="ui-accordion-1-header-40" role="tabpane40" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras1h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras1d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras1q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras1c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>


					</div>
					<!-- fin entrada -->
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-41" aria-controls="ui-accordion-1-panel-41" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					2° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-41" aria-labelledby="ui-accordion-1-header-41" role="tabpane41" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras2h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras2d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras2q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras2c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>

					</div>
					<!-- fin entrada -->
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-42" aria-controls="ui-accordion-1-panel-42" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					3° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-42" aria-labelledby="ui-accordion-1-header-42" role="tabpane42" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras3h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras3d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras3q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras3c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>

					</div>
					<!-- fin entrada -->
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-43" aria-controls="ui-accordion-1-panel-43" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					4° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-43" aria-labelledby="ui-accordion-1-header-43" role="tabpane43" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras4h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras4d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras4q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras4c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>

					</div>
					<!-- fin entrada -->
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-44" aria-controls="ui-accordion-1-panel-44" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					5° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-44" aria-labelledby="ui-accordion-1-header-44" role="tabpane44" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras5h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras5d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras5q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras5c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>

					</div>
					<!-- fin entrada -->
					<!-- nueva entrada -->
					<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-45" aria-controls="ui-accordion-1-panel-45" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
					6° Comida</h3>
					<div class="ui-accordion-content" id="ui-accordion-1-panel-45" aria-labelledby="ui-accordion-1-header-45" role="tabpane45" aria-expanded="false" aria-hidden="true">
						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="recordatorioAlimentos24hras6h" maxlength="350" class="dzencf-text" placeholder="¿A qué hora?" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">

								<input type="text" name="ecordatorioAlimentos24hras6d" maxlength="350" class="dzencf-text" placeholder="¿En dónde?" >

							</div>
						</div>

						<div class="dzen_column_DD_span6">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras6q" maxlength="350" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
							</div>
						</div>
						<div class="dzen_column_DD_span5">

							<div class="margin_bottom">
								<input type="text" name="ecordatorioAlimentos24hras6c" maxlength="350" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
							</div>
						</div>

					</div>
					<!-- fin entrada -->
				</div>
			</div>
		</div>
		<!-- fin desplegable -->
		<!-- fin del contenido -->

	</form>
</div>
<!-- fin tab 8 -->

<!-- inicio tab 9 -->
<div id="tab-9">
	<form action="#" method="post" class="contact-form">
		<div>
			Instrucciones y objetivos específicos: Este apartado nos servirá para reconocer el estado actual de su condición, son fotografías de expediente, sin que se mire su rostro, de cuerpo completo, con la menor cantidad de ropa posible, para apreciar los cambios a través del tiempo inducidos por los planes de Alimentación y Entrenamiento. 
		</div><br>
	</form>
</div>
<!-- fin tab 9 -->

</div>

</div>




</div>

Nota aclaratoria: La información obtenida en este cuestionario  para uso profesional del equipo “SNT Center” y así poder brindarle el mejor servicio que sea posible. Dicha información será tratada con la mayor confidencialidad y por ningún motivo se hará pública su divulgación. Gracias por la confianza en nuestro trabajo. 


</div>
</div>
</section>








<div id="footer_copyright">
	<div class="container">
		<div class="row">
			<div class="span7 footer_copyright">
				Copyright © 2015. All Rights reserved.  <a href="http://apilink.com.mx/" target="_blank">Apilink</a>
			</div>
			<div class="span5 footer_social">
				<a href="https://www.linkedin.com/in/luis-alberto-g%C3%B3mez-mart%C3%ADn-758125b0/" target="_blank"><i class="ABdev_icon-linkedin"></i></a>
				<a href="https://www.facebook.com/SNTCenter.SportNutritionandTrainningCenter/" target="_blank"><i class="ABdev_icon-facebook"></i></a>
				<!-- <a href="#" target="_blank"><i class="ABdev_icon-skype"></i></a> -->
				<a href="https://www.youtube.com/channel/UC4JiqN4IHp_SKLOVwZb4Isw?view_as=subscriber" target="_blank"><i class="ABdev_icon-youtube"></i></a>

				<a href="https://twitter.com/SNT_Center" target="_blank"><i class="ABdev_icon-twitter"></i></a>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

		$( '#vefarma' ).on( 'click', function() {
			if( $(this).is(':checked') ){

				$('#FormularioFarma').css("display", "block");

			} else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $('#FormularioFarma').css("display", "none");
    }
});





	});
</script>


<?php include 'plantilla/js.php'; ?>

</body>
</html>