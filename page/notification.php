<div class="main-body">
    <h3 class="title">Notification</h3>

    <form action="clearNotification" method="POST">
        <input type="hidden" name="id" value="<?php echo $_SESSION['myId']; ?>">
        <input type="submit" name="clear" class="btn btn-danger" value="Clear all">
    </form>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Received Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM notification WHERE userId = '$_SESSION[myId]' AND status = 'Show' ORDER BY time DESC";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$message</td>
                                            <td>$date</td>
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

