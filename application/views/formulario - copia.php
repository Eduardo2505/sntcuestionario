
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

						
						<div>
							Instrucciones y objetivos específicos: Este apartado nos servirá para poder tener claro cuánto tiempo se dispone para diseñar el plan de Entrenamiento y sacar el máximo provecho a su estilo de vida, así como acoplar el plan de Alimentación a los horarios del entrenamiento y así optimizar los resultados de ambos. 
						</div>
						<strong>Disponibilidad para la actividad física y deportiva</strong>
						<br></br>

						<input type="text" name="cuantasHorasd" maxlength="300" class="dzencf-text" placeholder="¿Cuántas horas al día dispone para hacer ejercicio? " >
						<select name="utilizasMaPe" class="dzencf-text" >
							<option value="">¿Cuántos días a la semana dispone para hacer ejercicio?</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>
						<input type="text" name="conqueHorario" maxlength="300" class="dzencf-text" placeholder="¿Con que horario cuentas al día para hacer ejercicio?" >
						<input type="text" name="quediasDispones" maxlength="300" class="dzencf-text" placeholder="¿Con que días a la semana cuentas para hacer ejercicio? " >
						<input type="text" name="cuantotiempoAlGym" maxlength="300" class="dzencf-text" placeholder="¿Cuánto tiempo duras en trasladarte el Gym? " >

						<input type="text" name="conqueEquipocardioc" maxlength="300" class="dzencf-text" placeholder="¿Con que equipo para ejercicio cardiovascular cuenta?" >
						<input type="text" name="conqueEquipoPesocuen" maxlength="300" class="dzencf-text" placeholder="¿Con que equipo para ejercicio de pesas cuenta?" >
						<input type="text" name="quetipoClaseGruputilizar" maxlength="300" class="dzencf-text" placeholder="¿Qué tipo de clases grupales puede realizar?" >
						

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

						<input type="text" name="opemsvcro" maxlength="300" class="dzencf-text" 
						placeholder="¿Prevención de enfermedades crónicas? " >
						<input type="text" name="opemsvespe" maxlength="300" class="dzencf-text" 
						placeholder="¿Tratamiento de enfermedad especifica?" >


						<br>Aspecto sociocultural del ejercicio
						<br></br>

						<input type="text" name="opeSocialSensacion" maxlength="300" class="dzencf-text" 
						placeholder="¿Qué sensaciones y experiencias tiene con el ejercicio? " >
						<input type="text" name="opeSocialExpectativas" maxlength="300" class="dzencf-text" 
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
							<input type="text" name="vefarHacecuanto" maxlength="300" class="dzencf-text" 
							placeholder="¿Hace cuánto tiempo las uso?" >
							<input type="text" name="vefarDuranteCuanto" maxlength="300" class="dzencf-text" 
							placeholder="¿Durante cuánto tiempo las uso?" >
							<input type="text" name="vefarQuienlerecomendo" maxlength="300" class="dzencf-text" 
							placeholder="¿Quién le recomendó usarlas?" >
							<input type="text" name="vefarQuelomotivo" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué lo motivo a usarlas?" >
							<input type="text" name="vefarQuienloasesoro" maxlength="300" class="dzencf-text" 
							placeholder="¿Quién le asesoro en su uso?" >
							<input type="text" name="vefarQuefuequelauso" maxlength="300" class="dzencf-text" 
							placeholder="¿Cómo fue que las uso?" >
							<input type="text" name="vefarQuetipodefarmauso" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué tipo de fármacos uso?" >

							<input type="text" name="vefarQueObjetivologrouso" maxlength="300" class="dzencf-text" 
							placeholder="¿Qué objetivos logro con su uso?" >

							<input type="text" name="vefarUsaActualmentefarma" maxlength="300" class="dzencf-text" 
							placeholder="¿Usa actualmente farmacología?" >

							<input type="text" name="vefarTienePensadousarfarma" maxlength="300" class="dzencf-text" 
							placeholder="¿Tiene pensado usar farmacología? " >

							<input type="text" name="vefarObjetivostieneeluso" maxlength="300" class="dzencf-text" 
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
									Suplemento 2</h3>
									<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">

										<div class="dzen_column_DD_span13"></div>
										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple2Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple2Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple2Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple2Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple2Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
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
												<input type="text" name="suple3Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple3Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple3Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple3Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple3Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
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
												<input type="text" name="suple4Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple4Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple4Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple4Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple4Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
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
												<input type="text" name="suple5Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple5Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple5Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
											</div>
										</div>
										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">

												<input type="text" name="suple5Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

											</div>
										</div>

										<div class="dzen_column_DD_span5">

											<div class="margin_bottom">
												<input type="text" name="suple5Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
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
												<input type="text" name="consumoSusAlcolTipo" maxlength="300" class="dzencf-text" placeholder="Tipo" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="consumoSusAlcolcantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad">

											</div>
										</div>

										<div class="dzen_column_DD_span3">

											<div class="margin_bottom">
												<input type="text" name="consumoSusAlcolFrecuencia" maxlength="300" class="dzencf-text" placeholder="Frecuencia" >
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
												<input type="text" name="consumoSusTabacoTipo" maxlength="300" class="dzencf-text" placeholder="Tipo" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="consumoSusTabacocantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad" >

											</div>
										</div>

										<div class="dzen_column_DD_span3">

											<div class="margin_bottom">
												<input type="text" name="consumoSusTabacoFrecuencia" maxlength="300" class="dzencf-text" placeholder="Frecuencia" >
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
												<input type="text" name="consumoSusCafeinaTipo" maxlength="300" class="dzencf-text" placeholder="Tipo" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="consumoSusCafeinacocantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad" >

											</div>
										</div>

										<div class="dzen_column_DD_span3">

											<div class="margin_bottom">
												<input type="text" name="consumoSusCafeinaFrecuencia" maxlength="300" class="dzencf-text" placeholder="Frecuencia" >
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
												<input type="text" name="consumoSusOtrasTipo" maxlength="300" class="dzencf-text" placeholder="Tipo" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="consumoSusOtrascocantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad" >

											</div>
										</div>

										<div class="dzen_column_DD_span3">

											<div class="margin_bottom">
												<input type="text" name="consumoSusOtrasFrecuencia" maxlength="300" class="dzencf-text" placeholder="Frecuencia" >
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
							Instrucciones y objetivos específicos: Este apartado nos servirá para ubicar sus preferencias alimenticias personales y poder diseñar un plan de Alimentación individualizado, con el cual se sienta lo más cómodo posible y este le ayude al apego del mismo, logrando así sus metas y objetivos. 
						</div>
						<strong>Características dietéticas personales</strong>
						<br></br>



						<input type="text" name="cdipersoAli" maxlength="300" class="dzencf-text" placeholder="¿Alimentos evitados? " >


						<input type="text" name="cdipersoAliporque" maxlength="300" class="dzencf-text" placeholder="¿Por qué? " >



						<select name="cdipersoANivel" class="dzencf-text" >
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

						<input type="text" name="cdipersoANivelCambios" maxlength="300" class="dzencf-text" placeholder="¿Cambios recientes en el apetito? " >

						<input type="text" name="cdipersoAlergias" maxlength="300" class="dzencf-text" placeholder="¿Tiene alguna alergia alimentaria? " >
						<input type="text" name="cdipersoIntoleranciaalimen" maxlength="300" class="dzencf-text" placeholder="¿Tiene alguna intolerancia alimentaria?" >

						<input type="text" name="cdipersoAlinoconsumir" maxlength="300" class="dzencf-text" placeholder="¿Qué alimentos no puede conseguir fácilmente?" >

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
												<input type="text" name="edpduraTiempo" maxlength="300" class="dzencf-text" placeholder="¿Durante cuánto tiempo?" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="edpcuantoTiempo" maxlength="300" class="dzencf-text" placeholder="¿Hace cuánto tiempo?" >

											</div>
										</div>




										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="edpcResulobtuvo" maxlength="300" class="dzencf-text" placeholder="¿Qué resultados obtuvo?" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="edpcxqAbandono" maxlength="300" class="dzencf-text" placeholder="¿Por qué abandono?" >

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
						<input type="text" name="dabasiPeso" maxlength="300" class="dzencf-text" placeholder="Peso total (kg.g)" r>
						<input type="text" name="dabasiAltura" maxlength="300" class="dzencf-text" placeholder="Estatura total (cm)" >

						<div>
							Instrucciones y objetivos específicos: Este apartado nos servirá para hacer comparaciones de su progreso a través del tiempo, pudiendo así modificar los planes de Alimentación y Entrenamiento. Para obtener esta información se necesita una báscula de Bioimpedancia o con un profesional capacitado para la realización de las mediciones antropométricas (ISAK 1)
						</div></br>
						<strong>Datos antropométricos especializados</strong><br>
						<input type="text" name="datosAntroespgrasa" maxlength="300" class="dzencf-text" placeholder="Grasa corporal (kg)" >
						<input type="text" name="datosAntroespgrasaporce" maxlength="300" class="dzencf-text" placeholder="Grasa corporal (%)" >
						<input type="text" name="datosAntroespmasakg" maxlength="300" class="dzencf-text" placeholder="Masa magra (kg)" >
						<input type="text" name="datosAntroespmasaporcen" maxlength="300" class="dzencf-text" placeholder="Masa magra (%)" >
						<input type="text" name="datosAntroespmasapmuskg" maxlength="300" class="dzencf-text" placeholder="Masa muscular (kg)" >
						<input type="text" name="datosAntroespmasapmusporcentaje" maxlength="300" class="dzencf-text" placeholder="Masa muscular (%)" >


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
												<input type="text" name="patronalic1h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic1l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" >

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic1d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" >
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
												<input type="text" name="patronalic2h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic2l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" >

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic2d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" >
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
												<input type="text" name="patronalic3h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic3l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" >

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic3d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" >
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
												<input type="text" name="patronalic4h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" >
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic4l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" >

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic4d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" >
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
												<input type="text" name="patronalic5h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic5l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic5d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" required="">
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
												<input type="text" name="patronalic6h" maxlength="300" class="dzencf-text" placeholder="Horario (hrs.min)" required="">
											</div>
										</div>
										<div class="dzen_column_DD_span4">

											<div class="margin_bottom">

												<input type="text" name="patronalic6l" maxlength="300" class="dzencf-text" placeholder="Ubicación (lugar)" required="">

											</div>
										</div>

										<div class="dzen_column_DD_span6">

											<div class="margin_bottom">
												<input type="text" name="patronalic6d" maxlength="300" class="dzencf-text" placeholder="Duración (min)" required="">
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
							<input type="text" name="padDormido" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Recostado</h4>
							Actividad : Despierto, descansando acostado sin hacer nada
							<input type="text" name="padRecostado" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy sedentario</h4>
							Actividad : Sentado, mirando TV o escuchando música, viajar
							<input type="text" name="padMuysedentario" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Sedentario </h4>
							Actividad : Trabajo de oficina, conducir, hablar, leer
							<input type="text" name="padsedentario" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy ligeramente activo </h4>
							Actividad : Caminar ligero, estar de pie, moverse poco
							<input type="text" name="padmuyligeramenteactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Ligeramente activo</h4>
							Actividad : Limpieza doméstica, trabajo de taller, cuidar niños
							<input type="text" name="padligeramenteactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Moderadamente activo</h4>
							Actividad : Trotar, bicicleta suave, limpieza pesada, mesero
							<input type="text" name="padmoderadamenteactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Activo</h4>
							Actividad : Correr, bailar, carpintero, jardinero, cargar cosas
							<input type="text" name="padactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy activo</h4>
							Actividad : Albañil, agricultor, ganadero, cargar cosa pesada
							<input type="text" name="padmuyactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Extremadamente activo</h4>
							Actividad : Deportes y entrenamiento de moderada-alta intensidad
							<input type="text" name="padExtemadamenteactivo" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >

							<div>
								Instrucciones y objetivos específicos: Este apartado nos servirá para saber qué tan activo es su estilo de vida, esto nos servirá para poder calcular de la manera más exacta posible la energía (kcal) que necesita cada día para lograr alcanzar sus metas y objetivos. Esta segunda tabla hace alusión a los días que descansa o no puede hacer ejercicio por cualquier razón. (Deben sumar 24 horas en total).
							</div><br>

							<strong>Patrón de actividades diarias (Días de descanso)</strong><br>
							Tipo de actividad<hr>
							<h4>Dormido</h4>
							Actividad : Dormido profundamente
							<input type="text" name="padDormidodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Recostado</h4>
							Actividad : Despierto, descansando acostado sin hacer nada
							<input type="text" name="padRecostadodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy sedentario</h4>
							Actividad : Sentado, mirando TV o escuchando música, viajar
							<input type="text" name="padMuysedentariodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Sedentario </h4>
							Actividad : Trabajo de oficina, conducir, hablar, leer
							<input type="text" name="padsedentariodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy ligeramente activo </h4>
							Actividad : Caminar ligero, estar de pie, moverse poco
							<input type="text" name="padmuyligeramenteactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Ligeramente activo</h4>
							Actividad : Limpieza doméstica, trabajo de taller, cuidar niños
							<input type="text" name="padligeramenteactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Moderadamente activo</h4>
							Actividad : Trotar, bicicleta suave, limpieza pesada, mesero
							<input type="text" name="padmoderadamenteactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Activo</h4>
							Actividad : Correr, bailar, carpintero, jardinero, cargar cosas
							<input type="text" name="padactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Muy activo</h4>
							Actividad : Albañil, agricultor, ganadero, cargar cosa pesada
							<input type="text" name="padmuyactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >
							<h4>Extremadamente activo</h4>
							Actividad : Deportes y entrenamiento de moderada-alta intensidad
							<input type="text" name="padExtemadamenteactivodes" maxlength="300" class="dzencf-text" placeholder="Horas diarias en esas actividades" >


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
											<input type="text" name="pEVidaTipo" maxlength="300" class="dzencf-text" placeholder="Tipo de actividad diaria, Ejemplo :Despertarse por la mañana" >

										</div>
									</div>
									<div class="dzen_column_DD_span4">

										<div class="margin_bottom">

											<input type="text" name="pEVidaTipo" maxlength="300" class="dzencf-text" placeholder="Horario" >

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
													<input type="text" name="recordatorioAlimentos24hras1h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras1d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras1q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras1c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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
													<input type="text" name="recordatorioAlimentos24hras2h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras2d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras2q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras2c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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
													<input type="text" name="recordatorioAlimentos24hras3h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras3d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras3q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras3c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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
													<input type="text" name="recordatorioAlimentos24hras4h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras4d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras4q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras4c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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
													<input type="text" name="recordatorioAlimentos24hras5h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras5d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras5q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras5c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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
													<input type="text" name="recordatorioAlimentos24hras6h" maxlength="300" class="dzencf-text" placeholder="¿A qué hora?" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">

													<input type="text" name="ecordatorioAlimentos24hras6d" maxlength="300" class="dzencf-text" placeholder="¿En dónde?" >

												</div>
											</div>

											<div class="dzen_column_DD_span6">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras6q" maxlength="300" class="dzencf-text" placeholder="¿Qué comió? (tipo de alimento y bebida)" >
												</div>
											</div>
											<div class="dzen_column_DD_span5">

												<div class="margin_bottom">
													<input type="text" name="ecordatorioAlimentos24hras6c" maxlength="300" class="dzencf-text" placeholder="¿Cuándo comió? (cantidades)" >
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