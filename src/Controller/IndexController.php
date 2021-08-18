<?php
declare(strict_types=1);

namespace App\Controller;

use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $pagination = $this->userPaginator->paginate($articles,$page, /*page number*/3/*limit per page*/);

        return $this->render(
            'index/list.html.twig',
            ['pagination' => $pagination]
        );
    }
}
