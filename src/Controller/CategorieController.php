<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController{

    #[Route("/categories")]
    public function addCategorie(){

        $categories = [
            "categories" =>[
                "categorie_1" => "Sport",
                "categorie_2" => "Musique",
                "categorie_3" => "Danse",
                "categorie_4" => "Vitesse"
            ],
        ];
        return $this->render("/Categoriepage/categoriepage.html.twig", $categories);
    }

    #[Route("/categorieById/{id}")]
    public function showCategorieById($id){
        $idCategorie = [
            "id" => $id
        ];
        return $this->render("/Categoriepage/showCategorieById.html.twig", $idCategorie);
    }
}
?>