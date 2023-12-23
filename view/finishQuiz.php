<?php 

require_once '../controler/ControlerStart.php';
require_once '../include.php/header.php';
$n = Session_player();
?>
<div class="d-flex container justify-content-center ">
    <div class=" d-flex justify-content-center " style="margin: 3%;">

        <div class="buttons px-4 mt-0">

            <button class="btn btn-success btn-block rating-submit">Question True</button>

        </div>


        <div class="buttons px-4 mt-0">

            <button class="btn btn-danger btn-block rating-submit">Question Flase</button>

        </div>




    </div>


</div>






</div>



</div>
<div class="container d-flex justify-content-center ">

    <div class="card text-center mb-5">

        <div class="circle-image ">
            <img src="https://i.imgur.com/hczKIze.jpg" width="80">
        </div>

        <span class="dot"></span>

        <span class="name mb-1 fw-500 fs-3"><?=$n?></span>



        <div class=" location mt-4">

            <span class="d-block">
                <small class="text-truncate  fs-2">Votre Score :</small><br>
                <small class="text-truncate fs-3">
                    20%
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
</div>
<?php require_once '../include.php/footer.php'; ?>