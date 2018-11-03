<?php
/**
 * Created by PhpStorm.
 * User: patricia
 * Date: 03/11/18
 * Time: 15:30
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route ("blog/{slug}", requirements={"slug"="\b[a-z0-9-]+\b"}, name="blog_show")
     */
    public function show($slug='article-sans-titre')
    {
            $space = ' ';
            $slug = str_replace('-', $space, ucwords($slug, '-'));

        return $this->render('blog/slug.html.twig', ['slug' => $slug]);
    }
}