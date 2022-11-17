<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $STUDENT_NAME = $_POST['STUDENT_NAME'];

        $STUDENT_NO = $_POST['STUDENT_NO'];

        $STUDENT_DOB = $_POST['STUDENT_DOB'];

        $STUDENT_DOJ = $_POST['STUDENT_DOJ'];

        $sql = "UPDATE `student` SET `STUDENT_NAME`='$STUDENT_NAME',`STUDENT_DOB`='$STUDENT_DOB',`STUDENT_DOJ`='$STUDENT_DOJ' WHERE `STUDENT_NO`='$STUDENT_NO'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['STUDENT_NO'])) {

    $STUDENT_NO = $_GET['STUDENT_NO']; 

    $sql = "SELECT * FROM `student` WHERE `STUDENT_NO`='$STUDENT_NO'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $STUDENT_NAME = $row['STUDENT_NAME'];

            $STUDENT_DOB = $row['STUDENT_DOB'];

            $STUDENT_DOJ = $row['STUDENT_DOJ'];

            $STUDENT_NO = $row['STUDENT_NO'];

        } 

    ?>

        <h2>Student Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Student information:</legend>

            STUDENT NAME:<br>

            <input type="text" name="STUDENT_NAME" value="<?php echo $STUDENT_NAME; ?>">

            <input type="hidden" name="STUDENT_NO" value="<?php echo $STUDENT_NO; ?>">

            <br>

            STUDENT DOB:<br>

            <input type="text" name="STUDENT_DOB" value="<?php echo $STUDENT_DOB; ?>">

            <br>

            STUDENT DOJ:<br>

            <input type="text" name="STUDENT_DOJ" value="<?php echo $STUDENT_DOJ; ?>">

            <br>

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 