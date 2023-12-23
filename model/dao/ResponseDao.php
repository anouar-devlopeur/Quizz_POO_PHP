<?php 
require_once __DIR__ . './../../db/db.php';
require_once __DIR__ . './.././Response.php'; 
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
    public function getResonseCorrectByIdQ($idQ){
        $req = "SELECT * FROM response WHERE idQestion=:idQ AND iscoercet = 1";
        $res = $this->db->prepare($req);
        $res->bindParam(":idQ", $idQ, PDO::PARAM_INT);
        $res->execute();
    
        $row = $res->fetch();
        return $row;
    }
    public function getResonseById($id){
        $req = "SELECT * FROM response WHERE idResponcse=:id";
        $res = $this->db->prepare($req);
        $res->bindParam(":id", $id, PDO::PARAM_INT);
        $res->execute();
    
        $row = $res->fetch();
        return $row;
    }
    public function Get_Response($id_q)
    {
        $req = "SELECT idResponcse,nomResponse,iscoercet,explication FROM response WHERE idQestion=:idQ";
        $res = $this->db->prepare($req);
        $res->bindParam(":idQ", $id_q, PDO::PARAM_INT);
        $res->execute();
    
        $rows = $res->fetchAll(PDO::FETCH_OBJ);
    
        $responses = array();
        foreach ($rows as $row) {
            $r = new Response();
            $r->setIdResponcse($row->idResponcse);
            $r->setNomResponse($row->nomResponse);
            $r->setIscoercet($row->iscoercet);
            $r->setExplication($row->explication);
            $idResponcse=$r->getIdResponcse();
            $nomResponse=$r->getNomResponse();
            $iscoercet=$r->getIscoercet();
            $explication=$r->getExplication();
            
            $response=[
                'idResponcse'=> $idResponcse,
                'nomResponse'=> $nomResponse,
                'iscoercet'=> $iscoercet,
                'explication'=> $explication
            ];
        
            array_push($responses, $response);
        }
          
        return $responses;
    }
    
}