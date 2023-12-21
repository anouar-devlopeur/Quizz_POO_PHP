<?php 
require_once './Question.php';
class Response{
    // `idResponcse`, `nomResponse`, `iscoercet`, `idQestion
    private $idResponcse;
    private $nomResponse;
    private $iscoercet;
    private Question $question;
    
    
    public function __construct(){
        
        $this->question = new Question();
        
    }

    /**
     * Get the value of idResponcse
     */ 
    public function getIdResponcse()
    {
        return $this->idResponcse;
    }

    /**
     * Set the value of idResponcse
     *
     * @return  self
     */ 
    public function setIdResponcse($idResponcse)
    {
        $this->idResponcse = $idResponcse;

        return $this;
    }

    /**
     * Get the value of nomResponse
     */ 
    public function getNomResponse()
    {
        return $this->nomResponse;
    }

    /**
     * Set the value of nomResponse
     *
     * @return  self
     */ 
    public function setNomResponse($nomResponse)
    {
        $this->nomResponse = $nomResponse;

        return $this;
    }

    /**
     * Get the value of iscoercet
     */ 
    public function getIscoercet()
    {
        return $this->iscoercet;
    }

    /**
     * Set the value of iscoercet
     *
     * @return  self
     */ 
    public function setIscoercet($iscoercet)
    {
        $this->iscoercet = $iscoercet;

        return $this;
    }

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }
}