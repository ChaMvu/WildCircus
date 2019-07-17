<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/07/19
 * Time: 17:13
 */

namespace App\Controller;


use App\Repository\ShowRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ShowRepository $showRepository)
    {
        return $this->render('home/index.html.twig', [
            'shows' => $showRepository->findAll(),
        ]);
    }
}
