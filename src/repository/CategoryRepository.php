<?php

namespace App\repository;

use App\repository\AbstractRepository;
use App\models\Category;
use PDO;

    
class categoryRepository extends AbstractRepository {
      public function __construct(){
        parent::__construct();
    }
    
    public function logCategory()
    {   
         $data = null;
            try {
                $query = $this->connexion->query('SELECT * FROM category');
                if ($query) {
                    $query->execute();
                    
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (\Exception $e) {
                die($e);
            }
            
            return $data;
    }
    
     public function fetchId(int $id_category): array | bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('SELECT * FROM category WHERE id = :id');
            if ($query) {
                $query->bindParam(':id', $id_category);
                $query->execute();
                
                $data = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function joinCat($anime,$id_anime)
    {
       try {
            $query = $this->connexion->prepare('SELECT category.id ,  category.cat_name, anime.id,                                      anime.category_id
                                              FROM category
                                              JOIN anime ON category.id = anime.category_id
                                              WHERE anime.id = :id');
    
            if ($query) {
                
                $query->bindParam(':id',$id_anime);
                $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
         return $data;
    }
    
    public function insertCategory($cat): bool
    {
        try {
            $query = $this->connexion->prepare('INSERT INTO category
                                                (cat_name) 
                                                VALUES (:cat_name)');
            if ($query) {
                $query->bindValue(':cat_name', $cat->getCat_name() );
                
                return $query->execute();
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            var_dump($e); die;
            return false;
        }
    }
    
    public function deleteCategory(int $id_category): array | bool
    {
        try {
            $query = $this->connexion->prepare('DELETE FROM `category` WHERE id = :id');
            if ($query) {
                $query->bindValue(':id',$id_category );
                return $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            
        } catch (Exception $e) {
            return false;
        }
    }
    public function updateCategory($category): array | bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('UPDATE category 
                                                SET name = :cat_name
                                                WHERE id = :id ');
            if ($query) {
                $query->bindValue(':name', $category->getCat_name() );
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
            $query = $this->connexion->query('SELECT * FROM category');
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