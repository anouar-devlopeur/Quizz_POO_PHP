<?php
    require_once '../model/dao/ResponseDao.php'; 
    $responsDao=new ResponseDao();
    $responsTrue =[];
    $responsFalse =[];
    $responstrueOfResponsFalse =[];
    for ($i =1; $i < 11; $i++) { 
        $row=$responsDao->getResonseById($_POST['response'.$i]);
        if($row["iscoercet"] == 0){
            array_push($responsFalse,$row);
        } else{
            array_push($responsTrue,$row);
        }
    }
    for ($i = 0; $i < count($responsFalse); $i++) { 
        $row=$responsDao->getResonseCorrectByIdQ($responsFalse[$i]["idQestion"]);
        array_push($responstrueOfResponsFalse,$row);
    }
    
    if(count($responsTrue)*10 < 70){
        $varlidation = "Not Valide";
    }else{
        $varlidation = "Valide";
    }
    $score = strval(count($responsTrue)*10).'%';
    
    if ($varlidation == 'Valide') {
        $color = 'success';
    } else {
        $color = 'danger';
    }
//   echo('<pre>');var_dump('true:',$responsTrue,'---------------','false:',$responsFalse,'------------------','just',$responstrueOfResponsFalse,'score: ',$score,"varlidation ",$varlidation);
//   echo('<pre>');var_dump('true:',$responsTrue[0]["explication"] );
//   die();


     require_once("../view/finishQuiz.php");

?>