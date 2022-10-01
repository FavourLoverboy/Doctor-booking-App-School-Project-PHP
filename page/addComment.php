<div class="main-body">
    <h3 class="title">Comment</h3>
    <p class="title-2"><?php echo $_SESSION['name']; ?></p>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="addComment" method="POST">

                <div class="inner">
                    <p class="text">Comment:</p>
                    <input type="text" name="com" placeholder="Enter comment" required>
                </div>

                <input type="submit" name="add" class="submit-btn" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php 

    if($_POST['add']){
        extract($_POST);
        $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
        $tblquery = "INSERT INTO comment VALUES(:id, :name, :commenter, :comment, :date)";
        $tblvalue = array(
            ':id' => null,
            ':name' => $_SESSION['name'],
            ':commenter' => htmlspecialchars($name),
            ':comment' => htmlspecialchars(ucfirst($com)),
            ':date' => date("Y-m-d")
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
                                Your comment has been talking.
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