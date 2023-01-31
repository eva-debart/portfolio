<?php
namespace App\controller;

use App\repository\SiteRepository;
use App\models\Site;

class SiteController {

     public function addSite(): void
    { 
        if (isset($_FILES['imgGrand']) && isset($_FILES['imgGalerie'])){
            var_dump('ok');
        
            $imgGrand_name = $_FILES['imgGrand']['name'];
            $imgGalerie_name = $_FILES['imgGalerie']['name'];
            var_dump($_POST);
            
            $site = new Site();
            $site->setNom(htmlspecialchars($_POST['nom']));
            $site->setSiteUrl(htmlspecialchars($_POST['url']));
            $site->setImgGalerie(htmlspecialchars($imgGalerie_name));
            $site->setimgGrand(htmlspecialchars($imgGrand_name));
            $site->setCategory(htmlspecialchars($_POST['category']));
            $repository = new SiteRepository();
            $data = $repository->insertSite($site);
                
            if($data){
                header('location: ./index.php?url=account');
                exit();    
            }
        }
    }
    public function displayGalerie(): void
    { 
       $repository = new SiteRepository();
       $datas= $repository->fetchAll();
       $sites = [];
       
       foreach($datas as $data){
            
            $Site = new Site();
            $site->setId($data['id']);
            $site->setimgGrand($data['imgGrand']);
            $site->setNom($data['nom']);
            $site->setimgGalerie($data['imgGalerie']);
            $site->setSiteUrl($data['siteUrl']);
            $site->setCategory($data['category']);
            
            $sites[] = $site;
       }
        require './src/views/homeViews.php';
    }
    
    public function displaySite(): void
    { 
       $repository = new SiteRepository();
       $datas= $repository->fetchAll();
       $sites = [];
       
       foreach($datas as $data){
            
            $site = new Site();
            $Site->setId($data['id']);
            $Site->setimgGrand($data['imgGrand']);
            $site->setNom($data['nom']);
            $site->setimgGalerie($data['imgGalerie']);
            $site->setSiteUrl($data['siteUrl']);
            $site->setCategory($data['category']);
            
            $sites[] = $site;
       }
        require './src/views/modifySiteViews.php';
    }
        
    public function supprSite(): void 
    {
        if(isset($_GET['id_site']) && !empty($_GET['id_site'])){
            
            if(!is_numeric($_GET['id_site'])){
                var_dump('not ok'); die;
                header('location: ./index.php?url=bibliotheque');
                die;
            }
            
            $id_site = htmlspecialchars($_GET['id_site']);
            $repository = new SiteRepository();
            $data = $repository->deleteSite($id_site);
        }
        if($data){
                header('location: ./index.php?url=displaySite');
                exit();    
            } else {
                header('location: ./index.php?url=displaySite');
                exit();
                }
                
    }
    public function modifySite(): void
    {
       if(isset($_GET['id_site']) && !empty($_GET['id_site'])){
             
            if(!is_numeric($_GET['id_site'])){
                
                var_dump('not ok'); die;
                header('location: ./index.php?url=bibliotheque');
                die;
            }
            $id_site = intval($_GET['id_site']);
            $repository = new SiteRepository();
            $data = $repository->fetchId($id_site);
       
       $dataExpected = ['imgGalerie','name','imgGrand']; 
        
        foreach($dataExpected as $expected){
            
            if(isset($_POST[$expected]) && !empty($_POST[$expected])){
                
                continue;
                
            } else {
                var_dump($expected, $dataExpected);die;
                header('location: index.php?url=account');
                exit();
            }
        }
            
            $site = new Site();
            $Site->setId($id_site);
            $site->setNom(htmlspecialchars($_POST['nom']));
            $site->setimgGalerie(htmlspecialchars($_POST['imgGalerie']));
            $site->setimgGrand(htmlspecialchars($_POST['imgGrand']));
            $site->setSiteUrl($data['siteUrl']);
            $site->setCategory($data['category']);
            $repository = new SiteRepository();
            $data = $repository->updateSite($site);
            
        }
        if($data){
                header('location: ./index.php?url=displaySite');
                exit();    
            } else {
                header('location: ./index.php?url=displaySite');
                exit();
                }
    }
}