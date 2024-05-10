<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use App\Model\UserDto;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class UserController extends AbstractController
{
    #[Route('/user', name: 'create_user', methods: ['POST'])]
    public function createUser(Request $request, EntityManagerInterface $entityManager): Response {
        $payload = $request->getContent();
        $data = json_decode($payload, true);

        $user = new User();
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        $entityManager->persist($user);
        $entityManager->flush();

        return new Response(
            'Saved new user with id '.$user->getId()
        );
    }
}
