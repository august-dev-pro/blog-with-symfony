<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route("/categories")]
    public function showCategories(){
        $data = [
            "categories" => [
                "categorie1" => "voiture",
                "categorie2" => "Ordinateur PC",
                "categorie3" => "Vetement"
            ]
        ];
        return $this->render("categories/show-categories.html.twig", $data);
    }

    #[Route("/categorie/{id}")]
    public function showCategorieById($id){
        $data = [
            "id" => $id
        ];
        return $this->render("categories/show-categorie.html.twig", $data);
    }
}
