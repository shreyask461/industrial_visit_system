<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Industry Registration</title>
        <?php include 'components/stylesheets.php' ?>
        
    </head>

    <body class="fixed-left">
    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="display-table">
            <div class="display-table-cell">
                <diV class="container">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="text-center pt-3">
                                        <h2>Industry Registration</h2>
                                    </div>
                                    
                                    <div class="p-3">
                                        <form class="form-horizontal mb-0" action="functions/register_action.php" method="post">                   
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text"  placeholder="Industry Name" name="industry_name" required>
                                                </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text"  placeholder="Industry Email" name="industry_email" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text"  placeholder="Website" name="industry_website">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                <textarea rows="2" class="form-control" type="text" required="" placeholder="Industry Address" name="industry_address" required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text"  placeholder="City" name="industry_city" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="text" placeholder="State" name="industry_state" required>
                                                </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control" type="password"  placeholder="Password" name="industry_password" required>
                                                </div>
                                            </div>
                
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                        <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="form-group text-center row m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-raised btn-primary btn-block waves-effect waves-light" type="submit" name="industry_register">Register</button>
                                                </div>
                                            </div>
                
                                            <div class="form-group m-t-10 mb-0 row">
                                                <div class="col-12 m-t-20 text-center">
                                                    <a href="login.php" class="text-muted">Already have account?</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </diV>
            </div>
        </div>
    </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap-material-design.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
         
    </body>
</html>