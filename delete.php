<?php
require_once "connection.php";
?>
<?php
    if(isset($_POST['srno'])){
        
$srno = $_POST['srno'];
$sqldelete = "DELETE FROM `crud`.`notes` WHERE `notes`.`Sr.No` = {$srno}";
$result = mysqli_query($con, $sqldelete);
    }

if(isset($result)){
header("Location: ./index.php");
}



function oncall(){
   
?>
<hr>
<form  action="delete.php" method="POST">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Please enter the serial number:<br> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input class="" type='number' name='srno'><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;     <button class="sub  btn-warning">submit</button>
</form>
<hr>
<?php
}
?>
<?php oncall(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletion in CRUD</title>
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

    <div class="selection">
        <?php

    $sqlselect = "SELECT * FROM `notes`;";
    $result = mysqli_query($con, $sqlselect);
?>
        <h1>&nbsp; &nbsp; Delete Your Books</h1>
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>

                </tr>
            </thead>
            <tbody>

                <?php
    while($row = mysqli_fetch_assoc($result)){
        echo " <tr>
        <td>".$row['Sr.No']."</td>
        <td>".$row['title']."</td>
        <td>".$row['descr']."</td>
        <td>".$row['Time']."</td>
    </tr>";        
   }
   mysqli_close($con);
   ?>
            </tbody>
        </table>
        </div>
    </div>
</body>

</html>