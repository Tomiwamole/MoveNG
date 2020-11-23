<!-- Sidebar -->
<div class="sidebar">
    <div class="tab-content h-100" role="tablist">
        <div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
            <div class="d-flex flex-column h-100">

                <div class="hide-scrollbar">
                    <div class="container-fluid py-6">

                        <!-- Title -->
                        <h2 class="font-bold mb-6">Create Suggestions</h2>
                        <!-- Title -->

                        <!-- Create chat -->
                        <div class="tab-content" role="tablist" style="padding-top: 20px;">

                            <!-- Chat details -->
                            <div id="create-group-details" class="tab-pane fade show active" role="tabpanel">
                                <form id="suggestion_form">

                                    <div class="form-group">
                                        <label class="small" for="new-chat-title">From</label>
                                        <input class="form-control form-control-lg" name="new-chat-title" id="from" type="text" placeholder="From Location" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="small" for="new-chat-topic">To</label>
                                        <input class="form-control form-control-lg" name="new-chat-topic" id="to" type="text" placeholder="To Location" required="">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="small" for="new-chat-topic">State</label>
                                        <input class="form-control form-control-lg" name="new-chat-topic" id="state" type="text" value="Oyo" readonly="">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label class="small" for="new-chat-description">Description</label>
                                        <textarea class="form-control form-control-lg" name="new-chat-description" id="new-chat-description" rows="6" placeholder="Location Description" required=""></textarea>
                                    </div>

                                </form>
                            </div>
                            <!-- Chat details -->

                        </div>
                        <!-- Create chat -->

                    </div>
                </div>

                <!-- Button -->
                <div class="pb-6">
                    <div class="container-fluid">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
            <div class="d-flex flex-column h-100">

                <div class="hide-scrollbar">
                    <div class="container-fluid py-6">

                        <!-- Title -->
                        <h2 class="font-bold mb-6">Friends</h2>
                        <!-- Title -->

                        <!-- Search -->
                        <form class="mb-6">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Search -->

                        <!-- Button -->
                        <button type="button" class="btn btn-lg btn-block btn-secondary d-flex align-items-center mb-6" data-toggle="modal" data-target="#invite-friends">
                            Invite friends
                            <i class="fe-users ml-auto"></i>
                        </button>

                        <!-- Friends -->
                        <nav class="mb-n6">

                            <div class="mb-6">
                                <small class="text-uppercase">A</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">

                                        <div class="avatar avatar-online mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/10.jpg" alt="Anna Bridges">
                                        </div>


                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Anna Bridges</h6>
                                            <small class="text-muted">Online</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="chat-2.html" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">B</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/6.jpg" alt="Brian Dawson">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Brian Dawson</h6>
                                            <small class="text-muted">last seen 2 hours ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">L</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/5.jpg" alt="Leslie Sutton">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Leslie Sutton</h6>
                                            <small class="text-muted">last seen 3 days ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">M</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/4.jpg" alt="Matthew Wiggins">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Matthew Wiggins</h6>
                                            <small class="text-muted">last seen 3 days ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">S</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Simon Hensley">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Simon Hensley</h6>
                                            <small class="text-muted">last seen 3 days ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">W</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/9.jpg" alt="William Wright">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">William Wright</h6>
                                            <small class="text-muted">last seen 3 days ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend --><!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/3.jpg" alt="William Greer">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">William Greer</h6>
                                            <small class="text-muted">last seen 10 minutes ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                            <div class="mb-6">
                                <small class="text-uppercase">Z</small>
                            </div>

                            <!-- Friend -->
                            <div class="card mb-6">
                                <div class="card-body">

                                    <div class="media">


                                        <div class="avatar mr-5">
                                            <img class="avatar-img" src="assets/images/avatars/7.jpg" alt="Zane Mayes">
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h6 class="mb-0">Zane Mayes</h6>
                                            <small class="text-muted">last seen 3 days ago</small>
                                        </div>

                                        <div class="align-self-center ml-5">
                                            <div class="dropdown z-index-max">
                                                <a href="#" class="btn btn-sm btn-ico btn-link text-muted w-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        New chat <span class="ml-auto fe-edit-2"></span>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        Delete <span class="ml-auto fe-trash-2"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Link -->
                                    <a href="#" class="stretched-link"></a>

                                </div>
                            </div>
                            <!-- Friend -->

                        </nav>
                        <!-- Friends -->

                    </div>
                </div>

            </div>
        </div>

        <!-- Location -->
        <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
            <div class="d-flex flex-column h-100">

                <div class="hide-scrollbar">
                    <div class="container-fluid py-6">

                        <!-- Title -->
                        <h2 class="font-bold mb-6">Locations</h2>
                        <!-- Title -->

                        <!-- Search -->
                        <form class="mb-6">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Search for a to & fro destination..." aria-label="Search for a to & fro destination..." id="searchLocation" autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Search -->

                        <!-- Chats -->
                        <nav class="nav d-block list-discussions-js mb-n6" id="location_search_results">
                            
                           
                            <a class="text-reset nav-link p-0 mb-6">
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

                        </nav>
                        <!-- Chats -->

                    </div>
                </div>

            </div>
        </div>

        <div class="tab-pane fade h-100" id="tab-content-demos" role="tabpanel">
            <div class="d-flex flex-column h-100">

                <div class="hide-scrollbar">
                    <div class="container-fluid py-6">

                        <!-- Title -->
                        <h2 class="font-bold mb-6">Demos</h2>
                        <!-- Title -->

                        <!-- Search -->
                        <form class="mb-6">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                <div class="input-group-append">
                                    <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- Search -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <div class="card-body">

                                <div class="media align-items-center">
                                    <div class="mr-5">
                                        <img src="assets/images/brand.svg" class="fill-primary" data-inject-svg="" alt="" style="height: 46px; width: 46px;">
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mb-0">
                                            <a href="documentation/index.html" class="text-basic-inverse stretched-link">Documentation</a>
                                        </h5>
                                        <p>Quick setup and build tools.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Card -->

                        <h5 class="my-6">Chat Pages:</h5>

                        <!-- Card -->
                        <div class="card mb-6">
                            <img class="card-img-top" alt="" src="assets/images/demos/chat.jpg">
                            <div class="card-body border-top">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Light mode</h5>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="demo-light/index.html" class="text-muted stretched-link">
                                            <i class="fe-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <img class="card-img-top" alt="" src="assets/images/demos/chat-dark.jpg">
                            <div class="card-body border-top">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Dark mode</h5>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="demo-dark/index.html" class="text-muted stretched-link">
                                            <i class="fe-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                        <h5 class="my-6">Account Pages:</h5>

                        <!-- Card -->
                        <div class="card mb-6">
                            <img class="card-img-top" alt="" src="assets/images/demos/sign-in-dark.jpg">
                            <div class="card-body border-top">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Sign In</h5>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="signin.html" class="text-muted stretched-link">
                                            <i class="fe-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <img class="card-img-top" alt="" src="assets/images/demos/sign-up-dark.jpg">
                            <div class="card-body border-top">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Sign Up</h5>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="signup.html" class="text-muted stretched-link">
                                            <i class="fe-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <img class="card-img-top" alt="" src="assets/images/demos/password-reset-dark.jpg">
                            <div class="card-body border-top">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mb-0">Password Reset</h5>
                                    </div>
                                    <div class="align-self-center">
                                        <a href="password-reset.html" class="text-muted stretched-link">
                                            <i class="fe-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Profile -->
        <div class="tab-pane fade h-100" id="tab-content-user" role="tabpanel">
            <div class="d-flex flex-column h-100">

                <div class="hide-scrollbar">
                    <div class="container-fluid py-6">

                        <!-- Title -->
                        <h2 class="font-bold mb-6">Profile</h2>
                        <!-- Title -->

                        <?php
                        $query = "SELECT * FROM user WHERE id = $id";
                        $result = mysqli_query($connect, $query);
                        $ans = mysqli_fetch_assoc($result);
                        ?>

                        <!-- Card -->
                        <div class="card mb-6">
                            <div class="card-body">
                                <div class="text-center py-6">
                                    <!-- Photo -->
                                    <div class="avatar avatar-xl mb-5">
                                        <img class="avatar-img" src="assets/images/avatars/12.jpg" alt="">
                                    </div>

                                    <h5><?php echo $ans['name']; ?></h5>
                                    <p class="text-muted"><?php if (empty($ans['status'])) {
                            echo "...";
                        } else {
                            echo $ans['status'];
                        }; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 py-6">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">State</p>
                                                <?php 
                                                    $state = $ans['state'];
                                                    $sql = "SELECT * FROM state WHERE id = $state";
                                                    $res = mysqli_query($connect, $sql);
                                                    $sol = mysqli_fetch_assoc($res);
                                                ?>
                                                <p><?php echo $sol['name'] ?>, Nigeria</p>
                                            </div>
                                            <i class="text-muted icon-sm fe-globe"></i>
                                        </div>
                                    </li>

                                    <li class="list-group-item px-0 py-6">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Phone</p>
                                                <p>+234 <?php echo $ans['phone'] ?></p>
                                            </div>
                                            <i class="text-muted icon-sm fe-phone"></i>
                                        </div>
                                    </li>

                                    <li class="list-group-item px-0 py-6">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Email</p>
                                                <p><?php echo $ans['email'] ?></p>
                                            </div>
                                            <i class="text-muted icon-sm fe-mail"></i>
                                        </div>
                                    </li>

                                    <li class="list-group-item px-0 py-6">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="small text-muted mb-0">Theme</p>
                                                <p><?php if($ans['theme'] == 1){echo "Light";}else{echo "Dark";} ?></p>
                                            </div>
                                            <i class="text-muted icon-sm fe-theme"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="card mb-6">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 py-6">
                                        <a href="#" class="media text-muted">
                                            <div class="media-body align-self-center">
                                                Twitter
                                            </div>
                                            <i class="icon-sm fe-twitter"></i>
                                        </a>
                                    </li>

                                    <li class="list-group-item px-0 py-6">
                                        <a href="#" class="media text-muted">
                                            <div class="media-body align-self-center">
                                                Facebook
                                            </div>
                                            <i class="icon-sm fe-facebook"></i>
                                        </a>
                                    </li>

                                    <li class="list-group-item px-0 py-6">
                                        <a href="#" class="media text-muted">
                                            <div class="media-body align-self-center">
                                                Github
                                            </div>
                                            <i class="icon-sm fe-github"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card -->

                        <div class="form-row">
                            <div class="col">
                                <!-- Button -->
                                <a href="settings.php" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                    Settings
                                    <span class="fe-settings ml-auto"></span>
                                </a>
                            </div>

                            <div class="col">
                                <!-- Button -->
                                <a href="controller/logout.php" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                    Logout
                                    <span class="fe-log-out ml-auto"></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>




        </div>
    </div>
</div>
<!-- Sidebar -->