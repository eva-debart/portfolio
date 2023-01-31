<?php

namespace App\controller;
use App\repository\CommentaryRepository;
use App\models\Commentary;

class CommentaryController {
    
   public function displayComm(): void
   {
       require './src/views/animeViews.php' ;
   }
   
   public function addComment(): void
   {
    if(empty($_POST)){
        header('location: ./index.php?url=home'); 
        exit();
    }

    $dataExpected = ['name', 'email', 'message']; 
    
    
    foreach($dataExpected as $expected){
        
        if(isset($_POST[$expected]) && !empty($_POST[$expected] )){
            
            if(isset($_POST['verify'])){
              $verify = 'true';
              continue;  
            }

            continue;
        } else {
            header('location: index.php?url=home&error='.$expected);
            exit();
        }
    }
    
    $comment = new Commentary();
    $comment->setName_user(htmlspecialchars($_POST['name']));
    $comment->setEmail_user(htmlspecialchars($_POST['email']));
    $comment->setText(htmlspecialchars($_POST['message']));
    $comment->setCreated_at(date("Y-m-d H:i:s"));
    $comment->setVerify(htmlspecialchars($verify));

    
    $repository = new CommentaryRepository();
    $data = $repository->insertComment($comment);

    if($data){
            $to = "evadebart51@gmail.com";
            $subject = "new message/comment on portfolio";
            $message =  '<html><body>'.
                        '<h1> Vous avez recu un nouveau message de '.$_POST['name'].'</h1>'.
                        '<p> le message est :'.$_POST['message'].'.</p>'.
                        '</body></html>';
            $headers ="Content-Type : text/plain ; charset=utf-8\r\n";
            $headers ="from porfolio-messagerie@portfoliodebarteva.com\r\n";

            mail($to, $subject, $message, $headers);
        }
        header('location: ./index.php?url=home');
        exit();
    }

    public function supprComment(): void 
    {
        if(isset($_GET['id_comment']) && !empty($_GET['id_comment'])){
            
            if(!is_numeric($_GET['id_comment'])){
                var_dump('not ok'); die;
                header('location: ./index.php?url=account');
                die;
            }
            
            $id_comment = htmlspecialchars($_GET['id_comment']);
            $repository = new CommentaryRepository();
            $data = $repository->deleteComment($id_comment);
        }
        if($data){
                header('location: ./index.php?url=account');
                exit();    
            }
                
    }
    public function verify(): void
    {
       if(isset($_GET['id_comment']) && !empty($_GET['id_comment'])){
             
            if(!is_numeric($_GET['id_comment'])){
                
                var_dump('not ok'); die;
                header('location: ./index.php?url=account');
                die;
            }
            $id_comment = intval($_GET['id_comment']);
            $repository = new CommentaryRepository();
            $data = $repository->fetchId($id_comment);

            $comm = 'true';

            $comment = new Commentary();
            $comment->setId($id_comment);
            $comment->setComment(htmlspecialchars($comm));
      
            $repository = new CommentaryRepository();
            $data = $repository->verify($comment);
            
        }
        if($data){
                header('location: ./index.php?url=account');
                exit();    
            }
    }

}