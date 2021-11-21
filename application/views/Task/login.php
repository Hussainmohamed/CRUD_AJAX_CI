<!doctype html>
<html lang="en">

<head>
    <title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/notiflix.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">User Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome</h2>
                                <p>Don't have an account?</p>
                                <a href="javascript:void(0)" id="sign" class="btn btn-white btn-outline-white">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5" id="login" >
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>                               
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" id="lg-name" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" id="lg-pwd" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="auth" class="form-control btn btn-primary submit px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="javascript:void(0)" id="fget">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="login-wrap p-4 p-lg-5" id="signup" style="display:none">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>                               
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" id="sg-name" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" id="sg-mail" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" id="sg-pwd" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="register" class="form-control btn btn-primary submit px-3">Sign
                                        Up</button>
                                </div>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
 
    <script src="<?php echo base_url('assets/js/poper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/notiflix-min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/task.js'); ?>"></script>
    
</body>

</html>