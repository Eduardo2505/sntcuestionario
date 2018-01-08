<!DOCTYPE html>
<html lang="en-ES">
<?php include 'plantilla/head.php'; ?>
<style>
.verdisabled {
	pointer-events: none;
	cursor: default;
	color:red;
}

</style>
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
					<div class="dzen-tabs" data-selected="<?php echo $seleccionPestalla ?>" data-break_point="449" data-effect="slide">
						<ul>
							<li>
								<a href="#tab-1"  >General y de Contacto</a>
							</li>
							<li>
								<a href="#tab-2" id="tab2" >Estilo de vida básico</a>
							</li>
							<li>
								<a href="#tab-3" id="tab3">Historial de lesiones y enfermedades</a>
							</li>
							<li>
								<a href="#tab-4" id="tab4">Experiencia en la práctica de ejercicio</a>
							</li>
							<li>
								<a href="#tab-5" id="tab5">Facilidad y Objetivos para la práctica de ejercicio</a>
							</li>
							<li>
								<a href="#tab-6" id="tab6">Experiencia en el uso de Fármacos y Suplementos</a>
							</li>
							<li>
								<a href="#tab-7" id="tab7">Paso 7</a>
							</li>
							<li>
								<a href="#tab-8" id="tab8">Paso 8</a>
							</li>
							<li>
								<a href="#tab-9" id="tab9">Paso 9</a>
							</li>
							<li>
								<a href="#tab-9" id="tab10">Paso 10</a>
							</li>

						</ul>

						
						<div class="dzen-tabs-wrapper">
							<div id="tab-1">
								<form action="<?php echo site_url('') ?>cuestionario/guardarcliente" method="post" class="contact-form">
									<input type="hidden" name="pedidoInicial" value="<?php echo $pedidoInicial?>">
									<div>
										Información general: Este cuestionario tiene la finalidad de obtener la mayor cantidad de información personal posible, esto para poder realizar el mejor plan de Alimentación y Entrenamiento totalmente personalizado acorde a sus necesidades, objetivos y nivel actual, y de esta manera poder fijar metas realistas y asegurar la consecución de las mismas. Le pedimos de la manera más atenta que sea lo más específico posible al contestar. 
									</div>


									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text" value="<?php echo $nombre ?>" name="nombreCompleto" maxlength="300" class="dzencf-text" placeholder="Nombre completo" required="">

										<select name="sexo" class="dzencf-text" required="">
											<option value="">Seleccione Género</option>
											<?php  if($sexo==='Mujer') {?>
											<option value="Mujer" selected="selected">Mujer</option>
											<?php }else{?>
											<option value="Mujer" >Mujer</option>
											<?php } if($sexo==='Hombre') { ?>
											<option value="Hombre" selected="selected">Hombre</option>
											<?php }else{?>
											<option value="Hombre" >Hombre</option>
											<?php }?>
											
										</select>
										<input type="date" name="fecha"  
										required=""  class="dzencf-text" 
										placeholder="Fecha exacta de nacimiento (día-mes-año)">
										<input type="text" value="<?php echo $telefono ?>" name="telefono" maxlength="300" class="dzencf-text" placeholder="Télefono" required="">
										<input type="text" value="<?php echo $WhatsApp ?>" name="WhatsApp" maxlength="300" class="dzencf-text" placeholder="WhatsApp" >
										<input type="text" value="<?php echo $email ?>" name="email" maxlength="300" class="dzencf-text" placeholder="Correo Electrónico" required="">
										<input type="password" value="<?php echo $password ?>" name="password" maxlength="300" class="dzencf-text" placeholder="Contraseña" required="">
										<input type="text" value="<?php echo $perfil ?>" name="perfil" maxlength="300" class="dzencf-text" placeholder="Perfil en Facebook " >
										
										
										<!-- <div class="dzencf-response-output dzencf-display-none"></div> -->
									</div>

									<div>
										Lugar de residencia:Este apartado nos servirá para futuras referencias al momento de hacerle llegar algún paquete y/o producto. 
									</div>

									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<input type="text"  value="<?php echo $domicio ?>" name="domicio" maxlength="300" class="dzencf-text" placeholder="Domicilio" required="">
										<input type="text" value="<?php echo $colonia ?>"  name="colonia" maxlength="300" class="dzencf-text" placeholder="Colonia" required="">
										<input type="text" value="<?php echo $ciudad ?>"  name="ciudad" maxlength="300" class="dzencf-text" placeholder="Ciudad" required="">
										<input type="text" value="<?php echo $estado ?>"  name="estado" maxlength="300" class="dzencf-text" placeholder="Estado" required="">
										<input type="text" value="<?php echo $Pais ?>"  name="Pais" maxlength="300" class="dzencf-text" placeholder="País" required="">
										<input type="text" value="<?php echo $cp ?>"  name="cp" maxlength="300" class="dzencf-text" placeholder="Código postal" required="">
									</div>

									<div>
										Instrucciones y objetivos específicos: Este apartado nos mostrara sus objetivos y aspiraciones con el plan de Alimentación y de Entrenamiento, así como definir la rigurosidad de los mismos, dependiendo esto de su nivel de motivación y apego a ellos. 
									</div>

									<select name="nivel_motivacion" class="dzencf-text" required="">
										<option value="">Nivel de Motivación</option>
										<?php  

										for($i=1;$i<11;$i++){
											if($i==$nivel_motivacion){

												echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
											}else{
												echo '<option value="'.$i.'">'.$i.'</option>';
											}
										}
										?>



									</select>
									<input type="text" value="<?php echo $objetivo_principal ?>" name="objetivo_principal" maxlength="300" class="dzencf-text" placeholder="Objetivo principal de la consulta" required="">

									<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
									<!--<a href="#enviar" style="background-color:#eeeeee" class="dzen-button dzen-button_light dzen-button_large">Siguiente</a>-->
								</form>
							</div>
							<div id="tab-2">
								<form action="<?php echo site_url('') ?>cuestionario/guardarEstilodeVida" method="post" class="contact-form">
									<div>
										Instrucciones y objetivos específicos: Este apartado nos servirá para poder saber de qué manera podremos adaptar las estrategias nutricionales y de entrenamiento a su vida actual sin que estas cambien demasiado su calidad de vida, ya que trabajamos con seres humanos integrales y no solo con números y datos. 
									</div>
									<div class="dzencf" id="dzencf-wrapper" dir="ltr">

										<select name="nivelEducativo" class="dzencf-text" required="">
											<option value="">Nivel educativo terminado</option>
											<?php  if($nivelEducativo==='Secuandario') {?>
											<option value="Secuandario" selected="selected">Secuandario</option>
											<option value="Preparatoria">Preparatoria</option>
											<option value="Media Superior">Media Superior</option>
											<?php }else if($nivelEducativo==='Preparatoria') {?>
											<option value="Secuandario" >Secuandario</option>
											<option value="Preparatoria" selected="selected">Preparatoria</option>
											<option value="Media Superior">Media Superior</option>
											<?php  }else if($nivelEducativo==='Media Superior') {?>
											<option value="Secuandario" >Secuandario</option>
											<option value="Preparatoria">Preparatoria</option>
											<option value="Media Superior" selected="selected">Media Superior</option>
											<?php  }else{?>
											<option value="Secuandario">Secuandario</option>
											<option value="Preparatoria">Preparatoria</option>
											<option value="Media Superior">Media Superior</option>
											<?php  }?>

										</select>


										<input type="text" name="actividadLaboral" value="<?php echo $actividadLaboral;  ?>" maxlength="300" class="dzencf-text" placeholder="Actividad laboral remunerada" required="">

										<select name="nivelSocioeconomico" class="dzencf-text" required="">
											<option value="">Nivel socio-económico</option>

											<?php  

											if($nivelSocioeconomico==='Alto') {
												echo '<option value="Alto" selected="selected">Alto</option>
												<option value="Medio">Medio</option>
												<option value="Bajo">Bajo</option>';
											}
											else if($nivelSocioeconomico==='Medio') {
												echo '<option value="Alto" >Alto</option>
												<option value="Medio" selected="selected">Medio</option>
												<option value="Bajo">Bajo</option>';

											}
											else if($nivelSocioeconomico==='Bajo') {
												echo '<option value="Alto" >Alto</option>
												<option value="Medio">Medio</option>
												<option value="Bajo" selected="selected">Bajo</option>';
											}else{

												?>
												<option value="Alto">Alto</option>
												<option value="Medio">Medio</option>
												<option value="Bajo">Bajo</option>
												<?php 
											} ?>
										</select>

										<input type="text" value="<?php echo $actividadocio; ?>" name="actividadocio" maxlength="300" class="dzencf-text" placeholder="Actividades de ocio y placer" required="">

										<select name="estadocivil" class="dzencf-text" required="">
											<option value="">Estado civil actual</option>

											<?php  

											if($estadocivil==='Casado(a)') {
												echo '<option value="Casado(a)" selected="selected">Casado(a)</option>
												<option value="Divorciado(a)">Divorciado (a)</option>
												<option value="Soltero(a)">Soltero(a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo(a)">Viudo(a)</option>';
											}else if($estadocivil==='Divorciado(a)') {
												echo '<option value="Casado(a)" >Casado(a)</option>
												<option value="Divorciado(a)" selected="selected">Divorciado (a)</option>
												<option value="Soltero(a)">Soltero(a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo(a)">Viudo(a)</option>';
											}else if($estadocivil==='Soltero(a)') {
												echo '<option value="Casado(a)" >Casado(a)</option>
												<option value="Divorciado(a)">Divorciado (a)</option>
												<option value="Soltero(a)" selected="selected">Soltero(a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo(a)">Viudo(a)</option>';
											}else if($estadocivil==='Unión Libre') {
												echo '<option value="Casado(a)" >Casado(a)</option>
												<option value="Divorciado(a)">Divorciado (a)</option>
												<option value="Soltero(a)">Soltero(a)</option>
												<option value="Unión Libre" selected="selected">Unión Libre</option>
												<option value="Viudo(a)">Viudo(a)</option>';
											}else if($estadocivil==='Viudo(a)') {
												echo '<option value="Casado(a)" >Casado(a)</option>
												<option value="Divorciado(a)">Divorciado (a)</option>
												<option value="Soltero(a)">Soltero(a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo(a)" selected="selected">Viudo(a)</option>';
											}
											else{

												?>
												<option value="Casado(a)">Casad@</option>
												<option value="Divorciado(a)">Divorciado (a)</option>
												<option value="Soltero(a)">Soltero(a)</option>
												<option value="Unión Libre">Unión Libre</option>
												<option value="Viudo(a)">Viudo(a)</option>
												<?php 
											} ?>


											
											

										</select>


										<input type="text" value="<?php echo $cuantosHijos; ?>" name="cuantosHijos" maxlength="300" class="dzencf-text" placeholder="¿Cuántos hijos tiene?" required="">
										<input type="text" value="<?php echo $conquienvives; ?>" name="conquienvives" maxlength="300" class="dzencf-text" placeholder="¿Con quién vive?" required="">
										<input type="text" value="<?php echo $quienpreparaTucomida; ?>" name="quienpreparaTucomida" maxlength="300" class="dzencf-text" placeholder="¿Quién prepara su comida? " required="">


										<select name="niveldeEstres" class="dzencf-text" required="">
											<option value="">Nivel de estrés diario</option>
											<?php  

											for($i=1;$i<11;$i++){
												if($i==$niveldeEstres){

													echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
												}else{
													echo '<option value="'.$i.'">'.$i.'</option>';
												}
											}
											?>

										</select>

										<select name="horasdeTiempo" class="dzencf-text" required="">
											<option value="">Horas de sueño</option>
											<?php  

											if($horasdeTiempo==='Ininterrumpido') {
												echo '<option value="Ininterrumpido" selected="selected">Ininterrumpido</option>
												<option value="Lapsos">Lapsos</option>';
											}else if($horasdeTiempo==='Lapsos') {
												echo '<option value="Ininterrumpido">Ininterrumpido</option>
												<option value="Lapsos" selected="selected">Lapsos</option>';
											}
											else{

												?>
												<option value="Ininterrumpido">Ininterrumpido</option>
												<option value="Lapsos">Lapsos</option>
												<?php 
											} ?>
											


										</select>


										<input type="text" value="<?php echo $cuantasvecesdefecta; ?>" name="cuantasvecesdefecta" maxlength="300" class="dzencf-text" placeholder="¿Cuántas veces defeca en promedio al día?" required="">
										<input type="text" value="<?php echo $cuantasVecesOrina; ?>" name="cuantasVecesOrina" maxlength="300" class="dzencf-text" placeholder="¿Cuántas veces orina en promedio al día?" required="">

									</div>
									<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
								</form>
							</div>
							<div id="tab-3">

								<form action="<?php echo site_url('') ?>cuestionario/guardarHistorias" method="post" class="contact-form">
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
													<input type="text" value="<?php echo $vertebraCuantotiempo ?>" name="vertebraCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $vertebraComosetrato ?>" name="vertebraComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-10" aria-controls="ui-accordion-1-panel-10" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Vertebras dorsales 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-10" aria-labelledby="ui-accordion-1-header-10" role="tabpane10" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $vdorsalesCuantotiempo; ?>" name="vdorsalesCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $vdorsalesComosetrato; ?>"  name="vdorsalesComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-9"  aria-controls="ui-accordion-1-panel-9" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Vértebras lumbares
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-9"  aria-labelledby="ui-accordion-1-header-9" role="tabpane9" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $vdLumbaresCuantotiempo; ?>" name="vdLumbaresCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $vdLumbaresComosetrato; ?>" name="vdLumbaresComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-8"  aria-controls="ui-accordion-1-panel-8" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Articulación del hombro
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-8"  aria-labelledby="ui-accordion-1-header-8" role="tabpane8" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aHombroCuantotiempo; ?>" name="aHombroCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aHombroComosetrato; ?>" name="aHombroComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-7"  aria-controls="ui-accordion-1-panel-7" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Articulación del codo
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-7" aria-labelledby="ui-accordion-1-header-7" role="tabpane7" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aCodoCuantotiempo; ?>" name="aCodoCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aCodoComosetrato; ?>" name="aCodoComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-6" aria-controls="ui-accordion-1-panel-6" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>Articulación de la muñeca</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-6" aria-labelledby="ui-accordion-1-header-6" role="tabpane6" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aMunecaCuantotiempo; ?>" name="aMunecaCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aMunecaComosetrato; ?>" name="aMunecaComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-5" aria-controls="ui-accordion-1-panel-5" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>Articulación de los dedos</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-5" aria-labelledby="ui-accordion-1-header-5" role="tabpane5" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $adedosCuantotiempo; ?>" name="adedosCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $adedosComosetrato; ?>" name="adedosComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->
										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-4"  aria-controls="ui-accordion-1-panel-4" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>	Articulación de la cadera
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-4"  aria-labelledby="ui-accordion-1-header-4" role="tabpane4" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aCaderaCuantotiempo; ?>" name="aCaderaCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aCaderaComosetrato; ?>" name="aCaderaComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->

										<!-- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-3" aria-controls="ui-accordion-1-panel-3" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Articulación de la rodilla
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-3" aria-labelledby="ui-accordion-1-header-3" role="tabpane3" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aRodillaCuantotiempo; ?>" name="aRodillaCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aRodillaComosetrato; ?>" name="aRodillaComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-2"  aria-controls="ui-accordion-1-panel-2" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Articulación del tobillo  
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-2"  aria-labelledby="ui-accordion-1-header-2" role="tabpane2" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $aTobilloCuantotiempo; ?>" name="aTobilloCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $aTobilloComosetrato; ?>" name="aTobilloComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

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
										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-11"  aria-controls="ui-accordion-1-panel-11" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Humero 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-11"  aria-labelledby="ui-accordion-1-header-11" role="tabpane11" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $humeroCuantotiempo; ?>" name="humeroCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $humeroComosetrato; ?>" name="humeroComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>


										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-10"  aria-controls="ui-accordion-1-panel-10" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Radio  
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-10" aria-labelledby="ui-accordion-1-header-10" role="tabpane10" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $radioCuantotiempo; ?>" name="radioCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $radioComosetrato; ?>" name="radioComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>




										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-9"  aria-controls="ui-accordion-1-panel-9" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Cubito
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-9" aria-labelledby="ui-accordion-1-header-9" role="tabpane9" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $cubitoCuantotiempo; ?>" name="cubitoCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $cubitoComosetrato; ?>" name="cubitoComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>


										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-8" aria-controls="ui-accordion-1-panel-8" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Carpianos 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-8" aria-labelledby="ui-accordion-1-header-8" role="tabpane8" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $carpianosCuantotiempo; ?>" name="carpianosCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $carpianosComosetrato; ?>" name="carpianosComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>



										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-7"  aria-controls="ui-accordion-1-panel-7" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Falanges
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-7"  aria-labelledby="ui-accordion-1-header-7" role="tabpane7" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $falangesCuantotiempo; ?>" name="falangesCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $falangesComosetrato; ?>" name="falangesComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>






										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-6"  aria-controls="ui-accordion-1-panel-6" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Clavículas 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-6"  aria-labelledby="ui-accordion-1-header-6" role="tabpane6" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $claviculasCuantotiempo; ?>" name="claviculasCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $claviculasComosetrato; ?>" name="claviculasComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>


										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-5"  aria-controls="ui-accordion-1-panel-5" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Costillas
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-5"  aria-labelledby="ui-accordion-1-header-5" role="tabpane5" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $costillasCuantotiempo; ?>" name="costillasCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $costillasComosetrato; ?>" name="costillasComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

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
													<input type="text" value="<?php echo $craneoCuantotiempo; ?>" name="craneoCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $craneoComosetrato; ?>" name="craneoComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>



										<h3 class="ui-accordion-header" role="tab"  id="ui-accordion-1-header-3" aria-controls="ui-accordion-1-panel-3"  aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon">

											</span>Cadera  
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-3"  aria-labelledby="ui-accordion-1-header-3" role="tabpane3"  aria-expanded="false" aria-hidden="true">

											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $caderaCuantotiempo; ?>" name="caderaCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $caderaComosetrato; ?>" name="caderaComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>



										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-0"  aria-controls="ui-accordion-1-panel-0" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon ui-icon-triangle-1-e">

											</span>Fémur 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-0"  aria-labelledby="ui-accordion-1-header-0" role="tabpanel" aria-expanded="false" aria-hidden="true">

											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $femurCuantotiempo; ?>" name="femurCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $femurComosetrato; ?>" name="femurComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

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
													<input type="text" value="<?php echo $tibiaCuantotiempo; ?>" name="tibiaCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $tibiaComosetrato; ?>" name="tibiaComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

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
													<input type="text" value="<?php echo $peroneCuantotiempo; ?>" name="peroneCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $peroneComosetrato; ?>" name="peroneComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>

										</div>


										<!---- NUEVA ENTRADA -->

										<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12"  aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0">
											<span class="ui-accordion-header-icon"></span>Tarsianos 
										</h3>
										<div class="ui-accordion-content" id="ui-accordion-1-panel-12"  aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">
											<div class="dzen_column_DD_span3">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $tarsianosCuantotiempo; ?>" name="tarsianosCuantotiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >
												</div>
											</div>
											<div class="dzen_column_DD_span8">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $tarsianosComosetrato; ?>" name="tarsianosComosetrato" maxlength="300" class="dzencf-text" placeholder="¿Cómo se trató la lesión?" >

												</div>
											</div>
										</div>

										<!-- FIN ENTRADA -->


									</div>


									<div>
										Instrucciones y objetivos específicos: Este apartado nos servirá para saber que enfermedades personales padece y así poder tratarlas adecuadamente con los planes de Alimentación y Entrenamiento. 
									</div></br>
									<strong>Historial de enfermedades personales</strong>
									<br><br>
									<textarea class="dzencf-text"  name="padeces"  placeholder="¿Padece alguna enfermedad crónica? (Diabetes, Presión elevada, enfermedades del corazón, hígado riñones, etc.)"><?php echo trim($padeces); ?></textarea>
									<textarea class="dzencf-text"  name="padecesprobelmas"  placeholder="¿Padece algún problema gastrointestinal? (estreñimiento, colitis, gastritis, ulceras, etc.)"><?php echo trim($padecesprobelmas); ?></textarea>
									<div>

										<!-- incio componenete -->
										<div>

											Instrucciones y objetivos específicos: Este apartado nos servirá para conocer con mayor exactitud sus variables fisiológicas y así determinar su nivel de aptitud física y en última instancia, determinar el adecuado y correcto nivel de intensidad y exigencia al momento de diseñar el plan de Entrenamiento. 

										</div>
										<strong>Datos fisiológicos</strong>
										<br></br>
										<input type="text" name="dfFcar" value="<?php echo $dfFcar; ?>" maxlength="300" class="dzencf-text" placeholder="Frecuencia cardiaca en reposo (pulsaciones por minuto)" >

										<input type="text" name="dfFcarres" value="<?php echo $dfFcarres; ?>" maxlength="300" class="dzencf-text" placeholder="Frecuencia respiratoria en reposo (respiración por minuto)" >

										<!-- fin componenete -->

									</div>


								</div>
								<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
							</div>
						</form>
					</div>
					<!-- tab 4 -->

					<div id="tab-4">
						<form action="<?php echo site_url('') ?>cuestionario/guardarExperiencia" method="post" >






							<div>
								Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué experiencia tiene realizando deportes, ya sea nivel competitivo o recreacional.  
							</div><br>
							<strong>Historial de actividad física y deportiva</strong>

							<!-- inicio -->
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
													<input type="text" value="<?php echo $pFnctipo; ?>"  name="pFnctipo" maxlength="300" class="dzencf-text" placeholder="¿Qué tipo de actividad?" >
												</div>
											</div>
											<div class="dzen_column_DD_span4">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $pFnchace; ?>" name="pFnchace" maxlength="300" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo?" >

												</div>
											</div>




											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $pFncCuantos; ?>" name="pFncCuantos" maxlength="300" class="dzencf-text" placeholder="¿Cuántos días a la semana?" >
												</div>
											</div>
											<div class="dzen_column_DD_span4">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $pFncCuantas; ?>" name="pFncCuantas" maxlength="300" class="dzencf-text" placeholder="¿Cuántas horas al día?" >

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
													<input type="text" value="<?php echo $pFctipo; ?>" name="pFctipo" maxlength="300" class="dzencf-text" placeholder="¿Qué tipo de actividad?" >
												</div>
											</div>
											<div class="dzen_column_DD_span4">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $pFchace; ?>" name="pFchace" maxlength="300" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo?" >

												</div>
											</div>




											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" value="<?php echo $pFcCuantos; ?>" name="pFcCuantos" maxlength="300" class="dzencf-text" placeholder="¿Cuántos días a la semana?" >
												</div>
											</div>
											<div class="dzen_column_DD_span4">

												<div class="margin_bottom">

													<input type="text" value="<?php echo $pFcCuantas; ?>" name="pFcCuantas" maxlength="300" class="dzencf-text" placeholder="¿Cuántas horas al día?" >

												</div>
											</div>


										</div>

										<!-- fin nueva -->

									</div>
								</div>
							</div>
							<!-- fin -->

							<!-- inicio -->
							<div>

								Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué experiencia tiene en el Fitness y Acondicionamiento físico, ya sea a nivel competitivo o de salud. 

							</div></br>
							<strong>Historial de actividades Fitness</strong>

							<br></br>

							<?php

							if($hasEntrenado==='SI') {
								echo '<input type="checkbox"  checked name="hasEntrenado" class="dzencf-text" value="SI">¿Ha entrenado antes en un centro Fitness (Gym)?<br>';
							}else{
								echo '<input type="checkbox"  name="hasEntrenado" class="dzencf-text" value="SI">¿Ha entrenado antes en un centro Fitness (Gym)?<br>';
							}

							

							if($hasEntrenadoPersonal==='SI') {
								echo '<input type="checkbox" checked name="hasEntrenadoPersonal" class="dzencf-text" value="SI">¿Contrato a un entrenador personal?<br>';

							}else{
								echo '<input type="checkbox"  name="hasEntrenadoPersonal" class="dzencf-text" value="SI">¿Contrato a un entrenador personal?<br>';

							}

							?>
							

							<select name="entrabaInsCuenta" class="dzencf-text" >
								<option value="">¿Entrenaba por su propia cuenta con el instructor de piso?</option>

								<?php  

								if($entrabaInsCuenta==='Por mi Cuenta') {
									echo '<option value="Por mi Cuenta" selected="selected">Por mi Cuenta</option>
									<option value="Intructor de piso">Intructor de piso</option>';
								}
								else if($entrabaInsCuenta==='Intructor de piso') {
									echo '<option value="Por mi Cuenta" >Por mi Cuenta</option>
									<option value="Intructor de piso" selected="selected">Intructor de piso</option>';
								}else{

									?>
									<option value="Por mi Cuenta">Por mi Cuenta</option>
									<option value="Intructor de piso">Intructor de piso</option>
									<?php 
								} ?>
								

							</select>
							<input type="text" value="<?php echo $desdecuendo; ?>" name="desdecuendo" maxlength="300" class="dzencf-text" placeholder="¿Desde hace cuánto tiempo ha entrenado en un Gym? " >
							<input type="text" value="<?php echo $cuentosDiasEn; ?>" name="cuentosDiasEn" maxlength="300" class="dzencf-text" placeholder="¿Cuántos días a la semana entrena actualmente?" >
							<input type="text" value="<?php echo $cuentosHorasEn; ?>" name="cuentosHorasEn" maxlength="300" class="dzencf-text" placeholder="¿Cuántas horas al día entrena actualmente? " >
							<select name="utilizasMaPe" class="dzencf-text" >
								<option value="">¿Utiliza las máquinas y pesos libres?</option>

								<?php  

								if($utilizasMaPe==='Máquina') {
									echo '<option value="Máquina" selected="selected">Máquina</option>
									<option value="Peso Libre">Peso Libre</option>';
								}else if($utilizasMaPe==='Peso Libre') {
									echo '<option value="Máquina">Máquina</option>
									<option value="Peso Libre" selected="selected">Peso Libre</option>';
								}else{

									?>
									<option value="Máquina">Máquina</option>
									<option value="Peso Libre">Peso Libre</option>
									<?php 

								} ?>



							</select>

							<input type="text" value="<?php echo $utilizasClases; ?>"  name="utilizasClases" maxlength="300" class="dzencf-text" placeholder="¿Usa las clases grupales? (zumba, spinning, ritmos latinos, etc.)" >
							<!-- fin -->


							<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
						</form>
					</div>


					<!-- fin tab 4 -->
					<!-- inicio tab 5 -->
					<div id="tab-5">
						<form action="<?php echo site_url('') ?>cuestionario/guardarObjertivos" method="post" >

							<div>
								Instrucciones y objetivos específicos: Este apartado nos servirá para poder tener claro cuánto tiempo se dispone para diseñar el plan de Entrenamiento y sacar el máximo provecho a su estilo de vida, así como acoplar el plan de Alimentación a los horarios del entrenamiento y así optimizar los resultados de ambos. 
							</div><br>
							<strong>Disponibilidad para la actividad física y deportiva</strong>
							<br></br>

							<input type="text" value="<?php echo $cuantasHorasd; ?>" name="cuantasHorasd" maxlength="300" class="dzencf-text" placeholder="¿Cuántas horas al día dispone para hacer ejercicio? " >
							<select name="utilizasMaPe" class="dzencf-text" >
								<option value="">¿Cuántos días a la semana dispone para hacer ejercicio?</option>

								<?php  

								for($i=1;$i<8;$i++){
									if($i==$utilizasMaPe){

										echo '<option value="'.$i.'" selected="selected">'.$i.'</option>';
									}else{
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
								}
								?>
								
							</select>
							<input type="text" value="<?php echo $conqueHorario; ?>" name="conqueHorario" maxlength="300" class="dzencf-text" placeholder="¿Con que horario cuentas al día para hacer ejercicio?" >
							<input type="text" value="<?php echo $quediasDispones; ?>" name="quediasDispones" maxlength="300" class="dzencf-text" placeholder="¿Con que días a la semana cuentas para hacer ejercicio? " >
							<input type="text" value="<?php echo $cuantotiempoAlGym; ?>" name="cuantotiempoAlGym" maxlength="300" class="dzencf-text" placeholder="¿Cuánto tiempo duras en trasladarte el Gym? " >

							<input type="text" value="<?php echo $conqueEquipocardioc; ?>" name="conqueEquipocardioc" maxlength="300" class="dzencf-text" placeholder="¿Con que equipo para ejercicio cardiovascular cuenta?" >
							<input type="text" value="<?php echo $conqueEquipoPesocuen; ?>" name="conqueEquipoPesocuen" maxlength="300" class="dzencf-text" placeholder="¿Con que equipo para ejercicio de pesas cuenta?" >
							<input type="text" value="<?php echo $quetipoClaseGruputilizar; ?>" name="quetipoClaseGruputilizar" maxlength="300" class="dzencf-text" placeholder="¿Qué tipo de clases grupales puede realizar?" >

							<div>
								Instrucciones y objetivos específicos: Este apartado nos servirá para conocer exactamente qué objetivos, metas y expectativas tiene con el programa de Entrenamiento y así no perder tiempo, dinero y esfuerzo en algo que no le interese. 
							</div><br>
							<strong>Objetivos del programa de entrenamiento</strong><br><br>
							Mejora del rendimiento deportivo especifico
							<br></br>

							<?php

							if($objmejorDepoEspecificaresistencia==='SI') {
								?>
								<input type="checkbox" checked  name="objmejorDepoEspecificaresistencia" class="dzencf-text" value="SI">¿Resistencia cardiorrespiratoria?<br>
								<?php
								
							}else{
								?>
								<input type="checkbox"  name="objmejorDepoEspecificaresistencia" class="dzencf-text" value="SI">¿Resistencia cardiorrespiratoria?<br>
								<?php
							}

							?>

							<?php

							if($objmejorDepoEspecificaFuerza==='SI') {
								?>
								<input type="checkbox" checked name="objmejorDepoEspecificaFuerza" class="dzencf-text" value="SI">¿Fuerza y/o Potencia?<br>
								<?php
								
							}else{
								?>
								<input type="checkbox" name="objmejorDepoEspecificaFuerza" class="dzencf-text" value="SI">¿Fuerza y/o Potencia?<br>
								<?php
							}

							?>
							<?php

							if($objmejorDepoEspecificaFlexibilidad==='SI') {
								?>
								<input type="checkbox" checked  name="objmejorDepoEspecificaFlexibilidad" class="dzencf-text" value="SI">¿Flexibilidad?<br>

								<?php
								
							}else{
								?>
								<input type="checkbox"  name="objmejorDepoEspecificaFlexibilidad" class="dzencf-text" value="SI">¿Flexibilidad?<br>

								<?php
							}

							?>




							<br> Razones estéticas y de belleza
							<br></br>
							
							



							<?php

							if($objmejorDepoEspecificaBPErdida==='SI') {
								?>
								<input type="checkbox" checked name="objmejorDepoEspecificaBPErdida" class="dzencf-text" value="SI">
								¿Perdida de grasa corporal?<br>
								<?php
								
							}else{
								?>
								<input type="checkbox" name="objmejorDepoEspecificaBPErdida" class="dzencf-text" value="SI">
								¿Perdida de grasa corporal?<br>
								<?php
							}

							?>

							<?php

							if($objmejorDepoEspecificaBGanacia==='SI') {
								?>
								<input type="checkbox" checked name="objmejorDepoEspecificaBGanacia" class="dzencf-text" value="SI">
								¿Ganancia de masa muscular?<br>
								<?php
								
							}else{
								?>
								<input type="checkbox" name="objmejorDepoEspecificaBGanacia" class="dzencf-text" value="SI">
								¿Ganancia de masa muscular?<br>
								<?php
							}

							?>


							<br>Mejora del estado de salud y calidad de vida
							<br></br>

							<input type="text" value="<?php echo $opemsvcro; ?>" name="opemsvcro" maxlength="300" class="dzencf-text"  placeholder="¿Prevención de enfermedades crónicas? " >
							<input type="text" value="<?php echo $opemsvespe; ?>" name="opemsvespe" maxlength="300" class="dzencf-text" placeholder="¿Tratamiento de enfermedad especifica?" >


							<br>Aspecto sociocultural del ejercicio
							<br></br>

							<input type="text" value="<?php echo $opeSocialSensacion; ?>" name="opeSocialSensacion" maxlength="300" class="dzencf-text" placeholder="¿Qué sensaciones y experiencias tiene con el ejercicio? " >
							<input type="text" value="<?php echo $opeSocialExpectativas; ?>" name="opeSocialExpectativas" maxlength="300" class="dzencf-text" placeholder="¿Qué expectativas y compromiso tiene con el plan de entrenamiento?" >
							<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" >
						</form>
					</div>
					<!-- fin tab 5 -->
					
					<!--tab 6 -->
					<div id="tab-6">
						<form action="<?php echo site_url('') ?>cuestionario/guardarSuplementos" method="post" >
							<div>
								Instrucciones y objetivos específicos: Este apartado nos permitirá saber que conocimientos y experiencia tiene con el uso de Farmacología deportiva, el nivel de calidad del protocolo que uso y si es que está interesado en usar nuevamente o por primera ocasión con nosotros. 
							</div>
							<strong>Uso y experiencia con Farmacología deportiva</strong>
						</br>
						

						<?php
						$display="none";
						if($usoFarma==='SI') {
							$display="show";
							?>
							<input type="checkbox" checked id="vefarma" name="usoFarma" class="dzencf-text" value="SI">
							¿Ha usado ayudas farmacológicas?<br>
							<?php

						}else{
							?>
							<input type="checkbox" id="vefarma" name="usoFarma" class="dzencf-text" value="SI">
							¿Ha usado ayudas farmacológicas?<br>
							<?php
						}



						?>

						<div id="FormularioFarma" style="display: <?php echo $display?>">
							<input type="text" value="<?php echo $vefarHacecuanto; ?>" name="vefarHacecuanto" maxlength="300" class="dzencf-text" 
							placeholder="¿Hace cuánto tiempo las uso?" >
							<input type="text" value="<?php echo $vefarDuranteCuanto; ?>" name="vefarDuranteCuanto" maxlength="300" class="dzencf-text" 
							placeholder="¿Durante cuánto tiempo las uso?" >
							<input type="text" value="<?php echo $vefarQuienlerecomendo; ?>" name="vefarQuienlerecomendo" maxlength="300" class="dzencf-text" 
							placeholder="¿Quién le recomendó usarlas?" >
							<input type="text" value="<?php echo $vefarQuelomotivo; ?>" name="vefarQuelomotivo" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué lo motivo a usarlas?" >
							<input type="text" value="<?php echo $vefarQuienloasesoro; ?>" name="vefarQuienloasesoro" maxlength="300" class="dzencf-text" 
							placeholder="¿Quién le asesoro en su uso?" >
							<input type="text" value="<?php echo $vefarQuefuequelauso; ?>" name="vefarQuefuequelauso" maxlength="300" class="dzencf-text" 
							placeholder="¿Cómo fue que las uso?" >
							<input type="text" value="<?php echo $vefarQuetipodefarmauso; ?>" name="vefarQuetipodefarmauso" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué tipo de fármacos uso?" >

							<input type="text" value="<?php echo $vefarQueObjetivologrouso; ?>" name="vefarQueObjetivologrouso" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué objetivos logro con su uso?" >

							<input type="text" value="<?php echo $vefarUsaActualmentefarma; ?>" name="vefarUsaActualmentefarma" maxlength="300" class="dzencf-text" 
							placeholder="¿Usa actualmente farmacología?" >

							<input type="text" value="<?php echo $vefarTienePensadousarfarma; ?>" name="vefarTienePensadousarfarma" maxlength="300" class="dzencf-text" 
							placeholder="¿Tiene pensado usar farmacología? " >

							<input type="text" value="<?php echo $vefarObjetivostieneeluso; ?>" name="vefarObjetivostieneeluso" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué objetivos tiene con su uso? " >
						</div>
						<a href="#add" onclick="masSuplemntos()" class="dzen-button dzen-button_blue dzen-button_rounded dzen-button_small" >+ Agregar Suplemento</a>
						<input type="text" name="numSuplemento" id="numSuplemento" value="<?php echo $numSuplemento;?>">
						<div class="dzen_container">
							<div class="dzen_column_DD_span11">
								<div class="dzen-accordion" data-expanded="1" role="tablist">
									<!-- incio -->
									<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
									Suplemento </h3>
									<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">

										<div class="dzen_column_DD_span13"></div>
										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" value="<?php echo $supleNombre; ?>" name="supleNombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" value="<?php echo $supleCaracteristicas; ?>" name="supleCaracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" value="<?php echo $supleMotivo; ?>" name="supleMotivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" value="<?php echo $supleTiempo; ?>" name="supleTiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" value="<?php echo $supleCantidad; ?>" name="supleCantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
											</div>
										</div>
									</div>
									<!-- fin -->
								</div>
							</div>
							
						</div>
						<div id="siguiente1">

						</div>
						<?php echo $dinamicov ?>
						<input type="submit" value="GUARDAR Y SIGUINETE " class="dzencf-submit" />
					</form>
				</div>

				<!-- fin tab 6 -->

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
	function masSuplemntos() {

		var conteo=$('#numSuplemento').val();
		conteo++;
		var dataString = 'conteo='+conteo;
		$.ajax({
			type: "GET",
			url: "<?php echo site_url('') ?>cuestionario/nuevoSuplemento",
			data: dataString,
			success: function(data) {
				$('#siguiente'+conteo).html(data);
				$('#numSuplemento').val(conteo);
				return false;
			}

		});
	}

	





	
	

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
	$(document).ready(function() {

		var data="<?php echo $verificarPestania?>";

		if(data!=''){
			var res = data.split("-");



			for (i = res.length+1; i < 11; i++) { 
				$('#tab'+i).addClass("verdisabled");
				$('#tab'+i).css("color","#E6E6E6");

			}
			
			$('#tab'+res.length).click();



					//alert("Tamanio de la lista"+res.length);
				}else{
					$('#tab2').addClass("verdisabled");
					$('#tab2').css("color","#E6E6E6");
					$('#tab3').addClass("verdisabled");
					$('#tab3').css("color","#E6E6E6");
					$('#tab4').addClass("verdisabled");
					$('#tab4').css("color","#E6E6E6");
					$('#tab5').addClass("verdisabled");
					$('#tab5').css("color", "#E6E6E6");
					$('#tab6').addClass("verdisabled");
					$('#tab6').css("color", "#E6E6E6");
					$('#tab7').addClass("verdisabled");
					$('#tab7').css("color", "#E6E6E6");
					$('#tab8').addClass("verdisabled");
					$('#tab8').css("color", "#E6E6E6");
					$('#tab9').addClass("verdisabled");
					$('#tab9').css("color", "#E6E6E6");
					$('#tab10').addClass("verdisabled");
					$('#tab10').css("color", "#E6E6E6");
				}







			});




		</script>


		<?php include 'plantilla/js.php'; ?>

	</body>
	</html>