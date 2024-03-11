<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark ">
    <div class=" container p-3">
        <div class="row mb-3">
            <img src="https://www.whitefriarsfaversham.org/uploads/1/3/9/8/139896562/welcome_orig.jpg" alt="Welcome" class="img-thumbnail rounded mx-auto d-block" style="width: 400px; height: 200px;">

            <h4 class="text-center text-primary">
                Hello <?php echo $_SESSION['fullname']  ?>
                <br>
                Welcome to our page!
                <br>
                Your new password is :
                <h1 class="text-center text-success">
                    <?php echo $_SESSION['password']  ?>
                </h1>
            </h4>

        </div>
    </div>

</body>

</html>