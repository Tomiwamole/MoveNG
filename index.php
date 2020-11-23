<!DOCTYPE html>
<html lang="en">

    <!-- Head -->

    <head>
        <?php require 'includes/connect.php'; ?>
        <?php require 'includes/checklogged.php'; ?>
        <?php
        $id = $_SESSION['user_logged'];
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Aria</title>

        <!-- Template core CSS -->
        <?php require 'includes/chooseTheme.php'; ?>
        <script src="assets/js/libs/jquery.min.js"></script>
    </head>
    <!-- Head -->

    <body>
        <div class="layout">

            <?php include 'includes/navigation.php'; ?>
            <?php include 'includes/sidebar.php'; ?>

            <!-- Main Content -->
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div id="chat-1" class="chat dropzone-form-js" data-dz-url="some.html">

                    <!-- Chat: body -->
                    <div class="chat-body">

                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <div class="row align-items-center">

                                    <!-- Close chat(mobile) -->
                                    <div class="col-3 d-xl-none">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="text-muted px-0" href="#" data-chat="open">
                                                    <i class="icon-md fe-chevron-left"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Chat photo -->
                                    <div class="col-6 col-xl-6">
                                        <div class="media text-center text-xl-left">
                                            <div class="avatar avatar-sm d-none d-xl-inline-block mr-5">
                                                <img src="assets/images/avatars/11.jpg" class="avatar-img" alt="">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1">Aria</h6>
                                                <small class="text-muted">Online</small>
                                                <small class="text-muted mx-2"> • </small>
                                                <small class="text-muted">Active</small>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- .row -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Content-->
                        <div class="chat-content px-lg-8" id="chat">

                            <?php
                            $id = $_SESSION['user_logged'];
                            $query = "SELECT * FROM chat WHERE messager = $id";
                            $result = mysqli_query($connect, $query);
                            $rows = mysqli_num_rows($result);
                            ?>

                            <div class="container-xxl py-6 py-lg-10">

                                <?php
                                while ($ans = mysqli_fetch_assoc($result)) {
                                    $time = $ans['time'];
                                    $currenttime = time();
                                    $newtime = $currenttime - $time;

                                    $time = "";

                                    $day_unit = 60 * 60 * 24;
                                    $hour_unit = 60 * 60;
                                    $minute_unit = 60;

                                    if (($newtime % $day_unit) >= 1 && ($newtime) >= $day_unit) {

                                        $time = floor($newtime / $day_unit);

                                        $time = ($time == 1 ) ? $time . " day ago" : $time . " days ago";
                                    } else if (($newtime % $hour_unit) >= 1 && ($newtime) >= $hour_unit) {

                                        $time = floor($newtime / $hour_unit);

                                        $time = ($time == 1 ) ? $time . " hr ago" : $time . " hrs ago";
                                    } else if (($newtime % $minute_unit) >= 1 && ($newtime) >= $minute_unit) {

                                        $time = ceil($newtime / $minute_unit);

                                        $time = ($time == 1 ) ? $time . " min ago" : $time . " mins ago";
                                    } else {

                                        $time = ($newtime == 1 ) ? $newtime . " sec ago" : $newtime . " secs ago";
                                    }
                                    if ($ans['owner'] == 0) {
                                        ?>
                                        <!-- Message -->
                                        <div class="message">
                                            <!-- Message: body -->
                                            <div class="message-body">

                                                <!-- Message: row -->
                                                <div class="message-row">
                                                    <div class="d-flex align-items-center">

                                                        <!-- Message: content -->
                                                        <div class="message-content bg-light">

                                                            <?php
                                                            $sql = "SELECT * FROM user WHERE id = $id";
                                                            $res = mysqli_query($connect, $sql);
                                                            $sol = mysqli_fetch_assoc($res);

                                                            $name = $sol['name'];
                                                            $name = trim($name);
                                                            $pos = strrpos($name, " ");
                                                            $name = substr($name, 0, $pos);

                                                            $message = $ans['message'];
                                                            $message = str_replace("{name}", $name, $message);
                                                            ?>

                                                            <div><?php echo $message; ?></div>

                                                            <div class="mt-1">
                                                                <small class="opacity-65"><?php echo $time; ?></small>
                                                            </div>
                                                        </div>
                                                        <!-- Message: content -->

                                                    </div>
                                                </div>
                                                <!-- Message: row -->

                                            </div>
                                            <!-- Message: Body -->
                                        </div>
                                        <!-- Message -->
                                        <?php
                                    } else {
                                        ?>
                                        <!-- Message -->
                                        <div class="message message-right">
                                            <!-- Message: body -->
                                            <div class="message-body">

                                                <!-- Message: row -->
                                                <div class="message-row">
                                                    <div class="d-flex align-items-center justify-content-end">

                                                        <!-- Message: content -->
                                                        <div class="message-content bg-primary text-white">
                                                            <div><?php echo $ans['message']; ?>.</div>

                                                            <div class="mt-1">
                                                                <small class="opacity-65"><?php echo $time; ?></small>
                                                            </div>
                                                        </div>
                                                        <!-- Message: content -->
                                                    </div>
                                                </div>
                                                <!-- Message: row -->

                                            </div>
                                            <!-- Message: body -->
                                        </div>
                                        <!-- Message -->
                                        <?php
                                    }
                                }
                                ?>

                                <!--     Divider 
                                    <div class="message-divider my-9 mx-lg-5">
                                        <div class="row align-items-center">
                                
                                            <div class="col">
                                                <hr>
                                            </div>
                                
                                            <div class="col-auto">
                                                <small class="text-muted">Today</small>
                                            </div>
                                
                                            <div class="col">
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                     Divider 
                                
                                     Message 
                                    <div class="message">
                                         Message: body 
                                        <div class="message-body">
                                
                                             Message: row 
                                            <div class="message-row">
                                                <div class="d-flex align-items-center">
                                
                                                     Message: content 
                                                    <div class="message-content bg-light">
                                                        <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>
                                
                                                        <div class="mt-1">
                                                            <small class="opacity-65">8 mins ago</small>
                                                        </div>
                                                    </div>
                                                     Message: content 
                                
                                                     Message: dropdown 
                                                    <div class="dropdown">
                                                        <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                     Message: dropdown 
                                
                                                </div>
                                            </div>
                                             Message: row 
                                
                                             Message: row 
                                            <div class="message-row">
                                                <div class="d-flex align-items-center">
                                
                                                     Message: content 
                                                    <div class="message-content bg-light">
                                                        <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>
                                
                                                        <div class="mt-1">
                                                            <small class="opacity-65">8 mins ago</small>
                                                        </div>
                                                    </div>
                                                     Message: content 
                                
                                                     Message: dropdown 
                                                    <div class="dropdown">
                                                        <a class="text-muted opacity-60 ml-3" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fe-more-vertical"></i>
                                                        </a>
                                
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Share <span class="ml-auto fe-share-2"></span>
                                                            </a>
                                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                                Delete <span class="ml-auto fe-trash-2"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                     Message: dropdown 
                                
                                                </div>
                                            </div>
                                             Message: row 
                                
                                        </div>
                                         Message: Body 
                                    </div>
                                     Message 
                                
                                     Message 
                                    <div class="message message-right">
                                         Message: body 
                                        <div class="message-body">
                                
                                             Message: row 
                                            <div class="message-row">
                                                <div class="d-flex align-items-center justify-content-end">
                                
                                                     Message: content 
                                                    <div class="message-content bg-primary text-white">
                                                        <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>
                                
                                                        <div class="mt-1">
                                                            <small class="opacity-65">8 mins ago</small>
                                                        </div>
                                                    </div>
                                                     Message: content 
                                                </div>
                                            </div>
                                             Message: row 
                                
                                        </div>
                                         Message: body 
                                    </div>
                                     Message 
                                
                                     Message: Typing 
                                    <div class="message">
                                
                                         Message: body 
                                        <div class="message-body">
                                
                                             Message: row 
                                            <div class="message-row">
                                                <div class="d-flex align-items-center">
                                
                                                     Message: content 
                                                    <div class="message-content bg-light">
                                                        <div>Aria is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span></div>
                                                    </div>
                                                     Message: content 
                                
                                                </div>
                                            </div>
                                             Message: row 
                                
                                        </div>
                                         Message: body 
                                    </div>
                                     Message: Typing -->

                            </div>

                            <!-- Scroll to end -->
                            <div class="end-of-chat"></div>
                        </div>


                        <!-- Chat: Content -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <form id="chat-id-1-form" data-emoji-form="">
                                    <div class="form-row align-items-center">
                                        <div class="col">
                                            <div class="input-group">

                                                <!-- Textarea -->
                                                <textarea id="message" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>
                                            </div>

                                        </div>

                                        <!-- Submit button -->
                                        <div class="col-auto">
                                            <button class="btn btn-ico btn-primary rounded-circle" type="submit" id="send_message">
                                                <span class="fe-send"></span>
                                            </button>
                                        </div>

                                        <script>

                                            function sendmessage() {
                                                var message = $('#message').val();
                                                if (message.length > 0) {
                                                    $.post({
                                                        url: "controller/sendmessage.php",
                                                        data: {message: message},
                                                        success: function (data) {
                                                            //alert(data);
                                                            $('#chat').load('includes/chat.php');
                                                            $('#message').val("");
                                                        }
                                                    });
                                                }

                                            }

                                            $('#send_message').click(function (e) {
                                                e.preventDefault();
                                                sendmessage();
                                            });

                                        </script>

                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- Chat: Footer -->
                    </div>
                    <!-- Chat: body -->

                </div>
                <!-- Chat -->

            </div>
            <!-- Main Content -->

        </div>
        <!-- Layout -->

        <!-- Modal: Invite friends -->
        <div class="modal fade" id="invite-friends" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <div class="media flex-fill">
                            <div class="icon-shape rounded-lg bg-primary text-white mr-5">
                                <i class="fe-users"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <h5 class="modal-title">Invite friends</h5>
                                <p class="small">Invite colleagues, clients and friends.</p>
                            </div>
                        </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="invite-email" class="small">Email</label>
                                <input type="text" class="form-control form-control-lg" id="invite-email">
                            </div>

                            <div class="form-group mb-0">
                                <label for="invite-message" class="small">Invitation message</label>
                                <textarea class="form-control form-control-lg" id="invite-message" data-autosize="true"></textarea>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-block btn-primary d-flex align-items-center">
                            Invite friend
                            <i class="fe-user-plus ml-auto"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal: Invite friends -->

        <!-- Scripts -->
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- Scripts -->

        <script type="text/javascript">

                                            $("#searchLocation").keyup(function () {

                                                var location_from = $(this).val();

                                                if (location_from === "" || location_from.length < 3) {

                                                    var input_location_from_message = "<a class=\"text-reset nav-link p-0 mb-6\" href=\"#\">" +
                                                            "<div class=\"card card-active-listener\">" +
                                                            "<div class=\"card-body\">" +
                                                            "<div class=\"media\">" +
                                                            "<div class=\"media-body overflow-hidden\">" +
                                                            "<div class=\"text-truncate\">Input location to search for routes</div>" +
                                                            "</div>" +
                                                            "</div>" +
                                                            "</div>" +
                                                            "</div>" +
                                                            "</a>";

                                                    $("#location_search_results").html(input_location_from_message);

                                                } else {

                                                    $.ajax({
                                                        url: "controller/get_location_routes.php",
                                                        type: "POST",
                                                        data: {location_from: location_from},
                                                        success: function (data) {

                                                            $("#location_search_results").html(data);

                                                        }
                                                    });

                                                }

                                            });

        </script>

    </body>

</html>