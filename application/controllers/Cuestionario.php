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

		}else{
			if (empty($this->input->get('pedidoInicial'))) {
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
				$pedidoInicial="";
			}else{
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
		$data['pedidoInicial']=$pedidoInicial;
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

	

	public function verificarPestania()
	{
		if(isset($_SESSION['idcliente'])){
			$idclientese = $this->session->idcliente;

			$query=$this->cuestionario_models->buscar($idclientese);
			$row = $query->row();
			$paso1=$row->idCliente;
			$paso2=$row->paso1_url;
			$paso3=$row->paso2_url;
			$paso4=$row->paso3_url;
			$paso5=$row->paso4_url;
			$paso6=$row->paso5_url;
			$paso7=$row->paso6_url;
			$paso8=$row->paso7_url;
			$paso9=$row->paso8_url;
			$paso10=$row->paso9_url;
			$paso11=$row->paso10_url;
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
	

	



}
