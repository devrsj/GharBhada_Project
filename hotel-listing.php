<?php include('inc/header.php'); ?>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<section class="bread-crumb bg-bread">
    <div class="container">
        <h3 class="bread-crumb-title text-center">Hotel Listing</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Listing</li>
            </ol>
        </nav>
    </div>
</section>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<!-------------------------
--------ad-section----------
-------------------------->

<section class="banner-section bg-grey">
    <div class="container-fluid">
        <div class="row less-gutter">
            <div class="col-md-9">
                <div class="banner-wrapper-30">
                    <a href="#">
                        <img src="images/banner-1.jpg" alt="">
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
--------Listing-Main----------
-------------------------->

<section class="listing-main common-padding bg-grey">
    <div class="container-fluid">
        <div class="row"> <!-- ROW -->
            <div class="col-lg-3"> <!-- COL -->

                <!------- ASIDE ---------------->
    
                <div class="card u-margin-bottom-mini">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title text-center"><strong>Advanced Filter</strong></h6>
		</header>
		<div class="filter-content">
		<form action="#" class="filter-form">
		<div class="card-body"> <!-- Card Body -->
		<h5 class="filter-title">General :</h5>
					<input type="text" placeholder="Keyword" name="search-keyword">

					<select name="location" id="location">
						<option value="location">Property Location</option>
						<option value="baneshwor">Baneshwor</option>
						<option value="tinkune">Tinkune</option>
						<option value="gyaneshwor">Gyaneshwor</option>
						<option value="kalanki">Kalanki</option>
						<option value="dallu">Dallu</option>
						<option value="kalimati">Kalimati</option>
						<option value="kupandol">Kupandol</option>
						<option value="out-of-valley">Out of Valley</option>
					</select>

					<select name="type" id="type">
						<option value="type">Property Type</option>
						<option value="cooperative">Co-operative</option>
						<option value="condominium">Condominium</option>
						<option value="house">House</option>
						<option value="commercial">Commercial</option>
						<option value="town-house">Town House</option>
					</select>

					<select name="room" id="room">
						<option value="total-room">Total Rooms</option>
						<option value="two">Atleast 2</option>
						<option value="three">Atleast 3</option>
						<option value="four">Atleast 4</option>
						<option value="five">Atleast 5</option>
						<option value="six">Atleast 6</option>
						<option value="more">More...</option>
					</select>

					<select name="bedroom" id="bedroom">
						<option value="total-bedroom">Total Bedrooms</option>
						<option value="two">Atleast 2</option>
						<option value="three">Atleast 3</option>
						<option value="four">Atleast 4</option>
						<option value="five">Atleast 5</option>
						<option value="six">Atleast 6</option>
						<option value="more">More...</option>
					</select>

					<select name="bathroom" id="bathroom">
						<option value="total-bathroom">Total Bathroom</option>
						<option value="two">Atleast 2</option>
						<option value="three">Atleast 3</option>
						<option value="four">Atleast 4</option>
						<option value="five">Atleast 5</option>
						<option value="six">Atleast 6</option>
						<option value="more">More...</option>
					</select>

					<select name="parking" id="parking">
						<option value="parking">Parking</option>
						<option value="one">1 Car, 2 Bikes</option>
						<option value="one-one">1 Car, 3 Bikes</option>
						<option value="two">2 Cars, 1 Bike</option>
						<option value="two-one">2 Cars, 2 Bikes</option>
						<option value="three">3 Cars, 2 Bikes</option>
						<option value="three-one">3 Cars, 3 Bikes</option>
					</select>

				</form>
		</div> <!-- Card Body -->

		<div class="filter-price card-body no-top"> <!-- Card Body -->
			<h5 class="filter-title u-margin-bottom-mini">By Budget :</h5>
				<label for="filter-price-start">From :</label>
				<input type="text" class="filter-price-start" placeholder="0">
				<label for="filter-price-end"> to </label>
				<input type="text" class="filter-price-end" placeholder="100000">
		</div> <!-- Card Body -->

			<div class="card-body no-top"> <!-- card-body -->
				<h5 class="filter-title">Facilities :</h5>
        <label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
						Attended Lobby <span class="float-right badge badge-light round">3</span>
				  </span>
				</label> <!-- form-check.// -->
        <label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    GYM <span class="float-right badge badge-light round">7</span>
				  </span>
				</label> <!-- form-check.// -->
        <label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Outdoor Space <span class="float-right badge badge-light round">9</span>
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Pet Friendly <span class="float-right badge badge-light round">4</span>
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Swimming Pool <span class="float-right badge badge-light round">2</span>
				  </span>
				</label>  <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Parking <span class="float-right badge badge-light round">10</span>
				  </span>
				</label>  <!-- form-check.// -->
        <label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				    Heater <span class="float-right badge badge-light round">16</span>
				  </span>
				</label> <!-- form-check.// -->

			</div> <!-- card-body.// -->

			<div class="card-body no-top"> <!-- card-body -->
				<h5 class="filter-title">Property Status :</h5>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    For Sale <span class="float-right badge badge-light round">78</span>
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			    For Rent <span class="float-right badge badge-light round">55</span>
			  </span>
			</label>
			</div> <!-- card-body.// -->

			<div class="card-body no-top">
				<button class="btn-green">Filter</button>
			</div>
		</form>
		</div>
		</article> <!-- card-group-item.// -->
		
		</div>

		<div class="card">

    <article class="card-group-item">
		<header class="card-header"><h6 class="title">Similar category </h6></header>
		<div class="filter-content">
			<div class="list-group list-group-flush">
			  <a href="new-page.php" class="list-group-item">House <span class="float-right badge badge-light round">142</span> </a>
			  <a href="upcomming.php" class="list-group-item">Flat  <span class="float-right badge badge-light round">83</span>  </a>
			  <a href="latest.php" class="list-group-item">Shutter <span class="float-right badge badge-light round">32</span>  </a>
			</div>  <!-- list-group .// -->
		</div>
    </article> <!-- card-group-item.// -->
    
    <article class="card-group-item">
		<header class="card-header"><h6 class="title">Special Offer on: </h6></header>
		<div class="filter-content">
	<!---------------------------------------->
    <!---------------Side-Special-Offer---------------->
    <!---------------------------------------->
    
    <aside class="new-special-offer news-latest">
      <div class="main-content-wrapper">
        <!-- <h3 class="about-main color-theme strong">Special Offer on:</h3> -->
        <div class="new-special-slider">
          <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="hotel-detail.php">
                  <img class="d-block w-100" src="images/lisiting4.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Penthouse Appartment</h5>
                      <p><del>Rs.4 Lakh</del><span>Rs.3.6 Lakh</span></p>
                    </div>
                  </a>
              </div>
              <div class="carousel-item">
                <a href="hotel-detail.php">
                  <img class="d-block w-100" src="images/listing1.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Condominium Appartment</h5>
                    <p><del>Rs.12,500</del><span>Rs.11,000/-</span></p>
                  </div>
                </a>
              </div>
              <div class="carousel-item">
                <a href="hotel-detail.php">
                  <img class="d-block w-100" src="images/listing2.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Studio Appartment</h5>
                    <p><del>Rs.7,000</del><span>Rs.4,999/-</span></p>
                  </div>
                </a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </aside>

    <!---------------------------------------->
    <!---------------Side-Special-Offer---------------->
    <!---------------------------------------->
		</div>
