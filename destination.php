<?php

    $name = $_POST["inputName"];
    $companyName = $_POST["inputCompanyName"];
    $street = $_POST["inputStreet"];
    $building = $_POST["inputBuilding"];
    $city = $_POST["inputCity"];
    $zip = $_POST["inputZip"];
    $voivode = $_POST["selectVoivodeship"];
    $phone = $_POST["inputPhoneNumber"];
    $email = $_POST["inputEmail"];
    $pid = $_POST["inputPID"];
    $nip = $_POST["inputNIP"];
    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/main.js" defer></script>
</head>
<body>

    <div class="container">
        <?php
            if (empty($companyName)) {
                echo '<h1 class="text-center text-uppercase mt-4 mb-4 mt-md-5 mb-md-5">Dane osobiste</h1>';
            } else {
                echo '<h1 class="text-center text-uppercase mt-4 mb-4 mt-md-5 mb-md-5">Dane firmy</h1>';
            }
        ?>
        <div class="row">
            <div class="offset-lg-3 col-lg-6">
                <div class="data-box">
                    <p>
                        <?php
                            if (empty($companyName)) {
                                echo "<p>Imię i nazwisko: $name</p>";
                            } else {
                                echo "<p>Firma: $companyName</p>";
                            }
                        ?>
                    </p>
                    <hr>
                    <p>Ulica: <?php echo $street; ?></p>
                    <hr>
                    <p>Budynek: <?php echo $building; ?></p>
                    <hr>
                    <p>Miasto: <?php echo $city; ?></p>
                    <hr>
                    <p>Kod pocztowy: <?php echo $zip; ?></p>
                    <hr>
                    <p>Wojewódźtwo: <?php echo $voivode; ?></p>
                    <hr>
                    <p>Numer telefonu: <?php echo $phone; ?></p>
                    <hr>
                    <p>E-mail: <?php echo $email; ?></p>
                    <hr>
                    <p>
                        <?php
                            if (empty($nip)) {
                                echo "<p>PESEL: $pid</p>";
                            } else {
                                echo "<p>NIP: $nip</p>";
                            }
                        ?>
                    </p>
                    <a href="./index.php" class="btn btn-secondary btn-lg w-100 mt-3 mt-md-4">Powrót</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

