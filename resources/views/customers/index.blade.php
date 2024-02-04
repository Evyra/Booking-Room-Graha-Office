@extends('customers.layout.main')
@section('container')
    <main>
        <section class="hero_single version_2">
            <div class="wrapper">
                <div class="container">
                    <h3>Book Meeting Rooms</h3>
                    <p>Use Meeting Room as you like and anytime you need</p>
                    <form>
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide">
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                    <option>17:00</option>
                                    <option>18:00</option>
                                    <option>19:00</option>
                                    <option>20:00</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide">
                                    <option>Boardroom</option>
                                    <option>Classroom</option>
                                    <option>Theater</option>
                                    <option>U-shape</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" class="btn_search" value="Search">
                            </div>
                        </div>
                        <!-- /row -->
                    </form>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container container-custom margin_80_0">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our Popular Meeting Rooms</h2>
                <p>Get your vibe</p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/SynergyRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Meeting Room</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Synergy Room</a></h3>
                            <p>Type Room : Boardroom<br>
                                Ammount : 2-8 person </p>
                            <span class="price">From <strong>100k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/NuciraRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Meeting Room</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Nucira Room</a></h3>
                            <p>Type Room : Boardroom<br>
                                Ammount : 2-6</p>
                            <span class="price">From <strong>50k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/BillgatesRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Meeting Room</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Billgates Room</a></h3>
                            <p>Type Room : Classroom<br>
                                Ammount : 2-12</p>
                            <span class="price">From <strong>200k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/TreasuryRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Special Package</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Treasury Room</a></h3>
                            <p>Type Room : U-shape<br>
                                Ammount : 2-11</p>
                            <span class="price">From <strong>580k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/NexusRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Special Package</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Nexus Room</a></h3>
                            <p>Type Room : Theater<br>
                                Ammount : 10-20</p>
                            <span class="price">From <strong>450k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Super<em>350 Reviews</em></span><strong>9.0</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
                <div class="item">
                    <div class="box_grid">
                        <figure>
                            <a href="#0" class="wish_bt"></a>
                            <a href="tour-detail.html"><img src="img/LilacRoom.jpg" class="img-fluid" alt=""
                                    width="800" height="533">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>Meeting Room</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="tour-detail.html">Lilac Room</a></h3>
                            <p>Type Room : Round Banquet <br>
                                Ammount : 2-4</p>
                            <span class="price">From <strong>200k</strong> /per hours</span>
                        </div>
                        <ul>
                            <li>Rates</li>
                            <li>
                                <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /item -->
            </div>
            <!-- /carousel -->
            <p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">View all Rooms</a></p>
            <hr class="large">
        </div>
        <!-- /container -->

        <div class="container container-custom margin_30_95">
            <section class="add_bottom_45">
                <div class="main_title_3">
                    <span><em></em></span>
                    <h2>Special Package</h2>
                    <p>Get special price for booking meeting rooms</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="tour-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="img/TreasuryRoom.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                            class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Treasury Room</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="tour-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.9</strong></div>
                                <img src="img/NexusRoom.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                            class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Nexus Room</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="tour-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>7.0</strong></div>
                                <img src="img/SynergyRoom.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                            class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Synergy Room</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <a href="tour-detail.html" class="grid_item">
                            <figure>
                                <div class="score"><strong>8.9</strong></div>
                                <img src="img/LilacRoom.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i
                                            class="icon_star"></i><i class="icon_star"></i></div>
                                    <h3>Lilac Room</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
                <a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
            </section>
            <!-- /section -->
            <hr class="large">
        </div>
        <!-- /container -->


        <div class="call_section">
            <div class="container clearfix">
                <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                    <div class="block-reveal">
                        <div class="block-vertical"></div>
                        <div class="box_1">
                            <h3>Enjoy your Meeting with us</h3>
                            <p>Book the perfect room for your meeting</p>
                            <a href="#0" class="btn_1 rounded">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/call_section-->
    </main>
    <!-- /main -->
@endsection
