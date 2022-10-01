<div class="main-body">
    <h3 class="title">Book Time</h3>      

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Doctors</th>
                        <th>Available</th>
                        <th>Proceed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM users WHERE level = 'Doctor' ORDER BY ln";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$ln $fn</td>
                                            <td>$comment</td>
                                            <td>
                                                <form action='book' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='name' value='$ln $fn'>
                                                    <input type='submit' name='book' class='btn btn-success' value='proceed'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 

    if($_POST['book']){
        extract($_POST);

        $_SESSION['doctorID'] = $id;
        $_SESSION['doctorName'] = $name;

        echo '<script> window.location="http://localhost/jobi/book2"; </script>';
    }

?>
