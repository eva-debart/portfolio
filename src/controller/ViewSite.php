<?php
namespace App\controller;

class ViewSite {
    
    
    public function freshlyRestaurant(): void
    {
        require './src/views/siteViews/freeslyRestaurant/menus.php';
    }

    public function archieDesign(): void
    {
        require './src/views/siteViews/archiDesign/index.php';
    }

    public function newYorkCity(): void
    {
        require './src/views/siteViews/newYorkCity/index.php';
    }
}