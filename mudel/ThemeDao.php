<?php 
require_once './config/config.php';
class ThemeDao{
    private $db;
    private Theme $theme;
    public function __construct(){
        $this->db = Database::getInstance()->getConnection();
        $this->theme = new Theme();
        
    }

    /**
     * Get the value of theme
     */ 
    public function getTheme()
    {
        return $this->theme;
    }
}