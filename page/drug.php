<div class="main-body">
    <h3 class="title">Drugs</h3>

    <form action="clearNotification" method="POST">
        <a href="addDrug" class="btn btn-primary">Add new Drug</a>
    </form>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Drug Names</th>
                        <th>Qty</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT sum(qty) as total, name, date FROM drug GROUP BY name ORDER BY name";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$name</td>
                                            <td>$total</td>
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

