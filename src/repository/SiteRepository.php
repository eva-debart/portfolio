<?php

namespace App\repository;

use App\repository\AbstractRepository;
use App\models\Site;
use PDO;

class SiteRepository extends AbstractRepository {
    public function __construct(){
      parent::__construct();
  }
  public function insertSite($site): bool
  {
      try {
          $query = $this->connexion->prepare('INSERT INTO sites
                                              ( nom, imgGalerie, imgGrand, siteUrl, category) 
                                              VALUES (:nom, :imgGalerie, :imgGrand, :siteUrl, :category)');
          if ($query) {
              $query->bindValue(':nom', $site->getNom() );
              $query->bindValue(':imgGalerie', $site->getImgGalerie() );
              $query->bindValue(':imgGrand', $site->getImgGrand() );
              $query->bindValue(':siteUrl', $site->getSiteUrl() );
              $query->bindValue(':category', $site->getCategory() );
              
              var_dump('hello');

              return $query->execute();
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
              
          }
      }catch (Exception $e) {
          var_dump($e); die;
          return false;
      }
  }

  public function logSite()
  {   
       $data = null;
          try {
              $query = $this->connexion->query('SELECT * FROM sites');
              if ($query) {
                  $query->execute();
                  
                  $data = $query->fetchAll(PDO::FETCH_ASSOC);
              }
          }
          catch (\Exception $e) {
              die($e);
          }
          
          return $data;
  }
  
   public function fetchId(int $id_sites): array {
      $data = null;
      try {
          $query = $this->connexion->prepare('SELECT * FROM sites WHERE id = :id');
          if ($query) {
              $query->bindParam(':id', $id_sites);
              $query->execute();
              
              $data = $query->fetch(PDO::FETCH_ASSOC);
          }
      } catch (\Exception $e) {
          die($e);
      }
      
      return $data;
  }
  
  
  
  public function deleteSites(int $id_sites): array {
      try {
          $query = $this->connexion->prepare('DELETE FROM `sites` WHERE id = :id');
          if ($query) {
              $query->bindValue(':id',$id_sites );
              return $query->execute();
              
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
          }
          
      } catch (Exception $e) {
          return false;
      }
  }
  public function updateSites($sites): array  
  {
      $data = null;
      try {
          $query = $this->connexion->prepare('UPDATE sites 
                                              SET nom = :nom, imgGalerie = :imgGalerie, imgGrand = :imgGrand, siteUrl = :siteUrl, category = :category
                                              WHERE id = :id ');
            if ($query) {
                $query->bindValue(':nom', $site->getName() );
                $query->bindValue(':imgGalerie', $site->getImgGalerie() );
                $query->bindValue(':imgGrand', $site->getImgGrand() );
                $query->bindValue(':siteUrl', $site->getSiteUrl() );
                $query->bindValue(':category', $site->getCategory() );
                $query->bindValue(':id', $site->getId() );
                return $query->execute();
              
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
          }
      } catch (Exception $e) {
          var_dump($e); die;
          return false;
      }
      return $data;
  }
   public function fetchAll()
  {
      $data = null;
      try {
          $query = $this->connexion->query('SELECT * FROM sites');
          if ($query) {
              $query->execute();
              
              $data = $query->fetchAll(PDO::FETCH_ASSOC);
          }
      } catch (\Exception $e) {
          die($e);
      }
      
      return $data;
  }
}