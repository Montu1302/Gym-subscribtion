<?php

session_start();

?>
<!DOCTYPE html>

<head>
    <!-- css link -->
    <link rel="stylesheet" href="../style/home.css" />


</head>

<!-- body starts -->

<body>
    <div class="start-gym">
        <div class="start-gym-container">
            <div class="start-gym-bg">
            </div>
            <div class="start-gym-body">
                <div class="start-gym-nav">
                    <span class="name">Gymnasio</span>
                    <span class="li"><a href="about.php">About us</a></span>
                    <span class="li"><a href="#membershipasses">Membership pass</a></span>
                    <span class="li"><a href="search.php">View Gyms</a></span>
                    <span class="li"><a href="login.php"> Profile</a></span>
                </div>

                <div class="start-gym-content">
                    <span class="line1">One Network</span>
                    <span class="line2">Any location. Thousands of gyms. Zero contracts.</span>
                    <form method="post">
                        <input type="text" placeholder="enter your location" name="location"/>
                        <button name="press">Find Gyms</button>
                        <?php
                            if(isset($_POST['press'])){
                                $location = $_POST['location'];
                                if(empty($location)){
                                    echo '<script>';
                                    echo "alert('* Address has not been set! *')";
                                    echo '</script>';
                                }else{
                                    $_SESSION['location'] = $location;
                                    header("Location:search.php");
                                }
                            }

                        ?>
                    </form>
                </div>
            </div>


        </div>
    </div>
    <div class="how-works">
        <div class="how-works-container">
            <div class="how-works-title">
                <label>How Gymnasio Works </label>
                <p>Gymnasio is a network of gyms, pools, spas and health and fitness apps. </p>
                <p>With one pass, you can access fitness in exactly the way you want.</p>
            </div>
            <div class="how-works-cards">
                <div class="how-works-card">
                    <div class="how-works-card-body">
                        <i class="fa-solid fa-map-location"></i>
                        <p class="caps">Gyms wherever you are</p>
                        <p class="small">Search to find gyms near you and book easily online.</p>
                    </div>
                </div>
                <div class="how-works-card">
                    <div class="how-works-card-body">
                        <i class="fa-solid fa-ticket"></i>
                        <p class="caps">A pass to suit you</p>
                        <p class="small">A one-off visit, multi-gym access with one pass, or a full gym membership.</p>
                    </div>
                </div>
                <div class="how-works-card">
                    <div class="how-works-card-body">
                        <i class="fa-solid fa-person-walking"></i>
                        <p class="caps">Easy and flexible</p>
                        <p class="small">Book easily online or in the app.<br> Cancel anytime - you're in control.</p>
                    </div>
                </div>

            </div>

            <div class="how-works-button">
                
                <button>Explore our Passes</button>
               

            </div>

        </div>
    </div>
    <div class="membership" id="membershipasses">
        <div class="title">
            <p>Our Pass Types</p>
        </div>
        <div class="membership-container">
            <!-- day pass -->
            <div class="bg-img-1">
                <div class="membership-container-card ">
                    <div class="line1">
                        <div style="transform: rotate(-20deg)"><i class="fa-solid fa-ticket-simple"></i></div>
                    </div>
                    <div class="line2">
                        <label>Day Pass</label>
                        <p>Take it one visit at a time</p>
                    </div>
                    <div class="line3">
                        <p>FROM / <span> &#8377 100</span> / PER VISIT</p>
                    </div>
                    <span class="border"></span>
                    <div class="line4">
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Pay as you go</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>30 days to use it</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Competitive rates</p>
                        </section>
                    </div>
                    <span class="border"></span>
                    <div class="line5">
                        <label>Complete Flexibility</label>
                        <p>Just pay when you go</p>
                    </div>
                    <div class="line6">
                        <a href="search.php">
                        <button>                            
                            View Gyms
                        </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- monthly pass -->
            <div class="bg-img-2">
                <div class="membership-container-card ">
                    <div class="line1">
                        <div><i class="fa-solid fa-user-ninja"></i></div>
                    </div>
                    <div class="line2">
                        <label>Membership</label>
                        <p>Join a gym directly via Company_Name</p>
                    </div>
                    <div class="line3">
                        <p>FROM / <span> &#8377 600</span> / PER MONTH</p>
                    </div>
                    <span class="border"></span>
                    <div class="line4">
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Price matched with gyms</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Unlimited visits each month</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Save 30% on Company_Name day passes</p>
                        </section>
                    </div>
                    <span class="border"></span>
                    <div class="line5">
                        <label>Best value</label>
                        <p style="color: black;">for single Gym use</p>
                    </div>
                    <div class="line6">
                    <a href="membershipass.php"><button>                            
                            View Gyms
                        </button></a>
                    </div>
                </div>
            </div>

            <!-- montly+ pass -->
            <div class="bg-img-3">
                <div class="membership-container-card ">
                    <div class="line1">
                        <div style="transform: rotate(-20deg)"><i class="fa-solid fa-dumbbell"></i></div>
                    </div>
                    <div class="line2">
                        <label>Monthly+</label>
                        <p>Multiple gyms with subscriptions</p>
                    </div>
                    <div class="line3">
                        <p>FROM / <span> &#8377 1200</span> / PER MONTH</p>
                    </div>
                    <span class="border"></span>
                    <div class="line4">
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Access the gym you want</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>Unlimited visits</p>
                        </section>
                        <section>
                            <i class="fa-solid fa-circle-check"></i>
                            <p>No contract , cancel anytime</p>
                        </section>
                    </div>
                    <span class="border"></span>
                    <div class="line5">
                        <label>Popular classes</label>
                        <p>comes with extra features</p>
                    </div>
                    <div class="line6">
                    <a href="search.php"><button>
                            View Gyms
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gym-owner">
        <div class="gym-content">
            <div class="gym-img">
                <img src="../images/aaron-brogden-miCR9VIQ5PE-unsplash.jpg" />
            </div>
            <div class="gym-body">
                <h1>Are You Gym Owner?</h1>
                <p>List your club for FREE and benefit from Gymnasio <br> marketing, reaching millions of new
                    customers <br>If you want to join us than candly share your gyms detils thrugh mail(in Footer). </p>
                
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-left">
            <a href="membershipass.php"><div>Membership passes</div></a>
            <a href="search.php"><div>Gyms </div></a>  
        </div>
        <div class="footer-center">
            <div>Partnerships</div>
            <div>Partner Portal</div>
            <div>Careers</div>
        </div>
        <div class="footer-right">
    
              <div>Terms</div>
            <div>Privacy Policy</div>
            <div>+91 8460391975</div>
            <div>gymasiomail@gmail.com</div>

        </div>

    </div>

</body>

<!-- font-awesome link -->
<script src="https://kit.fontawesome.com/4384453e56.js" crossorigin="anonymous"></script>

</html>