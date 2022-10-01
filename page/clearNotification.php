<?php
    if($_POST['clear']){

        extract($_POST);

        $tblquery = "UPDATE notification SET status = :status WHERE userId = :id";
        $tblvalue = array(
            ':status' => 'Hide',
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            echo '<script> window.location="http://localhost/jobi/notification"; </script>';
        }
    }
?>


<?php
    if($_POST['recover']){

        extract($_POST);

        $tblquery = "UPDATE notification SET status = :status WHERE userId = :id";
        $tblvalue = array(
            ':status' => 'Show',
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            $link = "'" . $_SESSION['newInternalLink'];
            $end = "';";

            echo "<script> window.location=$link/recycle$end </script>";
        }
    }
?>