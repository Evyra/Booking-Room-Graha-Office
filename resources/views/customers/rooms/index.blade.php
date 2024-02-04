@extends('customers.layout.main')

@section('container')
    <main>

        <section class="hero_in tours">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>MEETING ROOM</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="filters_listing sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <div class="switch-field">
                            <input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*"
                                class="selected">
                            <label for="all">All</label>
                            <input type="radio" id="popular" name="listing_filter" value="popular"
                                data-filter=".popular">
                            <label for="popular">Popular</label>
                            <input type="radio" id="latest" name="listing_filter" value="latest" data-filter=".latest">
                            <label for="latest">Latest</label>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- /container -->
        </div>
        <!-- /filters -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60_35">
            <div class="col-lg-12">
                <div class="row no-gutters custom-search-input-2 inner">
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
            </div>
            <!-- /custom-search-input-2 -->

            <div class="isotope-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="tour-detail.html"><img src="img/SteveJobRoom.jpg" class="img-fluid" alt=""
                                        width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html">Steve Job Room</a></h3>
                                <p>Type Room : Classroom<br>
                                    Ammount : 2-15 person </p>
                                <span class="price">From <strong>70k</strong> /per hours</span>
                            </div>
                            <ul>
                                <li><strong>BOOKED</strong></li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
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
                                <li><a href="cart-1.html"><strong>BOOK NOW</strong></a></li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="tour-detail.html"><img src="img/TreasuryRoom.jpg" class="img-fluid" alt=""
                                        width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html">Treasury Room</a></h3>
                                <p>Type Room : U-Shape<br>
                                    Ammount : 2-11 person </p>
                                <span class="price">From <strong>580k</strong> /per hours</span>
                            </div>
                            <ul>
                                <li>Rates</li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="tour-detail.html"><img src="img/AljabarRoom.jpg" class="img-fluid"
                                        alt="" width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html">Aljabar Room</a></h3>
                                <p>Type Room : Classroom<br>
                                    Ammount : 2-6 person</p>
                                <span class="price">From <strong>50k</strong> /per hours</span>
                            </div>
                            <ul>
                                <li>Rates</li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="tour-detail.html"><img src="img/BillgatesRoom.jpg" class="img-fluid"
                                        alt="" width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html">Billgates Room</a></h3>
                                <p>Type Room : Classroom<br>
                                    Ammount : 2-12 person </p>
                                <span class="price">From <strong>400k</strong> /per hours</span>
                            </div>
                            <ul>
                                <li>Rates</li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                    <div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
                        <div class="box_grid">
                            <figure>
                                <a href="#0" class="wish_bt"></a>
                                <a href="tour-detail.html"><img src="img/MurrayRoom.jpg" class="img-fluid"
                                        alt="" width="800" height="533">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <small>Meeting Room</small>
                            </figure>
                            <div class="wrapper">
                                <h3><a href="tour-detail.html">Murray Room</a></h3>
                                <p>Type Room : Reception<br>
                                    Ammount : 2-15 person</p>
                                <span class="price">From <strong>450k</strong> /per hours</span>
                            </div>
                            <ul>
                                <li>Rates</li>
                                <li>
                                    <div class="score"><span>Super<em>350 Reviews</em></span><strong>8.9</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /box_grid -->
                </div>
                <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->

            <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>

        </div>
        <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-help2"></i>
                            <h4>Need Help? Contact us</h4>
                            <p>We ready to help you when get toubled in our website</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-wallet"></i>
                            <h4>Payments</h4>
                            <p>Our mission is to provide a platform that is easy affordable and safe to pay for booking
                                meeting rooms.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-note2"></i>
                            <h4>Cancel Policy</h4>
                            <p>You can cancel the booking in 24hours after payment</p>
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

    </main>
@endsection
