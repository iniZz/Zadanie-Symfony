<?php
declare(strict_types=1);

namespace App\Controller;


use App\Service\UserService;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IndexController extends AbstractController
{

    /**
     * @var UserService
     */
    private $userService;



    /**
     * @param UserService  $userService
     */
    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/user/list/{page}", name="user_list", methods={"GET"})
     */
    public function list(int $page = 1): Response
    {
        $pagination = $this->userService->pagginatrion($page);
        return $this->render(
            'index/list.html.twig',
            ['pagination' => $pagination]
        );
    }

    /**
    *
    * @Route("/{userID}/{pagination}/disable", name="user_disable")
    *
    */
    public function disableUserAction(int $userID, int $pagination)
    {
        $this->userService->disableUser($userID);
        
        return $this->redirectToRoute('user_list', ['page' => $pagination]);
    }

    /**
    *
    * @Route("/{userID}/{pagination}/enable", requirements={"id" = "\d+"}, name="user_enable")
    *
    */
    public function enableUserAction(int $userID, int $pagination)
    {
        $this->userService->enableUser($userID);
        
        return $this->redirectToRoute('user_list', ['page' => $pagination]);
    }
}
