<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/07/19
 * Time: 18:51
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    /**
     * @Route("/prices")
     */
    public function index()
    {
        return $this->render('prices/index.html.twig');
    }
}