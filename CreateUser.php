<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>CREATE USER</title>
</head>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Hurray! User created');
                               window.location='moneyTransfer.php';
                     </script>";
        }
    }
    ?>


    <?php
    include 'Includes/Header.php';
    ?>

    <div class="container mt-5">
        <h1 class="d-flex justify-content-center ">CREATE USER</h1>
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-4">
                <img src="images/user.jpg" alt="" srcset="">
            </div>
            <div class="col-md-6">
                <form method="POST">
                    <input type="text" placeholder="Name" name="name" class="form-control mt-3" required>
                    <input type="email" placeholder="Email*" name="email" class="form-control mt-3" required>
                    <input type="number" placeholder="Balance" name="balance" class="form-control mt-3" required>
                    <input type="submit" name="submit" class="form-control btn btn-warning mt-3">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>