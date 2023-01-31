<?php

namespace App\repository;

use App\repository\AbstractRepository;
use App\models\Commentary;
use PDO;
    
class CommentaryRepository extends AbstractRepository {
      public function __construct(){
        parent::__construct();
    }
    
    public function logComm()
    {   
         $data = null;
            try {
                $query = $this->connexion->query('SELECT * FROM commentary');
                if ($query) {
                    $query->execute();
                    
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (\Exception $e) {
                die($e);
            }
            
            return $data;
    }
    
    public function insertComment($comment): bool
    {
        try {
            $query = $this->connexion->prepare('INSERT INTO commentary
                                                (email_user, name_user, text, created_at, verify) 
                                                VALUES (:email_user, :name_user, :text, :created_at, :verify)');
            if ($query) {
                $query->bindValue(':email_user', $comment->getEmail_user() );
                $query->bindValue(':name_user', $comment->getName_user() );
                $query->bindValue(':text', $comment->getText() );
                $query->bindValue(':created_at', $comment->getCreated_at() );
                $query->bindValue(':verify', $comment->getVerify() );
                
                return $query->execute();
            }
        } catch (Exception $e) {
            var_dump($e); die;
            return false;
        }
    }
    
     public function fetchAll()
    {
        $data = null;
        try {
            $query = $this->connexion->query('SELECT * FROM commentary');
            if ($query) {
                $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function deleteComment(int $id_comment): bool 
    {
        try {
            $query = $this->connexion->prepare('DELETE FROM `commentary` WHERE id = :id');
            if ($query) {
                $query->bindValue(':id',$id_comment );
                return $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            
        } catch (Exception $e) {
            return false;
        }
    }

    public function fetchId(int $id_comment): array
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('SELECT * FROM `commentary` WHERE id = :id');
            if ($query) {
                $query->bindParam(':id', $id_comment);
                $query->execute();
                
                $data = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
        
        return $data;
    }


    public function verify($comment): bool
    {
        $data = null;
        try {
            $query = $this->connexion->prepare('UPDATE `commentary` 
                                                SET comment = :comment
                                                WHERE id = :id ');
            if ($query) {

                $query->bindValue(':comment', $comment->getComment() );
                $query->bindValue(':id', $comment->getId() );
                return $query->execute();
                
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (Exception $e) {
            var_dump($e); die;
            return false;
        }
        return $data;
    }
    
}