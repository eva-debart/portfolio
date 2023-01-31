<?php
namespace App\models;

class User{
    private $id;
    private $nickname;
    private $email;
    private $password;
    private $created_at;
    private $age;
    private $profile_picture;
    private $pref;
    private $comment;
    private $roles;

    public function getId()
    {
        return $this->id;
    } 
     public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getNickname()
    {
        return $this->nickname;
    } 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }
    
    public function getEmail()
    {
        return $this->email;
    } 
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
     public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getCreated_at()
    {
        return $this->created_at;
    }
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
    
     public function getAge()
    {
        return $this->age;
    } 
    public function setAge($age)
    {
        $this->age = $age;
    }
    
   public function getProfile_picture()
    {
        return $this->profile_picture;
    }
    public function setProfile_picture($profile_picture)
    {
        $this->profile_picture = $profile_picture;
    }
    
    public function getPref()
    {
        return $this->pref;
    } 
    public function setPref($pref)
    {
        $this->pref = $pref;
    }
    
    public function getComment()
    {
        return $this->comment;
    } 
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    
    public function getRoles()
    {
        return $this->roles;
    } 
     public function setRoles($roles)
    {
        $this->roles = $roles;
    }
 
}

?>