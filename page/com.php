<div class="main-body">
    <h3 class="title">Comments</h3>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Commenter</th>
                        <th>Comment</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
                            $tblquery = "SELECT * FROM comment WHERE name = '$name' ORDER BY date DESC";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$commenter</td>
                                            <td>$comment</td>
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


