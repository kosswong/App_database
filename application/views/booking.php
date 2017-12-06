<div class="content">
    <div class="container-fluid">
        <div class="breadcrumb bs-sidenavx">
            <li><a href="./">Support-U</a></li>
            <li><a href="./search">Sport session</a></li>
            <li class="active">Search</li>
        </div>

        <div class="header">
            <h4 class="title">My booking</h4>
        </div>

        <div class="row card">
            <div class="header">
                <h4 class="title">CHECK BY REGISTERED INFORMATION</h4>
            </div>
            <div class="content">
                <form action="./booking/full_check_booking" method="post">
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
                    </div
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
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-fill btn-wd">Check</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>

        <div class="row card">
            <div class="header">
                <h4 class="title">CHECK BY BOOKING CODE</h4>
            </div>
            <div class="content">
                <form action="./booking/code_check_booking" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="code" class="form-control border-input" placeholder="Booking code">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Check</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>