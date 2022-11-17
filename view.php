<?php 

include "config.php";

$sql = "SELECT * FROM student";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>STUDENT</h2>

<table class="table">

    <thead>

        <tr>

        <th>STUDENT NO</th>

        <th>STUDENT NAME</th>

        <th>STUDENT DOB</th>

        <th>STUDENT DOJ</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['STUDENT_NO']; ?></td>

                    <td><?php echo $row['STUDENT_NAME']; ?></td>

                    <td><?php echo $row['STUDENT_DOB']; ?></td>

                    <td><?php echo $row['STUDENT_DOJ']; ?></td>

                    <td><a class="btn btn-info" href="update.php?STUDENT_NO=<?php echo $row['STUDENT_NO']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?STUDENT_NO=<?php echo $row['STUDENT_NO']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>