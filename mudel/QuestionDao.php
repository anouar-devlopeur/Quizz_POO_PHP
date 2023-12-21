<?php 
require_once './config/config.php';
require_once './Question.php';
class QuestionDao{
    private $db;
    private Question $question;
    public function __construct(){
        $this->db = Database ::getInstance()->getConnection();
        $this->question = new Question();
    }
    

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }
}