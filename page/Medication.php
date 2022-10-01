<div class="main-body">
    <h3 class="title">Medication</h3>

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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
                            $tblquery = "SELECT * FROM med WHERE name = '$name' ORDER BY date DESC";
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


