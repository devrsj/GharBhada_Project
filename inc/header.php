<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Mukta:400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/owl-carousel.min.css"> 

    <link rel="stylesheet" href="css/v4-shims.css">

    <!--FOTORAMA----->
    <link rel="stylesheet" href="fotorama/fotorama.css">

    <link rel="stylesheet" href="css/custom.css">

    <title>Gharbhada - Find Rental Properties Online</title>

  </head>
  <body>

  <section class="scrolling-banner color-white">
    <marquee direction="left" scrollamount="10">Find & Rent Rooms, Flats, Apartments and Houses.</marquee>
  </section>

  <header>

    <div class="top-new-header bg-grey"> <!--TOP-Header-->
      <div class="container clearfix">
          <div class="header-support-wrap float-left">
            <div class="nepal-flag-wrap">
              <img src="images/nepal-flag.png" alt="">

              <div class="date-time-wrap float-left">
                <?php echo date("Y/m/d") . ' ' . date("h:i:sa") ; ?>
              </div>

              <div class="header-calender-wrap float-left">
                <i class="fas fa-calendar-alt"></i>

                <div class="header-calender">
                <aside class="blog-side"> <!-- Card -->
                        <!-- <h4 class="banner-title text-center">Calender</h4> -->
                        <div class="clearfix">
                        <div class="calender-widget">
                            <div class="curr-month"><b>february</b></div>
                                <div class="all-days">
                                    <ul>
                                        <li>sun</li>
                                        <li>mon</li>
                                        <li>tue</li>
                                        <li>wed</li>
                                        <li>thu</li>
                                        <li>fri</li>
                                        <li>sat</li>
                                    </ul>
                                </div>
                                <div class="all-date">
                                    <ul>
                                    </ul>
                                </div>
                        </div>
                        </div>
                    </aside> <!-- Card -->
              </div>
              </div>

            </div>
          </div>

          <div class="header-login-wrap float-right">
            <a href="register.php"><i class="fas fa-lock"></i> Login / Register</a>
          </div>
      </div>
    </div> <!--TOP-Header-->

    <nav class="navbar navbar-expand-lg">
      
      <div class="container">

    <a class="navbar-brand" href="index.php">
      <img src="images/logo-placeholder.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Residence</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="listing.php">Home</a>
            <a class="dropdown-item" href="listing.php">Apartment</a>
            <a class="dropdown-item" href="listing.php">Flat</a>
            <a class="dropdown-item" href="listing.php">Room</a>
            <a class="dropdown-item" href="listing.php">Others</a>
          </div>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Office</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="business-listing.php">Home</a>
            <a class="dropdown-item" href="business-listing.php">Flat</a>
            <a class="dropdown-item" href="business-listing.php">Space</a>
            <a class="dropdown-item" href="business-listing.php">Others</a>
          </div>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Home-Stay</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="hotel-listing.php">Room</a>
            <a class="dropdown-item" href="hotel-listing.php">Paying Guest</a>
          </div>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Hotel</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="hotel-listing.php">Star</a>
            <a class="dropdown-item" href="hotel-listing.php">Non-Star</a>
          </div>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Business</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="business-listing.php">Mall</a>
            <a class="dropdown-item" href="business-listing.php">House</a>
            <a class="dropdown-item" href="business-listing.php">Shutter</a>
            <a class="dropdown-item" href="business-listing.php">Storehouse</a>
            <a class="dropdown-item" href="business-listing.php">Space</a>
          </div>

        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#">Others</a>

          <!-- Dropdown -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="land-listing.php">Land</a>
            <a class="dropdown-item" href="land-listing.php">Trust</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="land-listing.php">Factory</a>
            <!-- <div class="dropdown-divider"></div> -->
            <a class="dropdown-item" href="land-listing.php">Machine</a>
          </div>

        </li> 
        <li class="nav-item">
          <a  href="sell.php" class="nav-link btn-upload" >Upload Property</a>
        </li> 
      </ul>
    </div>
    </div>
  </nav>

</header>









