<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark ">
    <div class="container p-3">
        <h2 class="text-center text-primary p-3">Strong Password Generator</h2>
        <form action="server.php" method="get" class="bg-white p-5">
            <div class="mb-3 row ">
                <label for="fullname" class="col-sm-4 col-form-label">
                    <h4>Enter your Full Name</h4>
                </label>
                <div class="col-sm-8">
                    <input class="form-control" name="fullname" placeholder="Write your fullname">
                </div>
            </div>
            <div class="mb-3 row ">
                <label for="length_password" class="col-sm-4 col-form-label">
                    <h4>Password Length</h4>
                </label>
                <div class="col-sm-8">
                    <input class="form-control" name="length_password" placeholder="Write the number of password length">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-6">
                    <h5>Allow repetitions of one or more characters:</h5>
                </div>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="moreCharacters" id="moreCharacters1" value="on" checked>
                        <label class="form-check-label" for="moreCharacters1">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="moreCharacters" id="moreCharacters2" value="off">
                        <label class="form-check-label" for="moreCharacters2">
                            No
                        </label>
                    </div>
                    <div class="form-check form-switch pt-3">
                        <input class="form-check-input" type="checkbox" role="switch" name="letters" id="letters">
                        <label class="form-check-label" for="letters">Letters</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="numbers" id="numbers">
                        <label class="form-check-label" for="numbers">Numbers</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" name="symbols" id="symbols">
                        <label class="form-check-label" for="symbols">Symbols</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>

        </form>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['error'] ?>
                <?php session_unset() ?>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
<style>
</style>