<?php include('inc/header.php'); ?>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<section class="bread-crumb bg-bread">
    <div class="container">
        <h3 class="bread-crumb-title text-center">Detail Page</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="listing.php">Listing</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>
</section>

<!-------------------------
--------Bread-Crumb----------
-------------------------->
<!-------------------------
--------Detail-Main----------
-------------------------->

<section class="detail-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- ROw .// -->
            <div class="col-lg-8"> <!-- Col .// -->
                <div class="card1">

                    <div class="all-common-padding">
                        <!--MAIN-IMAGE-DISPLAY-->
                        <div class="detail-main-photos u-margin-bottom-medium fotorama" data-nav="thumbs" data-thumbwidth="150px" data-width="100%" data-fit="cover" data-ratio="16/9" data-allowfullscreen="true">
                            <img src="images/lisiting4.jpg" alt="">
                            <img src="images/listing1.jpg" alt="">
                            <img src="images/listing2.jpg" alt="">
                            <img src="images/feature3.jpg" alt="">
                        </div><!--MAIN-IMAGE-DISPLAY (END)-->
                    </div>
                    
                    <!--detail-main-info-wrap -->

                    <div class="detail-main-info-wrap all-common-padding no-top">
                        <div class="all-common-padding u-margin-bottom-mini banner-wrap">
                            <div class="clearfix banner-top">
                                <h5 class="color-white float-left">Apartment for Sale at Nayapati, Kathmandu</h5>
                                <span class="color-white float-right">Rent: NPR 10,000/ month</span>
                            </div>
                            <div class="clearfix banner-bottom">
                                <p class="color-white float-left"><i class="fas fa-map-marker-alt"></i> NayaPati, Gokarneshwor Municipality-5, Kathmandu, Nepal</p>
                                <span class="color-white float-right">3000 Sq Feet.</span>
                            </div>
                        </div>

                        <div class="clearfix u-margin-bottom-mini">
                        <p class="normal-content color-theme float-right property-id">* Property ID: <span>10686</span></p>
                        </div>

                        <p class="detail-quote u-margin-bottom-mini">Introducing single apartment, the stunning new addition to the Baneshwor Height. A perfect blend of breathtaking architecture designed, with awe-inspiring interiors envisioned.</p>

                        <h5 class="mini-title">Property Details -</h5>
                        <ul class="feature-list u-margin-bottom-small">
                            <li class="feature-item clearfix">Road Access: <span class="float-right">12 Feet</span></li>
                            <li class="feature-item clearfix">Parking Space: <span class="float-right">1 Car, 3 Bikes.</span></li>
                            <li class="feature-item clearfix">Exterior: <span class="float-right">Open Terrace with a beautiful view.</span></li>
                            <li class="feature-item clearfix">Interior: <span class="float-right">Modern design bulbs and finishing.</span></li>
                            <li class="feature-item clearfix">Facilities: <span class="float-right">24 hrs Electricity, Water, Solar heater, facilities available.</span></li>
                            <li class="feature-item clearfix">Room Category: <span class="float-right">1- Living room, 2- Bedrooms, 1- Kitchen and 1- Bathroom</span></li>
                            <li class="feature-item clearfix">Popular Places Nearby: <span class="float-right">USCEF Office (2 km), City Center (2.5 km)</span></li>
                        </ul>

                        <h5 class="mini-title">Property Description -</h5>

                        <p class="normal-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, voluptatibus. Placeat officia molestiae voluptatibus mollitia alias atque delectus necessitatibus assumenda totam dolorum natus, aliquam soluta quaerat obcaecati eius! Odio, magnam explicabo. Debitis incidunt fuga voluptas.</p>
                        <p class="normal-content u-margin-bottom-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere adipisci qui eveniet alias asperiores quia, nobis sed aperiam architecto maiores odio sunt explicabo magnam delectus repudiandae nihil non dolore possimus. Sunt odit minus tempore commodi asperiores suscipit tenetur eveniet ipsum minima repellat maxime voluptas culpa quisquam aut, autem eligendi provident temporibus. Assumenda, beatae minus! Similique.</p>

                        <h5 class="mini-title">Location -</h5>
                        <div class="location-map-wrap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.262465886354!2d85.33027130306677!3d27.709181407720724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190b048951ff%3A0x38027a9337eec409!2sgyaneshwor+mills!5e0!3m2!1sen!2snp!4v1554186268985!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>

                    <!--detail-main-info-wrap (END)-->
                
                </div>
            </div> <!-- Col .// -->
            <div class="col-lg-4"> <!-- Col .// -->
                <div class="card1"> <!-- Card .// --->
                    <h4 class="banner-title text-center">Book this Property</h4>

                    <div class="all-common-padding">
                        <form action="booking" class="booking-form">
                            <!-- <label for="name">Full Name</label> -->
                            <input type="text" placeholder="Full Name *" name="name">

                            <!-- <label for="number">Phone Number</label> -->
                            <input type="text" placeholder="Telephone Number" name="t-number">

                            <!-- <label for="number">Phone Number</label> -->
                            <input type="text" placeholder="Mobile Number *" name="m-number">

                            <!-- <label for="email">E-mail Address</label> -->
                            <input type="text" placeholder="E-mail Address" name="email">

                            <!-- <label for="family">Family Member</label> -->
                            <select name="family" id="family">
                                <option value="no-family">--Family-Member-- *</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <!-- <label for="family">Family Member</label> -->
                            <select name="elder" id="elder">
                                <option value="no-elder">--Senior-Member--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <!-- <label for="children">Children</label> -->
                            <select name="children" id="children">
                                <option value="no-children">--Children--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <!-- <label for="message">Your Message</label> -->
                            <textarea name="message" id="message" placeholder="Your Message..."></textarea>

                            <button class="btn-green">Book Now !</button>
                        </form>
                    </div>
                </div> <!-- Card .// --->


                <div class="square-banner-wrap"> <!-- Advertisement .//--->
                    <div class="square-banner1">
                        <a href="#">
                            <img src="https://via.placeholder.com/350" alt="">
                        </a>
                    </div>

                    <div class="square-banner1">
                        <a href="#">
                            <img src="https://via.placeholder.com/350" alt="">
                        </a>
                    </div>
                </div> <!-- Advertisement .//--->

            </div> <!-- Col .// -->
        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<!-------------------------
