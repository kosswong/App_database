<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#">Organizers</a>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Organizer list</h4>
                        <p class="category">As:</p>
                    </div>
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                    <?php
                    for ($i=1; $i<=$total_pages; $i++) {
                        echo "<li";

                        if($current_page == $i){
                            echo ' class="active"';
                        }
                        echo "><a href='./organizer?page=".$i."'>".$i."</a></li>";
                    };
                    ?>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Amount of Sport session</th>
                            <th></th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($query_listing->result() as $row) {
                                echo '<tr>
                                <td>'.$row->organizer_id.'</td>
                                <td>'.$row->organizer_name.'</td>
                                <td>'.$row->organizer_phone.'</td>
                                <td>'.$row->organizer_email.'</td>
                                <td>'.$row->event_amount.'</td>
                                <td>
                                <a href="./organizer_edit?id='.$row->organizer_id.'" class="btn btn-info btn-sm" role="button">Edit</a>
                                    <button class="btn btn-primary btn-sm">Event list</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>';
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>