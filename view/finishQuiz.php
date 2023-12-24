<?php 

require_once '../controler/ControlerStart.php';
require_once '../include.php/header.php';
$n = Session_player();
?>
<section class="  w-100 " style=" height: 100vh; background-color:#756AB6;">


    <div class=" d-flex justify-content-between pt-2 ">
        <div class=" d-flex flex-column w-75 justify-content-evenly ">

            <div class=" buttons px-4 mt-0">

                <button id="true" class="btn btn-success btn-block rating-submit">Question True</button><br>

                <div class="bg-white w-100 mt-2 rounded ps-3"></div>
            </div>


            <div class=" buttons px-4 mt-0">

                <button id="false" class="btn btn-danger btn-block rating-submit">Question Flase</button>
                <div class="bg-white w-100 mt-2 rounded ps-3">
                </div>
            </div>




        </div>
        <div class="container  mt-3  d-flex justify-content-center pt-5 ">

            <div class="card text-center mb-5">

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
                    <!-- <div class="rate bg-success py-3 text-white mt-3"> -->
                    <!-- <h4 class="mb-0"> Validation</h4> -->

                    <h6 class="mb-0"><?=$varlidation?></h6>

                    <div class="buttons px-4 mt-0">

                        <button class="btn btn-warning btn-block rating-submit">FINISH Quiz</button>

                    </div>


                </div>






            </div>



        </div>



    </div>








</section>
<?php require_once '../include.php/footer.php'; ?>