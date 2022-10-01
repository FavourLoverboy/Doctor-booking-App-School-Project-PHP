<div class="main-body">
    <h3 class="title">Clear Notification</h3>

    <div class="row no-p client">
        <div class="col-xs-12 no-p">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM notification WHERE status = :status GROUP BY userId ORDER BY userId";
                            $tblvalue = array(
                                ':status' => 'Show'
                            );
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$name</td>
                                            <td>
                                                <form action='clearNotificationSetting' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='userId' value='$userId'>
                                                    <input type='hidden' name='name' value='$name'>
                                                    <input type='submit' name='view' class='client-btn' value='See'>
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
    if($_POST['view']){

        extract($_POST);

        $_SESSION['id'] = $id;
        $_SESSION['userId'] = $userId;
        $_SESSION['clearName'] = $name;

        $link = "'" . $_SESSION['newInternalLink'];
        $end = "';";

        echo "<script> window.location=$link/clearNotification2$end </script>";
    }
?>