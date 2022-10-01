<div class="main-body">
    <h3 class="title">Schedule Meeting Time</h3>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="meeting" method="POST">

                <div class="inner">
                    <p class="text">From:</p>
                    <input type="time" name="f" required>
                </div>

                <div class="inner">
                    <p class="text">To:</p>
                    <input type="time" name="t" required>
                </div>

                <input type="submit" name="submit" class="submit-btn" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php 

    if($_POST['submit']){
        extract($_POST);
        $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
        $tblquery = "INSERT INTO meeting VALUES(:id, :userId, :name, :f, :t, :date, :status)";
        $tblvalue = array(
            ':id' => null,
            ':userId' => $_SESSION['myId'],
            ':name' => htmlspecialchars($name),
            ':f' => htmlspecialchars($f),
            ':t' => htmlspecialchars($t),
            ':date' => date("Y-m-d"),
            ':status' => "Free"
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
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
                                Meeting time has been set.
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