<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Auth extends AbstractController {

    public function login() {
        return $this->render('views/login.html.twig');
    }

    public function logout() {
        return $this->render('views/logout.html.twig');
    }
}
