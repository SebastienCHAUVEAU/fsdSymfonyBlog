<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post/create', name: 'app_post')]
    public function index(): Response
    {
        // return $this->render('post/index.html.twig', [
        //     'controller_name' => 'PostController',
        // ]);
        
        $post = new Post();
        

        $form = $this->createForm(PostType::class, $post);

        return $this->renderForm('post/index.html.twig', [
            'postForm' => $form,
        ]);
    }
}
