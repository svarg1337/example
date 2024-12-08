@extends('layouts.main')

@section('title', 'Darketa Marketplace')

@section('content')
    <!-- banner start -->
    <div class="banner-area" style="background: url(assets/img/banner/2.png);">
        <div class="container">
            <div class="banner-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-inner text-center">
                            <h2>Best Themes and <br> <span>Plugins Marketplace</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <form>
                            <select>
                                <option>All resources</option>
                                <option value="1">1 resource</option>
                                <option value="2">2 resource</option>
                                <option value="3">3 resource</option>
                            </select>
                            <input type="text" class="form-control">
                            <button type="submit" class="btn"><img src="assets/img/icon/1.png" alt="img"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- featured-area start -->
    <section class="featured-area bg-sky-blue pd-top-90 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center">
                        <h2>Featured Products</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="featured-product">
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/1.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/2.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/3.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/4.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/5.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/6.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/7.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/8.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/9.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/10.png" alt="img">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 text-center">
                    <a class="btn btn-base" href="#">Top New Files</a>
                    <a class="btn btn-white" href="#">All Items</a>
                </div>
            </div>
        </div>
    </section>
    <!-- featured-area end -->

    <!-- all-item area start -->
    <section class="all-item-area pd-top-90 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>All Items</h2>
                    </div>
                </div>
                <div class="col-lg-8 mt-2">
                    <div class="isotope-filters item-isotope-btn text-lg-right">
                        <button class="button active ml-0" data-filter="*">All Items</button>
                        <button class="button" data-filter=".cat-1">Site Templates</button>
                        <button class="button" data-filter=".cat-2">UI Templates</button>
                        <button class="button" data-filter=".cat-3">All Items</button>
                    </div>
                </div>
            </div>
            <div class="all-item-section">
                <div class="item-isotope row">
                    <div class="item-sizer col-1"></div>
                    <!-- gallery item start here -->


                    @foreach($products as $product)
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-1 cat-3">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/1.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">{{ $product->price }} ₽</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">{{ $product->title }}</a></h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                    @endforeach