--------Detail-Main----------
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
--------Related-Properties----------
-------------------------->

<section class="related-properties common-padding">
    <div class="container">
      <div class="relative mb-mini">
        <h1 class="title title-block">Similar Properties</h1>
        <span class="title-underline"></span>
      </div>
        <div id="owl-3">
            <div class="owl-carousel" id="owl-carousel">
                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>
                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Single Room for	Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>

                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>

                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">New Office Space</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>29500.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>

                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Residental Bunglow</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>271000.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>
                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Fully furnished Apparment</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>54,50.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                  
                </div>
                <div class="item">
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
                        <h5 class="card1-title"><a href="listing.php">Single Room for Students</a></h5>
                        <p class="card1-address"><i class="fas fa-map-marker-alt"></i>New Baneshwor, Kathmandu</p>
                        <div class="card-special-features clearfix">
                            <p class="float-left"><i class="fas fa-warehouse"></i>800 sq.ft</p>
                            <ul class="float-right">
                                <li><i class="fas fa-bed"></i>3</li>
                                <li><i class="fas fa-toilet"></i>3</li>
                            </ul>
                        </div>
                        <p class="card-price text-center">NRS. <span>3650.00</span> /Month</p>
                    </div>
                </div>
                <!-- card ends -->
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-------------------------
--------Related-Properties----------
-------------------------->

<!-- <div class="extra-space"></div> -->

<?php include('inc/footer.php'); ?>