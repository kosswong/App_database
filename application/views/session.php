<div class="content">
    <div class="container-fluid">
        <div class="breadcrumb bs-sidenavx">
            <li><a href="./">Support-U</a></li>
            <li><a href="./search">Sport session</a></li>
            <li class="active">Detail</li>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="header">
                    <h4 class="title">Details Page</h4>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo $row->photo_url; ?>"/>
                    </div>
                    <div class="content">
                            <div class="row">
                                <div class="col-md-5">Programme Number: <?php echo $row->session_id; ?></div>
                                <div class="col-md-7">Activity Name: <?php echo $row->title; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">Introduction: <?php echo $row->long_description; ?>
                                    , <?php echo $row->short_description; ?></div>
                            </div>
                            <hr/>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>Fee<br/>
                                            <small>Free</small>
                                        </h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Quota Left<br/>
                                            <small>30 / 30</small>
                                        </h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>24,6$<br/>
                                            <small>Spent</small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        <form action="./booking/submit_booking" method="post">
                            <input type="hidden" value="<?php echo $row->session_id; ?>" name="session_id" />
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control border-input" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control border-input" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control border-input" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" name="phone" class="form-control border-input" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">
                                        I agree with everything.
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Do Booking</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5">
                <div class="header">
                    <h4 class="title">Relate activity</h4>
                </div>
                <div class="card">
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="http://localhost/database/img/faces/face-0.jpg" alt="Circle Image"
                                                 class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        DJ Khaled
                                        <br/>
                                        <span class="text-muted"><small>Offline</small></span>
                                    </div>

                                    <div class="col-xs-3 text-right">
                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i>
                                        </btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="http://localhost/database/img/faces/face-1.jpg" alt="Circle Image"
                                                 class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        Creative Tim
                                        <br/>
                                        <span class="text-success"><small>Available</small></span>
                                    </div>

                                    <div class="col-xs-3 text-right">
                                        <btn class="btn btn-sm btn-success btn-icon">View
                                        </btn>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="avatar">
                                            <img src="http://localhost/database/img/faces/face-3.jpg" alt="Circle Image"
                                                 class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        Flume
                                        <br/>
                                        <span class="text-danger"><small>Busy</small></span>
                                    </div>

                                    <div class="col-xs-3 text-right">
                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i>
                                        </btn>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>