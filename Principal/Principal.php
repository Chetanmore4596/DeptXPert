<!--DeptXpert start-->
<!--Project members
    1. Chetan More.
    2. Sahil Jadhav
    3. Shriyash todkari.
    4. Shubham Gaikwad-->
    <?php session_start();?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>DeptXPert</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
    
        <!-- Favicon -->
        <link rel = "icon" href = "DXP_New.png" type = "image/x-icon">
        
        <!-- Google Web Fonts -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    
    <body>
    <?php
        include("connection.php");
        
        $Email = $_SESSION['Email'];
        $sql="SELECT * FROM principal WHERE Email='$Email'";
        $result=mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        if(!isset($Email))
        {
            header("Location:principalogin.php");
        }
        if(isset($_SESSION['message']))
        {?>
            <script>
            swal({
                title: "Done!",
                text: "<?php echo $_SESSION['message'];?>",
                icon: "success",
                });
            </script>
        <?php
        }
        unset($_SESSION['message']);
        if(isset($_SESSION['error']))
        {?>
            <script>
            swal({
                title: "Oops!",
                text: "<?php echo $_SESSION['error'];?>",
                icon: "error",
                });
            </script>
        <?php }
            unset($_SESSION['error']);
        ?>
        <div>
            <script>
            document.addEventListener("contextmenu", function (e){
              e.preventDefault();
            }, false);
            </script>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->
    
    
            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="m-0" id="Up-on">DeptXpert</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="Principal.php" class="nav-item nav-link active">Home</a>
                            <a href="Student_Info/Studentdata.php" class="nav-item nav-link">Students</a>
                            <a href="Teacher_Info/Teacherdata.php" class="nav-item nav-link">Teachers</a>
                            <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">Hostel</a>
                                <div class="dropdown-menu m-0 show" data-bs-popper="none">
                                <a href="Hostel/Boys/Boys_Disp.php" class="dropdown-item">Boys</a>
                                <a href="Hostel/Girls/Girls_Disp.php" class="dropdown-item">Girls</a>
                                </div>
                            </div>
                            <a href="#About-on" class="nav-item nav-link">About</a>
                            <a href="#contact-on" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="prlogout.php"class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Logout</a>
                    </div>
                </nav>
    
                <div class="container-xxl bg-primary hero-header">
                    <div class="container px-lg-5">
                        <div class="row g-5 align-items-end">
                            <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">A Digtal Platform for college Students and Faculties</h1>
                                <p class="text-white pb-3 animated slideInDown">Hey There! This is CTRL+TECH Team, DeptXPert mainly focuses on improving student knowledge, building logic for coding e.t.c We also provide study materials for the computer engineering students so that they can manage their studies in a right and in an effective way.</p>
                                <a href="Prinregister.php" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Register</a>
                                <a  href="del.php?id=<?php echo $row['id']; ?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight" onclick="return confirm('Are You Sure <?php echo $row['UName']; ?> ?');">Delete Account</a>
                            </div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->
    
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <p class="section-title text-secondary">About CO-Dept<span></span></p>
                            <h1 class="mb-5">Computer Engineering Studetns Strength</h1>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Teachers</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Non-Teaching and Worker</p>
                                    <p class="mb-2">80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <p class="mb-2">Students</p>
                                    <p class="mb-2">90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
    
    
            <!-- Dept Start -->
            <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-award fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">4</h1>
                            <p class="text-white mb-0">HOD</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">40</h1>
                            <p class="text-white mb-0">Teaching Staf</p>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">30</h1>
                            <p class="text-white mb-0">Non-Teaching Staf and Workers</p>
                        </div>
                        <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-graduation-cap fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">550</h1>
                            <p class="text-white mb-0">Studetns</p>
                        </div>
                        <div class="col-md-6 col-lg-2 text-center wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-building fa-3x text-secondary mb-3"></i>
                            <h1 class="text-white mb-2" data-toggle="counter-up">624</h1>
                            <p class="text-white mb-0">SPC Strength</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dept End -->
    
            <!-- Feature Start -->
            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-users text-primary mb-4"></i>
                                <h5 class="mb-3">Students</h5>
                                <a href="Student_Info/Studentdata.php">Click here go to Students Data.</a>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-award text-primary mb-4"></i>
                                <h5 class="mb-3">Teachers</h5>
                                <a href="Teacher_Info/Teacherdata.php">Click here go to Teachers Data.</a>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                                <h5 class="mb-3">Register</h5>
                                <a href="Prinregister.php">Click here go to Register.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            <!-- Team Start -->
            <div class="container-xxl py-5" id="About-on">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                        <h1 class="text-center mb-5">Our Team Members</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="Team\Frontend.jpeg" alt="">
                                    <h5>Sahil Jadhav</h5>
                                    <span>Frontend Devloper</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="Team\Designer.jpeg" alt="">
                                    <h5>Chetan More</h5>
                                    <span>Web Designer</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="Team\Tester.jpeg" alt="">
                                    <h5>Shriyash Todkari</h5>
                                    <span>Web Tester</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item bg-light rounded">
                                <div class="text-center border-bottom p-4">
                                    <img class="img-fluid rounded-circle mb-4" src="Team\Backend.jpeg" alt="">
                                    <h5>Shubham Gaikwad</h5>
                                    <span>Backend Devloper</span>
                                </div>
                                <div class="d-flex justify-content-center p-4">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->
            
             <!-- Footer Start -->
             <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Address<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>SPCSangola, Tal: Sangola Dist: Solapur</p>
                            <p><i class="fa fa-phone-alt me-3"></i>Contact </p>
                            <p><i class="fa fa-envelope me-3"></i>deptxpert2024@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" id="contact-on">
                            <p class="section-title text-white h5 mb-4">Contact<span></span></p>
                            <div class="row g-2">
                            <ul>Chetan More: 8432045124</ul>
                            <ul>Sahil Jadhav: 8862076916</ul>
                            <ul>Shriyash Todkari: 9307574147</ul>
                            <ul>Shubham Gaikwad: 9699490306</ul>
                            </div>
                        </div>
                            <div class="col-md-6 col-lg-4">
                            <p class="section-title text-white h5 mb-4">Stay Always In Touch<span></span></p>
                                <form action="Feedback.php" method="post">
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                    </div>
                                    <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-md-6 text-center">
                                    <button type="submit" class="btn btn-primary" style="background-color: #FBA504;color:black;">Send Message</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="Student.php">DeptXpert</a>, All Right Reserved. 
                                
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="Student.php">CTRL+TECH</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="Student.php">Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    
        </div>
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        </div>
    </body>
    
    </html>