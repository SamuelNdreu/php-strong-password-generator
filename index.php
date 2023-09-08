<?php
session_start();
include_once __DIR__ . "/partials/_function.php";



$letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "0123456789";
$symbols = "!£$%&*#@";
$haveLetters = $_GET["lettersCheck"] ?? false;
$haveNumbers = $_GET["numbersCheck"] ?? false;
$haveSymbos = $_GET["symbolsCheck"] ?? false;
$characters = getKindOfCharacters($letters, $numbers, $symbols, $haveLetters, $haveNumbers, $haveSymbos);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Genenrator</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <header>
    <nav class="navbar bg-primary-subtle mb-4 justify-content-center">
            <div class="container ">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/1000/1000915.png" alt="Logo" width="60"
                        height="60">
                    <h1 class="ps-2 mt-3 text-dark ">Password Generator</h1>
                </a>
            </div>
        </nav>

    </header>

    <main>
        <h2 class="text-center">Genera una password sicura</h2>
        <div class="container bg-white p-4">
            <form action="./index.php" method="GET" class="row">
                <label for="number-length" class="col-8">Genera una password sicura:</label>
                <input type="number" name="numberLength" id="number-length" class="col-">
                <fieldset class="col-12">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <legend>Consenti ripetizioni di uno o più caratteri:</legend>
                            </div>
                            <div class="col-4">
                            <input type="radio" name="repeat" id="repeat" value="true">
                            <label for="repeat">Si</label>
                            <input type="radio" name="repeat" id="repeat" value="false" checked>
                            <label for="noRepeat">No</label>
                        </div>
                    </div>
                </fieldset>

                    <div class="row">
                <div class="col-8">
                    <div>Seleziona i tipi di caratteri:</div>
                </div>
                <div class="col-4 ps-3">
                    <div>
                        <input type="checkbox" id="letters" name="lettersCheck" checked>
                        <label for="lettersCheck">Lettere</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" id="numbers" name="numbersCheck" checked>
                        <label for="numbersCheck">Numeri</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" id="symbols" name="symbolsCheck" checked>
                        <label for="symbolsCheck">Simboli</label>
                    </div>
                </div>
            </div>
                <button type="submit" class="col-1 btn btn-primary">Invia</button>
            </form>

            <div class="container">
                
            </div>


            <?php
            if (isset($_GET["numberLength"]) && isset($_GET["repeat"])) {
                $passwordGenerated = $_GET["repeat"] == "true" ? getRandomPasswordNoRepet($characters, $_GET["numberLength"]) : getRandomPassword($characters, $_GET["numberLength"]);
                $_SESSION["password"] = $passwordGenerated;
                header('Location: ./psw.php');
            }
            ?>
        </div>
    </main>

</body>
</html>    