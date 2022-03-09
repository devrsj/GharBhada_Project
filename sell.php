<?php include('inc/header.php'); ?>
<!-------------------------
--------Bread-Crumb----------
-------------------------->

<section class="bread-crumb bg-bread">
    <div class="container">
        <h3 class="bread-crumb-title text-center">Sell Property</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="listing.php">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Sell Property</li>
            </ol>
        </nav>
    </div>
</section>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<!-------------------------
--------Sell-Main----------
-------------------------->

<section class="sell-main common-padding bg-shil" style="background: url(images/shil-3.png);">
    <div class="container">
        <div class="row"> <!-- ROW.// -->
            <div class="col-lg-8"> <!-- COL.// -->

                <div class="sell-property-form">
                    <form action="sell">

                        <h2 class="title color-primary">Basic Information</h2>

                        <div class="row less-gutter"> <!-- small-row.// -->
                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="title">Property Title</label>
                                <select name="type">
                                    <option value="house">Residence</option>
                                    <option value="office">Office</option>
                                    <option value="apartment">Home-Stay</option>
                                    <option value="commercial">Hotel</option>
                                    <option value="commercial">Business</option>
                                    <option value="commercial">Others</option>
                                </select>
                            </div> <!-- small-col.// -->
                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="type">Type</label>
                                <select id="type">
                                    <option value="house">House</option>
                                    <option value="land">Land</option>
                                    <option value="office">Office</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div> <!-- small-col.// -->
                        </div> <!-- small-row.// -->
                        
                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-2"> <!-- small-col.// -->
                                <label for="unit">Price Unit</label>
                                <select id="unit" id="">
                                    <option value="none">None</option>
                                    <option value="ropani">Ropani</option>
                                    <option value="aana">Aana</option>
                                    <option value="sq-ft">Sq Ft</option>
                                    <option value="bighaa">Bighaa</option>
                                </select>
                            </div> <!-- small-col.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="price">Price</label>
                                <input type="number" id="price">
                            </div> <!-- small-col.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="quantity">Quantity</label>
                                <input type="text" id="quantity">
                                <!-- <select id="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> -->
                            </div> <!-- small-col.// -->
                                                        
                        </div> <!-- small-row.// -->

                        

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="facility">Facility</label>
                                <select id="facility">
                                    <option value="Parking Space">Parking Space</option>
                                    <option value="Electricity">Electricity</option>
                                    <option value="Water">Water</option>
                                    <option value="Internet Access">Internet Access</option>
                                    <option value="Security">Security</option>
                                </select>
                            </div> <!-- small-col.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="duration">Duration</label>
                                <select id="duration">
                                    <option value="6 Months">6 Months</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 Years">2 Years</option>
                                    <option value="3 Years">3 Years</option>
                                    <option value="5 Years">5 Years</option>
                                    <option value="10 Years">10 Years</option>
                                    <option value="Negotiable">Negotiable</option>
                                </select>
                            </div> <!-- small-col.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="parking">Parking Space</label>
                                <input type="text" id="parking" placeholder="eg: 1 car and 3 bikes">
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <hr>
                        <h2 class="title color-primary">Location</h2>

                        <!-- <div class="relative mb-mini">
                            <h1 class="title title-block color-primary">Location</h1>
                            <span class="title-underline"></span>
                        </div> -->

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="province">Province No.</label>
                                <select id="province">
                                    <option value="1">Province - 1</option>
                                    <option value="2">Province - 2</option>
                                    <option value="3">Province - 3</option>
                                    <option value="4">Province - 4</option>
                                    <option value="5">Province - 5</option>
                                    <option value="6">Province - 6</option>
                                    <option value="7">Province - 7</option>
                                </select>
                            </div> <!-- small-col.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="district">District</label>
                                <select id="district">
                                    <option value="Lalitpur">Lalitpur</option>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Bhaktapur">Bhaktapur</option>
                                    <option value="Dang">Dang</option>
                                    <option value="Dharan">Dharan</option>
                                </select>
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-5"> <!-- small-col.// -->
                                <label for="Palika">Local Address</label>
                                <select id="Palika">
                                    <option value="Metropolitian">Metropolitian</option>
                                    <option value="Sub-Metropolitian">Sub-Metropolitian</option>
                                    <option value="Municipality">Municipality</option>
                                    <option value="Urban">Urban Municipality</option>
                                    <option value="Rural">Rural Municipality</option>
                                </select>
                            </div> <!-- small-col.// -->

                            <div class="col-md-5"> <!-- small-col.// -->
                                <label for="ward-name">Ward Name</label>
                                <input type="text" id="ward-name" required="required">
                            </div> <!-- small-col.// -->

                            <div class="col-md-2"> <!-- small-col.// -->
                                <label for="ward">Ward</label>
                                <input type="number" id="ward">
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="tole">Tole</label>
                                <input type="text" id="tole">
                            </div> <!-- small-col.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="famous">Famouse Place Nearby</label>
                                <div class="width-addon clearfix">
                                    <span class="fontAwesome input-group-text">&#xf3c5;</span>
                                    <input type="text" id="famous">
                                </div>
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <hr>
                        <h2 class="title color-primary">Detail Information</h2>

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="message">Description</label>
                                <textarea id="message" placeholder="Message..."></textarea>
                            </div> <!-- small-col.// -->

                            <div class="col-md-6"> <!-- small-col.// -->
                                <label for="myFile">Upload Images</label>
                                <input type="file" id="myFile" class="upload-image block" multiple>

                                <button class="btn-green w-100">Submit Your Property !</button>
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <div class="sell-property-user-detail">

                        <hr>
                        <h2 class="title color-primary">Contact Details</h2>

                        <div class="row less-gutter"> <!-- small-row.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="name">Name</label>
                                <input type="text" id="name" value="Dinesh Sanjel" readonly>
                            </div> <!-- small-col.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" value="+977-9849668602" readonly>
                            </div> <!-- small-col.// -->

                            <div class="col-md-4"> <!-- small-col.// -->
                                <label for="mail">E-mail (Optional)</label>
                                <input type="text" id="mail" value="info@dineshsanjel.com.np" readonly>
                            </div> <!-- small-col.// -->

                        </div> <!-- small-row.// -->

                        <!-- <div class="text-center"> -->
                            <!-- <button class="btn-green">Save</button> -->
                        <!-- </div> -->

                        </div>

                    </form>
                </div>
            </div> <!-- COL.// -->

            <div class="col-lg-4">
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
            </div>

        </div> <!-- ROW.// -->
    </div>
</section>

<!-------------------------
--------Sell-Main----------
-------------------------->

<?php include('inc/footer.php'); ?>