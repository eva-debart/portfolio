<?php

namespace App\controller;

use App\repository\UserRepository;
use App\models\User;


class SecurityController {

    private UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function securityRegister(): void 
    {
        if(empty($_POST)){
            header('location: ./index.php?url=register'); 
            exit();
        }

        $dataExpected = ['nickname', 'email', 'password']; 
        
        foreach($dataExpected as $expected){
            
            if(isset($_POST[$expected]) && !empty($_POST[$expected])){

                continue;
            } else {
                header('location: index.php?url=register&error='.$expected);
                exit();
            }
        }

        $passCrypt = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user = new User();
        $user->setNickname(htmlspecialchars($_POST['nickname']));
        $user->setEmail(htmlspecialchars($_POST['email']));
        $user->setPassword(htmlspecialchars($passCrypt));

        $data = $this->repository->insertUser($user);

        if($data){
            $_SESSION['user'] = serialize($user);

            header('location: ./index.php?url=account');
            exit();
        }

        header('location: ./index.php?url=register');
        exit();
    }
   
    public function securityLogin(): void 
    {   
        if(empty($_POST)){
            header('location: ./index.php?url=login'); exit();
        }

        $dataExpected = [ 'email', 'password']; 
        
        foreach($dataExpected as $expected){
            
            if(isset($_POST[$expected]) && !empty($_POST[$expected])){

                continue;
            } else {
                header('location: index.php?url=login&error='.$expected);
                exit();
            }
        }
      $dataUser =$this->repository->fetchLogin(htmlspecialchars($_POST['email']));
      if(!$dataUser){
          header('location: ./index.php?url=login&error=email'); exit();
      }
      $passIsGood = password_verify($_POST['password'], $dataUser['password']);
      
      if($passIsGood){
          
        $user = new User();
        $user->setId($dataUser['id']);
        $user->setNickname($dataUser['nickname']);
        $user->setEmail($dataUser['email']);
        $user->setPassword($dataUser['password']);
        

 
        $_SESSION['user'] = [
            'id'=>$dataUser['id'],
            'nickname'=>$dataUser['nickname'],
            'email'=>$dataUser['email'],
            ];
            
        header('location: ./index.php?url=account'); exit();
      }else{
        header('location: ./index.php?url=login'); exit();
        echo 'mauvais mot de passe';
        }
    }
    
    public function logout(): void
    {
        session_destroy();
        header('location: ./index.php'); exit();
    }
 }
   



