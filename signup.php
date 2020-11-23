<!DOCTYPE html>
<html lang="en">

    <!-- Head -->

    <!-- Mirrored from themes.2the.me/Messenger-1.1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 08:20:45 GMT -->
    <head>
        <?php require 'includes/connect.php'; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Aria - Signup</title>

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
                        <h1 class="font-bold text-center">Sign up</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Welcome to the official Chat web-client.</p>

                        <!-- Form -->
                        <form class="mb-6" id="signup_form">

                            <!-- Name -->
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name" name="name" required="">
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" name="email"  required="">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" name="password" required="">
                            </div>

                            <!-- Telephone -->
                            <div class="form-group">
                                <label for="telephone" class="sr-only">Telephone</label>
                                <input type="tel" class="form-control form-control-lg" id="tel" placeholder="Enter your phone number" name="tel" required="">
                            </div>

                            <!-- State -->
                            <div class="form-group">
                                <label for="state" class="sr-only">State</label>
                                <select class="form-control form-control-lg" id="state" placeholder="Enter your phone number" name="state" required="">
                                    <?php
                                    $query = "SELECT * FROM state";
                                    $result = mysqli_query($connect, $query);
                                    while ($ans = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <option value="<?php echo $ans['id']; ?>"><?php echo $ans['name']; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            
                        
                        <!-- Submit -->
                        <button class="btn btn-lg btn-block btn-primary" id="signup">Sign up</button><br>
                        <div class="text-center">
                            <b style="color: red" id="emailError"></b>
                        </div>

                        </form>

                        <!-- Text -->
                        <p class="text-center">
                            Already have an account? <a href="login.php">Login</a>.
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
        <script src="assets/js/signup.js" type="text/javascript"></script>
        <!-- Scripts -->

    </body>

    <!-- Mirrored from themes.2the.me/Messenger-1.1/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 08:20:45 GMT -->
</html>