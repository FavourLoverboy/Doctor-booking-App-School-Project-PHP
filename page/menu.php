<div class="side-menu-wrapper">
    <div class="dropdown-box-username">
        <div class="username" onclick="toggleDropDownBoxUsername()">
            <div class="left">
                <?php echo $_SESSION['fn'];?>
            </div>
            <div class="right">
                <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="dropdown">
            <a href="profile">Account Setting</a>
        </div>
    </div>
</div>

<?php 
    if($_SESSION['level'] === 'Patient'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='book'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Book</span>
                        </div>
                    </div>
                </a>
                <a href='com'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Comment</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard'>
                    <div class='row navigator $dashboard'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='medication'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-life-ring' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Medication</span>
                        </div>
                    </div>
                </a>
                <a href='book_patient'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-life-ring' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Meeting</span>
                        </div>
                    </div>
                </a>
                <a href='support'>
                    <div class='row navigator $support'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-life-ring' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Support</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }else if($_SESSION['level'] === 'Admin'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='booked_Admin'>
                    <div class='row navigator $dashboard_Admin'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Booked</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard_Admin'>
                    <div class='row navigator $dashboard_Admin'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='doctor'>
                    <div class='row navigator '>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Doctors</span>
                        </div>
                    </div>
                </a>
                <a href='drug'>
                    <div class='row navigator '>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Drugs</span>
                        </div>
                    </div>
                </a>
                <a href='patient'>
                    <div class='row navigator '>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Patients</span>
                        </div>
                    </div>
                </a>
                <a href='suspend'>
                    <div class='row navigator $suspend'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Suspend</span>
                        </div>
                    </div>
                </a>
                <a href='upgrade'>
                    <div class='row navigator $upgrade'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Upgrade</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }else if($_SESSION['level'] === 'Doctor'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='checkBooked'>
                    <div class='row navigator $dashboard_mini'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Booked</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard_mini'>
                    <div class='row navigator $dashboard_mini'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='meeting'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Meeting</span>
                        </div>
                    </div>
                </a>
                <a href='patient'>
                    <div class='row navigator $client_mini'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Patients</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }else if($_SESSION['level'] === 'Setting'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='set_admin'>
                    <div class='row navigator $set_admin'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Account Level</span>
                        </div>
                    </div>
                </a>
                <a href='clearNotificationSetting'>
                    <div class='row navigator $clearNotificationSetting'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Clear Notification</span>
                        </div>
                    </div>
                </a>
                <a href='dashboard_set'>
                    <div class='row navigator $dashboard_set'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='set_dep_date'>
                    <div class='row navigator $set_dep_date'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Deposit Date</span>
                        </div>
                    </div>
                </a>
                <a href='set_email'>
                    <div class='row navigator $set_email'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Email</span>
                        </div>
                    </div>
                </a>
                <a href='set_img_link'>
                    <div class='row navigator $set_img_link'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Image Link</span>
                        </div>
                    </div>
                </a>
                <a href='set_invest'>
                    <div class='row navigator $set_invest'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Investment</span>
                        </div>
                    </div>
                </a>
                <a href='set_inv_date'>
                    <div class='row navigator $set_inv_date'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Investment Date</span>
                        </div>
                    </div>
                </a>
                <a href='set_name'>
                    <div class='row navigator $set_name'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Name</span>
                        </div>
                    </div>
                </a>
                <a href='set_recycle'>
                    <div class='row navigator $set_recycle'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Recycle Bin</span>
                        </div>
                    </div>
                </a>
                <a href='set_reg_date'>
                    <div class='row navigator $set_reg_date'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Reg Date</span>
                        </div>
                    </div>
                </a>
                <a href='set_email_support'>
                    <div class='row navigator $set_email_support'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Support Email</span>
                        </div>
                    </div>
                </a>
                <a href='set_link_external'>
                    <div class='row navigator $set_link_external'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Web Link External</span>
                        </div>
                    </div>
                </a>
                <a href='set_link_internal'>
                    <div class='row navigator $set_link_internal'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Web Link Internal</span>
                        </div>
                    </div>
                </a>
                <a href='set_wit_date'>
                    <div class='row navigator $set_wit_date'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-download' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Withdrawal Date</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }
?>