<?php 
require_once __DIR__ . './../../db/db.php';
require_once './model/Theme.php';
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