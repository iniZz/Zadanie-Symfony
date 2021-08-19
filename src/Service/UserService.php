<?php 
namespace App\Service;

use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;


class UserService{
 /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var PaginatorInterface
     */
    private $userPaginator;
    
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @param UserRepository  $userRepository
     * @param PaginatorInterface  $userPaginator
     * @param EntityManagerInterface  $em
     */
    public function __construct(
        UserRepository $userRepository,
        PaginatorInterface $userPaginator,
        EntityManagerInterface $em
    ) {
        $this->userRepository = $userRepository;
        $this->userPaginator = $userPaginator;
        $this->em = $em;
    }

    public function pagginatrion($page){

        $users = $this->userRepository->findAll();
        $pagination = $this->userPaginator->paginate($users, $page, /*page number*/10/*limit per page*/);

        return $pagination;
    }

    public function disableUser($userID){

        $user = $this->userRepository->findOneBy(array('id' => $userID),array('id' => 'ASC'));
        $user->setDisabled(true);
        $this->em->flush();

    }

    public function enableUser($userID){

        $user = $this->userRepository->findOneBy(array('id' => $userID),array('id' => 'ASC'));
        $user->setDisabled(false);
        $this->em->flush();

    }
}