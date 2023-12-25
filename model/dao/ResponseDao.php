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
        // $req = "SELECT * FROM response WHERE idQestion=:idQ AND iscoercet = 1";
        $req = "SELECT idResponcse,nomResponse,iscoercet,explication,question.NomQuestin,idQestion FROM response ,question  where question.IdQuestion=response.idQestion and idQestion=:idQ  AND iscoercet = 1";

        $res = $this->db->prepare($req);
        $res->bindParam(":idQ", $idQ, PDO::PARAM_INT);
        $res->execute();
    
        $row = $res->fetch();
        return $row;
    }
    public function getResonseById($id){
        $req = "SELECT idResponcse,nomResponse,iscoercet,explication,question.NomQuestin,idQestion FROM response ,question  where question.IdQuestion=response.idQestion and idResponcse=:id";
        $res = $this->db->prepare($req);
        $res->bindParam(":id", $id, PDO::PARAM_INT);
        $res->execute();
    
        $row = $res->fetch();
        return $row;
    }
    public function Get_Response($id_q)
    {
        $req = "SELECT idResponcse,nomResponse,iscoercet,explication,NomQuestin FROM response,question WHERE response.idQestion=question.IdQuestion
and response.idQestion=:idQ";
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
            $r->getQuestion()->setNomQuestin($row->NomQuestin);
            $idResponcse=$r->getIdResponcse();
            $nomResponse=$r->getNomResponse();
            $iscoercet=$r->getIscoercet();
            $explication=$r->getExplication();
            //  $Qu=$r->getQuestion()->getNomQuestin();
            
            $response=[
                'idResponcse'=> $idResponcse,
                'nomResponse'=> $nomResponse,
                'iscoercet'=> $iscoercet,
                'explication'=> $explication,
                // 'question'=> $Qu
            ];
        
            array_push($responses, $response);
        }
        
        return $responses;
    }
    
}