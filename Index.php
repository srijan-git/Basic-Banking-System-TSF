<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Basic Banking System</title>
</head>

<body>

    <!-- Header -->
    <?php
    include 'Includes/Header.php';
    ?>
    <!-- Header -->


    <!-- Intro -->
    <div class="container-fluid">
        <div class="row intro py-5">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>TSF BANK</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="images/bank.png" class="img-fluid pt-2">
            </div>
        </div>
    </div>
    <!-- Intro -->


    <!-- About -->
    <?php
    include 'about.php';
    ?>
    <!-- About -->

    <!-- Footer -->
    <?php
    include 'Includes/Footer.php';
    ?>
    <!-- Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>