<?php 

include "config.php"; 

if (isset($_GET['STUDENT_NO'])) {

    $STUDENT_NO = $_GET['STUDENT_NO'];

    $sql = "DELETE FROM `student` WHERE `STUDENT_NO`='$STUDENT_NO'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>