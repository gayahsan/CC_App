<?php
require_once "connection.php";

if (isset($_POST['sub'])) {

    if (isset($_POST['srno'])) {
        $srno = $_POST['srno'];
        $newtitle = $_POST['newtitle'];
        $newdescr = $_POST['newdescr'];

        $sqledit = "UPDATE `crud`.`notes` SET `Sr.No` = $srno, `title` = '$newtitle', `descr` = '$newdescr', `Time` = NOW() WHERE `notes`.`Sr.No` = $srno;";

        mysqli_query($con, $sqledit);

        header("Location: ./index.php");

        mysqli_close($con);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing in CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</head>

<body>
    <h1>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Edit Note Info</h1>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="./index.php"><button class="sub btn btn-warning">Go Back</button></a>
    <hr>
    <br>
    <form class="form-group" action="edit.php" method="POST">
        <div class="container">
            Enter ID of which You Want To Edit:<br>
            <input type="number" name="srno" required=""><br>

            Enter New Title:<br>
            <input type="text" name="newtitle" required=""><br>

            Enter Updated Author:<br>
            <input type="text" name="newdescr" required=""><br>
            <hr>
            <button class="btn btn-primary" type="submit" class="sub" name="sub">Update notes</button>
        </div>

    </form>

</body>

</html>