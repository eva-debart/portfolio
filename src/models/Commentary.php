<?php
namespace App\models;

class Commentary{
    private $id;
    private $email_user;
    private $name_user;
    private $text;
    private $created_at;
    private $verify;
    private $comment;

    public function getId()
    {
        return $this->id;
    } 
     public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getEmail_user()
    {
        return $this->email_user;
    } 
     public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;
    }

    public function getName_user()
    {
        return $this->name_user;
    } 
     public function setName_user($name_user)
    {
        $this->name_user = $name_user;
    }

    public function getText()
    {
        return $this->text;
    } 
     public function setText($text)
    {
        $this->text = $text;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    } 
     public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getVerify()
    {
        return $this->verify;
    } 
     public function setVerify($verify)
    {
        $this->verify = $verify;
    }

    public function getComment()
    {
        return $this->comment;
    } 
     public function setComment($comment)
    {
        $this->comment = $comment;
    }


    
    
}
