<?php



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User {
    public $nombre = "";
    public $apellido  = "";
    public $email = "";
    public $cumpleanios = "";
    public $pais = "";
    public $direccion = "";
    public $cp = "";
    public $ciudad = "";
    public $telefono = "";
    public $movil = "";
    public $referencia = "";
    public $municipio = "";
    
}

class Webservice_models extends CI_Model {

    function __construct() {
        parent::__construct();

    }


    function buscar($id) {
        define('DEBUG', false);                                         
        define('PS_SHOP_PATH', 'https://sntcenter.com.mx/planes/');     
        define('PS_WS_AUTH_KEY', 'ILTWHBCKAQUNZT4SD76R6PRB2UAWHS6M');   
        define('_PS_MODE_DEV_', true);
        require_once(APPPATH.'libraries/PSWebServiceLibrary.php');
        try
        {
            $webService = new PrestaShopWebservice(PS_SHOP_PATH, PS_WS_AUTH_KEY, DEBUG);
            $opt['resource'] = 'orders';
            $opt['id'] = $id; 


            $xml = $webService->get($opt);


            $resources = $xml->children()->children();
           

            if (isset($resources))
            {
              $user = new User();


              
              

                foreach ($resources as $key => $resource)
                {
            // Iterates on customer's properties

                    if($key==='id_currency'){
                       
                //buscar cliente 
                        $opt['resource'] = 'customers';
                        $opt['id'] = (int)$resource;
                        $xml = $webService->get($opt);
                        $resources = $xml->children()->children();
                        foreach ($resources as $key => $resource)
                        {
                            if($key==='lastname'){
                                $user->apellido = $resource;

                            }
                            if($key==='firstname'){

                                 $user->nombre = $resource;

                            }
                            if($key==='email'){

                                   $user->email = $resource;

                            }
                            if($key==='birthday'){
                                    $user->cumpleanios = $resource;

                            }


                        }
                // fin cliente  


                    }

                    if($key==='id_address_delivery'){
                //buscar direccion
                       $opt['resource'] = 'addresses';
                       $opt['id'] = (int)$resource;
                       $xml = $webService->get($opt);
                       $resources = $xml->children()->children();
                       foreach ($resources as $key => $resource)
                       {
                        if($key==='id_country'){

                           $opt['resource'] = 'countries';
                           $opt['id'] = (int)$resource;
                           $xml = $webService->get($opt);
                           $resources = $xml->children()->children();
                           foreach ($resources as $key => $resource)
                           {

                            if($key==='name'){

                                 $user->pais = $resource;
                                                        
                            }



                        }
                    }
                    if($key==='id_state'){
                       $opt['resource'] = 'states';
                       $opt['id'] = (int)$resource;
                       $xml = $webService->get($opt);
                       $resources = $xml->children()->children();
                       foreach ($resources as $key => $resource)
                       {

                        if($key==='name'){
                          $user->municipio = $resource;
                        }



                    }
                }
                if($key==='address1'){

                                    $user->direccion = $resource;
                }
                if($key==='postcode'){

                                     $user->cp = $resource;
                }
                if($key==='city'){

                                     $user->ciudad = $resource;
                }
                if($key==='phone'){

                                      $user->telefono = $resource;
                }
                if($key==='phone_mobile'){

                                     $user->movil = $resource;
                }


            }
// fin buscar direccion 
        }
        if($key==='reference'){
            $user->referencia = $resource;

                //array_push($a,"reference",$resource);
        }


    }


}

return $user;

}
catch (PrestaShopWebserviceException $e)
{
 return $e->getMessage();
}



}


}





