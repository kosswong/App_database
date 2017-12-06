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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Format</label>
                                <select class="form-control" name="format">
                                    <option></option>
                                    <option>Personal Training</option>
                                    <option>Group</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <option></option>
                                    <option value="1">Let Me Try</option>
                                    <option value="2">Beginner</option>
                                    <option value="3">Intermediate</option>
                                    <option value="4">Advanced</option>
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
                echo "><a href='./search?page=" . $i . "&condition=" . $condition . "&format=" . $format . "&level=" . $level . "&type=" . $type . "&organizer=" . $organizer . "&trainer=" . $trainer . "'>" . $i . "</a></li>";
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