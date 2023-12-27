<?php
require_once '../controler/ControlerStart.php';
require_once '../controler/Session_Player.php';
require_once '../controler/ControlerQuestion.php';
require_once '../controler/ControlerResponse.php';
require_once '../include.php/header.php';
$s=new ControlerResponse();
$RQ=$s->ShowResponse();
// $RQ = ShowResponse();
$isshhuffled = shuffle($RQ);

$raaa = $RQ;
$index = 0;

$n = Session_player();



?>

<h1 class="text-center fw-bold m-0 py-3 text-white" style="background-color:#756AB6;">
    Online Quiz Application
    <br>
    <em class="fw-bold fs-1 fst-italic" style="color: #092635">Jouer :
        <?= $n ?>
    </em>
    <div class="progress w-25 mx-auto mt-1">
        <div class="progress-bar" style="width:65%"></div>
    </div>
    </div>
</h1>

<form id="form" class="w-100 border rounded-2" style="height: 100vh; background-color: #7BD3EA" method="post"
    action="../controler/ControlerFinishQuiz.php">
    <h2 class="mx-auto text-center pb-2 mt-1 rounded w-25" style="font-size:300%;background-color: #756AB6;">
        Question
    </h2>

    <?php foreach ($raaa as $rq) : ?>
    <?php $index++ ?>
    <!-- affiche question -->
    <div class="question_id" id="q<?= $rq['question']['id'] ?>">
        <h3 class="text-center container   my-3" style=" width:100%">
            <?= $rq['question']['questionName'] ?>
        </h3>
        <h4 class="text-center fs-3 text-white"> <?= $rq['question']['theme'] ?></h4>
        <div class="d-flex flex-wrap w-100 m-auto mt-5 pt-2 gap-5 text-center justify-content-center">
            <!-- affiche response -->
            <?php foreach ($rq['respons'] as $r) : ?>
            <div onclick="checkedBtn('suivantButton<?= $rq['question']['id'] ?>', 'res<?= $r['idResponcse'] ?>')"
                class="d-flex align-items-center gap-4 btn border-0 rounded-2 check"
                style="width: 45%; background-color:#AC87C5">
                <input type="radio" name="response<?= $rq['question']['id'] ?>" value=" <?= $r['idResponcse'] ?>"
                    id="res<?= $r['idResponcse'] ?>">
                <h4 class="fs-5"><?= $r['nomResponse'] ?></h4>
            </div>
            <?php endforeach; ?>
        </div>

        <h2 class="text-center mt-2 fs-1 "><?= $index ?>/10</h2>
        <?php if ($index < 10 ) : ?>
        <!-- suivant -->
        <span id="suivantButton<?= $rq['question']['id'] ?>"
            onclick="nextQ(<?= $rq['question']['id'] ?>, 'res<?= $r['idResponcse'] ?>')"
            class="btn border-0 rounded-2 bg-success float-end me-5 mt-2 w-25 aff" style="display: none;">Suivant</span>
        <?php else : ?>
        <!-- button valider -->
        <span onclick="nextQ(<?= $rq['question']['id'] ?>, 'res<?= $r['idResponcse'] ?>')"
            id="suivantButton<?= $rq['question']['id'] ?>"
            class="btn border-0 rounded-2 bg-success float-end me-5 mt-2 w-25 aff" style="display: none;">Valider</span>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</form>

<script>
var score = 0;
// question display

//question_id

var questions = document.getElementsByClassName("question_id");
// console.log(typeof questions);
// console.log(questions);
// equivalent to using Array.from(questions)
// Now 'questionsArray' is a proper array containing the elements from the NodeList.
var arr = [].slice.call(questions);

arr.forEach(element => {
    element.style.display = 'none'
});


count = 0;
arr[count].style.display = 'block'

// for (let i = count; i <= 10; i++) {
//     let divQ = document.getElementById('q' + i);
//     divQ.style.display = 'none';
// }

// for (let i = 2; i <= 10; i++) {
//     let divQ = document.getElementById('q' + i);
//     divQ.style.display = 'none';
// }
// check response affiche button suivant
function checkedBtn(Button, res) {
    let suivantButton = document.getElementById(Button);
    suivantButton.style.display = 'block';
    let inputRes = document.getElementById(res);
    inputRes.click();
}
// next question 
function nextQ(i, res) {


    if (count == arr.length - 1) {
        document.getElementById('form').submit();
        return
    }






    //count =0
    arr[count].style.display = 'none'
    // idquestion
    console.log(i);

    i++;
    // console.log(i);
    count = count + 1;
    arr[count].style.display = 'block'
}
</script>

<?php require_once '../include.php/footer.php'; ?>