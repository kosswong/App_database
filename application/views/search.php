<div class="content">
    <div class="container-fluid">
        <div class="breadcrumb bs-sidenavx">
            <li><a href="./">Support-U</a></li>
            <li><a href="./search">Sport session</a></li>
            <li class="active">Search</li>
        </div>

        <div class="header">
            <h4 class="title">Sport Session</h4>
        </div>

        <div class="row card">
            <div class="header">
                <h4 class="title">SEARCH FILTERS</h4>
            </div>

            <div class="content">
                <form action="<?php echo $this->config->config['base_url']; ?>/index.php/search" method="get">
                    <input type="hidden" value="601" name="session_id">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Format</label>
                                <select class="form-control" name="format">
                                    <option></option>
                                    <option>Personal Training</option>
                                    <option>Group</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <option></option>
                                    <option>Let Me Try</option>
                                    <option>Beginner</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option></option>
                                    <option>Other</option>
                                    <option>Aerobic Dance</option>
                                    <option>American Pool</option>
                                    <option>Archery</option>
                                    <option>Badminton</option>
                                    <option>Baduanjin</option>
                                    <option>Basketball</option>
                                    <option>Beach Volleyball</option>
                                    <option>Bird Watching</option>
                                    <option>Body-Mind Stretch</option>
                                    <option>Briefing on Proper Ways to Use Fitness Equipment</option>
                                    <option>Canoeing</option>
                                    <option>Carnival</option>
                                    <option>Chess</option>
                                    <option>Children Dance</option>
                                    <option>Chinese Dance</option>
                                    <option>Community Garden Programme</option>
                                    <option>Cricket</option>
                                    <option>Cycling</option>
                                    <option>Dance Competition</option>
                                    <option>Dance Night / Dance Party</option>
                                    <option>Day Camp / Evening Camp</option>
                                    <option>Distance Run</option>
                                    <option>Exercise and Health Seminar</option>
                                    <option>Exhibition</option>
                                    <option>Fencing</option>
                                    <option>Fitness (Multi-gym)</option>
                                    <option>Fitness Exercise</option>
                                    <option>Fitness Practice Scheme</option>
                                    <option>Fitness Walking Briefing Session</option>
                                    <option>Football</option>
                                    <option>Fun Games</option>
                                    <option>Gateball</option>
                                    <option>Go</option>
                                    <option>Golf</option>
                                    <option>Greening Activity</option>
                                    <option>Gymnastics/Gymnastics for All</option>
                                    <option>Handball</option>
                                    <option>Healthy Elderly Scheme</option>
                                    <option>Hiking</option>
                                    <option>Horse Riding</option>
                                    <option>Horticulture</option>
                                    <option>Hydro Fitness</option>
                                    <option>Indoor Short Mat Bowling</option>
                                    <option>Jazz</option>
                                    <option>Judo</option>
                                    <option>Land Excursion</option>
                                    <option>Lawn Bowls</option>
                                    <option>Mini-soccer</option>
                                    <option>Mini-tennis</option>
                                    <option>Miscellaneous Activities</option>
                                    <option>Modern Dance</option>
                                    <option>Multi-dance</option>
                                    <option>Oriental Dance</option>
                                    <option>Orienteering</option>
                                    <option>Performance & Demonstration</option>
                                    <option>Play Leadership Scheme</option>
                                    <option>Potted Sports</option>
                                    <option>Residential Camp</option>
                                    <option>Rope Course</option>
                                    <option>Rugby</option>
                                    <option>Sailing</option>
                                    <option>Shooting</option>
                                    <option>Snooker</option>
                                    <option>Social Dance</option>
                                    <option>Sport Climbing</option>
                                    <option>Squash</option>
                                    <option>Stress Management and Physical Relaxation</option>
                                    <option>Swimming</option>
                                    <option>Table Tennis</option>
                                    <option>Tai Chi</option>
                                    <option>Tai Chi Sword</option>
                                    <option>Tennis</option>
                                    <option>Tent Camp</option>
                                    <option>Track & Field</option>
                                    <option>Ultimate</option>
                                    <option>Volleyball</option>
                                    <option>Western Folk Dance</option>
                                    <option>Windsurfing</option>
                                    <option>Wushu</option>
                                    <option>Yoga</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Condition</label>
                                <input type="text" name="condition" class="form-control border-input"
                                       placeholder="Enter anything... activity name, etc..">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Search</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>

        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li";

                if ($current_page == $i) {
                    echo ' class="active"';
                }
                echo "><a href='./search?page=" . $i . "&condition=" . $condition . "&format=" . $format . "&level=" . $level . "&type=" . $type . "'>" . $i . "</a></li>";
            };
            ?>
            <li><a href="#">&raquo;</a></li>
        </ul>
        <div class="row">
            <?php
            foreach ($query_listing->result() as $row) {
                echo '
                    <div class="col-sm-6 col-md-3">
                        <div class="card hoverable small">
                            <div class="card-image" style="background-image: url(' . $row->photo_url . ') !important;
    background-size: cover !important;">
                                <span class="card-title">' . $row->title . '</span>
                            </div>
                            <div class="card-content">
                                <p>' . $row->short_description . '</p>
                            </div>
                            <div class="card-action">
                                 <a href="./session?id=' . $row->session_id . '" class="btn btn-info btn-sm" role="button">Detail</a>
                            </div>
                        </div>
                    </div>';
            }
            ?></div>
    </div>
</div>