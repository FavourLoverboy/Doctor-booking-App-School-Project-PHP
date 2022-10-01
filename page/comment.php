<div class="main-body">
    <h3 class="title">Comments</h3>
    <p class="title-2"><?php echo $_SESSION['name']; ?></p>

    <form action="clearNotification" method="POST">
        <a href="addComment" class="btn btn-primary">Add Comment</a>
    </form>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Commenter</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT * FROM comment WHERE name = '$_SESSION[name]' ORDER BY date DESC";
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
                                            <td>
                                                <form action='removeMed' method='POST'>
                                                    <input type='hidden' name='id' value='$id'>
                                                    <input type='submit' name='comment' class='btn btn-danger' value='remove'>
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


