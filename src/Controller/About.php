<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class About extends AbstractController {

    public function index() {
        return $this->render('views/about.html.twig');
    }
}
