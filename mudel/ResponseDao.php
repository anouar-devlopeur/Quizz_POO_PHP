<?php 
require_once './config/config.php';
require_once './Response.php'; 
class ResponseDao{
    private $db;
    private Response $response;
    public function __construct(){
     $this->db = Database::getInstance()->getConnection();
     $this->response = new Response();
    }

    /**
     * Get the value of response
     */ 
    public function getResponse()
    {
        return $this->response;
    }
}