<div class="main-body">
    <h3 class="title">Welcome, <?php echo $_SESSION['fn'];?>!</h3>

    <div class="dashboard-nav">
        <div class="row" style="padding:0px;">
            <div class="col-md-6" style="padding:0px;">
                <div class="row">
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                    <div class="col-xs-4 col-md-3 nav-btn"></div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>

    <div class="dashboard-main-body">
        <div class="row dashboard-main-row">
            <div class="col-md-3 dashboard-box1">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span><i class="fa fa-download" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            echo "
                                                <div class='col-xs-12 top'>Users</div>
                                                <div class='col-xs-12 down'>$total</div>
                                            ";
                                        }
                                    ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box2">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:green;"><i class="fa fa-database" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level = 'Doctor'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Doctors</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box3">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-gift" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level = 'Patient'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Patients</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box4">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:blue;"><i class="fa fa-users" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin' AND status = 'Active'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Active</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row dashboard-main-row2">
            <div class="col-md-3 dashboard-box1">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:purple;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM users WHERE level != 'Admin' AND status != 'Active'";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Suspend</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box2">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM drug";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Drugs</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box3">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM med";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Drugs</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 dashboard-box4">
                <div class="dashboard-box-inner1">
                    <div class="row">
                        <div class="col-xs-3 icon-box">
                            <span style="color:pink;"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        </div>
                        <div class="col-xs-9 parent-text-box">
                            <div class="text-box">
                                <div class="row">
                                    <?php
                                        $tblquery = "SELECT count(id) as total FROM meeting WHERE date = CURDATE()";
                                        $tblvalue = array();
                                        $select = $collect->tbl_select($tblquery, $tblvalue);
                                        foreach($select as $data){
                                            extract($data);
                                            ?>
                                            <?php
                                                echo "
                                                    <div class='col-xs-12 top'>Meeting</div>
                                                    <div class='col-xs-12 down'>$total</div>
                                                ";
                                        }
                                    ?>
                                </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>