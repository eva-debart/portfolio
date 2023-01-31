<?php

namespace App\services;

use App\controller\HomeController;
use App\controller\UserController;
use App\controller\SecurityController;
use App\controller\SiteController;
use App\controller\CommentaryController;
use App\controller\ViewSite;


class Router {
    
    public function handleRequest(): void
    {
    
        $url = $_GET['url'] ?? 'home';
        
        switch ($url) {
            case 'home':
                $controller = new HomeController();
                $controller->displayHome();
                break;
            case 'galerie':
                $controller = new HomeController();
                $controller->displayHome();
                break;
            case 'admin':
                $controller = new UserController();
                $controller->displayLogin();
                break;
            case 'account':
                $controller = new UserController();
                $controller->displayProfil();
                break;
            case 'securityLogin':
                $controller = new SecurityController();
                $controller->securityLogin();
                break;
            case 'register':
                $controller = new HomeController();
                $controller->displayRegister();
                break;
            case 'login':
                $controller = new UserController();
                $controller->displayLogin();
                break;
            case 'securityRegister':
                $controller = new SecurityController();
                $controller->securityRegister();
                break;
            case 'profil': 
                $controller = new UserController();
                $controller->verifylogin();
                break;
            case 'addSiteForm':
                $controller = new HomeController();
                $controller->addSiteForm();
                break;
            case 'addSite':
                $controller = new SiteController();
                $controller->addSite();
                break;
            case 'SupprSite':
                $controller = new SiteController();
                $controller->supprSite();
                break;
            case 'displayModify':
                $controller = new HomeController();
                $controller->displayModify();
                break;
            case 'modifySite':
                $controller = new SiteController();
                $controller->modifySite();
                break;
            case 'displaySite':
                $controller = new SiteController();
                $controller->displaySite();
                break;
            case 'freshlyRestaurant':
                $controller = new ViewSite();
                $controller->freshlyRestaurant();
                break;
            case 'archiDesign':
                $controller = new ViewSite();
                $controller->archiDesign();
                break;
            case 'newYorkCity':
                $controller = new ViewSite();
                $controller->newYorkCity();
                break;
            case 'addComment':
                $controller = new CommentaryController();
                $controller->addComment();
                break;
            case 'supprComment':
                $controller = new CommentaryController();
                $controller->supprComment();
                break;
            case 'verify':
                $controller = new CommentaryController();
                $controller->verify();
                break;
            default:
                echo "404 :/ portfolio";
                break;
           
        }
    }
}
