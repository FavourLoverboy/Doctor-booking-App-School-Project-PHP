<div class="main-body">
    <h3 class="title">Suspend Client</h3>

    <div class="row no-p row-box" style="padding:30px;">
        <div class="col-xs-12 no-p">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
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
                                    if($status == 'Active'){
                                        echo "
                                            <tr>
                                                <td>$ln $fn</td>
                                                <td>$level</td>
                                                <td>
                                                    <form action='validate' method='POST' style='margin:0px;padding:0px;'>
                                                        <input type='hidden' name='mute' value='$id'>
                                                        <input type='submit' name='muteBtn' value='Suspend' class='btn btn-danger'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                    else if($status == 'Inactive'){
                                        echo "
                                            <tr>
                                                <td>$ln $fn</td>
                                                <td>$level</td>
                                                <td>
                                                    <form action='validate' method='POST' style='margin:0px;padding:0px;'>
                                                        <input type='hidden' name='unMute' value='$id'>
                                                        <input type='submit' name='unMuteBtn' value='Release' class='btn btn-success'>
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
