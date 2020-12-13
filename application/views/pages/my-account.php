
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                           <!--  <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a> -->
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Orders</a>
                          
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" href="<?= base_url() ?>index.php/Logout"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                          
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Hóa đơn số</th>
                                               
                                                <th>Price</th>
                                              
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Payment Address</h5>
                                        <p>123 Payment Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Shipping Address</h5>
                                        <p>123 Shipping Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                  <!--  kiểm tra session em có tồn tại hay không  -->
                                                             

                                    <div class="col-md-6">
                                          <form method="post">

                                        <input class="form-control" name="firstname" 
                                        value=" <?php  echo $firstname; ?>"
                                         type="text" >
                                       </input>

                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="lastname"   value="<?php  echo $lastname; ?>" 
                                         type="text" ></input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="mobile" value=" <?php  echo $mobile; ?>"
                                         type="text" ></input>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="email" value=" <?php  echo $email; ?>"
                                        type="text" ></input>
                                    </div>

                                 
                                 
                                    <div class="col-md-12">
                                        <input type="submit" name="upda" class="btn" value="Update Account"></input>
                                        <br><br>
                                    </div>
                                           
                                   
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                      <div class="col-md-12">
                                      
                                        <input class="form-control" type="password" value="<?php  echo $password; ?>";
                                         name="password" placeholder="Current Password">
                                    </div>
                                     </form>
                                
                                    <div class="col-md-6">
                                        <form method="post">
                                        <input class="form-control" name="pass1" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" name="pass2" type="text" placeholder="Confirm Password">
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <input name="save" type="submit" class="btn" value="Save Changes"></input>
                                    </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
   