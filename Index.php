<?php 
session_start();
if(isset($_POST["Start"])){
    $name=$_POST["name"];
if($name== ""){
    header("location: index.php ");
}else{
    $_SESSION["player"]=$name;
     header("location:./view/start.php ");
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quizz</title>
</head>

<body>
    <h1 class="text-center  fw-bold   py-5 text-white mb-5" style=" background-color:#756AB6;">Online Quiz Application
        <br>
        <em class=" fw-bold fs-1 fst-italic">AWS</em>
    </h1>
    <section class=" d-flex justify-content-evenly gap-5 border border-success container" style=" height: 60vh;">
        <div class="my-auto">
            <img src="./img/logo heart.svg" alt="Quizz">

        </div>
        <div class="my-3">
            <h2 class="fs-1   fw-bold" style="color:#756AB6">Pseudo Name</h2>

            <form method="post">
                <input type=" text" class="form-control my-5" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="button-addon2" name="name">
                <button type="submit" class="btn btn-outline-success px-5" type="button" id="button-addon2"
                    name="Start">Start</button>

            </form>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>