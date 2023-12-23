<?php 
require_once './controler/ControlerStart.php';
StartShow();

include './include.php/header.php';
?>

<h1 class="text-center  fw-bold   py-5 text-white mb-3" style=" background-color:#756AB6;">Online Quiz Application
    <br>
    <em class=" fw-bold fs-1 fst-italic">AWS</em>
</h1>
<section class=" d-flex justify-content-evenly gap-5   container mb-3"
    style=" height: 60vh; border: solid #756AB6;border-radius: 15% 0%;">
    <div class=" my-auto">
        <img src="./img/logo heart.svg" alt="Quizz">

    </div>
    <div class="my-3">
        <h2 class="fs-1   fw-bold" style="color:#756AB6">Pseudo Name</h2>

        <form method="post">
            <input type=" text" class="form-control my-5" placeholder="Recipient's username"
                aria-label="Recipient's username" aria-describedby="button-addon2" name="name" required>
            <button type="submit" class="btn  borde px-5" style="background-color:#756AB6;" type="button"
                id="button-addon2" name="Start">Start</button>

        </form>

    </div>
</section>
<?php  include './include.php/footer.php'; ?>