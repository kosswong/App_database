<div class="content">
    <div class="container-fluid">
        <div class="breadcrumb bs-sidenavx">
            <li><a href="./">Support-U</a></li>
            <li><a href="./search">Sport session</a></li>
            <li class="active">Search</li>
        </div>

        <div class="header">
            <h4 class="title">Session List</h4>
        </div>

        <div class="row card">
            <div class="header">
                <h4 class="title">SEARCH FILTERS</h4>
            </div>

            <div class="content">
                <form action="./search" method="post">
                    <input type="hidden" value="601" name="session_id">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>District</label>
                                <input type="text" name="first_name" class="form-control border-input" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Activity Type</label>
                                <input type="text" name="last_name" class="form-control border-input" placeholder="Type">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level">
                                    <option>All</option>
                                    <option>Let Me Try</option>
                                    <option>Beginner</option>
                                    <option>Intermediate</option>
                                    <option>Advanced</option>
                                </select>
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

            <form class="form-inline">
                <div class="form-group">
                    <label for="exampleInputName2">地區session title, long description, trainer's names, organizer's
                        name</label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">活動種類</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Level</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Price/label>
                        <input type="email" class="form-control" id="exampleInputEmail2"
                               placeholder="jane.doe@example.com">
                </div>
                <button type="submit" class="btn btn-default">Send invitation</button>
            </form>
        </div>



        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>
            <?php
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<li";

                if ($current_page == $i) {
                    echo ' class="active"';
                }
                echo "><a href='./search?page=" . $i . "'>" . $i . "</a></li>";
            };
            ?>
            <li><a href="#">&raquo;</a></li>
        </ul>
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
        ?>
    </div>
</div>