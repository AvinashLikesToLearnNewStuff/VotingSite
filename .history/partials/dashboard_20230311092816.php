<?php

session_start();

$data=$_SESSION['data'];
if ($_SESSION['status']==1) {
    # code...
    $status='<b class="text-success">Voted<b>';
}
else {
    # code...
    $status='<b class="text-success">not voted<b>';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System dashboard</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">

</head>

<body class="bg-secondary text-light">
    <div class="container my-5">

        <a href="../">
            <button class="btn btn-dark text-light px-3">back</button>
        </a>
        <a href="logout.php">

            <button class="btn btn-dark text-light px-3">logout</button>
        </a>
        <h1 class="my-3">Voting system</h1>
        <div class="row my-5">
            <div class="col-md-7">
                <?php
                if (isset($_SESSION['groups'])) {
                    // # code...
                    $groups=$_SESSION['groups'];
                    for ($i=0; $i < count($groups); $i++) { ?>
                <!-- # code... -->
                <div class="row">
                    <div class="col-md-4 mx-auto d-block">

                        <img src="../uploads/<?php echo $groups[$i]['photo']?>" alt="Group image">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Group name:</strong><?php echo $groups[$i]['username']?><br>
                        <strong class="text-dark h5">votes:</strong><?php echo $groups[$i]['votes']?><br>
                    </div>
                </div>
                <hr>
                <form action="../actions/voting.php" method="post">

                    <input type="hidden" name="groupvotes" value="">
                </form>
                <?php
                }
                }

                ?>


                <!-- groups -->

            </div>
            <div class="col-md-5">
                <!-- user -->
                <img src="../uploads/<?php echo $data['photo']?>" alt="User Image">
                <br>
                <br>
                <strong class="text-dark h5">Name:</strong>
                <?php echo $data['username'];?>
                <br><br>
                <strong class="text-dark h5">Mobile:</strong>

                <?php echo $data['mobile'];?>
                <br><br>
                <strong class="text-dark h5">Status:</strong>
                <?php echo $status;?>
                <br><br>
            </div>
        </div>
    </div>
</body>

</html>