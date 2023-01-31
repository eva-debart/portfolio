<?php

    namespace App\repository;
    
    use App\repository\AbstractRepository;
    use App\models\User;
    use PDO;
    
    
    class UserRepository extends AbstractRepository {
        
    public function __construct(){
        parent::__construct();
    }
    
    public function fetchLogin($email)
    {
      $data = null;
        try {
            $query = $this->connexion->prepare('SELECT * FROM users WHERE email = :email');
            if ($query) {
                $query->bindParam(':email', $email);
                $query->execute();
                
                $data = $query->fetch(PDO::FETCH_ASSOC);
            }
        } catch (\Exception $e) {
            die($e);
        }
        
        return $data;
    }
    
    public function insertUser($user): bool
    {
        try {
            $query = $this->connexion->prepare('INSERT INTO users (nickname, email, password) 
            
                                                VALUES (:nickname, :email, :password)' );
            if ($query) {
                $query->bindValue(':nickname', $user->getNickname() );
                $query->bindValue(':email', $user->getEmail() );
                $query->bindValue(':password', $user->getPassword() );

                return $query->execute();
            }
        } catch (Exception $e) {
            return false;
        }
    }
     public function logUsers()
    {   
         $data = null;
            try {
                $query = $this->connexion->query('SELECT * FROM users');
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