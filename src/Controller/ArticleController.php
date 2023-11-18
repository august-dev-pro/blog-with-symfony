<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route("/articles")]
    public function showArticles(){
    $data = [
      "articles" =>[
        "article1" => "Hp V234hg",
        "article2" => "aire pod i19",
        "article3" => " Bolid V12"
      ]
    ];
       return $this->render("articles/show-articles.html.twig", $data);
    }

      #[Route("/article/{id}")]
    public function showArticleById($id){
          $data = [
            "id" => $id
        ];
        return $this->render("articles/show-article.html.twig", $data);
    }
}
