<div class="main-body">
    <h3 class="title">Add Medication</h3>
    <p class="title-2"><?php echo $_SESSION['name']; ?></p>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box" style="height:auto;">
            <form action="addMed" method="POST">

                <div class="inner">
                    <p class="text">Name of Drug:</p>
                    <input type="text" name="n" placeholder="Enter drug name" required>
                </div>

                <div class="inner">
                    <p class="text">Dosage:</p>
                    <input type="number" name="d" placeholder="Enter dosage" required>
                </div>

                <div class="inner">
                    <p class="text">Description:</p>
                    <input type="text" name="des" placeholder="Enter description" required>
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
        $tblquery = "INSERT INTO med VALUES(:id, :name, :administrator, :drug, :dosage, :des, :date)";
        $tblvalue = array(
            ':id' => null,
            ':name' => $_SESSION['name'],
            ':administrator' => htmlspecialchars($name),
            ':drug' => htmlspecialchars(ucwords($n)),
            ':dosage' => htmlspecialchars($d),
            ':des' => htmlspecialchars(ucfirst($des)),
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
                                Medication has been added.
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