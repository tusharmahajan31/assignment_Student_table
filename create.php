<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $STUDENT_NO = $_POST['STUDENT_NO'];

    $STUDENT_NAME = $_POST['STUDENT_NAME'];

    $STUDENT_DOB = $_POST['STUDENT_DOB'];

    $STUDENT_DOJ = $_POST['STUDENT_DOJ'];

    $sql = "INSERT INTO `student`(`STUDENT_NO`, `STUDENT_NAME`, `STUDENT_DOB`, `STUDENT_DOJ`) VALUES ('$STUDENT_NO','$STUDENT_NAME','$STUDENT_DOB','$STUDENT_DOJ')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>CREATE TABLE</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Student information:</legend>

    STUDENT_NO:<br>

    <input type="number" name="STUDENT_NO">

    <br>

    STUDENT_NAME:<br>

    <input type="text" name="STUDENT_NAME">

    <br>

    STUDENT_DOB:<br>

    <input type="date" name="STUDENT_DOB">

    <br>

    STUDENT_DOJ:<br>

    <input type="date" name="STUDENT_DOJ">

    <br>

    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>