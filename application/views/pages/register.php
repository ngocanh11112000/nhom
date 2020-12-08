 <?php include "header.php";?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Register Start -->

        <div class="login" >
            <h1>Thông tin Đăng ký</h1>
              <?php 
            if(isset($thongbao)){
                echo $thongbao;
            }
            else{

            }
             ?>

            <div class="container-fluid" >
                <div class="row">
                    
                    <div class="col-lg-6">  

                        <div class="register-form" >
                           <form  method="post">
                            <div class="row">
                                <div class="col-md-6" >


                                    <label>First Name</label>
                                    <input class="form-control" type="text" name="firstname" required="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text" name="lastname" required="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="text" required="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" type="tel" required="tel" placeholder="Mobile">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" required="text" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Nhập lại Password</label>
                                    <input class="form-control" type="password" name="repassword" required="text" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <input name="re" type="Submit" value="Đăng ký" class="btn"></input>
                                </div>
                            </div>
                            
                          </form>
                        </div>
                    </div>

                    
                    
                </div>
            </div>
        </div>
        <!-- Login End -->
        
      <?php 
        include "footer.php";
 ?> 