<div class="main-body">
    <h3 class="title">Change Level</h3>
    <p class="title-2"><?php echo $_SESSION['setName']; ?></p>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="upgrade2" method="POST">
                <div class="inner">
                    <p class="text">    Current Level:</p>
                    <input type="text" name="old" value="<?php echo $_SESSION['setLevel']; ?>" readonly>
                </div>

                <div class="inner">
                    <p class="text">Select Level:</p>
                    <select name="level" required>
                        <option value="">Levels</option>
                        <option value="Admin">Admin</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Patient">Patient</option>
                    </select>
                </div>

                <input type="submit" name="submit" class="submit-btn" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php
    if($_POST['submit']){

        extract($_POST);

        $tblquery = "UPDATE users SET level = :level WHERE id = :id";
        $tblvalue = array(
            ':level' => htmlspecialchars($level),
            ':id' => $_SESSION['setId']
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
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
                                Account level has been updated from $old to $level.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>