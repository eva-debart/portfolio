<?php
namespace App\models;

class Site{
    private $id;
    private $nom;
    private $imgGalerie;
    private $imagGrand;
    private $siteUrl;
    private $category;

    public function getId()
    {
        return $this->id;
    } 
     public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNom()
    {
        return $this->nom;
    } 
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getImgGalerie()
    {
        return $this->imgGalerie;
    } 
    public function setImgGalerie($imgGalerie)
    {
        $this->imgGalerie = $imgGalerie;
    }

    public function getImgGrand()
    {
        return $this->imgGrand;
    } 
    public function setImgGrand($imgGrand)
    {
        $this->imgGrand = $imgGrand;
    }

    public function getSiteUrl()
    {
        return $this->siteUrl;
    } 
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }
   
    public function getCategory()
    {
        return $this->category;
    } 
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
