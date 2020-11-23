<!DOCTYPE html>
<html lang="en">

    <!-- Head -->

    <!-- Mirrored from themes.2the.me/Messenger-1.1/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 08:20:45 GMT -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Aria - Login</title>

        <!-- Template core CSS -->

        <link href="assets/css/template.min.css" rel="stylesheet">
        <link href="assets/css/template.dark.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">



    </head>
    <!-- Head -->

    <body>

        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">ARIA Login</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Aria official chat-platform.</p>

                        <!-- Form -->
                        <form class="mb-6" id="login_form">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" name="email">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" name="password">
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember">
                                    <label class="custom-control-label" for="checkbox-remember">Remember me</label>
                                </div>
                                <a href="password-reset.php">Reset password</a>
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" type="submit" id="login">Sign in</button><br>
                            <div class="text-center">
                                <b style="color: red" id="emailError"></b>
                            </div>
                        </form>

                        <!-- Text -->
                        <p class="text-center">
                            Don't have an account yet <a href="signup.php">Sign up</a>.
                        </p>

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->

        <!-- Scripts -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <script src="assets/js/login.js" type="text/javascript"></script>
        <!-- Scripts -->

    </body>

    <!-- Mirrored from themes.2the.me/Messenger-1.1/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 08:20:45 GMT -->
</html>