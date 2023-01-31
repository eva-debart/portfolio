<?php
namespace App\repository;

use PDO;

abstract class AbstractRepository
{
    
    private const SERVER = "localhost";
    private const USER = "root";
    private const PASSWORD = "" ;
    private const BASE = "portfolio";
    
    protected $connexion;

    public function __construct()
    {
        $this->constructConnexion();
    }
    
    private function constructConnexion(){
        
        try {
            
            $this->connexion = new PDO("mysql:host=" . self::SERVER . ";dbname=" . self::BASE, self::USER, self::PASSWORD);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
           
            die('Erreur : ' . $e->getMessage());
        }
        $this->connexion->exec("SET CHARACTER SET utf8");
    }
}