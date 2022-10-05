<?php

namespace App\Controller;

use PhpParser\Node\Expr\Array_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestTwigController extends AbstractController
{
    #[Route('/test/twig', name: 'app_test_twig')]
    public function index(): Response
    {
        $var='test';
        $persons =Array(["id"=>"1","name"=>"XX","email"=>"emaillls"],["id"=>"2","name"=>"XX2","email"=>"emaillls"]);
        return $this->render('test_twig/index.html.twig', [
            'controller_name' => 'TestTwigController',"var"=>$var,"persons"=>$persons
        ]);
    }
}
