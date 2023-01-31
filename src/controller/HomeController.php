<?php

namespace App\controller;

use App\repository\SiteRepository;
use App\models\Site;
use App\repository\CommentaryRepository;
use App\models\Commentary;

class HomeController {
    
    
    public function displayHome(): void
    {
        $repository = new SiteRepository();
       $datas= $repository->fetchAll();
       $sites = [];
       
       foreach($datas as $data){
            
            $site = new Site();
            $site->setId($data['id']);
            $site->setNom($data['nom']);
            $site->setImgGalerie($data['imgGalerie']);
            $site->setImgGrand($data['imgGrand']);
            $site->setSiteUrl($data['siteUrl']);
            $site->setCategory($data['category']);

            
            $sites[] = $site;
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
    
        require './src/views/homeViews.php';
    }
    
    public function displayRegister(): void
    {
        require './src/views/registerViews.php';
    }
    
    public function addSiteForm(): void
    {
        require './src/views/addSiteForm.php';
    }

    
}