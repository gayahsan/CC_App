<?php
require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>

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



    <h1 class="card-title">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Online BooksTore</h1>




    <h5>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Add A book</h5>
    <hr>
    <form class="form-group" method="POST" action="add.php">
        <div class="container">

            Title:<br> <input class="form-control" type="text" class="int" name="title" id="title"
                placeholder="Add your title here" required=""><br>
            Author:<br> <input class="form-control" type="text" class="int" name="descr" id="descr"
                placeholder="Description about the note" required=""><br>
            <label class="" for="exampleInputEmail1">Cost</label>
            <input type="" class="form-control" placeholder="cost about the note"></br>

            <button class="btn btn-primary" type="submit" name="sub" class="sub">Add Note</button>
        </div>
    </form>
    </div>
    <hr>

    <div class="selection">
        <?php

            $sqlselect = "SELECT * FROM `notes`;";
            $result = mysqli_query($con, $sqlselect);
            ?>
        <div class="container">
            <h1>Your Books</h1>
        </div>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            // echo $row['Sr.No']. "<br>title = " .$row['title']. "<br>description= ".$row['descr']."<br><br>"  
                            echo " <tr>
        <td>" . $row['Sr.No'] . "</td>
        <td>" . $row['title'] . "</td>
        <td>" . $row['descr'] . "</td>
        <td>" . $row['Time'] . "</td>
        <td>
         <a href='edit.php'><button class='btn btn-primary'  name='edit' class='sub'>Edit</button></a>
             <a href='delete.php'><button class='btn btn-danger' type='submit' name='delete' class='sub'>Delete</button></a>
           
        </td>
    </tr>";
                        }

                        ?>
                </tbody>
            </table>

        </div>

    </div>

    <br>
    <hr>
    Note:
    <p><a href="./reset_table.php" class="sub">Click here</a> to reset Serial number.</p>
    <hr>
    <!-- <div class="deletion">

    </div> -->







</body>

</html>