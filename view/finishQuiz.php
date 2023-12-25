<?php
require_once '../controler/Session_Player.php'; 
require_once '../controler/Session_Distroy.php';


$n = Session_player();
// Session_player_Distroy() ;

require_once '../include.php/header.php';
?>
<h1 class="text-center fw-bold m-0 py-2 text-white" style="background-color:#756AB6;">
    Online Quiz Application


</h1>
<div class="d-flex justify-content-center  " style="background-color:#C499F3; height: 75vh;">

    <div class=" card text-center mb-3">

        <div class="circle-image ">
            <img src="https://i.imgur.com/hczKIze.jpg" width="80">
        </div>

        <span class="dot"></span>

        <h2 class="name mb-1 fw-500 fs-3">
            <?=$n?>

        </h2>
        <div class=" location mt-4">

            <span class="d-block">
                <small class="text-truncate  fs-2">Votre Score :</small><br>
                <small class="text-truncate fs-3">

                    <?=$score?>
                </small>
            </span>
        </div>
        <div class="rate bg-<?=$color?> py-3 text-white mt-3">
            <!-- <div class="rate bg-success py-3 text-white mt-5"> -->
            <h4 class="mb-0"> Validation</h4>

            <h6 class="mb-0"><?=$varlidation?></h6>

            <form class="buttons px-4 mb-2" method="post" action="http://localhost/quizz/controler/Session_Distroy.php">

                <button class=" btn btn-warning btn-block rating-submit" name="LogOut">FINISH Quiz</button>

            </form>


        </div>






    </div>



</div>

<section class="ps-2" style="background-color: #C499F3 ">


    <div class="pt-2">
        <button onclick="ShowTrue()" id="true" class="btn btn-success btn-block rating-submit">Question
            True</button>
        <div id="Qt" class="container" style="display:none">
            <div class="row hidden-md-up">
                <?php foreach ($responsTrue as $index => $response) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block p-3">
                            <h4 class="card-title ">Question <?=$response["idQestion"]?>
                                :</h4>
                            <h6 class="card-subtitle text-muted">Reponse : <?= $response["nomResponse"]?></h6>
                            <p class="card-text p-y-1"><?= $response["explication"] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
    <div class="pt-2 pb-2 ">
        <button onclick="ShowFlase()" class="btn btn-danger btn-block rating-submit">Question
            False</button>
        <div id="Qf" class="container" style="display:none">
            <div class="row hidden-md-up">
                <?php foreach($responsFalse as $index => $response) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block p-3">
                            <h4 class="card-title">Question <?=$response["idQestion"]?>:</h4>
                            <h6 class="card-subtitle text-muted">Reponse : <?= $response["nomResponse"]?></h6>
                            <p class="card-text p-y-1"><?= $response["explication"] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="pt-2 pb-2 ">
        <button onclick="ShowJusifierFlase()" class="btn btn-info btn-block rating-submit">Question
            Justifirer False</button>
        <div id="QJf" class="container" style="display:none">
            <div class="row hidden-md-up">
                <?php foreach($responstrueOfResponsFalse as $index => $response) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block p-3">
                            <h4 class="card-title">Question <?=$response["idQestion"]?>:</h4>
                            <h6 class="card-subtitle text-muted">Reponse : <?= $response["nomResponse"]?></h6>
                            <p class="card-text p-y-1"><?= $response["explication"] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php require_once '../include.php/footer.php'; ?>
<script>
function ShowTrue() {
    var Qt = document.getElementById('Qt');
    Qt.style.display = "block";


}

function ShowFlase() {
    var Qf = document.getElementById('Qf');
    Qf.style.display = "block";
}

function ShowJusifierFlase() {
    var QJf = document.getElementById('QJf');
    QJf.style.display = "block";
}
</script>