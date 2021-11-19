<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dashboard", name="app_dashboard")
 */
class DashboardController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('dashboard/dashboard.html.twig');
    }
}
