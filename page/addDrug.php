<div class="main-body">
    <h3 class="title">Add Drugs</h3>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="addDrug" method="POST">

                <div class="inner">
                    <p class="text">Name of Drug:</p>
                    <input type="text" name="n" placeholder="Enter drug name" required>
                </div>

                <div class="inner">
                    <p class="text">Quantity:</p>
                    <input type="number" name="q" placeholder="Enter quantity" required>
                </div>

                <input type="submit" name="add" class="submit-btn" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php 

    if($_POST['add']){
        extract($_POST);

        $tblquery = "INSERT INTO drug VALUES(:id, :name, :qty, :date)";
        $tblvalue = array(
            ':id' => null,
            ':name' => htmlspecialchars(ucwords($n)),
            ':qty' => htmlspecialchars($q),
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
                                New drug has been added.
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