<?php
require_once '../model/dao/QuestionDao.php';
function GetQuestion(){
    $question = new QuestionDao();
    $questionName = $question->get_Question()[0]['questionName'];
    $theme = $question->get_Question()[0]['theme'];

    echo ''. $questionName .'';
    echo ''. $theme .'';


}