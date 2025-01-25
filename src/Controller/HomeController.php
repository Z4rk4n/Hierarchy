<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\User;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $isAuth = (!$this->getUser()) ? false : true;

        $user = $entityManager->getRepository(User::class)->findOneBy(['firstname' => 'Xena']);
        
        #$user->setRoles(['ROLE_ADMIN']);
        #$entityManager->persist($user); 
        #$entityManager->flush();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'is_auth' => $isAuth
        ]);
    }
}
