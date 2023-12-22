<?php
require_once '../model/dao/QuestionDao.php';
function GetQuestion(){
    $question = new QuestionDao();
    $questionName = $question->get_Question()[0]['questionName'];

    echo ''. $questionName .'';


}