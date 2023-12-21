<?php 
class Theme{
    private $idTehme;
    private $NomTheme;
     public function __construct(){
        
     }

    /**
     * Get the value of idTehme
     */ 
    public function getIdTehme()
    {
        return $this->idTehme;
    }

    /**
     * Set the value of idTehme
     *
     * @return  self
     */ 
    public function setIdTehme($idTehme)
    {
        $this->idTehme = $idTehme;

        return $this;
    }

    /**
     * Get the value of NomTheme
     */ 
    public function getNomTheme()
    {
        return $this->NomTheme;
    }

    /**
     * Set the value of NomTheme
     *
     * @return  self
     */ 
    public function setNomTheme($NomTheme)
    {
        $this->NomTheme = $NomTheme;

        return $this;
    }
}