<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function showAllAction(){
        $allUsers = $this->get('user.model')->getAllUser();
        return $this->render("@App/User/showAll.html.twig", ['allUsers' => $allUsers]);
    }
    
    
    public function showParticularUserAction(Request $request, User $user){
        $user = $this->get('user.model')->getUserById($user);
        return $this->render("@App/User/showUser.html.twig", ['user' => $user]);
    }
    
}
