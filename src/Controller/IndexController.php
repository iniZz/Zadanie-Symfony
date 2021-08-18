<?php
declare(strict_types=1);

namespace App\Controller;


use App\Entity\User;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Doctrine\ORM\EntityManagerInterface;

class IndexController extends AbstractController
{

    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var PaginatorInterface
     */
    private $userPaginator;


    /**
     * @param UserRepository  $userRepository
     * @param PaginatorInterface  $userPaginator
     */
    public function __construct(
        UserRepository $userRepository,
        PaginatorInterface $userPaginator
    ) {
        $this->userRepository = $userRepository;
        $this->userPaginator = $userPaginator;
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
    public function list(int $page): Response
    {
        $articles = $this->userRepository->findAll();
        $pagination = $this->userPaginator->paginate($articles, $page, /*page number*/3/*limit per page*/);
        // dd($pagination);
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
    public function disableUserAction(int $userID, int $pagination, EntityManagerInterface $em)
    {
        $user = $this->userRepository->findOneBy(array('id' => $userID),array('id' => 'ASC'));
        $user->setDisabled(true);
        $em->flush();
        return $this->redirectToRoute('user_list', ['page' => $pagination]);
        // dd( $user);
    }

    /**
    *
    * @Route("/{userID}/{pagination}/enable", requirements={"id" = "\d+"}, name="user_enable")
    *
    */
    public function enableUserAction(int $userID, int $pagination, EntityManagerInterface $em)
    {
        $user = $this->userRepository->findOneBy(array('id' => $userID),array('id' => 'ASC'));
        $user->setDisabled(false);
        $em->flush();
        return $this->redirectToRoute('user_list', ['page' => $pagination]);
        // dd( $user);
    }
}
