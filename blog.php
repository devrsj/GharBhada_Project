<?php include('inc/header.php'); ?>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<section class="bread-crumb bg-bread">
    <div class="container">
        <h3 class="bread-crumb-title text-center">Blog Page</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</section>

<!-------------------------
--------Bread-Crumb----------
-------------------------->

<!-------------------------
--------Blog-Main----------
-------------------------->

<section class="blog-main common-padding bg-grey">
    <div class="container">
        <div class="row">
            <!-- Row -->
            <div class="col-lg-9">
                <!-- COL -->

                <div class="row">
                    <div class="col-lg-6 pb-2">
                        <div class="blog-box">
                            <!-- BLOG-BOX -->


                            <a href="blog-detail.php">
                                <div class="blog-img-wrapper u-margin-bottom-mini">
                                    <img src="images/listing1.jpg" alt="">
                                    <div class="blog-hover">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left">Posted <span>October 2, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>

                                </div>
                            </a>

                            <h4 class="blog-heading">HOME IS WHERE THE HEART BELONGS</h4>

                            <p class="blog-description u-margin-bottom-mini">Nulla dignissim non augue at placerat. Integer vel ipsum at massa finibus finibus interd um vel eros. Aliquam sollicitudin leo eget erat tempor pellentesque. Etiam faucibus odio vel libero imperdiet, vitae dignissim dui suscipit. Nullam luctus...</p>
                            <div class="section-btn-wrapper">
                                <a href="blog-detail.php" class="btn-green btn-secondary">Read More</a>
                            </div>

                        </div> <!-- BLOG-BOX -->
                    </div>

                    <div class="col-lg-6 pb-2">
                        <div class="blog-box">
                            <!-- BLOG-BOX -->

                            <a href="blog-detail.php">
                                <div class="blog-img-wrapper u-margin-bottom-mini">
                                    <img src="images/bread.jpg" alt="">
                                    <div class="blog-hover">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left">Posted <span>October 2, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>

                            <h4 class="blog-heading">THE RICH AND POWERFUL WORK IN REAL TIME</h4>

                            <p class="blog-description u-margin-bottom-mini">Nulla dignissim non augue at placerat. Integer vel ipsum at massa finibus finibus interd um vel eros. Aliquam sollicitudin leo eget erat tempor pellentesque. Nullam luctus...</p>
                            <div class="section-btn-wrapper">
                                <a href="blog-detail.php" class="btn-green btn-secondary">Read More</a>
                            </div>

                        </div> <!-- BLOG-BOX -->
                    </div>

                </div>


                <div class="news-pagination pagination-secondary u-margin-top-mini">
                    <!-- // Pagination--->
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

            <div class="col-lg-3">
                <!-- COL -->


                <aside class="side-card u-margin-bottom-small">
                    <div class="banner-wrap bg-success">
                        <h5 class="aside-title text-center color-white">Search</h5>
                    </div>
                    <div class="all-common-padding">
                        <form action="side-search" class="aside-search">
                            <input type="text" placeholder="Search..">
                            <button class="side-search-button"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </aside>

                <!-- -------------------------------------->
                <!---------------Latest---------------->
                <!---------------------------------------->
                <aside class="news-latest ">
                    <div class="side-card">
                        <div class="banner-wrap bg-success">
                            <h5 class="aside-title text-center color-white">Latest Blog</h5>
                        </div>

                        <div class="all-common-padding">

                            <a href="blog-detail.php">
                                <!--Aside-box-Start-->
                                <div class="side-padding">
                                    <div class="news-wrapper">
                                        <div class="new-img-wrapper">
                                            <img src="images/lisiting4.jpg" alt="New-Image">
                                        </div>
                                        <div class="news-content-wrapper">
                                            <p class="news-side-content">Home Is Where the Heart Belongs</p>
                                            <!-- <p class="about-para">Rs.7.9 - 12.14 Lakh*</p> -->
                                        </div>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left"><span>September 13, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>
                            <!--Aside-box-END-->

                            <a href="blog-detail.php">
                                <!--Aside-box-Start-->
                                <div class="side-padding">
                                    <div class="news-wrapper">
                                        <div class="new-img-wrapper">
                                            <img src="images/feature3.jpg" alt="New-Image">
                                        </div>
                                        <div class="news-content-wrapper">
                                            <p class="news-side-content">New Designer Trend for Your Luxury Home</p>
                                            <!-- <p class="about-para">Rs.3.9 - 5.14 Lakh*</p> -->
                                        </div>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left"><span>October 02, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>
                            <!--Aside-box-END-->

                            <a href="blog-detail.php">
                                <!--Aside-box-Start-->
                                <div class="side-padding">
                                    <div class="news-wrapper">
                                        <div class="new-img-wrapper">
                                            <img src="images/slider-new-1.jpg" alt="New-Image">
                                        </div>
                                        <div class="news-content-wrapper">
                                            <p class="news-side-content">How to Rent a Perfect Vacation Residence?</p>
                                            <!-- <p class="about-para">Rs.3.9 - 5.14 Lakh*</p> -->
                                        </div>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left"><span>July 20, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>
                            <!--Aside-box-END-->

                            <a href="blog-detail.php">
                                <!--Aside-box-Start-->
                                <div class="side-padding">
                                    <div class="news-wrapper">
                                        <div class="new-img-wrapper">
                                            <img src="images/slider-new-2.jpg" alt="New-Image">
                                        </div>
                                        <div class="news-content-wrapper">
                                            <p class="news-side-content">How to Brand Your Business in 6 Steps</p>
                                            <!-- <p class="about-para">Rs.3.9 - 5.14 Lakh*</p> -->
                                        </div>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left"><span>September 14, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>
                            <!--Aside-box-END-->

                            <a href="blog-detail.php">
                                <!--Aside-box-Start-->
                                <div class="side-padding">
                                    <div class="news-wrapper no-bord-pad">
                                        <div class="new-img-wrapper">
                                            <img src="images/feature2.jpg" alt="New-Image">
                                        </div>
                                        <div class="news-content-wrapper">
                                            <p class="news-side-content">How to Brand Your Business in 6 Steps</p>
                                        </div>
                                    </div>
                                    <div class="blog-post-detail clearfix">
                                        <p class="blog-detail float-left"><span>Feburary 14, 2022</span></p>
                                        <p class="blog-detail blog-author float-left">by <span>Admin</span></p>
                                    </div>
                                </div>
                            </a>
                            <!--Aside-box-END-->
                            <div class="product-link-wrapper u-margin-top-mini">
                                <a href="news.php" class="product-link">Latest Properties &rarr;</a>
                            </div>
                        </div>

                    </div>

                </aside>
                <!---------------------------------------->
                <!---------------Latest (END)---------------->
                <!-------------------------------------- -->



            </div> <!-- COL -->
        </div> <!-- Row -->
    </div>
</section>

<!-------------------------
--------Blog-Main----------
-------------------------->

<?php include('inc/footer.php'); ?>