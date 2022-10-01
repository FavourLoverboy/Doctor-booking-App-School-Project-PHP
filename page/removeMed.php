<?php
    if($_POST['remove']){

        extract($_POST);


        $tblquery = "DELETE FROM med WHERE id = :id";
        $tblvalue = array(
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            echo '<script> window.location="http://localhost/jobi/med"; </script>';
        }
    }
?>
<?php
    if($_POST['comment']){

        extract($_POST);


        $tblquery = "DELETE FROM comment WHERE id = :id";
        $tblvalue = array(
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            echo '<script> window.location="http://localhost/jobi/comment"; </script>';
        }
    }
?>