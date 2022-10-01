<div class="main-body">
    <h3 class="title">Clear Notification</h3>
    <p class="title-2"><?php echo $_SESSION['clearName']; ?></p>

    <div class="row no-p client">
        <div class="col-xs-12 no-p">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Date</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM notification WHERE userId = '$_SESSION[userId]' AND status = 'Show' ORDER BY time DESC";
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
                                            <td>
                                                <form action='clearNotification2' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='submit' name='delete' class='client-btn' value='Delete'>
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
    if($_POST['delete']){

        extract($_POST);

        $tblquery = "UPDATE notification SET status = :status WHERE id = :id";
        $tblvalue = array(
            ':status' => 'Hide',
            ':id' => htmlspecialchars($id)
        );
        $delete = $collect->tbl_delete($tblquery, $tblvalue);
        if($delete){
            $link = "'" . $_SESSION['newInternalLink'];
            $end = "';";

            echo "<script> window.location=$link/clearNotification2$end </script>";
        }
    }
?>