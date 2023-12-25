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
            <input type="text" class="form-control my-3" placeholder="Recipient's username" id="usernameInput"
                aria-label="Recipient's username" aria-describedby="button-addon2" name="name" required>
            <span class="fs-6">- s'iscrire votre nom</span>
            <div class="input-group mb-3">
                <div class="input-group-text pe-2">
                    <input class="form-check-input mt-0" type="checkbox" value=""
                        aria-label="Checkbox for following text input" id="checkregl">
                </div>
                <h6 class="p-2"> Vous avez accepté le règlement</h6>
            </div>

            <br>
            <button type="submit" class="btn borde px-5" style="background-color:#756AB6;" type="button"
                id="button-addon2" name="Start" disabled>Start</button>
        </form>

    </div>
</section>

<?php  include './include.php/footer.php'; ?>
<script>
var checkregl = document.getElementById('checkregl');
var startButton = document.getElementById('button-addon2');
var usernameInput = document.getElementById('usernameInput');


checkregl.addEventListener('change', checkForm);
usernameInput.addEventListener('input', checkForm);

function checkForm() {
    startButton.disabled = !(checkregl.checked && usernameInput.value.trim() !== '');
}
</script>