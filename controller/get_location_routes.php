<?php
include_once "../includes/connect.php";
session_start();

$user_id = $_SESSION['user_logged'];

$query = "SELECT * FROM user WHERE id = $user_id";
$result = mysqli_query($connect, $query);
$ans = mysqli_fetch_assoc($result);
$state = $ans['state'];

if (isset($_POST["location_from"]) && !empty($_POST["location_from"])) {

    $location_from = htmlentities($_POST["location_from"]);

    $query = "SELECT loc_from, loc_to, description FROM location WHERE loc_from like '" . $location_from . "%' AND state = $state";
    $result = mysqli_query($connect, $query);
    $rows = mysqli_num_rows($result);

    if ($rows != 0) {
        while ($ans = mysqli_fetch_assoc($result)) {
            $location_from = $ans["loc_from"];
            $location_to = $ans["loc_to"];
            $description = $ans["description"];
            $message = "$location_from to $location_to";
            ?>
            <a class="text-reset nav-link p-0 mb-6" href="controller/sendmessage.php?message=<?php echo $message; ?>">
                <div class="card card-active-listener">
                    <div class="card-body">
                        <div class="media">

                            <div class="media-body overflow-hidden">
                                <div class="d-flex align-items-center mb-1">
                                    <h6 class="text-truncate mb-0 mr-auto text-center"><b>From: </b> <?php echo $location_from; ?> To: </b> <?php echo $location_to; ?></h6>
                                </div>
                                <div class="text-truncate"><?php echo $description; ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            </a>
            <?php
        }
    } else {
        $query = "SELECT loc_from, loc_to, description1 FROM location WHERE loc_to like '" . $location_from . "%' AND state = $state";
        $result = mysqli_query($connect, $query);
        $rows = mysqli_num_rows($result);
        while ($ans = mysqli_fetch_assoc($result)) {
            $location_from = $ans["loc_from"];
            $location_to = $ans["loc_to"];
            $description = $ans["description1"];
            $message = "$location_to to $location_from";
            ?>
            <a class="text-reset nav-link p-0 mb-6" href="controller/sendmessage.php?message=<?php echo $message; ?>">
                <div class="card card-active-listener">
                    <div class="card-body">
                        <div class="media">

                            <div class="media-body overflow-hidden">
                                <div class="d-flex align-items-center mb-1">
                                    <h6 class="text-truncate mb-0 mr-auto text-center"><b>From: </b> <?php echo $location_to; ?> To: </b> <?php echo $location_from; ?></h6>
                                </div>
                                <div class="text-truncate"><?php echo $description; ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            </a>
            <?php
        }
    }



    if ($rows == 0) {
        ?>
        <a class="text-reset nav-link p-0 mb-6" href="#">
            <div class="card card-active-listener">
                <div class="card-body">
                    <div class="media">

                        <div class="media-body overflow-hidden">
                            <div class="text-truncate">Could not find location</div>
                        </div>
                    </div>

                </div>
            </div>
        </a>
        <?php
    }
} else {
    ?>
    <a class="text-reset nav-link p-0 mb-6" href="#">
        <div class="card card-active-listener">
            <div class="card-body">
                <div class="media">

                    <div class="media-body overflow-hidden">
                        <div class="text-truncate">Input location to search for routes</div>
                    </div>
                </div>

            </div>
        </div>
    </a>
    <?php
}
?>

