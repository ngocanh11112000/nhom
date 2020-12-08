 <?php include "header.php";?>
        
        <!-- Login Start -->
        <div class="login">

            <div class="container-fluid">
        
                        <form method="post">
                        <div class="login-form">
                            
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" 
                                     placeholder="E-mail ">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="text" 
                                     name="password" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember_me" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Keep me signed in</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input name="lo" value="Submit" class="btn" type="submit"></input>
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