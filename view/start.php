<?php
require_once '../controler/ControlerStart.php';
require_once '../controler/ControlerQuestion.php';
require_once '../controler/ControlerResponse.php';

$RQ = ShowResponse();
$n = Session_player();

require_once '../include.php/header.php';
?>

<h1 class="text-center fw-bold m-0 py-5 text-white" style="background-color:#756AB6;">
    Online Quiz Application
    <br>
    <em class="fw-bold fs-1 fst-italic" style="color: #092635">Jouer : <?= $n ?></em>
</h1>

<form id="form" class="w-100 border rounded-2" style="height: 100vh; background-color: #7BD3EA">
    <h2 class="text-center mt-2" style="font-size:400%">Question </h2>
    <?php foreach ($RQ as $rq) : ?>
    <!-- affiche question -->
    <div id="q<?= $rq['question']['id'] ?>">
        <h3 class="w-75 text-center container text-white">
            <?= $rq['question']['questionName'] ?>
        </h3>
        <div class="d-flex flex-wrap w-100 m-auto mt-5 pt-2 gap-5 text-center justify-content-center">
            <!-- affiche response -->
            <?php foreach ($rq['respons'] as $r) : ?>
            <div onclick="checkedBtn('suivantButton<?= $rq['question']['id'] ?>', 'res<?= $r['idResponcse'] ?>')"
                class="d-flex align-items-center gap-4 btn border-0 rounded-2 check"
                style="width: 45%; background-color:#AC87C5">
                <input type="radio" name="response[]" value="<?= $r['idResponcse'] ?>" id="res<?= $r['idResponcse'] ?>">
                <h4 class="fs-5"><?= $r['nomResponse'] ?></h4>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-center mt-2 fs-1"><?= $rq['question']['id'] ?>/10</h2>
        <?php if ($rq['question']['id'] < 10) : ?>
        <!-- suivant -->
        <span id="suivantButton<?= $rq['question']['id'] ?>"
            onclick="nextQ(<?= $rq['question']['id'] ?>, 'res<?= $r['idResponcse'] ?>')"
            class="btn border-0 rounded-2 bg-success float-end me-5 mt-5 w-25 aff" style="display: none;">Suivant</span>
        <?php else : ?>
        <!-- button valider -->
        <span onclick="nextQ(<?= $rq['question']['id'] ?>, 'res<?= $r['idResponcse'] ?>')"
            id="suivantButton<?= $rq['question']['id'] ?>"
            class="btn border-0 rounded-2 bg-success float-end me-5 mt-5 w-25 aff" style="display: none;">Valider</span>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</form>

<script>
var score = 0;
// question display
for (let i = 2; i <= 10; i++) {
    let divQ = document.getElementById('q' + i);
    divQ.style.display = 'none';
}
// check response affiche button suivant
function checkedBtn(Button, res) {
    let suivantButton = document.getElementById(Button);
    suivantButton.style.display = 'block';
    let inputRes = document.getElementById(res);
    console.log(inputRes);
    inputRes.click();
}
// next question 
function nextQ(i, res) {
    if (i == 10) {
        document.getElementById('form').submit();
    }

    let currentDivQ = document.getElementById('q' + i);
    currentDivQ.style.display = 'none';
    i++;
    let nextDivQ = document.getElementById('q' + i);
    nextDivQ.style.display = 'block';
    let inputRes = document.getElementById(res);
    value = inputRes.value;
    // if (parseInt(value) == 1) {
    //     score++;
    // }
    console.log(value);
}
</script>

<?php require_once '../include.php/footer.php'; ?>