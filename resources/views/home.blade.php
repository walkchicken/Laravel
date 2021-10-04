

@extends('layouts.appsssss')

@section('content')

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
     <!-- Masthead-->

        
<body id="page-top">

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{url('public')}}/frontend/img/Logo_dhktdn.png" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">CLUB MANAGER</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">DANANG ARCHITECTURE</p>
    </div>
</header>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
    </div>
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Introduce</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/music.png" alt="" />
                </div>
                 <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Music Club</p>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/futbal.png" alt="" />
                </div>
                <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Football Club</p>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5" >
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3" >
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/sv5.png" alt=""/>
                </div>
                <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Good Year Student Club</p>
            </div>
            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/heart.png" alt="" />
                </div>
                <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Hot Blood Club</p>
            </div>
            <!-- Portfolio Item 5-->
            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/kinang.png" alt="" />
                </div>
                <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Skills Club</p>
            </div>
            <!-- Portfolio Item 6-->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{url('public')}}/frontend/img/portfolio/datec.png" alt="" />
                </div>
                <p class="masthead-subheading font-weight-light mb-0" style="font-size: 30px ; text-align: center; font-weight: bold; padding-top: 20px" >Media And Events Club</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Music Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 2 or ru.role_id = 3";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td><?php 
                                        
                                            if($row["role_id"]== 2){
                                                echo 'Music Admin' ;
                                            };
                                            if($row["role_id"]== 3){
                                                echo 'Music Member' ;
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <!-- Portfolio Modal - Image-->
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">FootBall Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 4 or ru.role_id = 5";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td>
                                        <?php if($row["role_id"]== 4){
                                                echo 'Football Admin' ;
                                            };
                                            if($row["role_id"]== 5){
                                                echo 'Football Member' ;
                                            }
                                            ?>
                                        </td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Good Year Student Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 6 or ru.role_id = 7";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td><?php if($row["role_id"]== 6){
                                                echo 'SV5 Admin' ;
                                            };
                                            if($row["role_id"]== 7){
                                                echo 'SV5 Member' ;
                                            }
                                            ?></td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Hot Blood Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 8 or ru.role_id = 9";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td><?php if($row["role_id"]== 8){
                                                echo 'Hot Blood Admin' ;
                                            };
                                            if($row["role_id"]== 9){
                                                echo 'Hot Blood Member' ;
                                            }
                                            ?></td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Skills Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 10 or ru.role_id = 11";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td><?php if($row["role_id"]== 10){
                                                echo 'Skills Admin' ;
                                            };
                                            if($row["role_id"]== 11){
                                                echo 'Skills Member' ;
                                            }
                                            ?></td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            <div class="modal-body text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Media And Events Club</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <table>
                            <?php
                                    //kết nối csdl
                                    require('connect.php');
                                    //truy vấn csdl
                                    $sql = "select  us.id, us.name , us.email,ru.role_id from users us left join role_user ru on us.id = ru.user_id where ru.role_id = 12 or ru.role_id = 13";
                                    $result = mysqli_query($conn,$sql);
                                    ?>
                                    <!-- Portfolio Modal - Image-->
                                    <table>
                                        <tr style="color: red; font-weight: bolder;">
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Roles</td>
                                        <td>Email</td>
                                    </tr>
                                    <?php 
                                        while ($row = mysqli_fetch_assoc($result))
                                        { 
                                    ?>
                                    <td><?php echo $row["id"];?></td>
                                    <td><?php echo $row["name"];?></td>
                                    <td><?php if($row["role_id"]== 12){
                                                echo 'Datec Admin' ;
                                            };
                                            if($row["role_id"]== 13){
                                                echo 'Datec Member' ;
                                            }
                                            ?></td>
                                    <td><?php echo $row["email"];?></td>
                                    </tr>
                                    <?php 
                                    //đóng while
                                     }
                                    //đóng kết nối
                                     mysqli_close($conn);
                                    ?>
                                    <table >
                            </table>
                            <button class="btn btn-primary" data-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                Close Window
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">
                    98 Ngo The Vinh
                    <br />
                    Hai Chau, Da Nang
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                <p class="lead mb-0" style="margin-top: 25px">
                    Duong Cong Nhat
                    <br />
                </p>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">
                    Freelance is a free to use, MIT licensed Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small style="color: black">Copyright © Your Website 2020</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset('public')}}/frontend/mail/jqBootstrapValidation.js"></script>
<script src="{{asset('public')}}/frontend/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="{{asset('public')}}/frontend/js/scripts.js"></script>
</body>


@endsection
