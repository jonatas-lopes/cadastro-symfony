<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="web_usuario_")
 */

class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */

    public function index() : Response
    {
        return $this->render("usuario/form.html.twig",[ 
            'fulano' => "Jonatas" 
        ]);
    }

    /**
     * @Route("/Salvar", methods={"POST"}, name="salvar")
     */

    public function salvar() : Response 
    {
        return new Response("Implentar gravação ao banco de dados");
    }

}