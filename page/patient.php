<div class="main-body">
    <h3 class="title">All Patient</h3>

    <div class="row no-p client">
        <div class="col-xs-12 no-p">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Medication</th>
                        <th>Comment</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM users WHERE level = 'Patient' ORDER BY ln";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$ln $fn</td>
                                            <td>
                                                <form action='patient' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='name' value='$ln $fn'>
                                                    <input type='submit' name='med' class='client-btn' value='View'>
                                                </form>
                                            </td>
                                            <td>
                                                <form action='patient' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='name' value='$ln $fn'>
                                                    <input type='submit' name='com' class='client-btn' value='View'>
                                                </form>
                                            </td>
                                            <td>
                                                <form action='patient' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='submit' name='view' class='client-btn' value='View'>
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
    if($_POST['med']){

        extract($_POST);

        $_SESSION['userId'] = $id;
        $_SESSION['name'] = $name;

        echo '<script> window.location="http://localhost/jobi/med"; </script>';
    }
?>
<?php
    if($_POST['com']){

        extract($_POST);

        $_SESSION['userId'] = $id;
        $_SESSION['name'] = $name;

        echo '<script> window.location="http://localhost/jobi/comment"; </script>';
    }
?>
<?php
    if($_POST['view']){

        extract($_POST);

        $_SESSION['userId'] = $id;

        echo '<script> window.location="http://localhost1/jobi/viewUser"; </script>';
    }
?>