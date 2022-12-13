<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category/create', name: 'app_category')]
    public function index(): Response
    {
        // return $this->render('category/index.html.twig', [
        //     'controller_name' => 'CategoryController',
        // ]);

        $category = new Category();

        $form = $this->createForm(CategoryFormType::class, $category);

        return $this->renderForm('category/index.html.twig', [
            'categoryForm' => $form,
        ]);

    }
}
