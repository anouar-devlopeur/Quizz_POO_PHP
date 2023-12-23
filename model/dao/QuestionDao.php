<?php
require_once __DIR__ . './../../db/db.php';
require_once __DIR__ . "./../Question.php";
class QuestionDao
{
    private $db;
    private Question $question;
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
        $this->question = new Question();
    }


    /**
     * Get the value of question
     */
    public function getQuestion()
    {
        return $this->question;
    }
    public function get_Question()
    {
        $req = $this->db->prepare('SELECT * FROM question');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
     
        
        $questions = array(); 
        foreach ($result as $row) {
            $q = new Question();
            $q->setIdQuestion($row['IdQuestion']);
            $q->setNomQuestin($row['NomQuestin']);
            $id=$q->getIdQuestion();
            $questionName=$q->getNomQuestin();
            $question=[
                'id'=> $id,
                'questionName'=> $questionName,
            ];
        
            array_push($questions, $question);
        }
        
        return $questions;
      
    } 
    // id
    public function getId_Question()
{
    $req = $this->db->prepare('SELECT IdQuestion FROM question  ');
    $req->execute();
    $result = $req->fetch(PDO::FETCH_OBJ);

    $ques = array();
    if ($result) {
        $q = new Question();
        $q->setIdQuestion($result->IdQuestion);
        array_push($ques, $q);
    }

    return $ques;
}   
    
}


// $qu = new QuestionDao();
// $qu->getId_Question();