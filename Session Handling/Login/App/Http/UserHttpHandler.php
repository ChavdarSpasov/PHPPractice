<?php

namespace App\Http;

use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Service\UserServiceInterface;

class UserHttpHandler extends HttpHandlerAbstract
{
    //$userData is $_GET


    public function all(UserServiceInterface $userService)
    {
        $this->render('Users/all',$userService->viewAll());
    }

    public function profile(UserServiceInterface $userService,
                                           array $formData = [])
    {
        $currentUser = $userService->getCurrentUser();
        if (null === $currentUser ) {
            $this->redirect("login.php");
        }

        if (isset($formData['edit'])) {
            $this->handleEditProfile($userService, $formData);

        }else{

            $this->render("Users/profile", $currentUser);            
        }
 
    }

    public function register(
        UserServiceInterface $userService,
                       array $formData = []
    ) {
        if (isset($formData['register'])) {
            $this->handleRegisterProcess($userService, $formData);
        } else {
            $this->render("Users/register");
        }
    }

    public function login(
        UserServiceInterface $userService,
                       array $formData = []
    ) {
        if (isset($formData['login'])) {
            $this->handleLoginProcess($userService, $formData);
        } else {
            $this->render("Users/login");
        }
    }

    private function handleRegisterProcess(
        UserServiceInterface $userService,
        array $formData = []
    ) {
        $user = UserDTO::create(
            $formData['username'],
            $formData['password'],
            $formData['first_name'],
            $formData['last_name'],
            $formData['born_on']
        );

        if($userService->register(
            $user,
            $formData['confirm_password']
        )) {

                $this->redirect("login.php");
        }else{
            $this->render("App/error", 
            new ErrorDTO("Cannot register, maybe username is
             already taken or password mismach."));
        }

    }

    private function handleLoginProcess(
        UserServiceInterface $userService,
        array $formData = []
    ) {
        $loggedUser = $userService->login($formData['username'], $formData['password']);
        if (null !== $loggedUser) {
            $_SESSION['id'] = $loggedUser->getId();

            $this->redirect("profile.php");
        }else{
            $this->render("App/error",new ErrorDTO("Username does not exist or password mismach."));
        }
    }

    private function handleEditProfile(
        UserServiceInterface $userService,
        array $formData = []
    ) {
        $user = UserDTO::create(
            $formData['username'],
            $formData['password'],
            $formData['first_name'],
            $formData['last_name'],
            $formData['born_on']
        );

        if ($userService->editProfile($user)) {
            $this->redirect("profile.php");
        }else {
            $this->render('App/error', 
            new ErrorDTO('Error editing the profile.'));
        }

    }

    public function index(UserServiceInterface $userService,
                         array $formData = [])
    {
        $currentUser = $userService->getCurrentUser();
        if (null === $currentUser ) {
            $this->render("Home/index");
        }else{
            $this->render('User/profile', $currentUser);
        }
    }
}
