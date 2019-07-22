<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="list_article")
     */
    public function listArticles()
    {

        $listArticles = [
            [
                "title" => "Mon Article 1",
                "content" => "lorem  tatata mllsvuskgmiolqhpù jsgpjmgsmjs"
            ],
            [
                "title" => "Article 2",
                "content" => " jkmjùodfmùùro ieokdjfjhg i^^gsîsrgi"
            ],

        ];


        return $this->render('article/list.html.twig', [
            "articles"=> $listArticles

        ]);
    }
}
