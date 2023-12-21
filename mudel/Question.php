<?php 
require_once './Theme.php';
class Question{
  private $IdQuestion;
    private $NomQuestin;
    private $description;
    private Theme $Theme;
    public function __construct(){
        
    }
    

  /**
   * Get the value of IdQuestion
   */ 
  public function getIdQuestion()
  {
    return $this->IdQuestion;
  }

  /**
   * Set the value of IdQuestion
   *
   * @return  self
   */ 
  public function setIdQuestion($IdQuestion)
  {
    $this->IdQuestion = $IdQuestion;

    return $this;
  }

    /**
     * Get the value of NomQuestin
     */ 
    public function getNomQuestin()
    {
        return $this->NomQuestin;
    }

    /**
     * Set the value of NomQuestin
     *
     * @return  self
     */ 
    public function setNomQuestin($NomQuestin)
    {
        $this->NomQuestin = $NomQuestin;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Theme
     */ 
    public function getTheme()
    {
        return $this->Theme;
    }
}