<?php 

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {

    /**
     * @Route("/", methods={"GET"})
     */
/*    public function index(Request $request)
    {
       $resp = new Response(json_encode([
           "recebido" => $request->get('nome'),
           "ip" => $request->getClientIp()
       ]));
       
       $resp->setStatusCode(200);

       return $resp;
    }
*/

}