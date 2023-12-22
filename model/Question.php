<?php
require_once __DIR__ . "./Theme.php";
class Question
{
  private $IdQuestion;
  private $NomQuestin;

  private Theme $Theme;


  public function __construct()
  {
    $this->Theme = new Theme();
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
  public function setNomQuestin($newNomQuestin)
  {
    $this->NomQuestin = $newNomQuestin;

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