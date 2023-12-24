<?php 

 require_once '../controler/Session_Player.php';

$n = Session_player();
require_once '../include.php/header.php';
?>
<h1 class="text-center fw-bold m-0 py-3 text-white" style="background-color:#756AB6;">
    Online Quiz Application


</h1>
<div class="container d-flex justify-content-center  " style=" height: 70vh;">

    <div class=" card text-center mb-2">

        <div class="circle-image ">
            <img src="https://i.imgur.com/hczKIze.jpg" width="80">
        </div>

        <span class="dot"></span>

        <h2 class="name mb-1 fw-500 fs-3">
            <!-- <?=$n?> -->
            anwar
        </h2>
        <div class=" location mt-4">

            <span class="d-block">
                <small class="text-truncate  fs-2">Votre Score :</small><br>
                <small class="text-truncate fs-3">

                    <!-- <?=$score?> -->
                </small>
            </span>
        </div>
        <!-- <div class="rate bg-<?=$color?> py-3 text-white mt-3"> -->
        <div class="rate bg-success py-3 text-white mt-3">
            <h4 class="mb-0"> Validation</h4>

            <!-- <h6 class="mb-0"><?=$varlidation?></h6> -->

            <div class="buttons px-4 mt-0">

                <button class="btn btn-warning btn-block rating-submit">FINISH Quiz</button>

            </div>


        </div>






    </div>



</div>


<div class="py-5 bg-danger">
    <button onclick="ShowTrue()" id="true" class="btn btn-success btn-block rating-submit">Question
        True</button>
    <div id="Qt" class="container" style="display:none">
        <div class="row hidden-md-up">
            <?php foreach ($responsTrue as $index => $response) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Question 1</h4>
                        <h6 class="card-subtitle text-muted">Reponse</h6>
                        <p class="card-text p-y-1"><?= $response["explication"] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
<div class="py-5 bg-success">
    <button class="btn btn-danger btn-block rating-submit">Question
        True</button>
    <div class="container">
        <div class="row hidden-md-up">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../include.php/footer.php'; ?>
<script>
function ShowTrue() {
    var Qt = document.getElementById('Qt');
    Qt.style.display = "block";


}
</script>