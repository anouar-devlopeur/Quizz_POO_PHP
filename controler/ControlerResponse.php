<?php
require_once '../model/dao/QuestionDao.php';
require_once '../model/dao/ResponseDao.php';

function ShowResponse()
{
    $question = new QuestionDao();
    $questions = $question->get_Question();
    $questions_respons = array();

    $respons = new ResponseDao();

    for ($i = 0; $i < count($questions); $i++) {
        $rows = $respons->Get_Response($questions[$i]["id"]);

        $question_respons = [
            "question" => $questions[$i],
            "respons" => $rows
        ];
        array_push($questions_respons, $question_respons);
    }

    shuffle($questions_respons);
    // var_dump($questions_respons);

    return $questions_respons;
}
