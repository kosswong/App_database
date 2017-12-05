<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar bar1"></span><span class="icon-bar bar2"></span><span class="icon-bar bar3"></span></button>
            <a class="navbar-brand" href="#">Edit organizer</a>
        </div>
    </div>
</nav>


<?php
$row = $query_listing;
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Relation session</h4>
                    </div>
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
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-5"><div class="form-group">
                                        <label>ID</label>
                                        <input type="text" class="form-control border-input" disabled placeholder="ID" value="<?php echo $row->organizer_id; ?>">
                                    </div></div>
                                <div class="col-md-3"><div class="form-group">
                                        <label>Organization/Organizer</label>
                                        <input type="text" class="form-control border-input" placeholder="Enter name" value="<?php echo $row->organizer_name; ?>">
                                    </div></div>
                                <div class="col-md-4"><div class="form-group">
                                        <label>Contact Phone</label>
                                        <input type="number" class="form-control border-input" placeholder="Phone number" value="<?php echo $row->organizer_phone; ?>">
                                    </div></div>
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control border-input" placeholder="Email" value="<?php echo $row->organizer_email; ?>">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Address (Fake)</label>
                                        <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Note (Fake)</label>
                                        <textarea rows="5" class="form-control border-input"
                                                  placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>