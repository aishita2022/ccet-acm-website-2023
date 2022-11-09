<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from live.themewild.com/techrun/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:11:45 GMT -->

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>CCET | ACM | TEAM-2022</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="team.css"> 
    <style>
        .heading{
          text-align:center;
          margin-top: 40px;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>

    <!---------------------------------------------------------HEADER START ---------------------------------------------------------------->
    <header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="assets/img/logo/ACM Logo Black.svg" class="logo-display" alt="logo">
                        <img src="assets/img/logo/ACM Logo Blue.svg" class="logo-scrolled" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.html">Home</a>
                                
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html"> About </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="gallery.html" data-bs-toggle="">Gallery</a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Events</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="events.html">Events</a></li>
                                    <li><a class="dropdown-item" href="competition.html">competition</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Team</a>
                                <ul class="dropdown-menu fade-up">
                                    <li><a class="dropdown-item" href="Office-bearers.html">Office bearers</a></li>
                                    <li><a class="dropdown-item" href="Executive-members.html">Executive members</a></li>
                                    <li><a class="dropdown-item" href="Web-Masters.html">Web Masters</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="achievements.html" >Acheivements</a>
                                
                            </li>
                            <li class="nav-item"><a class="nav-link" href="resources.html"> Resources </a></li>
                            <li class="nav-item"><a class="nav-link" href="magazine.html"> magazine </a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="header-nav-right">
                           
                            <div class="header-btn">
                                <a href="acm-w.html" class="theme-btn" style="width: 100px; height: 40px;">ACM-W</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!---------------------------------------------------------HEADER END ---------------------------------------------------------------->


    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">TEAM MEMBERS</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index-2.html"><i class="far fa-home"></i> Home</a></li>
                    <li class="active">OFFICE BEARERS</li>
                </ul>
            </div>
            <div class="breadcrumb-shape">
                <img src="assets/img/shape/shape-4.svg" alt="">
            </div>
            </div>
            <h2 class="site-title heading ">MEET OUR <span>TEAM</span></h2>

        <div class="case-area py-120">
            
            <div class="container">
        
                <!----------------------BUTTONS------------------------->
                <div class="filter-controls">
                    <ul class="filter-btns">
                        <li class="active" data-filter=".cat1">YEAR 2022-2023</li>
                        <li data-filter=".cat2">YEAR 2021-2022</li>
                        <li data-filter=".cat3">YEAR 2020-2021</li>
                        <li data-filter=".cat4">YEAR 2019-2020</li>
                        <li data-filter=".cat5">YEAR 2019-2020</li>
                    </ul>
                </div>
                <!--------------------------TEAM---------------------------->
                <div class="row filter-box popup-gallery">

                    <div class="team-area py-120">
                        <div class="container">
                            <div class="row">
                                
                                <?php 

                                $conn = new mysqli("ccet.hosting2.acm.org" , "ccethosting2acm_admin" , "@dmin@321" , "ccethosting2acm_website_2023");

                                if($conn->connect_error){
                                    echo "Connection Failed";
                                    die();
                                }

                                $data = $conn->query("SELECT * FROM `acm_team_record` WHERE 1");

                                while($row = $data->fetch_array(MYSQLI_ASSOC)){

                                    echo '<div class="col-md-6 col-lg-4 col-xl-3 filter-item '.$row["category"].'">
                                            <div class="team-item">
                                                <img src="assets/img/team/01.jpg" alt="thumb">
                                                <div class="team-social">
                                                    <a href="'.$row["github"].'"><i class="fab fa-github"></i></a>
                                                    <a href="'.$row["linkedin"].'"><i class="fab fa-linkedin"></i></a>
                                                    <a href="'.$row["orcid"].'"><i class="fab fa-orcid"></i></a>
                                                </div>
                                                <div class="team-content">
                                                    <div class="team-bio">
                                                        <h5><a href="#">'.$row["name"].'</a></h5>
                                                        <span>'.$row["position"].'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                }


                                ?>
                                




                                <!-- <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Akash82228"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/akash-sharma-0619461b8"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-5879-7353"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Akash Sharma</a></h5>
                                                <span>CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/tarun1807"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/tarun-36ba11214"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-1030-8784"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Tarun</a></h5>
                                                <span>VICE CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/UMwarrior"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/uday-madan-14753820b/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0003-4354-166X"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Uday Madan</a></h5>
                                                <span>SECRETARY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/akshitc4"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/akshitc/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-4135-6068"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Akshit Chikara</a></h5>
                                                <span>MEMBERSHIP CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/aishita2022"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/aishita-sharma-30b277232"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-8649-3437"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Aishita</a></h5>
                                                <span>TREASURER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/devashish-gupta09/"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/devashish-gupta-066a16200/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/my-orcid?orcid=0000-0001-5288-6577"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Devashish Gupta</a></h5>
                                                <span>WEBMASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/hd2342-dubey"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/harshit-dubey-bb07311b9/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0001-5475-9838"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Harshit Dubey</a></h5>
                                                <span>WEBMASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Nirbhik16"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/nirbhik-kakkar-526059234"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0001-8187-6108"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Nirbhik Kakkar</a></h5>
                                                <span>DESIGN HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Manraj-Mann"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/manraj-singh-5a4418209"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-3077-490X"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Manraj Singh</a></h5>
                                                <span>EXECUTIVE MEMBER HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/SiDiZEN"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/sidharth-sharma-90670820a/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-0931-8176"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Sidharth Sharma</a></h5>
                                                <span>EXTERNAL PR HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/arjungupta72/cs_452"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/arjungupta165/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-0433-6965"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Arjun Gupta</a></h5>
                                                <span>SOCIAL MEDIA MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/shivam2003-dev"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/shivam-kumar2003/"><i class="fab fa-linkedin"></i></a>
                                            <a href="">https://orcid.org/0000-0001-6747-7952<i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Shivam Kumar</a></h5>
                                                <span>EVENT MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat1">
                                    <div class="team-item">
                                        <img src="assets/img/team/02.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Pushkar4440"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/pushkar-kaushik-63b330210"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-7856-5736"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Pushkar Kaushik</a></h5>
                                                <span>CREATIVE HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/muskaan712"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/muskaanchopra712/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-7672-9186"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Muskaan Chopra</a></h5>
                                                <span>CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/kri14"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/kriti-aggarwal-b372721a2/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-7415-0103"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Kriti Aggarwal</a></h5>
                                                <span>VICE CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/anureetchhabra"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/anureet-chhabra-bb86271bb/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0001-8123-4359"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Anureet Chhabra</a></h5>
                                                <span>SECRETARY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/tarun1807"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/tarun-36ba11214"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-1030-8784"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Tarun</a></h5>
                                                <span>MEMBERSHIP CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/imnjangra"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/njangra"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-5012-2482"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Navjot Jangra</a></h5>
                                                <span>TREASURER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Parnit-Kaur"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/parnit-kaur-3972811aa/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0001-6034-5316"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Parnit Kaur</a></h5>
                                                <span>WEBMASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/dipesh88"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/dipesh-singla-5b92601a9"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-3762-1228"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Dipesh Singla</a></h5>
                                                <span>EDITORIAL HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Ashuthetosh"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/ashuthetosh"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-0998-3467"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Ashutosh Thakur</a></h5>
                                                <span>DESIGN HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/02.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Akash82228"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/akash-sharma-0619461b8"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-5879-7353"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Akash Sharma</a></h5>
                                                <span>APP MASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/02.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Taruna06"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/taruna-saini-3a6497202/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-1327-9835"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Taruna Saini</a></h5>
                                                <span>EXECUTIVE MEMBER HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/devashish-gupta09"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/devashish-gupta-066a16200/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0001-5288-6577"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Devashish Gupta</a></h5>
                                                <span>EXTERNAL PR HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/KARAN-23"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/karan-singh-b7466317a/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0003-0271-1845"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Karan Singh</a></h5>
                                                <span>SOCIAL MEDIA MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat2">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/Manraj-Mann"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/manraj-singh-5a4418209"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://orcid.org/0000-0002-3077-490X"><i class="fab fa-orcid"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Manraj Singh</a></h5>
                                                <span>EVENT MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/anshulg954"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/anshulg954/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Anshul Gupta</a></h5>
                                                <span>CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO18325"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/inderpreet-singh-a32816169/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Inderpreet Singh</a></h5>
                                                <span>VICE CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/udaykumarjangra"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/udaykumarjangra/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Uday Kumar</a></h5>
                                                <span>SECRETARY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/muskaan712"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/muskaanchopra712"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Muskaan Chopra</a></h5>
                                                <span>MEMBERSHIP CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/kri14"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/kriti-aggarwal-b372721a2/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Kriti Aggarwal</a></h5>
                                                <span>TREASURER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/aayushi1499"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/aayushi14/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Aayushi Bansal</a></h5>
                                                <span>WEBMASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/co18332"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/maninder-singh-8a62a21b6/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Maninder Singh</a></h5>
                                                <span>DESIGN HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com//MkshSahani"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/mukesh-sahani-27297318b"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Mukesh Sahani</a></h5>
                                                <span>EXECUTIVE MEMBER HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO18353"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/tanveer-singh-kochhar-81393518b/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Tanveer Singh</a></h5>
                                                <span>EXTERNAL PR HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/02.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO18347"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/shriya-verma/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Shriya Verma</a></h5>
                                                <span>EDITORIAL HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat3">
                                    <div class="team-item">
                                        <img src="assets/img/team/02.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO18350"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/sonam-garg-4b4a0619a/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Sonam Garg</a></h5>
                                                <span>EVENT MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/ritika99"><i class="fab fa-github"></i></a>
                                            <a href="http://linkedin.com/in/ritika-dhiman-3a6405160"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Ritika Dhiman</a></h5>
                                                <span>CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/c017344"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/paritoshsinghrahar/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Paritosh Singh</a></h5>
                                                <span>VICE CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/ABasral"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/ayush-basral-6a1b15147"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Ayush Basral</a></h5>
                                                <span>SECRETARY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/tushar50502"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/tushar-ab7a341b4/"><i class="fab fa-linkedin"></i></a>
                                            
                                        </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Tushar</a></h5>
                                                <span>MEMBERSHIP CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO17339"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/nandini-sidana-76b769185/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Nandini Sidana</a></h5>
                                                <span>TREASURER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/tanishqchamola"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/tanishq-chamola-503702165/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Tanishq Chamola</a></h5>
                                                <span>WEBMASTER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/CO17341-Neha"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/neha-garg-0901"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Neha</a></h5>
                                                <span>EXTERNAL PR MANAGER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/keshav1245"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/keshav-t-7ab782104/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Keshav Tangri</a></h5>
                                                <span>DESIGN HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat4">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/co17301"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/aarushi-sood-b2b11b154/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Aarushi Sood</a></h5>
                                                <span>EXECUTIVE HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/saksham-gupta-connect/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Saksham Singh</a></h5>
                                                <span>CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/vivsvaan/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Vivsvann Sharma</a></h5>
                                                <span>VICE CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/namratasaun/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Namrata Saun</a></h5>
                                                <span>SECRETARY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://github.com/c017344"><i class="fab fa-github"></i></a>
                                            <a href="https://www.linkedin.com/in/paritosh-singh-rahar/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Paritosh Singh</a></h5>
                                                <span>MEMBERSHIP CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/ash-siby/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Ashlin Siby</a></h5>
                                                <span>TREASURER</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/paras-sharma-364428171/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Paras Sharma</a></h5>
                                                <span>WEB CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/kvgarg/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Keshav Garg</a></h5>
                                                <span>CO-WEB CHAIRPERSON</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/sharmarajdaksh/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Dakshraj Sharma</a></h5>
                                                <span>DESIGNING HEAD</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-3 filter-item cat5">
                                    <div class="team-item">
                                        <img src="assets/img/team/01.jpg" alt="thumb">
                                        <div class="team-social">
                                            <a href="https://www.linkedin.com/in/sidak-singh-aulakh-a21341161/"><i class="fab fa-linkedin"></i></a>
                                            </div>
                                        <div class="team-content">
                                            <div class="team-bio">
                                                <h5><a href="#">Sidak Singh</a></h5>
                                                <span>CURATOR</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 -->

                    
<!---------------------------------------------------------->


                    <!------------------------TEAM END------------------------->
                    <!--</div> -->
                </div>

    </main>



 

    


    <!---------------------------------------------------------FOOTER START ---------------------------------------------------------------->

    <footer class="footer-area">
            <div class="footer-widget">
                <div class="container">
                    <div class="row footer-widget-wrapper pt-100 pb-70">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-widget-box about-us">
                                <a href="#" class="footer-logo">
                                    <img src="assets/img/logo/ACM Logo Black.svg    " alt="">
                                </a>
                                <p class="mb-20">
                                    ACM boosts up the potential and talent, supporting the overall development needs of
                                    our students to facilitate a structured path from education to employment by
                                    providing a safe and supported space where creative talent and imagination can
                                    flourish in a caring environment.
                                </p>
                                <div class="footer-contact">
                                    <ul>
                                        <li><i class="far fa-map-marker-alt"></i>CCET, SECTOR-26, CHANDIGARH</li>
                                        
                                    </ul>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="https://www.facebook.com/acmwccet"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/acmwccet"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/acmccet"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCdqrwqNB9ibYjFpBkMA-4iQ"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="mailto:acm@ccet.ac.in"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="http://linkedin.com/in/ccet-acm-w-843729228"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Explore</h4>
                                <ul class="footer-list">
                                    <li><a href="about.html"><i class="fas fa-caret-right"></i> About </a></li>
                                    <li><a href="index.html"><i class="fas fa-caret-right"></i> Home</a></li>
                                    <li><a href="team.html"><i class="fas fa-caret-right"></i> Team</a></li>
                                    <li><a href="achievements.html"><i class="fas fa-caret-right"></i> Achievments</a>
                                    </li>
                                    <li><a href="acm-w.html"><i class="fas fa-caret-right"></i> ACM-W</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-widget-box list">
                                <h4 class="footer-widget-title">Contact Us</h4>
                                <div class="footer-newsletter">
                                    <p>Chandigarh College of Engineering and Technology Degree Wing Sector - 26, Chandigarh
                                        Website: <a style="color: white;" href="https://www.ccet.ac.in/">www.ccet.ac.in</a></p>
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                            <button class="theme-btn" type="submit">
                                                Subscribe Now <i class="far fa-paper-plane"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <p class="copyright-text">
                                &copy; Copyright <span id="date"></span> Copyright © 2021 All rights reserved | <br> Designed and Developed by <a href="#">CCET ACM Website Team</a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>

    <!---------------------------------------------------------FOOTER END---------------------------------------------------------------->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <!-- <script>
        var x;
        var q = document.getElementsByClassName("cat1");
        var y = document.getElementsByClassName("cat2");
        var z = document.getElementsByClassName("cat3");
        var u = document.getElementsByClassName("cat4");
        // var b = document.getElementsByClassName(" web-img");
        // alert(x[3].getAttribute("data-qq"));
        i = 0;
        alert(a[0].getAttribute("data-filter"));

        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            document.getElementById("nav-buttons").style.display = "block";
            for (let j = 0; j < x.length; j++) {
                if (element.src.localeCompare(x[j].src) == 0) {
                    i = j;
                    break;
                }
            }
        }


        function onClick_(element) {

            var a = document.getElementsByClassName("active filter");
            var filter_class = a[0].getAttribute("data-filter");
            if (filter_class == "cat1") {
                x = q;
            } else if (filter_class == ".cat2") {
                x = y;
            } else if (filter_class == ".cat3") {
                x = z;
            } else if (filter_class == ".cat4") {
                x = u;
            } else if (filter_class == ".web") {
                x = b;
            }


            var add = element.getAttribute("data-abc");
            document.getElementById("img01").setAttribute("src", add);
            document.getElementById("modal01").style.display = "block";
            document.getElementById("nav-buttons").style.display = "block";

            for (let j = 0; j < x.length; j++) {
                // const path = require('path');
                // path1 = path.relative(x[j], add);
                // alert(path1);
                // alert(x[j].src);
                // alert(document.getElementById("img01").getAttribute("src"));
                var temp = document.getElementById("img01");
                // alert(temp.src);
                // alert(temp.src);
                // alert(temp.src == x[j].src);
                if (temp.src == x[j].src) {
                    i = j;
                    console.log(i);
                    // alert(i);
                    break;
                }
            }

        }

        function collapse(element) {
            // alert(a[0].getAttribute("data-filter"));
            element.style.display = 'none';
            document.getElementById("nav-buttons").style.display = "none";
        }



        function LEFT() {
            i--;
            i = i % x.length;
            document.getElementById("img01").src = x[i].src;
            document.getElementById("modal01").style.display = "block";
        }

        function RIGHT() {
            i++;
            i = i % x.length;
            // alert(i);
            document.getElementById("img01").src = x[i].src;
            document.getElementById("modal01").style.display = "block";
        }
    </script> -->


    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"69470d4c9fc41b98","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/mixitup.js"></script>

    <script src="js/script.js"></script>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {

            $(window).on("load", function () {
                if ($(".filter-box").children().length > 0) {
                    $(".filter-box").isotope({
                        itemSelector: ".filter-item",
                        masonry: { columnWidth: 1 },
                        filter: '.cat1',
                    });

                }
            });

        });

    </script>
</body>

<!-- Mirrored from live.themewild.com/techrun/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Oct 2022 19:11:45 GMT -->

</html>