<?php
$url = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar" data-background-color="white" data-active-color="info"><!--primary | info | success | warning | danger-->
    <div class="sidebar-wrapper">
        <div class="logo"><a href="#" class="simple-text">X SPORT CITY</a></div>
        <ul class="nav">
            <li<?php if($url == "index"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/index"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <p>Dashboard</p></a>
            </li>
            <li<?php if($url == "sport"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/sport"><i class="fa fa-futbol-o" aria-hidden="true"></i>
                    <p>Sport sessions</p></a>
            </li>
            <li<?php if($url == "user"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/user"><i class="fa fa-users" aria-hidden="true"></i>
                    <p>Users</p></a>
            </li>
            <li<?php if($url == "organizer"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/organizer"><i class="fa fa-university" aria-hidden="true"></i>
                    <p>Organizers</p></a>
            </li>
            <li<?php if($url == "trainer"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/trainer"><i class="fa fa-user-md" aria-hidden="true"></i>
                    <p>Trainers</p></a>
            </li>
            <li<?php if($url == "venue"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/venue"><i class="fa fa-map-o" aria-hidden="true"></i>
                    <p>Venues</p></a>
            </li>
            <li<?php if($url == "booking"){ echo ' class="active"'; }?>>
                <a href="http://localhost/database/index.php/admin/booking"><i class="fa fa-tags" aria-hidden="true"></i>
                    <p>Booking record</p></a>
            </li>
            <li>
                <a href="http://localhost/database/index.php/admin/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    <p>Logout</p></a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">