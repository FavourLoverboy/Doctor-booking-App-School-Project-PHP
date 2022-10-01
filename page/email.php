<div class="main-body">
    <h3 class="title">Send Email</h3>

    <div class="no-p row-box">
        <div class="row no-p email">
            <div class="col-xs-12 no-p">
                <div class="head no-p">
                    <p class="text"><span><i class="fa fa-clone" aria-hidden="true"></i></span> Mail Client</p>
                </div>
                <div class="body">
                    <form action="email" method="POST">
                        <p class="text">Select Client</p>
                        <select name="client" required>
                            <option value=''>Select</option>
                            <?php
                                $tblquery = "SELECT * FROM users WHERE level = 'Client'";
                                $tblvalue = array();
                                $select = $collect->tbl_select($tblquery, $tblvalue);
                                foreach($select as $data){
                                    extract($data);
                                    ?>
                                    <?php
                                    echo "
                                        <option value='$id,$ln $fn,$email'>$ln $fn $email</option>
                                    ";
                                }
                            ?>
                        </select>
                        <p class='text'>Subject</p>
                        <input type='text' name='subject' placeholder='Enter mail subject' required>

                        <p class='text'>Message</p>
                        <textarea name='msg' placeholder='Enter message' required></textarea>
            
                        <input type='submit' name='send' class='deposit-btn' value='Send Mail'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if($_POST['send']){
        extract($_POST);

        $clientDetail =  explode( ",", $client, 3);

        $tblquery = "INSERT INTO credit VALUES(:id, :userId, :name, :amount, :date)";
        $tblvalue = array(
            ':id' => null,
            ':userId' => $clientDetail[0],
            ':name' => $clientDetail[1],
            ':amount' => htmlspecialchars($amt),
            ':date' => date("Y-m-d")
        );
        // print_r($tblvalue);
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> alert("Client has been credited."); </script>';
        }
    }
?>