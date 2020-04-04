<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageNotFound extends AbstractController {

    public function index() {
        return $this->render('views/404.html.twig');
    }
}
