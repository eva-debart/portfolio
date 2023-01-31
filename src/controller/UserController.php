<?php

namespace App\controller;
use App\repository\UserRepository;
use App\models\User;
use App\repository\CommentaryRepository;
use App\models\Commentary;

class UserController {
    
    public function displayLogin(): void
    {
      require './src/views/loginViews.php' ;
    }
    
    public function displayRegister(): void
    {
      require './src/views/registerViews.php' ;
    }

    public function displayProfil(): void
    { 
        $repository = new UserRepository();
        $datas = $repository->logUsers();
        foreach($datas  as $data )
        {
            $user = new User();
            $user->setId($data['id']);
            $user->setNickname($data['nickname']);
            $user->setEmail($data['email']);
            
        }

        $repository = new CommentaryRepository();
        $commentary = $repository->fetchAll();
        $comments = [];
        foreach($commentary  as $comm )
        {  
           
          if($comm['comment'] !== 'false'){
            $comment = new Commentary();
            $comment->setId($comm['id']);
            $comment->setName_user($comm['name_user']);
            $comment->setEmail_user($comm['email_user']);
            $comment->setText($comm['text']);
            $comment->setCreated_at($comm['created_at']);
            $comment->setVerify($comm['verify']);

            $comments[] = $comment;
          }    
        }
        
        $repository = new CommentaryRepository();
        $posts = $repository->fetchAll();
        $messages = [];
        foreach($posts  as $mess )
        {  
           
          if($mess['comment'] !== 'true'){
            $message = new Commentary();
            $message->setId($mess['id']);
            $message->setName_user($mess['name_user']);
            $message->setEmail_user($mess['email_user']);
            $message->setText($mess['text']);
            $message->setCreated_at($mess['created_at']);
            $message->setVerify($mess['verify']);

            $messages[] = $message;
          }    
        }
                   
        require './src/views/profilViews.php';
    }
    
    public function verifylogin(): void
    {
       if($_SESSION['user']){
       
         header('location: ./index.php?url=account'); exit();    
       }
       else{
          header('location: ./index.php?url=login'); exit(); 
       }
    }

}