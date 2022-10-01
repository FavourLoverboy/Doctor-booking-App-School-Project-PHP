<div class="main-body">
    <h3 class="title">Select Available Convenient Time</h3>      
    <p class="title-2"><?php echo $_SESSION['doctorName']; ?></p>      

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Proceed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM meeting WHERE userId = '$_SESSION[doctorID]' AND date = CURDATE() AND status = 'Free' ORDER BY id";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$f</td>
                                            <td>$t</td>
                                            <td>
                                                <form action='book2' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='hidden' name='userId' value='$userId'>
                                                    <input type='hidden' name='n' value='$name'>
                                                    <input type='hidden' name='f' value='$f'>
                                                    <input type='hidden' name='t' value='$t'>
                                                    <input type='hidden' name='date' value='$date'>
                                                    <input type='submit' name='book' class='btn btn-success' value='book'>
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
        $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
        $tblquery = "INSERT INTO book VALUES(:id, :userId, :name, :docId, :docName, :f, :t,
        :date, :status)";
        $tblvalue = array(
            ':id' => null,
            ':userId' => $_SESSION['myId'],
            ':name' => htmlspecialchars($name),
            ':docId' => htmlspecialchars($userId),
            ':docName' => htmlspecialchars($n),
            ':f' => htmlspecialchars($f),
            ':t' => htmlspecialchars($t),
            ':date' => date("Y-m-d"),
            ':status' => "Booked"
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
    
            $tblquery = "UPDATE meeting SET status = :status WHERE id = :id";
            $tblvalue = array(
                ':status' => "Booked",
                ':id' => $id
            );
            $update = $collect->tbl_update($tblquery, $tblvalue);
        }
        if($insert){
            echo "
                <div class='container-fluid invest-popup-notification'>
                    <div class='main-box'>
                        <div class='head'>
                            <div class='row no-p'>
                                <div class='col-xs-11'>
                                    <h4>Message</h4>
                                </div>
                                <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class='bottom'>
                            <div class='msg'>
                                Booking Successful.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }else{
            echo "
                <div class='container-fluid invest-popup-notification'>
                    <div class='main-box'>
                        <div class='head'>
                            <div class='row no-p'>
                                <div class='col-xs-11'>
                                    <h4>Message</h4>
                                </div>
                                <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class='bottom'>
                            <div class='msg'>
                                An error occur while performing this task.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>
