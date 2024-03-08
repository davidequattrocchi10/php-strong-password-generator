<?php
include_once __DIR__ . "/functions.php";
$_GET['length_password'];
$number_length_password = intval($_GET['length_password']);


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

<body class="p-3">
    <form action="" method="get">
        <div class="mb-3">
            <label for="length_password" class="form-label">Password Length</label>
            <input class="form-control" name="length_password" placeholder="Write the number of password length">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <?php if (is_numeric($_GET['length_password'])) : ?>
        <p>
            Your password is :
        <h6 class="text-primary">
            <?php randomPassword($number_length_password) ?>
        </h6>
        </p>
    <?php elseif ($_GET['length_password'] === null) : echo '' ?>
    <?php else : ?>
        <div class="text-danger">
            <?php echo 'Insert a number!' ?>
        </div>
    <?php endif; ?>





</body>

</html>