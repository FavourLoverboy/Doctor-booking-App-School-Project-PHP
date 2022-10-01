<div class="main-body">
    <h3 class="title">Upgrade Account</h3>

    <div class="row no-p row-box" style="padding:30px;">
        <div class="col-xs-12 no-p">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Promote</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM users WHERE level != 'Admin' ORDER BY ln";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    if($level == 'Patient'){
                                        echo "
                                            <tr>
                                                <td>$ln $fn</td>
                                                <td>$level</td>
                                                <td>
                                                    <form action='upgrade' method='POST' style='margin:0px;padding:0px;'>
                                                        <input type='hidden' name='id' value='$id'>
                                                        <input type='hidden' name='name' value='$ln $fn'>
                                                        <input type='hidden' name='level' value='$level'>
                                                        <input type='submit' name='promote' value='promote' class='btn btn-info'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                    else if($level == 'Doctor'){
                                        echo "
                                            <tr>
                                                <td>$ln $fn</td>
                                                <td>$level</td>
                                                <td>
                                                    <form action='upgrade' method='POST' style='margin:0px;padding:0px;'>
                                                        <input type='hidden' name='id' value='$id'>
                                                        <input type='hidden' name='name' value='$ln $fn'>
                                                        <input type='hidden' name='level' value='$level'>
                                                        <input type='submit' name='promote' value='promote' class='btn btn-primary'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<div>

<?php
    if($_POST['promote']){
        extract($_POST);

        $_SESSION['setId'] = $id;
        $_SESSION['setName'] = $name;
        $_SESSION['setLevel'] = $level;

        echo '<script> window.location="http://localhost/jobi/upgrade2"; </script>';
    }
?>