<?php 

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


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

    public function salvar(Request $request) : Response 
    {
        $data = $request->request->all();

        $usuario = new Usuario;
        $usuario->setNome($data['nome']);
        $usuario->setEmail($data['email']);

        

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($usuario);
        $doctrine->flush();

        

        if($doctrine->contains($usuario)){
            return $this->render("usuario/falha.html.twig",[
                "fulano" => $data['nome']
            ]);
        }else{
            return $this->render('usuario/sucesso.html.twig',[
                "fulano" => $data['nome']
            ]);
        }


    
    }

}