<?php include 'inc/header.php'?>

<!-------------------------
--------Hero-Main----------
-------------------------->

<section class="hero-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol> -->

        <div class="hero-content-wrapper">
            <h1>Renting Your Property?</h1>
            <p>List it at Nepal's No. 1 Rental Portal</p>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/slider-new-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/slider-new-2.jpg" alt="Second slide">
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
</section>

<!-------------------------
--------Hero-Main----------
-------------------------->

<!-------------------------
--------Hero-Form----------
-------------------------->

<section class="hero-form">
  <div class="container">
      <div class="search-box-wrap">
      <form>
          <div class="form-row align-items-center">
          <div class=" col-md-5 col-sm-6">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="fontAwesome input-group-text" id="basic-addon1">&#xf3c5;</span>
                </div>
                <input type="text" class="form-control" name="emailAddress" placeholder="Enter Location" value="">
              </div>
            </div>
            
            <div class=" col-md-5 col-sm-6">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
              <div class="input-group mb-2">

              <select name="" id="ok" class="form-control" id="inlineFormInputGroup" placeholder="&#xf1ad;">

              <option value="">Please select property Type</option>
              <option value="">Rooms</option>
              <option value="">House</option>
              <option value="">Appartments</option>
              <option value="">Flats</option>
              <option value="">Office Space</option>
              


              </select>
            
              </div>
            </div>
            
            <div class="col-md-2 col-sm-12 search-btn">
              <button type="submit" class="btn btn-success mb-2 btn-block">Search</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</section>

<!-------------------------
--------Hero-Form----------
-------------------------->


<!-------------------------
--------index-1st-slider----------
-------------------------->

<section id="newproperties" class="new-properties common-padding">
  <div class="container">
      <div class="relative mb-mini">
        <h1 class="title title-block">New Properties</h1>
        <span class="title-underline"></span>
      </div>
        <div id="owl-2">
            <div class="owl-carousel" id="owl-carousel">
                <div class="item">
                    <a href="detail.php">
                        <div class="new-properties-wrap">
                            <img src="images/properties/pro1.jpg" alt="">
                            <div class="new-property-content clearfix">
                                <p class="p1 float-left">3-BHK</p>
                                <p class="p2 float-right"><i class="fas fa-map-marker-alt"></i>New Baneshwor</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.php">
                        <div class="new-properties-wrap">
                            <img src="images/properties/pro2.jpg" alt="">
                            <div class="new-property-content clearfix">
                                <p class="p1 float-left">4-BHK</p>
                                <p class="p2 float-right"><i class="fas fa-map-marker-alt"></i>Gyaneshwor</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.php">
                        <div class="new-properties-wrap">
                            <img src="images/properties/pro3.jpg" alt="">
                            <div class="new-property-content clearfix">
                                <p class="p1 float-left">2-BHK</p>
                                <p class="p2 float-right"><i class="fas fa-map-marker-alt"></i>Tinkune</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.php">
                        <div class="new-properties-wrap">
                            <img src="images/properties/pro4.jpg" alt="">
                            <div class="new-property-content clearfix">
                                <p class="p1 float-left">3-BHK</p>
                                <p class="p2 float-right"><i class="fas fa-map-marker-alt"></i>Kalanki</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="detail.php">
                        <div class="new-properties-wrap">
                            <img src="images/properties/pro5.jpg" alt="">
                            <div class="new-property-content clearfix">
                                <p class="p1 float-left">3-BHK</p>
                                <p class="p2 float-right"><i class="fas fa-map-marker-alt"></i>Hattiban</p>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-------------------------
--------index-1st-slider----------
-------------------------->


<!-------------------------
--------Featured----------
-------------------------->

<section class="index-featured common-padding bg-grey">
  <div class="container">
    <!-- <h2 class="title">FEATURED PROPERTIES</h2> -->

    <div class="relative mb-mini">
        <h1 class="title title-block bg-grey">FEATURED PROPERTIES</h1>
        <span class="title-underline"></span>
      </div>

    <div id="owl-4">
        <div class="owl-carousel" id="owl-carousel">

            <div class="item">
                <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature1.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">APPARTMENT</p>
                        <div class="overlay-price">NRS. 21,850.00 / Month</div>
                            <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">3BH Appartment with AC</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div> 

            <div class="item">
                 <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature2.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">HOUSE</p>
                        <div class="overlay-price">NRS. 6,0000.00 / Month</div>
                        <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully Furnished House with parking </a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>Budhanilkantha, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div> 

            <div class="item">
                <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature3.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">ROOM</p>
                        <div class="overlay-price">NRS. 14,500.00 / Month</div>
                        <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">3 Room with kitchen</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>Sankhamul,kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div> 

            <div class="item">
                <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature1.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">APPARTMENT</p>
                        <div class="overlay-price">NRS. 21,850.00 / Month</div>
                        <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">3BH Appartment with AC</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div>

            <div class="item">
                 <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature2.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">HOUSE</p>
                        <div class="overlay-price">NRS. 6,0000.00 / Month</div>
                        <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully Furnished House with parking </a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>Budhanilkantha, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div> 

            <div class="item">
                <!-- card second starts -->
                <div class="card1">
                    <a href="detail.php">
                    <div class="card1-img-wrap">
                        <img src="images/feature3.jpg" alt="" class="img-fluid">
                        <p class="overlay-tag">ROOM</p>
                        <div class="overlay-price">NRS. 14,500.00 / Month</div>
                        <div class="card-hover">
                                <i class="fas fa-link"></i>
                            </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">3 Room with kitchen</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>Sankhamul,kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- card ends -->
            </div> 

        </div>
    </div>

  </div>
