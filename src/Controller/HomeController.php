<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 03/11/18
 * Time: 13:15
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route ("/")
     */
    public function index()
    {
        return $this->render('home/home.html.twig');
    }
}