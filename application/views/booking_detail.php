<div class="content">
    <div class="container-fluid">
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
                        <div class="col-md-9"><a
                                    href="./search?format=<?php echo $row->format; ?>"><?php echo $row->format; ?></a>
                        </div>
                        <div class="col-md-3">Level:</div>
                        <div class="col-md-9"><a
                                    href="./search?level_name=<?php echo $row->level_id; ?>"><?php echo $row->level_name; ?></a>
                        </div>
                        <div class="col-md-3">Date:</div>
                        <div class="col-md-9"><?php echo $row->datetime_from; ?>
                            - <?php echo $row->datetime_to; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Organizer:</div>
                        <div class="col-md-9"><a
                                    href="./search?organizer=<?php echo $row->organizer_id; ?>"><?php echo $row->organizer_name; ?></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Introduction:</div>
                        <div class="col-md-9"><?php echo $row->long_description; ?>
                            , <?php echo $row->short_description; ?></div>
                    </div>
                    <hr/>
                    <div class="text-center">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>
                                    <a href="./search?district=<?php echo $row->district; ?>"><?php echo $row->district; ?></a><br/>
                                    <small>District</small>
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <h5>
                                    <a href="./search?trainer=<?php echo $row->trainer_id; ?>"><?php echo $row->trainer_name; ?></a><br/>
                                    <small>Trainer's name</small>
                                </h5>
                            </div>
                            <div class="col-md-4">
                                <h5><?php echo($row->price ? "$$row->price" : "Free"); ?><br/>
                                    <small>Fee</small>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">Booker:</div>
                        <div class="col-md-9"><?php echo $row->user_first_name; ?>
                            , <?php echo $row->user_last_name; ?></div>
                        <div class="col-md-3">Email:</div>
                        <div class="col-md-9"><?php echo $row->user_email; ?></div>
                        <div class="col-md-3">Phone:</div>
                        <div class="col-md-9"><?php echo $row->user_phone; ?></div>
                    </div>
                    <hr/>
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
            </div>
        </div>
    </div>
</div>