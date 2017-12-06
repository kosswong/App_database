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
                            <div class="col-md-3">Programme Number:</div>
                            <div class="col-md-9"><?php echo $row->session_id; ?></div>
                            <div class="col-md-3">Title:</div>
                            <div class="col-md-9"><?php echo $row->title; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Venue Name:</div>
                            <div class="col-md-9"><?php echo $row->venue_name; ?></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-9"><?php echo $row->venue_address; ?></div>
                            <div class="col-md-3">Format:</div>
                            <div class="col-md-9"><a href="./search?format=<?php echo $row->format; ?>"><?php echo $row->format; ?></a></div>
                            <div class="col-md-3">Level:</div>
                            <div class="col-md-9"><a href="./search?level=<?php echo $row->level; ?>"><?php echo $row->level_name; ?></a></div>
                            <div class="col-md-3">Date: </div>
                            <div class="col-md-9"><?php echo $row->datetime_from; ?> - <?php echo $row->datetime_to; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Organizer: </div>
                            <div class="col-md-9"><a href="./search?organizer=<?php echo $row->organizer_id; ?>"><?php echo $row->organizer_name; ?></a></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Introduction: </div>
                            <div class="col-md-9"><?php echo $row->long_description; ?>
                                , <?php echo $row->short_description; ?></div>
                        </div>
                        <hr/>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-md-3">
                                    <h5><?php echo $row->district; ?><br/>
                                        <small>District</small>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5>
                                        <a href="./search?trainer=<?php echo $row->trainer_id; ?>"><?php echo $row->trainer_name; ?></a><br/>
                                        <small>Trainer's name</small>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5><?php echo $row->tickets; ?><br/>
                                        <small>Quota Left</small>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <h5><?php echo ($row->price ? "$$row->price" : "Free"); ?><br/>
                                        <small>Fee</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <?php if($row->tickets){ ?>
                        <form action="./booking/submit_booking" method="post">
                            <input type="hidden" value="<?php echo $row->session_id; ?>" name="session_id"/>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control border-input"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control border-input"
                                               placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control border-input"
                                               placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="number" name="phone" class="form-control border-input"
                                               placeholder="Phone number">
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
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Book</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <?php }else{ ?>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd" disabled>Full</button>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-5">
                <div class="header">
                    <h4 class="title">Location</h4>
                </div>

                <div class="card" style="padding: 0px;">
                    <div class="content" style="padding: 0px;">
                        <iframe src="http://maps.google.com.tw/maps?f=q&amp;hl=zh-TW&amp;geocode=&amp;q=<?php echo $row->venue_address; ?>&amp;z=16&amp;output=embed&amp;t=p"
                                width="100%" height="450" frameborder="0" style="border:0;border-radius: 6px;"
                                allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="header">
                    <h4 class="title">Relate sport session</h4>
                </div>
                <div class="card">
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <?php
                            foreach ($relate->result() as $row) {
                                echo '
                            <li>
                                <div class="row">
                                    <div class="col-xs-8">
                                        '.$row->title.'
                                        <br/>
                                        <span class="text-primary"><small>'.$row->short_description.'</small></span>
                                    </div>

                                    <div class="col-xs-4 text-right">
                                        <a href="./session?id='.$row->session_id.'" class="btn btn-success btn-icon btn-fill" role="button">Learn More</a>
                                    </div>
                                </div>
                            </li>
';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>