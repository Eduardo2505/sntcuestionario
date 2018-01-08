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



}
