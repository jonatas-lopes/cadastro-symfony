<?php 

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository;

/**
 * @Route("Api/v1", name="api_v1_usuario")
 */

class UsuarioController extends AbstractController
{   
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */

    public function lista(): JsonResponse
    {

        $doctrine = $this->getDoctrine()->getRepository(Usuario::class);
        
        dump($doctrine->findAll());

        return new JsonResponse(["Implentar Lista na API", 404]);
    }

    /**
     * @Route("/cadastro", methods={"POST"}, name="cadastra")
     */
    
    public function cadastro(): JsonResponse
    {
        return new JsonResponse(["Implentar cadastro API", 404]);
    }

}