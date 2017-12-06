<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <th>Session Code</th>
                            <th>Sport session</th>
                            <th>Sport Date</th>
                            <th>View detail</th>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($query_listing->result() as $row) {
                                echo '<tr>
                                <td>'.$row->booking_code.'</td>
                                <td>'.$row->title.'</td>
                                <td>'.$row->datetime_from.'</td>
                                <td><a href="'.$this->config->config['base_url'].'/index.php/booking/code_check_booking?code='.$row->booking_code.'">View detail</a></td>
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
