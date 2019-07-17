<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/07/19
 * Time: 17:13
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(){
            return $this->render('home/index.html.twig');
        }
}

