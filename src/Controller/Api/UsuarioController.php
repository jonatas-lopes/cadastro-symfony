<?php 

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("Api/v1", name="api_v1_usuario")
 */

class UsuarioController
{   
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */

    public function lista(): JsonResponse
    {
        return new JsonResponse([
            "Implentar Lista na API", 404
        ]);
    }

    /**
     * @Route("/cadastro", methods={"POST"}, name="cadastra")
     */
    
    public function cadastro(): JsonResponse
    {
        return new JsonResponse([
            "Implentar cadastro API", 404
        ]);
    }

}