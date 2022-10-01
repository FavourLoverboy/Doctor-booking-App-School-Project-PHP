<div class="main-body">
    <h3 class="title">Medication</h3>
    <p class="title-2"><?php echo $_SESSION['name']; ?></p>

    <form action="clearNotification" method="POST">
        <a href="addMed" class="btn btn-primary">Add Medication</a>
    </form>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Drug Names</th>
                        <th>Administrator</th>
                        <th>Dosage</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM med WHERE name = '$_SESSION[name]' ORDER BY date DESC";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$drug</td>
                                            <td>$administrator</td>
                                            <td>$dosage</td>
                                            <td>$des</td>
                                            <td>$date</td>
                                            <td>
                                                <form action='removeMed' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='submit' name='remove' class='btn btn-danger' value='remove'>
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


