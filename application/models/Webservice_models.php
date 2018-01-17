<?php



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User {
    public $nombre = "";
    public $apellido  = "";
    public $email = "";
    public $cumpleanios = "";
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
                                $user->nombre = $resource;

                            }
                            if($key==='firstname'){

                                 $user->apellido = $resource;

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
                 //array_push($a,"id_address_delivery",$resource);
                //buscar direccion
                       $opt['resource'] = 'addresses';
                       $opt['id'] = (int)$resource;
                       $xml = $webService->get($opt);
                       $resources = $xml->children()->children();
                       foreach ($resources as $key => $resource)
                       {
                        if($key==='id_country'){
                                    //pais
                                    //array_push($a,"id_country",$resource);



                           $opt['resource'] = 'countries';
                           $opt['id'] = (int)$resource;
                           $xml = $webService->get($opt);
                           $resources = $xml->children()->children();
                           foreach ($resources as $key => $resource)
                           {

                            if($key==='name'){
                                                        //array_push($a,"name",$resource);
                            }



                        }
                    }
                    if($key==='id_state'){
                                    //municipio
                                    //array_push($a,"id_state",$resource);

                       $opt['resource'] = 'states';
                       $opt['id'] = (int)$resource;
                       $xml = $webService->get($opt);
                       $resources = $xml->children()->children();
                       foreach ($resources as $key => $resource)
                       {

                        if($key==='name'){
                                                     //array_push($a,"name",$resource);
                        }



                    }
                }
                if($key==='address1'){

                                     //array_push($a,"address1",$resource);
                }
                if($key==='postcode'){

                                     //array_push($a,"postcode",$resource);
                }
                if($key==='city'){

                                     //array_push($a,"city",$resource);
                }
                if($key==='phone'){

                                     //array_push($a,"phone",$resource);
                }
                if($key==='phone_mobile'){

                                     //array_push($a,"phone_mobile",$resource);
                }


            }
// fin buscar direccion 
        }
        if($key==='reference'){

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





