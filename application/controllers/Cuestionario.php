<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuestionario extends CI_Controller {



	function __construct() {
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('cliente_models');
		$this->load->model('cuestionario_models');
		$this->load->library('session');
	}

	public function webservice()
	{
		
		$this->load->model('webservice_models');
	    $user=$this->webservice_models->buscar(1);
	    echo "Este es su apellido".$user->apellido;

	}
	public function preguntas()
	{
		$datam['activar'] ='index';
		//session_destroy();
		// se iniciaron 
		$pedidoInicial='envioManual';
		$nombre="";
		$sexo="";
		$fecha="";
		$telefono="";
		$WhatsApp="";
		$email="";
		$password="";
		$perfil="";
		$domicio="";
		$colonia="";
		$ciudad="";
		$estado="";
		$Pais="";
		$cp="";
		$objetivo_principal="";
		$nivel_motivacion="";
		$pedidoInicial="";
				/// paso 2 
		$nivelEducativo="";
		$actividadLaboral="";
		$nivelSocioeconomico="";
		$actividadocio="";
		$estadocivil="";
		$cuantosHijos="";
		$conquienvives="";
		$quienpreparaTucomida="";
		$niveldeEstres="";
		$horasdeTiempo="";
		$cuantasvecesdefecta="";
		$cuantasVecesOrina="";
		/// paso 3
		$vertebraCuantotiempo="";
		$vertebraComosetrato="";
		$vdorsalesCuantotiempo="";
		$vdorsalesComosetrato="";
		$vdLumbaresCuantotiempo="";
		$vdLumbaresComosetrato="";
		$aHombroCuantotiempo="";
		$aHombroComosetrato="";
		$aCodoCuantotiempo="";
		$aCodoComosetrato="";
		$aMunecaCuantotiempo="";
		$aMunecaComosetrato="";
		$adedosCuantotiempo="";
		$adedosComosetrato="";
		$aCaderaCuantotiempo="";
		$aCaderaComosetrato="";
		$aRodillaCuantotiempo="";
		$aRodillaComosetrato="";
		$aTobilloCuantotiempo="";
		$aTobilloComosetrato="";
		$humeroCuantotiempo="";
		$humeroComosetrato="";
		$radioCuantotiempo="";
		$radioComosetrato="";
		$cubitoCuantotiempo="";
		$cubitoComosetrato="";
		$carpianosCuantotiempo="";
		$carpianosComosetrato="";
		$falangesCuantotiempo="";
		$falangesComosetrato="";
		$claviculasCuantotiempo="";
		$claviculasComosetrato="";
		$costillasCuantotiempo="";
		$costillasComosetrato="";
		$craneoCuantotiempo="";
		$craneoComosetrato="";
		$caderaCuantotiempo="";
		$caderaComosetrato="";
		$femurCuantotiempo="";
		$femurComosetrato="";
		$tibiaCuantotiempo="";
		$tibiaComosetrato="";
		$peroneCuantotiempo="";
		$peroneComosetrato="";
		$tarsianosCuantotiempo="";
		$tarsianosComosetrato="";
		$padeces="";
		$padecesprobelmas="";
		$dfFcar="";
		$dfFcarres="";
		// paso 4

		$pFnctipo="";
		$pFnchace="";
		$pFncCuantos="";
		$pFncCuantas="";
		$pFctipo="";
		$pFchace="";
		$pFcCuantos="";
		$pFcCuantas="";
		$hasEntrenado="";
		$hasEntrenadoPersonal="";
		$entrabaInsCuenta="";
		$desdecuendo="";
		$cuentosDiasEn="";
		$cuentosHorasEn="";
		$utilizasMaPe="";
		$utilizasClases="";
		//paso 5
		$cuantasHorasd="";
		$utilizasMaPe="";
		$conqueHorario="";
		$quediasDispones="";
		$cuantotiempoAlGym="";
		$conqueEquipocardioc="";
		$conqueEquipoPesocuen="";
		$quetipoClaseGruputilizar="";
		$objmejorDepoEspecificaresistencia="";
		$objmejorDepoEspecificaFuerza="";
		$objmejorDepoEspecificaFlexibilidad="";
		$objmejorDepoEspecificaBPErdida="";
		$objmejorDepoEspecificaBGanacia="";
		$opemsvcro="";
		$opemsvespe="";
		$opeSocialSensacion="";
		$opeSocialExpectativas="";
		//paso 6

		$usoFarma="";
		$vefarHacecuanto="";
		$vefarDuranteCuanto="";
		$vefarQuienlerecomendo="";
		$vefarQuelomotivo="";
		$vefarQuienloasesoro="";
		$vefarQuefuequelauso="";
		$vefarQuetipodefarmauso="";
		$vefarQueObjetivologrouso="";
		$vefarUsaActualmentefarma="";
		$vefarTienePensadousarfarma="";
		$vefarObjetivostieneeluso="";
		// dimico 
		$numSuplemento=0;
		$supleNombre="";
		$supleCaracteristicas="";
		$supleMotivo="";
		$supleTiempo="";
		$supleCantidad="";
		$dinamicov="";
		//paso 7
		
		$cdipersoAli="";
		$cdipersoAliporque="";
		$cdipersoANivel="";
		$cdipersoANivelCambios="";
		$cdipersoAlergias="";
		$cdipersoIntoleranciaalimen="";
		$cdipersoAlinoconsumir="";
		$consumoSusAlcolTipo="";
		$consumoSusAlcolcantidad="";
		$consumoSusAlcolFrecuencia="";
		$consumoSusTabacoTipo="";
		$consumoSusTabacocantidad="";
		$consumoSusTabacoFrecuencia="";
		$consumoSusCafeinaTipo="";
		$consumoSusCafeinacocantidad="";
		$consumoSusCafeinaFrecuencia="";
		$consumoSusOtrasTipo="";
		$consumoSusOtrascocantidad="";

		$consumoSusOtrasFrecuencia="";
		$edpduraTiempo="";
		$edpcuantoTiempo="";
		$edpcResulobtuvo="";
		$edpcxqAbandono="";

		$noedpduraTiempo="";
		$noedpcuantoTiempo="";
		$noedpcResulobtuvo="";
		$noedpcxqAbandono="";
		$siedpduraTiempo="";
		$siedpcuantoTiempo="";
		$siedpcResulobtuvo="";
		$siedpcxqAbandono="";
		//paso 8
		$dabasiPeso="";
		$dabasiAltura="";
		$datosAntroespgrasa="";
		$datosAntroespgrasaporce="";
		$datosAntroespmasakg="";
		$datosAntroespmasaporcen="";
		$datosAntroespmasapmuskg="";
		$datosAntroespmasapmusporcentaje="";
		//paso 8
		$patronalic1h="";
		$patronalic1l="";
		$patronalic1d="";
		$patronalic2h="";
		$patronalic2l="";
		$patronalic2d="";
		$patronalic3h="";
		$patronalic3l="";
		$patronalic3d="";
		$patronalic4h="";
		$patronalic4l="";
		$patronalic4d="";
		$patronalic5h="";
		$patronalic5l="";
		$patronalic5d="";
		$patronalic6h="";
		$patronalic6l="";
		$patronalic6d="";

		$recordatorioAlimentos24hras1h="";
		$ecordatorioAlimentos24hras1d="";
		$ecordatorioAlimentos24hras1q="";
		$ecordatorioAlimentos24hras1c="";
		$recordatorioAlimentos24hras2h="";
		$ecordatorioAlimentos24hras2d="";
		$ecordatorioAlimentos24hras2q="";
		$ecordatorioAlimentos24hras2c="";
		$recordatorioAlimentos24hras3h="";
		$ecordatorioAlimentos24hras3d="";
		$ecordatorioAlimentos24hras3q="";
		$ecordatorioAlimentos24hras3c="";
		$recordatorioAlimentos24hras4h="";
		$ecordatorioAlimentos24hras4d="";
		$ecordatorioAlimentos24hras4q="";
		$ecordatorioAlimentos24hras4c="";
		$recordatorioAlimentos24hras5h="";
		$ecordatorioAlimentos24hras5d="";
		$ecordatorioAlimentos24hras5q="";
		$ecordatorioAlimentos24hras5c="";
		$recordatorioAlimentos24hras6h="";
		$ecordatorioAlimentos24hras6d="";
		$ecordatorioAlimentos24hras6q="";
		$ecordatorioAlimentos24hras6c="";
		//paso 9
		$padDormido="";
		$padRecostado="";
		$padMuysedentario="";
		$padsedentario="";
		$padmuyligeramenteactivo="";
		$padligeramenteactivo="";
		$padmoderadamenteactivo="";
		$padactivo="";
		$padmuyactivo="";
		$padExtemadamenteactivo="";
		$padDormidodes="";
		$padRecostadodes="";
		$padMuysedentariodes="";
		$padsedentariodes="";
		$padmuyligeramenteactivodes="";
		$padligeramenteactivodes="";
		$padmoderadamenteactivodes="";
		$padactivodes="";
		$padmuyactivodes="";
		$padExtemadamenteactivodes="";
		$pEVidaTipo="";
		$pEVidaTipo2="";

		$numActividad=0;
		$dinamicoactividad="";

		

		if(isset($_SESSION['idcliente'])){

			$idclientese = $this->session->idcliente;
			$query=$this->cliente_models->getid($idclientese);
			$row = $query->row();
			$pedidoInicial=$row->pedidoInicial;
			$nombre=$row->nombre;
			$sexo=$row->genero;
			$fecha=$row->fecha_nacimento;
			$telefono=$row->telefono;
			$WhatsApp=$row->movil;
			$email=$row->email;
			$password=$row->password;
			$perfil=$row->perfil_facebook;
			$domicio=$row->domicilio;
			$colonia=$row->colonia;
			$ciudad=$row->ciudad;
			$estado=$row->estado;
			$Pais=$row->pais;
			$cp=$row->cp;
			$nivel_motivacion=$row->nivel_motivacion;
			$objetivo_principal=$row->objetivo_principal;

			$queryv=$this->cuestionario_models->buscar($idclientese);
			$rowv = $queryv->row();
			$cadenapaso1=$rowv->paso1;
			if(!empty($cadenapaso1)){
				$datos1=file_get_contents($cadenapaso1);
				$listav = explode("|",$datos1);
				$nivelEducativo=	$listav[1];
				$actividadLaboral=	$listav[2];
				$nivelSocioeconomico=	$listav[3];
				$actividadocio=	$listav[4];
				$estadocivil=	$listav[5];
				$cuantosHijos=	$listav[6];
				$conquienvives=	$listav[7];
				$quienpreparaTucomida=	$listav[8];
				$niveldeEstres=	$listav[9];
				$horasdeTiempo=	$listav[10];
				$cuantasvecesdefecta=	$listav[11];
				$cuantasVecesOrina=	$listav[12];
			}
			$cadenapaso2=$rowv->paso2;
			if(!empty($cadenapaso2)){
				$datos2=file_get_contents($cadenapaso2);
				$listav = explode("|",$datos2);
				$vertebraCuantotiempo=$listav[1];
				$vertebraComosetrato=$listav[2];
				$vdorsalesCuantotiempo=$listav[3];
				$vdorsalesComosetrato=$listav[4];
				$vdLumbaresCuantotiempo=$listav[5];
				$vdLumbaresComosetrato=$listav[6];
				$aHombroCuantotiempo=$listav[7];
				$aHombroComosetrato=$listav[8];
				$aCodoCuantotiempo=$listav[9];
				$aCodoComosetrato=$listav[10];
				$aMunecaCuantotiempo=$listav[11];
				$aMunecaComosetrato=$listav[12];
				$adedosCuantotiempo=$listav[13];
				$adedosComosetrato=$listav[14];
				$aCaderaCuantotiempo=$listav[15];
				$aCaderaComosetrato=$listav[16];
				$aRodillaCuantotiempo=$listav[17];
				$aRodillaComosetrato=$listav[18];
				$aTobilloCuantotiempo=$listav[19];
				$aTobilloComosetrato=$listav[20];
				$humeroCuantotiempo=$listav[21];
				$humeroComosetrato=$listav[22];
				$radioCuantotiempo=$listav[23];
				$radioComosetrato=$listav[24];
				$cubitoCuantotiempo=$listav[25];
				$cubitoComosetrato=$listav[26];
				$carpianosCuantotiempo=$listav[27];
				$carpianosComosetrato=$listav[28];
				$falangesCuantotiempo=$listav[29];
				$falangesComosetrato=$listav[30];
				$claviculasCuantotiempo=$listav[31];
				$claviculasComosetrato=$listav[32];
				$costillasCuantotiempo=$listav[33];
				$costillasComosetrato=$listav[34];
				$craneoCuantotiempo=$listav[35];
				$craneoComosetrato=$listav[36];
				$caderaCuantotiempo=$listav[37];
				$caderaComosetrato=$listav[38];
				$femurCuantotiempo=$listav[39];
				$femurComosetrato=$listav[40];
				$tibiaCuantotiempo=$listav[41];
				$tibiaComosetrato=$listav[42];
				$peroneCuantotiempo=$listav[43];
				$peroneComosetrato=$listav[44];
				$tarsianosCuantotiempo=$listav[45];
				$tarsianosComosetrato=$listav[46];
				$padeces=$listav[47];
				$padecesprobelmas=$listav[48];
				$dfFcar=$listav[49];
				$dfFcarres=$listav[50];
				
			}

			$cadenapaso3=$rowv->paso3;
			if(!empty($cadenapaso3)){
				$datos1=file_get_contents($cadenapaso3);
				$listav = explode("|",$datos1);
				
				$pFnctipo=$listav[1];
				$pFnchace=$listav[2];
				$pFncCuantos=$listav[3];
				$pFncCuantas=$listav[4];
				$pFctipo=$listav[5];
				$pFchace=$listav[6];
				$pFcCuantos=$listav[7];
				$pFcCuantas=$listav[8];
				$hasEntrenado=$listav[9];
				$hasEntrenadoPersonal=$listav[10];
				$entrabaInsCuenta=$listav[11];
				$desdecuendo=$listav[12];
				$cuentosDiasEn=$listav[13];
				$cuentosHorasEn=$listav[14];
				$utilizasMaPe=$listav[15];
				$utilizasClases=$listav[16];
			}

			$cadenapaso4=$rowv->paso4;
			if(!empty($cadenapaso4)){
				$datos1=file_get_contents($cadenapaso4);
				$listav = explode("|",$datos1);
				
				$cuantasHorasd=$listav[1];
				$utilizasMaPe=$listav[2];
				$conqueHorario=$listav[3];
				$quediasDispones=$listav[4];
				$cuantotiempoAlGym=$listav[5];
				$conqueEquipocardioc=$listav[6];
				$conqueEquipoPesocuen=$listav[7];
				$quetipoClaseGruputilizar=$listav[8];
				$objmejorDepoEspecificaresistencia=$listav[9];
				$objmejorDepoEspecificaFuerza=$listav[10];
				$objmejorDepoEspecificaFlexibilidad=$listav[11];
				$objmejorDepoEspecificaBPErdida=$listav[12];
				$objmejorDepoEspecificaBGanacia=$listav[13];
				$opemsvcro=$listav[14];
				$opemsvespe=$listav[15];
				$opeSocialSensacion=$listav[16];
				$opeSocialExpectativas=$listav[17];
			}
			$cadenapaso5=$rowv->paso5;
			if(!empty($cadenapaso5)){
				$datos1=file_get_contents($cadenapaso5);
				$listav = explode("|",$datos1);
				
				$usoFarma=$listav[1];
				$vefarHacecuanto=$listav[2];
				$vefarDuranteCuanto=$listav[3];
				$vefarQuienlerecomendo=$listav[4];
				$vefarQuelomotivo=$listav[5];
				$vefarQuienloasesoro=$listav[6];
				$vefarQuefuequelauso=$listav[7];
				$vefarQuetipodefarmauso=$listav[8];
				$vefarQueObjetivologrouso=$listav[9];
				$vefarUsaActualmentefarma=$listav[10];
				$vefarTienePensadousarfarma=$listav[11];
				$vefarObjetivostieneeluso=$listav[12];
				$supleNombre=$listav[13];
				$supleCaracteristicas=$listav[14];
				$supleMotivo=$listav[15];
				$supleTiempo=$listav[16];
				$supleCantidad=$listav[17];
				$valorSuplemne=$listav[18];


				$suplementos = explode("&",$datos1);
				$verSuplem = count($suplementos);
				if($verSuplem!=1){
					
					$verSuplemen=$suplementos[1];
					$cantidadSuplementosExtra = explode("-",$verSuplemen);
					$resultado = count($cantidadSuplementosExtra);
					$numSuplemento=$resultado;
					$num=1;
					for($i=0;$i<$resultado;$i++){

						$s1 = explode("_",$cantidadSuplementosExtra[$i]);
						$dinamicov.= '<div class="dzen_container">
						<div class="dzen_column_DD_span11">
						<div class="dzen-accordion" data-expanded="1" role="tablist">
						<!-- incio -->
						<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
						Suplemento</h3>
						<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">

						<div class="dzen_column_DD_span13"></div>
						<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
						<input type="text"  value="'.$s1[0].'" name="suple'.$num.'Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
						</div>
						</div>
						<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

						<input type="text" value="'.$s1[1].'" name="suple'.$num.'Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

						</div>
						</div>

						<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
						<input type="text" value="'.$s1[2].'" name="suple'.$num.'Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
						</div>
						</div>
						<div class="dzen_column_DD_span6">

						<div class="margin_bottom">

						<input type="text" value="'.$s1[3].'" name="suple'.$num.'Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

						</div>
						</div>

						<div class="dzen_column_DD_span5">

						<div class="margin_bottom">
						<input type="text" value="'.$s1[4].'" name="suple'.$num.'Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
						</div>
						</div>
						</div>
						<!-- fin -->
						</div>
						</div>

						</div>';
						$num++;

					}

					$dinamicov.= '<div id="siguiente'.($num).'"></div>';
				}

				//echo $dinamicov;
				

			}

			$cadenapaso6=$rowv->paso6;
			if(!empty($cadenapaso6)){
				$datos1=file_get_contents($cadenapaso6);
				$listav = explode("|",$datos1);
				
				$cdipersoAli=	$listav[1];
				$cdipersoAliporque=	$listav[2];
				$cdipersoANivel=	$listav[3];
				$cdipersoANivelCambios=	$listav[4];
				$cdipersoAlergias=	$listav[5];
				$cdipersoIntoleranciaalimen=	$listav[6];
				$cdipersoAlinoconsumir=	$listav[7];
				$consumoSusAlcolTipo=	$listav[8];
				$consumoSusAlcolcantidad=	$listav[9];
				$consumoSusAlcolFrecuencia=	$listav[10];
				$consumoSusTabacoTipo=	$listav[11];
				$consumoSusTabacocantidad=	$listav[12];
				$consumoSusTabacoFrecuencia=	$listav[13];
				$consumoSusCafeinaTipo=	$listav[14];
				$consumoSusCafeinacocantidad=	$listav[15];
				$consumoSusCafeinaFrecuencia=	$listav[16];
				$consumoSusOtrasTipo=	$listav[17];
				$consumoSusOtrascocantidad=	$listav[18];
				$consumoSusOtrasFrecuencia=	$listav[19];
				$edpduraTiempo=	$listav[20];
				$edpcuantoTiempo=	$listav[21];
				$edpcResulobtuvo=	$listav[22];
				$edpcxqAbandono=	$listav[23];
				$noedpduraTiempo=	$listav[24];
				$noedpcuantoTiempo=	$listav[25];
				$noedpcResulobtuvo=	$listav[26];
				$noedpcxqAbandono=	$listav[27];
				$siedpduraTiempo=	$listav[28];
				$siedpcuantoTiempo=	$listav[29];
				$siedpcResulobtuvo=	$listav[30];
				$siedpcxqAbandono=	$listav[31];
			}

			$cadenapaso7=$rowv->paso7;
			if(!empty($cadenapaso7)){
				$datos1=file_get_contents($cadenapaso7);
				$listav = explode("|",$datos1);
				
				$dabasiPeso=	$listav[1];
				$dabasiAltura=	$listav[2];
				$datosAntroespgrasa=	$listav[3];
				$datosAntroespgrasaporce=	$listav[4];
				$datosAntroespmasakg=	$listav[5];
				$datosAntroespmasaporcen=	$listav[6];
				$datosAntroespmasapmuskg=	$listav[7];
				$datosAntroespmasapmusporcentaje=	$listav[8];
			}

			$cadenapaso8=$rowv->paso8;
			if(!empty($cadenapaso8)){
				$datos1=file_get_contents($cadenapaso8);
				$listav = explode("|",$datos1);
				
				$patronalic1h=	$listav[1];
				$patronalic1l=	$listav[2];
				$patronalic1d=	$listav[3];
				$patronalic2h=	$listav[4];
				$patronalic2l=	$listav[5];
				$patronalic2d=	$listav[6];
				$patronalic3h=	$listav[7];
				$patronalic3l=	$listav[8];
				$patronalic3d=	$listav[9];
				$patronalic4h=	$listav[10];
				$patronalic4l=	$listav[11];
				$patronalic4d=	$listav[12];
				$patronalic5h=	$listav[13];
				$patronalic5l=	$listav[14];
				$patronalic5d=	$listav[15];
				$patronalic6h=	$listav[16];
				$patronalic6l=	$listav[17];
				$patronalic6d=	$listav[18];

				$recordatorioAlimentos24hras1h=	$listav[19];
				$ecordatorioAlimentos24hras1d=	$listav[20];
				$ecordatorioAlimentos24hras1q=	$listav[21];
				$ecordatorioAlimentos24hras1c=	$listav[22];

				$recordatorioAlimentos24hras2h=	$listav[23];
				$ecordatorioAlimentos24hras2d=	$listav[24];
				$ecordatorioAlimentos24hras2q=	$listav[25];
				$ecordatorioAlimentos24hras2c=	$listav[26];

				$recordatorioAlimentos24hras3h=	$listav[27];
				$ecordatorioAlimentos24hras3d=	$listav[28];
				$ecordatorioAlimentos24hras3q=	$listav[29];
				$ecordatorioAlimentos24hras3c=	$listav[30];

				$recordatorioAlimentos24hras4h=	$listav[31];
				$ecordatorioAlimentos24hras4d=	$listav[32];
				$ecordatorioAlimentos24hras4q=	$listav[33];
				$ecordatorioAlimentos24hras4c=	$listav[34];

				$recordatorioAlimentos24hras5h=	$listav[35];
				$ecordatorioAlimentos24hras5d=	$listav[36];
				$ecordatorioAlimentos24hras5q=	$listav[37];
				$ecordatorioAlimentos24hras5c=	$listav[38];

				$recordatorioAlimentos24hras6h=	$listav[39];
				$ecordatorioAlimentos24hras6d=	$listav[40];
				$ecordatorioAlimentos24hras6q=	$listav[41];
				$ecordatorioAlimentos24hras6c=	$listav[42];
			}

			$cadenapaso9=$rowv->paso9;
			if(!empty($cadenapaso9)){
				$datos1=file_get_contents($cadenapaso9);
				$listav = explode("|",$datos1);
				$padDormido=$listav[1];
				$padRecostado=$listav[2];
				$padMuysedentario=$listav[3];
				$padsedentario=$listav[4];
				$padmuyligeramenteactivo=$listav[5];
				$padligeramenteactivo=$listav[6];
				$padmoderadamenteactivo=$listav[7];
				$padactivo=$listav[8];
				$padmuyactivo=$listav[9];
				$padExtemadamenteactivo=$listav[10];
				$padDormidodes=$listav[11];
				$padRecostadodes=$listav[12];
				$padMuysedentariodes=$listav[13];
				$padsedentariodes=$listav[14];
				$padmuyligeramenteactivodes=$listav[15];
				$padligeramenteactivodes=$listav[16];
				$padmoderadamenteactivodes=$listav[17];
				$padactivodes=$listav[18];
				$padmuyactivodes=$listav[19];
				$padExtemadamenteactivodes=$listav[20];
				$pEVidaTipo=$listav[21];
				$pEVidaTipo2=$listav[22];
				$numActividad=$listav[23];


				$activiadees= explode("&",$datos1);
				$verSuplem1 = count($activiadees);
				if($verSuplem1!=1){
					
					$verSuplemen1=$activiadees[1];
					$cantidadSuplementosExtra1 = explode("-",$verSuplemen1);
					$resultado1 = count($cantidadSuplementosExtra1);				
					$numActividad=$resultado1;
					$num=1;
					for($i=0;$i<$resultado1;$i++){

						$s1 = explode("_",$cantidadSuplementosExtra1[$i]);



						$dinamicoactividad.='<div class="dzen_container">
						<div class="dzen_column_DD_span11">

						<div class="dzen_column_DD_span11"></div>
						<div class="dzen_column_DD_span6">

						<div class="margin_bottom">
						<input type="text"  value="'.$s1[0].'" name="pEVidaTipoa'.$num.'" maxlength="300" class="dzencf-text" placeholder="Tipo de actividad diaria, Ejemplo :Despertarse por la mañana" >

						</div>
						</div>
						<div class="dzen_column_DD_span4">

						<div class="margin_bottom">

						<input type="text"  value="'.$s1[1].'" name="pEVidaTipoh'.$num.'" maxlength="300" class="dzencf-text" placeholder="Horario" >

						</div>
						</div>



						</div>
						</div>';

						


						$num++;

					}
					$dinamicoactividad.= '<div id="actividad'.($num).'"></div>';
				}
				


			}
			

		}else{
			if (!empty($this->input->get('pedidoInicial'))) {
				
				$pedidoInicial=$this->input->get('pedidoInicial');
				$query=$this->cliente_models->buscar($pedidoInicial);
				$row = $query->row();
				$nombre=$row->nombre;
				$sexo=$row->genero;
				$fecha=$row->fecha_nacimento;
				$telefono=$row->telefono;
				$WhatsApp=$row->movil;
				$email=$row->email;
				$password=$row->password;
				$perfil=$row->perfil_facebook;
				$domicio=$row->domicilio;
				$colonia=$row->colonia;
				$ciudad=$row->ciudad;
				$estado=$row->estado;
				$Pais=$row->pais;
				$cp=$row->cp;
				$nivel_motivacion=$row->nivel_motivacion;
				$objetivo_principal=$row->objetivo_principal;

				


			}

		}
		$data['nombre']=$nombre;
		$data['sexo']=$sexo;
		$data['fecha']=$fecha;
		$data['telefono']=$telefono;
		$data['WhatsApp']=$WhatsApp;
		$data['email']=$email;
		$data['perfil']=$perfil;
		$data['domicio']=$domicio;
		$data['password']=$password;
		$data['colonia']=$colonia;
		$data['ciudad']=$ciudad;
		$data['estado']=$estado;
		$data['Pais']=$Pais;
		$data['cp']=$cp;
		$data['nivel_motivacion']=$nivel_motivacion;
		$data['objetivo_principal']=$objetivo_principal;
		$data['pedidoInicial']=$pedidoInicial;
// paso 2 

		
		$data['nivelEducativo']=$nivelEducativo;
		$data['actividadLaboral']=$actividadLaboral;
		$data['nivelSocioeconomico']=$nivelSocioeconomico;
		$data['actividadocio']=$actividadocio;
		$data['estadocivil']=$estadocivil;
		$data['cuantosHijos']=$cuantosHijos;
		$data['conquienvives']=$conquienvives;
		$data['quienpreparaTucomida']=$quienpreparaTucomida;
		$data['niveldeEstres']=$niveldeEstres;
		$data['horasdeTiempo']=$horasdeTiempo;
		$data['cuantasvecesdefecta']=$cuantasvecesdefecta;
		$data['cuantasVecesOrina']=$cuantasVecesOrina;
		/// paso 3
		$data['vertebraCuantotiempo']=$vertebraCuantotiempo;
		$data['vertebraComosetrato']=$vertebraComosetrato;
		$data['vdorsalesCuantotiempo']=$vdorsalesCuantotiempo;
		$data['vdorsalesComosetrato']=$vdorsalesComosetrato;
		$data['vdLumbaresCuantotiempo']=$vdLumbaresCuantotiempo;
		$data['vdLumbaresComosetrato']=$vdLumbaresComosetrato;
		$data['aHombroCuantotiempo']=$aHombroCuantotiempo;
		$data['aHombroComosetrato']=$aHombroComosetrato;
		$data['aCodoCuantotiempo']=$aCodoCuantotiempo;
		$data['aCodoComosetrato']=$aCodoComosetrato;
		$data['aMunecaCuantotiempo']=$aMunecaCuantotiempo;
		$data['aMunecaComosetrato']=$aMunecaComosetrato;
		$data['adedosCuantotiempo']=$adedosCuantotiempo;
		$data['adedosComosetrato']=$adedosComosetrato;
		$data['aCaderaCuantotiempo']=$aCaderaCuantotiempo;
		$data['aCaderaComosetrato']=$aCaderaComosetrato;
		$data['aRodillaCuantotiempo']=$aRodillaCuantotiempo;
		$data['aRodillaComosetrato']=$aRodillaComosetrato;
		$data['aTobilloCuantotiempo']=$aTobilloCuantotiempo;
		$data['aTobilloComosetrato']=$aTobilloComosetrato;
		$data['humeroCuantotiempo']=$humeroCuantotiempo;
		$data['humeroComosetrato']=$humeroComosetrato;
		$data['radioCuantotiempo']=$radioCuantotiempo;
		$data['radioComosetrato']=$radioComosetrato;
		$data['cubitoCuantotiempo']=$cubitoCuantotiempo;
		$data['cubitoComosetrato']=$cubitoComosetrato;
		$data['carpianosCuantotiempo']=$carpianosCuantotiempo;
		$data['carpianosComosetrato']=$carpianosComosetrato;
		$data['falangesCuantotiempo']=$falangesCuantotiempo;
		$data['falangesComosetrato']=$falangesComosetrato;
		$data['claviculasCuantotiempo']=$claviculasCuantotiempo;
		$data['claviculasComosetrato']=$claviculasComosetrato;
		$data['costillasCuantotiempo']=$costillasCuantotiempo;
		$data['costillasComosetrato']=$costillasComosetrato;
		$data['craneoCuantotiempo']=$craneoCuantotiempo;
		$data['craneoComosetrato']=$craneoComosetrato;
		$data['caderaCuantotiempo']=$caderaCuantotiempo;
		$data['caderaComosetrato']=$caderaComosetrato;
		$data['femurCuantotiempo']=$femurCuantotiempo;
		$data['femurComosetrato']=$femurComosetrato;
		$data['tibiaCuantotiempo']=$tibiaCuantotiempo;
		$data['tibiaComosetrato']=$tibiaComosetrato;
		$data['peroneCuantotiempo']=$peroneCuantotiempo;
		$data['peroneComosetrato']=$peroneComosetrato;
		$data['tarsianosCuantotiempo']=$tarsianosCuantotiempo;
		$data['tarsianosComosetrato']=$tarsianosComosetrato;
		$data['padeces']=$padeces;
		$data['padecesprobelmas']=$padecesprobelmas;
		$data['dfFcar']=$dfFcar;
		$data['dfFcarres']=$dfFcarres;
		//paso 4
		$data['pFnctipo']=$pFnctipo;
		$data['pFnchace']=$pFnchace;
		$data['pFncCuantos']=$pFncCuantos;
		$data['pFncCuantas']=$pFncCuantas;
		$data['pFctipo']=$pFctipo;
		$data['pFchace']=$pFchace;
		$data['pFcCuantos']=$pFcCuantos;
		$data['pFcCuantas']=$pFcCuantas;
		$data['hasEntrenado']=$hasEntrenado;
		$data['hasEntrenadoPersonal']=$hasEntrenadoPersonal;
		$data['entrabaInsCuenta']=$entrabaInsCuenta;
		$data['desdecuendo']=$desdecuendo;
		$data['cuentosDiasEn']=$cuentosDiasEn;
		$data['cuentosHorasEn']=$cuentosHorasEn;
		$data['utilizasMaPe']=$utilizasMaPe;
		$data['utilizasClases']=$utilizasClases;
//paso 5
		$data['cuantasHorasd']=$cuantasHorasd;
		$data['utilizasMaPe']=$utilizasMaPe;
		$data['conqueHorario']=$conqueHorario;
		$data['quediasDispones']=$quediasDispones;
		$data['cuantotiempoAlGym']=$cuantotiempoAlGym;
		$data['conqueEquipocardioc']=$conqueEquipocardioc;
		$data['conqueEquipoPesocuen']=$conqueEquipoPesocuen;
		$data['quetipoClaseGruputilizar']=$quetipoClaseGruputilizar;
		$data['objmejorDepoEspecificaresistencia']=$objmejorDepoEspecificaresistencia;
		$data['objmejorDepoEspecificaFuerza']=$objmejorDepoEspecificaFuerza;
		$data['objmejorDepoEspecificaFlexibilidad']=$objmejorDepoEspecificaFlexibilidad;
		$data['objmejorDepoEspecificaBPErdida']=$objmejorDepoEspecificaBPErdida;
		$data['objmejorDepoEspecificaBGanacia']=$objmejorDepoEspecificaBGanacia;
		$data['opemsvcro']=$opemsvcro;
		$data['opemsvespe']=$opemsvespe;
		$data['opeSocialSensacion']=$opeSocialSensacion;
		$data['opeSocialExpectativas']=$opeSocialExpectativas;
//paso 6
		$data['usoFarma']=$usoFarma;
		$data['vefarHacecuanto']=$vefarHacecuanto;
		$data['vefarDuranteCuanto']=$vefarDuranteCuanto;
		$data['vefarQuienlerecomendo']=$vefarQuienlerecomendo;
		$data['vefarQuelomotivo']=$vefarQuelomotivo;
		$data['vefarQuienloasesoro']=$vefarQuienloasesoro;
		$data['vefarQuefuequelauso']=$vefarQuefuequelauso;
		$data['vefarQuetipodefarmauso']=$vefarQuetipodefarmauso;
		$data['vefarQueObjetivologrouso']=$vefarQueObjetivologrouso;
		$data['vefarUsaActualmentefarma']=$vefarUsaActualmentefarma;
		$data['vefarTienePensadousarfarma']=$vefarTienePensadousarfarma;
		$data['vefarObjetivostieneeluso']=$vefarObjetivostieneeluso;

		$data['numSuplemento']=$numSuplemento;
		$data['supleNombre']=$supleNombre;
		$data['supleCaracteristicas']=$supleCaracteristicas;
		$data['supleMotivo']=$supleMotivo;
		$data['supleTiempo']=$supleTiempo;
		$data['supleCantidad']=$supleCantidad;

		$data['dinamicov']=$dinamicov;
		//paso 7
		$data['cdipersoAli']=$cdipersoAli;
		$data['cdipersoAliporque']=$cdipersoAliporque;
		$data['cdipersoANivel']=$cdipersoANivel;
		$data['cdipersoANivelCambios']=$cdipersoANivelCambios;
		$data['cdipersoAlergias']=$cdipersoAlergias;
		$data['cdipersoIntoleranciaalimen']=$cdipersoIntoleranciaalimen;
		$data['cdipersoAlinoconsumir']=$cdipersoAlinoconsumir;
		$data['consumoSusAlcolTipo']=$consumoSusAlcolTipo;
		$data['consumoSusAlcolcantidad']=$consumoSusAlcolcantidad;
		$data['consumoSusAlcolFrecuencia']=$consumoSusAlcolFrecuencia;
		$data['consumoSusTabacoTipo']=$consumoSusTabacoTipo;
		$data['consumoSusTabacocantidad']=$consumoSusTabacocantidad;
		$data['consumoSusTabacoFrecuencia']=$consumoSusTabacoFrecuencia;
		$data['consumoSusCafeinaTipo']=$consumoSusCafeinaTipo;
		$data['consumoSusCafeinacocantidad']=$consumoSusCafeinacocantidad;
		$data['consumoSusCafeinaFrecuencia']=$consumoSusCafeinaFrecuencia;
		$data['consumoSusOtrasTipo']=$consumoSusOtrasTipo;
		$data['consumoSusOtrascocantidad']=$consumoSusOtrascocantidad;
		$data['consumoSusOtrasFrecuencia']=$consumoSusOtrasFrecuencia;
		$data['edpduraTiempo']=$edpduraTiempo;
		$data['edpcuantoTiempo']=$edpcuantoTiempo;
		$data['edpcResulobtuvo']=$edpcResulobtuvo;
		$data['edpcxqAbandono']=$edpcxqAbandono;
		$data['noedpduraTiempo']=$noedpduraTiempo;
		$data['noedpcuantoTiempo']=$noedpcuantoTiempo;
		$data['noedpcResulobtuvo']=$noedpcResulobtuvo;
		$data['noedpcxqAbandono']=$noedpcxqAbandono;
		$data['siedpduraTiempo']=$siedpduraTiempo;
		$data['siedpcuantoTiempo']=$siedpcuantoTiempo;
		$data['siedpcResulobtuvo']=$siedpcResulobtuvo;
		$data['siedpcxqAbandono']=$siedpcxqAbandono;

		//paso 8
		//
		$data['dabasiPeso']=$dabasiPeso;
		$data['dabasiAltura']=$dabasiAltura;
		$data['datosAntroespgrasa']=$datosAntroespgrasa;
		$data['datosAntroespgrasaporce']=$datosAntroespgrasaporce;
		$data['datosAntroespmasakg']=$datosAntroespmasakg;
		$data['datosAntroespmasaporcen']=$datosAntroespmasaporcen;
		$data['datosAntroespmasapmuskg']=$datosAntroespmasapmuskg;
		$data['datosAntroespmasapmusporcentaje']=$datosAntroespmasapmusporcentaje;
		//paso 9
		$data['patronalic1h']=$patronalic1h;
		$data['patronalic1l']=$patronalic1l;
		$data['patronalic1d']=$patronalic1d;

		$data['patronalic2h']=$patronalic2h;
		$data['patronalic2l']=$patronalic2l;
		$data['patronalic2d']=$patronalic2d;

		$data['patronalic3h']=$patronalic3h;
		$data['patronalic3l']=$patronalic3l;
		$data['patronalic3d']=$patronalic3d;

		$data['patronalic4h']=$patronalic4h;
		$data['patronalic4l']=$patronalic4l;
		$data['patronalic4d']=$patronalic4d;

		$data['patronalic5h']=$patronalic5h;
		$data['patronalic5l']=$patronalic5l;
		$data['patronalic5d']=$patronalic5d;

		$data['patronalic6h']=$patronalic6h;
		$data['patronalic6l']=$patronalic6l;
		$data['patronalic6d']=$patronalic6d;
		$data['recordatorioAlimentos24hras1h']=$recordatorioAlimentos24hras1h;
		$data['ecordatorioAlimentos24hras1d']=$ecordatorioAlimentos24hras1d;
		$data['ecordatorioAlimentos24hras1q']=$ecordatorioAlimentos24hras1q;
		$data['ecordatorioAlimentos24hras1c']=$ecordatorioAlimentos24hras1c;

		$data['recordatorioAlimentos24hras2h']=$recordatorioAlimentos24hras2h;
		$data['ecordatorioAlimentos24hras2d']=$ecordatorioAlimentos24hras2d;
		$data['ecordatorioAlimentos24hras2q']=$ecordatorioAlimentos24hras2q;
		$data['ecordatorioAlimentos24hras2c']=$ecordatorioAlimentos24hras2c;

		$data['recordatorioAlimentos24hras3h']=$recordatorioAlimentos24hras3h;
		$data['ecordatorioAlimentos24hras3d']=$ecordatorioAlimentos24hras3d;
		$data['ecordatorioAlimentos24hras3q']=$ecordatorioAlimentos24hras3q;
		$data['ecordatorioAlimentos24hras3c']=$ecordatorioAlimentos24hras3c;

		$data['recordatorioAlimentos24hras4h']=$recordatorioAlimentos24hras4h;
		$data['ecordatorioAlimentos24hras4d']=$ecordatorioAlimentos24hras4d;
		$data['ecordatorioAlimentos24hras4q']=$ecordatorioAlimentos24hras4q;
		$data['ecordatorioAlimentos24hras4c']=$ecordatorioAlimentos24hras4c;

		$data['recordatorioAlimentos24hras5h']=$recordatorioAlimentos24hras5h;
		$data['ecordatorioAlimentos24hras5d']=$ecordatorioAlimentos24hras5d;
		$data['ecordatorioAlimentos24hras5q']=$ecordatorioAlimentos24hras5q;
		$data['ecordatorioAlimentos24hras5c']=$ecordatorioAlimentos24hras5c;

		$data['recordatorioAlimentos24hras6h']=$recordatorioAlimentos24hras6h;
		$data['ecordatorioAlimentos24hras6d']=$ecordatorioAlimentos24hras6d;
		$data['ecordatorioAlimentos24hras6q']=$ecordatorioAlimentos24hras6q;
		$data['ecordatorioAlimentos24hras6c']=$ecordatorioAlimentos24hras6c;

//paso 9
		$data['padDormido']=$padDormido;
		$data['padRecostado']=$padRecostado;
		$data['padMuysedentario']=$padMuysedentario;
		$data['padsedentario']=$padsedentario;
		$data['padmuyligeramenteactivo']=$padmuyligeramenteactivo;
		$data['padligeramenteactivo']=$padligeramenteactivo;
		$data['padmoderadamenteactivo']=$padmoderadamenteactivo;
		$data['padactivo']=$padactivo;
		$data['padmuyactivo']=$padmuyactivo;
		$data['padExtemadamenteactivo']=$padExtemadamenteactivo;
		$data['padDormidodes']=$padDormidodes;
		$data['padRecostadodes']=$padRecostadodes;
		$data['padMuysedentariodes']=$padMuysedentariodes;
		$data['padsedentariodes']=$padsedentariodes;
		$data['padmuyligeramenteactivodes']=$padmuyligeramenteactivodes;
		$data['padligeramenteactivodes']=$padligeramenteactivodes;
		$data['padmoderadamenteactivodes']=$padmoderadamenteactivodes;
		$data['padactivodes']=$padactivodes;
		$data['padmuyactivodes']=$padmuyactivodes;
		$data['padExtemadamenteactivodes']=$padExtemadamenteactivodes;
		$data['pEVidaTipo']=$pEVidaTipo;
		$data['pEVidaTipo2']=$pEVidaTipo2;
		$data['numActividad']=$numActividad;
		$data['dinamicoactividad']=$dinamicoactividad;


		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);

		$var=$this->verificarPestania();
		$data['verificarPestania']=$var;
		$varv=explode('-',$var);
		$resultado = count($varv);
		$data['seleccionPestalla']=$resultado;
//echo $resultado;
		$this->load->view('formulario',$data);
	}


	public function guardarcliente()
	{


		$nombreCompleto = $this->input->post('nombreCompleto');
		$sexo = $this->input->post('sexo');
		$fecha = $this->input->post('fecha');
		$telefono = $this->input->post('telefono');
		$WhatsApp = $this->input->post('WhatsApp');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$perfil = $this->input->post('perfil');
		$domicio = $this->input->post('domicio');
		$colonia = $this->input->post('colonia');
		$ciudad = $this->input->post('ciudad');
		$estado = $this->input->post('estado');
		$Pais = $this->input->post('Pais');
		$cp = $this->input->post('cp');
		$nivel_motivacion = $this->input->post('nivel_motivacion');
		$objetivo_principal = $this->input->post('objetivo_principal');
		$pedidoInicial = $this->input->post('pedidoInicial');

		$info = array(
			'nombre' => $nombreCompleto,
			'genero' => $sexo,
			'fecha_nacimento' => $fecha,
			'telefono' => $telefono,
			'email' =>$email,
			'password' =>$password,
			'movil' => $WhatsApp,
			'perfil_facebook' =>$perfil,
			'domicilio' => $domicio,
			'colonia' => $colonia,
			'ciudad' => $ciudad,
			'estado' => $estado,
			'pais' => $Pais,
			'cp' => $cp,
			'idsucursal'=>$this->config->item('idSucursal'),
			'nivel_motivacion' => $nivel_motivacion,
			'objetivo_principal' => $objetivo_principal,
			'pedidoInicial' => $pedidoInicial
		);

		$idcliente=$this->cliente_models->insertar($info);
		$newdata = array('idcliente'  => $idcliente);
		$this->session->set_userdata($newdata);
		$idclientese = $this->session->idcliente;

		$infocues = array('idCliente' => $idclientese);
		$idcliente=$this->cuestionario_models->insertar($infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}

	public function guardarEstilodeVida()
	{
		$idclientese = $this->session->idcliente;
		$nivelEducativo = $this->input->post('nivelEducativo');
		$actividadLaboral = $this->input->post('actividadLaboral');
		$nivelSocioeconomico = $this->input->post('nivelSocioeconomico');
		$actividadocio = $this->input->post('actividadocio');
		$estadocivil = $this->input->post('estadocivil');
		$cuantosHijos = $this->input->post('cuantosHijos');
		$conquienvives = $this->input->post('conquienvives');
		$quienpreparaTucomida = $this->input->post('quienpreparaTucomida');
		$niveldeEstres = $this->input->post('niveldeEstres');
		$horasdeTiempo = $this->input->post('horasdeTiempo');
		$cuantasvecesdefecta = $this->input->post('cuantasvecesdefecta');
		$cuantasVecesOrina = $this->input->post('cuantasVecesOrina');

		$nombre_archivo = "registros/EstilodeVida-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$nivelEducativo.
		"|".$actividadLaboral.
		"|".$nivelSocioeconomico.
		"|".$actividadocio.
		"|".$estadocivil.
		"|".$cuantosHijos.
		"|".$conquienvives.
		"|".$quienpreparaTucomida.
		"|".$niveldeEstres.
		"|".$horasdeTiempo.
		"|".$cuantasvecesdefecta.
		"|".$cuantasVecesOrina;

		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso1' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


		

	}



	public function verificarPestania()
	{
		if(isset($_SESSION['idcliente'])){
			$idclientese = $this->session->idcliente;

			$query=$this->cuestionario_models->buscar($idclientese);
			$row = $query->row();
			$paso1=$row->idCliente;
			$paso2=$row->paso1;
			$paso3=$row->paso2;
			$paso4=$row->paso3;
			$paso5=$row->paso4;
			$paso6=$row->paso5;
			$paso7=$row->paso6;
			$paso8=$row->paso7;
			$paso9=$row->paso8;
			$paso10=$row->paso9;
			$paso11=$row->paso10;
			$activar="";

			if(isset($paso1)){
			 	//tiene valor

				$activar.="1-";
			}
			if(isset($paso2)){
			 	//tiene valor
				$activar.="2-";
			}
			if(isset($paso3)){
			 	//tiene valor
				$activar.="3-";
			}
			if(isset($paso4)){
			 	//tiene valor
				$activar.="4-";
			}
			if(isset($paso5)){
			 	//tiene valor
				$activar.="5-";
			}
			if(isset($paso6)){
			 	//tiene valor
				$activar.="6-";
			}
			if(isset($paso7)){
			 	//tiene valor
				$activar.="7-";
			}
			if(isset($paso8)){
			 	//tiene valor
				$activar.="8-";
			}
			if(isset($paso9)){
			 	//tiene valor
				$activar.="9-";
			}
			if(isset($paso10)){
			 	//tiene valor
				$activar.="10";
			}



			return $activar;

		}else{
			return "";

		}
		//echo "Entroa controller";

	}

	public function guardarHistorias()
	{

		

		$idclientese = $this->session->idcliente;
		$vertebraCuantotiempo = $this->input->post('vertebraCuantotiempo');
		$vertebraComosetrato = $this->input->post('vertebraComosetrato');
		$vdorsalesCuantotiempo = $this->input->post('vdorsalesCuantotiempo');
		$vdorsalesComosetrato = $this->input->post('vdorsalesComosetrato');
		$vdLumbaresCuantotiempo = $this->input->post('vdLumbaresCuantotiempo');
		$vdLumbaresComosetrato = $this->input->post('vdLumbaresComosetrato');
		$aHombroCuantotiempo = $this->input->post('aHombroCuantotiempo');
		$aHombroComosetrato = $this->input->post('aHombroComosetrato');
		$aCodoCuantotiempo = $this->input->post('aCodoCuantotiempo');
		$aCodoComosetrato = $this->input->post('aCodoComosetrato');
		$aMunecaCuantotiempo = $this->input->post('aMunecaCuantotiempo');
		$aMunecaComosetrato = $this->input->post('aMunecaComosetrato');
		$adedosCuantotiempo = $this->input->post('adedosCuantotiempo');
		$adedosComosetrato = $this->input->post('adedosComosetrato');
		$aCaderaCuantotiempo = $this->input->post('aCaderaCuantotiempo');
		$aCaderaComosetrato = $this->input->post('aCaderaComosetrato');
		$aRodillaCuantotiempo = $this->input->post('aRodillaCuantotiempo');
		$aRodillaComosetrato = $this->input->post('aRodillaComosetrato');
		$aTobilloCuantotiempo = $this->input->post('aTobilloCuantotiempo');
		$aTobilloComosetrato = $this->input->post('aTobilloComosetrato');
		$humeroCuantotiempo = $this->input->post('humeroCuantotiempo');


		$nombre_archivo = "registros/Historiamedica-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$vertebraCuantotiempo.
		"|".$vertebraComosetrato.
		"|".$vdorsalesCuantotiempo.
		"|".$vdorsalesComosetrato.
		"|".$vdLumbaresCuantotiempo.
		"|".$vdLumbaresComosetrato.
		"|".$aHombroCuantotiempo.
		"|".$aHombroComosetrato.
		"|".$aCodoCuantotiempo.
		"|".$aCodoComosetrato.
		"|".$aMunecaCuantotiempo.
		"|".$aMunecaComosetrato.
		"|".$adedosCuantotiempo.
		"|".$adedosComosetrato.
		"|".$aCaderaCuantotiempo.
		"|".$aCaderaComosetrato.
		"|".$aRodillaCuantotiempo.
		"|".$aRodillaComosetrato.
		"|".$aTobilloCuantotiempo.
		"|".$aTobilloComosetrato.
		"|".$humeroCuantotiempo.
		"|".$this->input->post('humeroComosetrato').
		"|".$this->input->post('radioCuantotiempo').
		"|".$this->input->post('radioComosetrato').
		"|".$this->input->post('cubitoCuantotiempo').
		"|".$this->input->post('cubitoComosetrato').
		"|".$this->input->post('carpianosCuantotiempo').
		"|".$this->input->post('carpianosComosetrato').
		"|".$this->input->post('falangesCuantotiempo').
		"|".$this->input->post('falangesComosetrato').
		"|".$this->input->post('claviculasCuantotiempo').
		"|".$this->input->post('claviculasComosetrato').
		"|".$this->input->post('costillasCuantotiempo').
		"|".$this->input->post('costillasComosetrato').
		"|".$this->input->post('craneoCuantotiempo').
		"|".$this->input->post('craneoComosetrato').
		"|".$this->input->post('caderaCuantotiempo').
		"|".$this->input->post('caderaComosetrato').
		"|".$this->input->post('femurCuantotiempo').
		"|".$this->input->post('femurComosetrato').
		"|".$this->input->post('tibiaCuantotiempo').
		"|".$this->input->post('tibiaComosetrato').
		"|".$this->input->post('peroneCuantotiempo').
		"|".$this->input->post('peroneComosetrato').
		"|".$this->input->post('tarsianosCuantotiempo').
		"|".$this->input->post('tarsianosComosetrato').
		"|".$this->input->post('padeces').
		"|".$this->input->post('padecesprobelmas').
		"|".$this->input->post('dfFcar').
		"|".$this->input->post('dfFcarres');

		

		




		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso2' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}
	public function guardarExperiencia()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/Experiencias-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('pFnctipo').
		"|".$this->input->post('pFnchace').
		"|".$this->input->post('pFncCuantos').
		"|".$this->input->post('pFncCuantas').
		"|".$this->input->post('pFctipo').
		"|".$this->input->post('pFchace').
		"|".$this->input->post('pFcCuantos').
		"|".$this->input->post('pFcCuantas').
		"|".$this->input->post('hasEntrenado').
		"|".$this->input->post('hasEntrenadoPersonal').
		"|".$this->input->post('entrabaInsCuenta').
		"|".$this->input->post('desdecuendo').
		"|".$this->input->post('cuentosDiasEn').
		"|".$this->input->post('cuentosHorasEn').
		"|".$this->input->post('utilizasMaPe').
		"|".$this->input->post('utilizasClases');

		




		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso3' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}
	public function guardarObjertivos()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/Objetivos-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('cuantasHorasd').
		"|".$this->input->post('utilizasMaPe').
		"|".$this->input->post('conqueHorario').
		"|".$this->input->post('quediasDispones').
		"|".$this->input->post('cuantotiempoAlGym').
		"|".$this->input->post('conqueEquipocardioc').
		"|".$this->input->post('conqueEquipoPesocuen').
		"|".$this->input->post('quetipoClaseGruputilizar').
		"|".$this->input->post('objmejorDepoEspecificaresistencia').
		"|".$this->input->post('objmejorDepoEspecificaFuerza').
		"|".$this->input->post('objmejorDepoEspecificaFlexibilidad').
		"|".$this->input->post('objmejorDepoEspecificaBPErdida').
		"|".$this->input->post('objmejorDepoEspecificaBGanacia').
		"|".$this->input->post('opemsvcro').
		"|".$this->input->post('opemsvespe').
		"|".$this->input->post('opeSocialSensacion').
		"|".$this->input->post('opeSocialExpectativas');

		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso4' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}

	public function guardarSuplementos()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/Suplementos-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('usoFarma').
		"|".$this->input->post('vefarHacecuanto').
		"|".$this->input->post('vefarDuranteCuanto').
		"|".$this->input->post('vefarQuienlerecomendo').
		"|".$this->input->post('vefarQuelomotivo').
		"|".$this->input->post('vefarQuienloasesoro').
		"|".$this->input->post('vefarQuefuequelauso').
		"|".$this->input->post('vefarQuetipodefarmauso').
		"|".$this->input->post('vefarQueObjetivologrouso').
		"|".$this->input->post('vefarUsaActualmentefarma').
		"|".$this->input->post('vefarTienePensadousarfarma').
		"|".$this->input->post('vefarObjetivostieneeluso').
		"|".$this->input->post('supleNombre').
		"|".$this->input->post('supleCaracteristicas').
		"|".$this->input->post('supleMotivo').
		"|".$this->input->post('supleTiempo').
		"|".$this->input->post('supleCantidad').
		"|".$this->input->post('numSuplemento');
		

		$valorSuplemne=$this->input->post('numSuplemento');
		
		if($valorSuplemne!=0){
			$mensaje.="&";


		}

		

		for($i=1;$i<=$valorSuplemne;$i++){
			
			
			$nuevosu=$this->input->post('suple'.$i.'Nombre').
			"_".$this->input->post('suple'.$i.'Caracteristicas').
			"_".$this->input->post('suple'.$i.'Motivo').
			"_".$this->input->post('suple'.$i.'Tiempo').
			"_".$this->input->post('suple'.$i.'Cantidad');
			$bodytag = str_replace("_","",$nuevosu);
			if(trim($bodytag)===""){
			}else{

				if($i==1){

					$mensaje.=$nuevosu;
				}else{
					$mensaje.="-".$nuevosu;
				}
				
				
			}

			

		}


		

		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso5' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}

	public function nuevoSuplemento()
	{
		$conteo=$this->input->get('conteo');
		echo '<div class="dzen_container">
		<div class="dzen_column_DD_span11">
		<div class="dzen-accordion" data-expanded="1" role="tablist">
		<!-- incio -->
		<h3 class="ui-accordion-header" role="tab" id="ui-accordion-1-header-12" aria-controls="ui-accordion-1-panel-12" aria-selected="false" tabindex="0"><span class="ui-accordion-header-icon"></span>
		Suplemento</h3>
		<div class="ui-accordion-content" id="ui-accordion-1-panel-12" aria-labelledby="ui-accordion-1-header-12" role="tabpane12" aria-expanded="false" aria-hidden="true">

		<div class="dzen_column_DD_span13"></div>
		<div class="dzen_column_DD_span5">

		<div class="margin_bottom">
		<input type="text"  name="suple'.$conteo.'Nombre" maxlength="300" class="dzencf-text" placeholder="Nombre" >
		</div>
		</div>
		<div class="dzen_column_DD_span6">

		<div class="margin_bottom">

		<input type="text" name="suple'.$conteo.'Caracteristicas" maxlength="300" class="dzencf-text" placeholder="Características" >

		</div>
		</div>

		<div class="dzen_column_DD_span5">

		<div class="margin_bottom">
		<input type="text" name="suple'.$conteo.'Motivo" maxlength="300" class="dzencf-text" placeholder="Motivo de uso" >
		</div>
		</div>
		<div class="dzen_column_DD_span6">

		<div class="margin_bottom">

		<input type="text" name="suple'.$conteo.'Tiempo" maxlength="300" class="dzencf-text" placeholder="Tiempo de uso" >

		</div>
		</div>

		<div class="dzen_column_DD_span5">

		<div class="margin_bottom">
		<input type="text" name="suple'.$conteo.'Cantidad" maxlength="300" class="dzencf-text" placeholder="Cantidad usada" >
		</div>
		</div>
		</div>
		<!-- fin -->
		</div>
		</div>

		</div>
		<div id="siguiente'.($conteo+1).'">







		</div>';
	}


	public function guardarExperienciaDiatetica()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/ExperienciaDiatetica-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('cdipersoAli').
		"|".$this->input->post('cdipersoAliporque').
		"|".$this->input->post('cdipersoANivel').
		"|".$this->input->post('cdipersoANivelCambios').
		"|".$this->input->post('cdipersoAlergias').
		"|".$this->input->post('cdipersoIntoleranciaalimen').
		"|".$this->input->post('cdipersoAlinoconsumir').
		"|".$this->input->post('consumoSusAlcolTipo').
		"|".$this->input->post('consumoSusAlcolcantidad').
		"|".$this->input->post('consumoSusAlcolFrecuencia').
		"|".$this->input->post('consumoSusTabacoTipo').
		"|".$this->input->post('consumoSusTabacocantidad').
		"|".$this->input->post('consumoSusTabacoFrecuencia').
		"|".$this->input->post('consumoSusCafeinaTipo').
		"|".$this->input->post('consumoSusCafeinacocantidad').
		"|".$this->input->post('consumoSusCafeinaFrecuencia').
		"|".$this->input->post('consumoSusOtrasTipo').
		"|".$this->input->post('consumoSusOtrascocantidad').
		"|".$this->input->post('consumoSusOtrasFrecuencia').
		"|".$this->input->post('edpduraTiempo').
		"|".$this->input->post('edpcuantoTiempo').
		"|".$this->input->post('edpcResulobtuvo').
		"|".$this->input->post('edpcxqAbandono').
		"|".$this->input->post('noedpduraTiempo').
		"|".$this->input->post('noedpcuantoTiempo').
		"|".$this->input->post('noedpcResulobtuvo').
		"|".$this->input->post('noedpcxqAbandono').
		"|".$this->input->post('siedpduraTiempo').
		"|".$this->input->post('siedpcuantoTiempo').
		"|".$this->input->post('siedpcResulobtuvo').
		"|".$this->input->post('siedpcxqAbandono');


		



		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso6' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}

	public function guardarInformacionCorporal()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/InformacionCorporal-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('dabasiPeso').
		"|".$this->input->post('dabasiAltura').
		"|".$this->input->post('datosAntroespgrasa').
		"|".$this->input->post('datosAntroespgrasaporce').
		"|".$this->input->post('datosAntroespmasakg').
		"|".$this->input->post('datosAntroespmasaporcen').
		"|".$this->input->post('datosAntroespmasapmuskg').
		"|".$this->input->post('datosAntroespmasapmusporcentaje');



		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso7' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}


	public function guardarEstiloAlimentacion()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/EstiloaAlimentacion-".$idclientese.".txt"; 

		$mensaje=$idclientese;


		for($i=1;$i<7;$i++){
			
			$mensaje.="|".$this->input->post('patronalic'.$i.'h').
			"|".$this->input->post('patronalic'.$i.'l').
			"|".$this->input->post('patronalic'.$i.'d');
		}

		for($i=1;$i<7;$i++){
			
			$mensaje.="|".$this->input->post('recordatorioAlimentos24hras'.$i.'h').
			"|".$this->input->post('ecordatorioAlimentos24hras'.$i.'d').
			"|".$this->input->post('ecordatorioAlimentos24hras'.$i.'q').
			"|".$this->input->post('ecordatorioAlimentos24hras'.$i.'c');
		}


		


		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso8' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		redirect('cuestionario/preguntas', 'refresh');


	}


	public function guardarEstilo()
	{

		

		$idclientese = $this->session->idcliente;


		$nombre_archivo = "registros/EstilovidaActual-".$idclientese.".txt"; 

		$mensaje=$idclientese.
		"|".$this->input->post('padDormido').
		"|".$this->input->post('padRecostado').
		"|".$this->input->post('padMuysedentario').
		"|".$this->input->post('padsedentario').
		"|".$this->input->post('padmuyligeramenteactivo').
		"|".$this->input->post('padligeramenteactivo').
		"|".$this->input->post('padmoderadamenteactivo').
		"|".$this->input->post('padactivo').
		"|".$this->input->post('padmuyactivo').
		"|".$this->input->post('padExtemadamenteactivo').
		"|".$this->input->post('padDormidodes').
		"|".$this->input->post('padRecostadodes').
		"|".$this->input->post('padMuysedentariodes').
		"|".$this->input->post('padsedentariodes').
		"|".$this->input->post('padmuyligeramenteactivodes').
		"|".$this->input->post('padligeramenteactivodes').
		"|".$this->input->post('padmoderadamenteactivodes').
		"|".$this->input->post('padactivodes').
		"|".$this->input->post('padmuyactivodes').
		"|".$this->input->post('padExtemadamenteactivodes').
		"|".$this->input->post('pEVidaTipo').
		"|".$this->input->post('pEVidaTipo2').
		"|".$this->input->post('numActividad');


		$numActividad=$this->input->post('numActividad');
		
		if($numActividad!=0){
			$mensaje.="&";


		}

		

		for($i=1;$i<=$numActividad;$i++){
			
			
			$nuevosu=$this->input->post('pEVidaTipoa'.$i).
			"_".$this->input->post('pEVidaTipoh'.$i);
			$bodytag = str_replace("_","",$nuevosu);
			if(trim($bodytag)===""){
			}else{

				if($i==1){

					$mensaje.=$nuevosu;
				}else{
					$mensaje.="-".$nuevosu;
				}
				
				
			}

			

		}

		




		$file = fopen($nombre_archivo, "w");
		fwrite($file, $mensaje);
		fclose($file);
				//cargados --
		$infocues = array('paso9' => $nombre_archivo);
		$idcliente=$this->cuestionario_models->update($idclientese,$infocues);

		session_destroy();
		redirect('cuestionario/fianalizacion', 'refresh');
		


	}
	public function fianalizacion()
	{
		$datam['activar'] ='index';
		$data['menu'] = $this->load->view('plantilla/menu', $datam, true);
		$this->load->view('msn',$data);
	}

	public function nuevaActividad()
	{

		$conteo = $this->input->get('conteo');

		$nuevo='<div class="dzen_container">
		<div class="dzen_column_DD_span11">

		<div class="dzen_column_DD_span11"></div>
		<div class="dzen_column_DD_span6">

		<div class="margin_bottom">
		<input type="text"  name="pEVidaTipoa'.$conteo.'" maxlength="300" class="dzencf-text" placeholder="Tipo de actividad diaria, Ejemplo :Despertarse por la mañana" >

		</div>
		</div>
		<div class="dzen_column_DD_span4">

		<div class="margin_bottom">

		<input type="text"  name="pEVidaTipoh'.$conteo.'" maxlength="300" class="dzencf-text" placeholder="Horario" >

		</div>
		</div>



		</div>
		</div>
		<div id="actividad'.($conteo+1).'">
		</div>';
		echo $nuevo;
	}



}
