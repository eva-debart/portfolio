<?php

namespace App\repository;

use App\repository\AbstractRepository;
use App\models\Anime;
use PDO;
    
class AnimeRepository extends AbstractRepository {
      public function __construct(){
        parent::__construct();
    }
    
    public function logAnime()
    {   
         $data = null;
            try {
                $query = $this->connexion->query('SELECT * FROM anime');
                if ($query) {
                    $query->execute();
                    
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (\Exception $e) {
                die($e);
            }
            
            return $data;
    }
    
     public function fetchId(int $id_anime): array | bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('SELECT * FROM anime WHERE id = :id');
            if ($query) {
                $query->bindParam(':id', $id_anime);
                $query->execute();
                
                $data = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function insertAnime($anime): bool
    {
        try {
            $query = $this->connexion->prepare('INSERT INTO anime
                                                (name, image, description) 
                                                VALUES (:name, :image, :description)');
            if ($query) {
                $query->bindValue(':name', $anime->getName() );
                $query->bindValue(':image', $anime->getImage() );
                $query->bindValue(':description', $anime->getDescription() );
                
                return $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            var_dump($e); die;
            return false;
        }
    }
    
    public function deleteAnime(int $id_anime): array | bool
    {
        try {
            $query = $this->connexion->prepare('DELETE FROM `anime` WHERE id = :id');
            if ($query) {
                $query->bindValue(':id',$id_anime );
                return $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            
        } catch (Exception $e) {
            return false;
        }
    }
    public function updateAnime($anime): array | bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('UPDATE anime 
                                                SET name = :name, image = :image,  description = :description
                                                WHERE id = :id ');
            if ($query) {
                $query->bindValue(':name', $anime->getName() );
                $query->bindValue(':image', $anime->getImage() );
                $query->bindValue(':description', $anime->getDescription() );
                $query->bindValue(':id', $anime->getId() );
                return $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            var_dump($e); die;
            return false;
        }
        return $data;
    }
    public function updateCategory($anime): array | bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('UPDATE anime 
                                                SET name = :name, image = :image,  description = :description, category_id = :category
                                                WHERE id = :id ');
            if ($query) {
                $query->bindValue(':name', $anime->getName() );
                $query->bindValue(':image', $anime->getImage() );
                $query->bindValue(':description', $anime->getDescription() );
                $query->bindValue(':category', $anime->getCategory() );
                $query->bindValue(':id', $anime->getId() );
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
            $query = $this->connexion->query('SELECT * FROM anime');
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