</section>

<!-------------------------
--------Featured----------
-------------------------->

<!-------------------------
--------ad-section----------
-------------------------->

<section class="banner-section bg-grey">
    <div class="container">
        <div class="row less-gutter">
            <div class="col-md-9">
                <div class="banner-wrapper-30">
                    <a href="#">
                        <img src="images/banner-1.gif" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="banner-wrapper-30">
                    <a href="#">
                        <img src="images/banner-2.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------
--------ad-section----------
-------------------------->

<!-------------------------
--------Property-Listing----------
-------------------------->

<section class="property-listing common-padding bg-grey">
    <div class="container">
        <!-- <h2 class="title">Property Listings</h2> -->

        <nav class="new-underline clearfix">
            <h2 class="title float-left">Property Listings</h2>

            <div class="nav nav-tabs float-right" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All</a>
                <a class="nav-item nav-link" id="nav-house-tab" data-toggle="tab" href="#nav-house" role="tab" aria-controls="nav-house" aria-selected="false">Houses</a>
                <a class="nav-item nav-link" id="nav-appartment-tab" data-toggle="tab" href="#nav-appartment" role="tab" aria-controls="nav-appartment" aria-selected="false">Appartment</a>
                <a class="nav-item nav-link" id="nav-office-tab" data-toggle="tab" href="#nav-office" role="tab" aria-controls="nav-office" aria-selected="false">Office Space</a>
                <a class="nav-item nav-link" id="nav-room-tab" data-toggle="tab" href="#nav-room" role="tab" aria-controls="nav-room" aria-selected="false">Rooms</a>
                <a class="nav-item nav-link" id="nav-flat-tab" data-toggle="tab" href="#nav-flat" role="tab" aria-controls="nav-flat" aria-selected="false">Flats</a>
            </div>
        </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->

            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
            <div class="tab-pane fade" id="nav-house" role="tabpanel" aria-labelledby="nav-house-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->

            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
            <div class="tab-pane fade" id="nav-appartment" role="tabpanel" aria-labelledby="nav-appartment-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->

            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
            <div class="tab-pane fade" id="nav-office" role="tabpanel" aria-labelledby="nav-office-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->

            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
            <div class="tab-pane fade" id="nav-room" role="tabpanel" aria-labelledby="nav-room-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing4.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
            <div class="tab-pane fade" id="nav-flat" role="tabpanel" aria-labelledby="nav-flat-tab"> <!-- TAB -->

            <div class="row less-gutter"> <!-- ROW -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing1.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->

            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing2.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
            <div class="col-lg-3 col-sm-6 col-xs-12"> <!-- col -->

                <!-- card second starts -->
                <div class="card1 card2">
                    <a href="detail.php">
                    <div class="card1-img-wrap card2-img-wrap">
                        <img src="images/listing3.jpg" alt="" class="img-fluid">
                        <div class="card-hover">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    </a>
                    <div class="card1-detail">
                        <h5 class="card1-title"><a href="detail.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
            
            </div> <!-- col -->
        </div> <!-- ROW -->

        <div class="section-btn-wrapper clearfix">
            <a href="listing.php" class="btn-green btn-secondary float-right">view all</a>
        </div>
            
            </div> <!-- TAB -->
        </div>
    </div>
</section>

<!-------------------------
--------Property-Listing----------
-------------------------->

<!-------------------------
--------index-location----------
-------------------------->

<section class="index-location">
    <div class="container clearfix">
        <h2 class="title float-left">Locations</h2>

        <ul class="location-list float-right">
            <li class="location-item">Kathmandu(<a href="location.php">8500+</a>)</li>
            <li class="location-item">Lalitpur(<a href="location.php">2800+</a>)</li>
            <li class="location-item">Bhaktapur(<a href="location.php">5480+</a>)</li>
            <li class="location-item">Pokhara(<a href="location.php">380+</a>)</li>
            <li class="location-item">A-Z(<a href="location.php#location-az">3800+ properties</a>)</li>
        </ul>
    </div>
</section>

<!-------------------------
--------index-location----------
-------------------------->

<!-------------------------
--------index-composition----------
-------------------------->

<section class="index-composition">
    <div class="flex-box-wrap">
        <div class="composition-left">
            <h4 class="composition-title color-white u-margin-bottom-small">About Mero Ghar Bhada</h4>
            <p class="normal-content color-white u-margin-bottom-small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium obcaecati doloremque, nihil ab illum pariatur sequi voluptatum recusandae, libero fugit cumque possimus itaque quis. Doloremque, necessitatibus</p>
            <a href="about.php" class="composition-btn color-white">more about us</a>
        </div>

        <div class="composition-center">
            <h4 class="composition-title color-white u-margin-bottom-small text-center">Need Help?</h4>
            <p class="normal-content color-white u-margin-bottom-small text-center">If you Need Assistance then  Dial on our hotline number given below.</p>
            <h4 class="composition-title color-white u-margin-bottom-small text-center underline-spacing">Hotline</h4>
            <h4 class="composition-title color-white text-center">+977-984125352</h4>
            <h4 class="composition-title color-white text-center">+977-01-4802515</h4>

        </div>
    
    </div>
</section>

<!-------------------------
--------index-composition----------
-------------------------->





<?php include 'inc/footer.php'?>
