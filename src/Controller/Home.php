<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Home extends AbstractController {

    public function index() {
        return $this->render('views/home.html.twig');
    }

    public function noroute() {
        return $this->render('views/404.html.twig');
    }
}
