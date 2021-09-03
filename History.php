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
    <?php
    include 'Includes/Header.php';
    ?>
    <div class="container mt-5">
        <h1 class="d-flex justify-content-center ">Transaction History</h1>
        <div class="row mt-5">
            <table class=" table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Sender</th>
                        <th scope="col">Receiver</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'config.php';

                    $sql = "select * from transaction";

                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $rows['sno']; ?></th>
                            <td><?php echo $rows['sender']; ?></td>
                            <td><?php echo $rows['receiver']; ?></td>
                            <td><?php echo $rows['balance']; ?> </td>
                            <td><?php echo $rows['datetime']; ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>