</article>

		</div>
                <!------- ASIDE ---------------->

            </div> <!-- COL -->
            <div class="col-lg-9"> <!-- COL -->

							<div class="row"> <!-- Inner Row -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/listing1.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/feature3.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/lisiting4.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/feature2.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/bread.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/listing1.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/feature1.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/feature3.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/listing4.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/slider1.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/slider2.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->

									<div class="col-lg-4 col-sm-6 col-xs-12"> <!-- Inner-Col -->

										<!-- card second starts -->
										<div class="card1 card2">
											<a href="hotel-detail.php">
												<div class="card1-img-wrap card2-img-wrap">
														<img src="images/bread.jpg" alt="" class="img-fluid">
														<div class="card-hover">
															<i class="fas fa-link"></i>
														</div>
												</div>
												</a>
												<div class="card1-detail">
														<h5 class="card1-title"><a href="hotel-detail.php">Fully furnished Apparment</a></h5>
														<p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
														<div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>850 sq.ft.</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
														<p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
												</div>
										</div>
										<!-- card ends -->
									
									</div> <!-- Inner-Col -->
							</div> <!-- Inner Row -->

							<div class="news-pagination u-margin-top-mini"> <!-- // Pagination--->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div> <!-- // Pagination--->

            </div> <!-- COL -->
        </div> <!-- ROW -->
    </div>
</section>

<!-------------------------
--------Listing-Main----------
-------------------------->


<?php include('inc/footer.php'); ?>