<!--
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-1 cat-3">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/1.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">Kiamu</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/2.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">Russell brown</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-3 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/3.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">Mobile application - LonKat</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-3 cat-1">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/4.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">Landing page - Kitchen</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-2 cat-1">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/5.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">UI Templates</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-1 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/6.png" alt="image">
                            </a>
                            <a class="btn btn-white" href="#">Live Preview</a>
                        </div>
                        <div class="item-details">
                            <span class="price">$30.00</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                            <h4><a href="#">Kiamu</a></h4>
                            <p>Photography Word Press Theme</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-base" href="#">More Products</a>
                </div>
            </div>
        </div>
    </section>
    <!-- all-item area end -->

    <!-- about-area start -->
    <section class="about-area text-center pd-top-100 pd-bottom-70" style="background: url(assets/img/about/bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-about-wrap">
                        <div class="thumb">
                            <img src="assets/img/about/1.png" alt="img">
                        </div>
                        <h5><a href="#">Quality Platform</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-about-wrap">
                        <div class="thumb">
                            <img src="assets/img/about/2.png" alt="img">
                        </div>
                        <h5><a href="#">Premium User</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-about-wrap">
                        <div class="thumb">
                            <img src="assets/img/about/3.png" alt="img">
                        </div>
                        <h5><a href="#">Cloud Upload</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-about-wrap">
                        <div class="thumb">
                            <img src="assets/img/about/4.png" alt="img">
                        </div>
                        <h5><a href="#">Secure Transaction</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area end -->

    <!-- pricing-area start -->
    <section class="pricing-area text-center pd-top-90 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Pricing Plan</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-price-wrap">
                        <h4 class="pricing-title">Basic</h4>
                        <h2 class="pricing-cost basic"><span>$</span>23.00</h2>
                        <ul class="pricing-list">
                            <li><a href="#">2x option 1</a></li>
                            <li><a href="#">Free option 2</a></li>
                            <li><a href="#">limited option 3</a></li>
                            <li><a href="#">Unlimited option 4</a></li>
                            <li><a href="#">Unlimited option 5</a></li>
                        </ul>
                        <a class="btn btn-border" href="#">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price-wrap">
                        <h4 class="pricing-title">Standard</h4>
                        <h2 class="pricing-cost standard"><span>$</span>49.00</h2>
                        <ul class="pricing-list">
                            <li><a href="#">2x option 1</a></li>
                            <li><a href="#">Free option 2</a></li>
                            <li><a href="#">limited option 3</a></li>
                            <li><a href="#">Unlimited option 4</a></li>
                            <li><a href="#">Unlimited option 5</a></li>
                        </ul>
                        <a class="btn btn-border" href="#">Purchase Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-price-wrap">
                        <h4 class="pricing-title">Premium</h4>
                        <h2 class="pricing-cost premium"><span>$</span>99.00</h2>
                        <ul class="pricing-list">
                            <li><a href="#">2x option 1</a></li>
                            <li><a href="#">Free option 2</a></li>
                            <li><a href="#">limited option 3</a></li>
                            <li><a href="#">Unlimited option 4</a></li>
                            <li><a href="#">Unlimited option 5</a></li>
                        </ul>
                        <a class="btn btn-border" href="#">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-area end -->

    <!-- fun-fact-area start -->
    <section class="fun-fact-area text-center pd-top-100" style="background: url(assets/img/fact/bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap">
                        <div class="thumb">
                            <img src="assets/img/fact/icon1.png" alt="img">
                        </div>
                        <h2><span class="counter">642</span></h2>
                        <p class="fact-title">Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-2">
                        <div class="thumb">
                            <img src="assets/img/fact/icon2.png" alt="img">
                        </div>
                        <h2><span class="counter">3200</span></h2>
                        <p class="fact-title">Premium Resources</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-3">
                        <div class="thumb">
                            <img src="assets/img/fact/icon3.png" alt="img">
                        </div>
                        <h2><span class="counter">1200</span></h2>
                        <p class="fact-title">Total User</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-4">
                        <div class="thumb">
                            <img src="assets/img/fact/icon4.png" alt="img">
                        </div>
                        <h2><span class="counter">2500</span></h2>
                        <p class="fact-title">Item Sold</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-fact-area end -->

    <!--testimonial-area start-->
    <section class="testimonial-area text-center pd-top-90 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2>Thousands Of Happy Customers!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonial-wrap">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img">
                                </div>
                                <p>Lorem ipsum dolor sit amet, sed ctetur adipisicing elit, seds eiusmod tempor
                                    incididunt ut labore </p>
                                <div class="thumb">
                                    <img src="assets/img/testimonial/1.png" alt="img">
                                </div>
                                <h5 class="name">George L. Parisi</h5>
                                <p class="designation">Doogle inc.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrap">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img">
                                </div>
                                <p>Lorem ipsum dolor sit amet, sed ctetur adipisicing elit, seds eiusmod tempor
                                    incididunt ut labore </p>
                                <div class="thumb">
                                    <img src="assets/img/testimonial/2.png" alt="img">
                                </div>
                                <h5 class="name">Miguel V. Henley</h5>
                                <p class="designation">Doogle inc.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrap">
                                <div class="icon">
                                    <img src="assets/img/testimonial/quote.png" alt="img">
                                </div>
                                <p>Lorem ipsum dolor sit amet, sed ctetur adipisicing elit, seds eiusmod tempor
                                    incididunt ut labore </p>
                                <div class="thumb">
                                    <img src="assets/img/testimonial/3.png" alt="img">
                                </div>
                                <h5 class="name">Mary Gregory</h5>
                                <p class="designation">Doogle inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end-->

    <!--blog-area start-->
    <section class="blog-area pd-top-90 pd-bottom-70 bg-sky-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2>Recent Articles</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/1.png" alt="img">
                        </div>
                        <div class="blog-details">
                            <div class="meta">
                                <span><i class="far fa-calendar-alt"></i>28 JANUARY, 2020</span>
                                <a href="#"><i class="far fa-user" aria-hidden="true"></i>BY ADMIN</a>
                            </div>
                            <h5><a href="#">10 Reasons To Start Your Own, Profitable Website!</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/2.png" alt="img">
                        </div>
                        <div class="blog-details">
                            <div class="meta">
                                <span><i class="far fa-calendar-alt"></i>28 JANUARY, 2020</span>
                                <a href="#"><i class="far fa-user" aria-hidden="true"></i>BY ADMIN</a>
                            </div>
                            <h5><a href="#">You can also find trends and techniques from other UXers</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/3.png" alt="img">
                        </div>
                        <div class="blog-details">
                            <div class="meta">
                                <span><i class="far fa-calendar-alt"></i>28 JANUARY, 2020</span>
                                <a href="#"><i class="far fa-user" aria-hidden="true"></i>BY ADMIN</a>
                            </div>
                            <h5><a href="#">UX design blog focusing on accessibility and design.</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog-area end-->
@endsection