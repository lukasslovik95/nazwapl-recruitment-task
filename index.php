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
        <h1 class="text-center text-uppercase mt-4 mb-4 mt-md-5 mb-md-5">Dane identyfikacyjne</h1>
        <div class="row">
            <div class="offset-lg-3 col-lg-6">

            <form action="./destination.php" method="post" class="info-form">
                <div class="form-group switch-wrapper mb-3">
                    <input id="customerId" type="radio" name="switch" checked>
                    <input id="companyId" type="radio" name="switch">
                    <label for="customerId">Klient</label>
                    <label for="companyId">Firma</label>
                    <span class="highlighter"></span>
                </div>

                <div class="form-floating switchable-element mb-3">
                    <input placeholder=" " type="text" class="form-control required-elements" id="inputName" name="inputName" required>
                    <label for="inputName">Imię i nazwisko</label>
                </div>
                <div class="form-floating switchable-element mb-3 d-none">
                    <input placeholder=" " type="text" class="form-control required-elements" id="inputCompanyName" name="inputCompanyName">
                    <label for="inputCompanyName">Firma</label>
                </div>

                <div class="row g-md-2 mb-3">
                    <div class="col-md-9">
                        <div class="form-floating mb-3 mb-md-0">
                            <input placeholder=" " type="text" class="form-control" id="inputStreet" name="inputStreet" required>
                            <label for="inputStreet">Ulica</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input placeholder=" " type="text" class="form-control" id="inputBuilding" name="inputBuilding" required>
                            <label for="inputBuilding">Nr domu</label>
                        </div>
                    </div>
                </div>

                <div class="row g-md-2 mb-3">
                    <div class="col-md-9">
                        <div class="form-floating mb-3 mb-md-0">
                            <input placeholder=" " type="text" class="form-control" id="inputCity" name="inputCity" required>
                            <label for="inputCity">Miejscowość</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input placeholder=" " type="number" class="form-control" id="inputZip" name="inputZip" required>
                            <label for="inputZip">Kod pocztowy</label>
                        </div>
                    </div>
                </div>

                <div class="form-floating g-2 mb-3">
                    <select class="form-select" id="selectVoivodeship" name="selectVoivodeship" required></select>
                    <label for="selectVoivodeship">Wojewódźtwo</label>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputPhoneNumberPrefix">+48</span>
                    <div class="form-floating">
                        <input placeholder=" " type="tel" class="form-control" id="inputPhoneNumber" aria-describedby="inputPhoneNumberPrefix" name="inputPhoneNumber" required>
                        <label for="inputPhoneNumber">Telefon</label>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input placeholder=" " type="email" class="form-control" id="inputEmail" name="inputEmail" required>
                    <label for="inputEmail">Email</label>
                </div>

                <div class="form-floating switchable-element mb-3">
                    <input placeholder=" " type="number" class="form-control required-elements" id="inputPID" name="inputPID" required>
                    <label for="inputPID">PESEL</label>
                </div>
                <div class="form-floating switchable-element mb-3 d-none">
                    <input placeholder=" " type="number" class="form-control required-elements" id="inputNIP" name="inputNIP">
                    <label for="inputNIP">NIP</label>
                </div>

                <input type="submit" class="btn btn-primary btn-lg w-100">
            </form>

            </div>
        </div>
    </div>
    
</body>
</html>