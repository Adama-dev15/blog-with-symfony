<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController{

    #[Route("/articles")]
    public function addArticle(){

        $articles = [
            "articles" =>[
                'article_1' => "Voiture",
                'article_2' => "Moto",
                'article_3' => "Camion",
                'article_4' => "Voiture de course",
            ],
        ];

        return $this->render("/Articlepage/articlepage.html.twig", $articles);
    }

    #[Route("/showArticleById/{id}")]
    public function showArticleById($id){
        $articlesShowById = [
            "id" => $id
        ];

        return $this->render("/Articlepage/showArticleById.html.twig", $articlesShowById);
    }

}


?>