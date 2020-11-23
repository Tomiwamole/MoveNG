
<?php
require 'connect.php';
session_start();
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