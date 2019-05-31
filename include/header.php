<?php error_reporting(0); ?>
<header class="navbar navbar-default">
    <div >
        <ul class="nav navbar-right">
            <li class="dropdown current-user">
                <a href class="dropdown-toggle" data-toggle="dropdown">
                    <img src="pi/ramadan.jpg" width="50px" height="50px"> <span class="username">

									<?php $query = mysqli_query($con, "select fullName from users where id='" . $_SESSION['id'] . "'");
                                    while ($row = mysqli_fetch_array($query)) {
                                        echo $row['fullName'];
                                    }
                                    ?> <i class="ti-angle-down"></i></i></span>
                </a>
                <ul class="dropdown-menu dropdown-dark">
                    <li>
                        <a href="edit-profile.php">
                            My Profile
                        </a>
                    </li>

                    <li>
                        <a href="change-password.php">
                            Change Password
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            Log Out
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <strong><h2 style="margin-left: 500px;margin-top:10px;text-align: left;font-weight: bold;color: #0e90d2">Nile Hospital Management System</h2></strong>
        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
            <div class="arrow-left"></div>
            <div class="arrow-right"></div>
        </div>
    </div>
</header>
