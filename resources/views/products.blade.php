<x-guest-layout>
    <!-- ================ HEADER-TITLE ================ -->
    <section class="s-header-title">
        <div class="container">
            <h1>Products</h1>
            <ul class="breadcrambs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </section>
    <!-- ============== HEADER-TITLE END ============== -->

    <!--===================== SHOP =====================-->
    <section class="s-shop">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-9 shop-cover">
                  {{--  <div class="baner-shop">
                        <span class="mask"></span>
                        <img src="assets/img/banner-shop.jpg" alt="img">
                        <div class="baner-item-content">
                            <h2>our discount program</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut
                                labore et dolore magna aliqua.</p>
                            <a href="single-shop.html" class="btn"><span>read more</span></a>
                            <div class="banner-sale-cover">
                                <div class="banner-sale">30% off</div>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>--}}
                    <h2 class="title">Browse</h2>
                    <div class="shop-sort-cover">
                        <div class="sort-left">120 products found</div>
                        <div class="sort-right">
                            <div class="sort-by">
                                <span class="sort-name">sort by:</span>
                                <select class="nice-select">
                                    <option selected="selected" disabled>best selling</option>
                                    <option>new product</option>
                                    <option>sale product</option>
                                </select>
                            </div>
                            <ul class="sort-form">
                                <li data-atr="large"><i class="fa fa-th-large" aria-hidden="true"></i></li>
                                <li data-atr="block" class="active"><i class="fa fa-th" aria-hidden="true"></i></li>
{{--                                <li data-atr="list"><i class="fa fa-list" aria-hidden="true"></i></li>--}}
                            </ul>
                        </div>
                    </div>
                    <div class="shop-product-cover">
                        <div class="row product-cover block">
                            <div class="col-12 col-sm-4 prod-item-col">
                                <div class="product-item">
                                    <span class="top-sale">top sale</span>
                                    <ul class="product-icon-top">
                                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="single-shop.html" class="product-img">
                                        <div class="image-placeholder"
                                             style="background-image: url({{asset('assets/images/quarry-stone.jpg')}})"></div>
                                    </a>
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">MK510, 000</div>
                                            <div class="old-price">MK380, 000</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">Quarry Stone - 30T</a></h6>
                                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 prod-item-col">
                                <div class="product-item">
                                    <ul class="product-icon-top">
                                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="single-shop.html" class="product-img">
                                        <div class="image-placeholder"
                                             style="background-image: url({{asset('assets/images/river-sand.jpg')}})"></div>
                                    </a>
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">MK350,000</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">River Sand - 25 Tonnes</a>
                                        </h6>
                                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 prod-item-col">
                                <div class="product-item">
                                    <span class="sale">11%</span>
                                    <ul class="product-icon-top">
                                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="single-shop.html" class="product-img">
                                        <div class="image-placeholder"
                                             style="background-image: url({{asset('assets/images/river-sand.jpg')}})"></div>
                                    </a>
                                    <div class="product-item-cover">
                                        <div class="price-cover">
                                            <div class="new-price">MK570, 000</div>
                                            <div class="old-price">MK600, 000</div>
                                        </div>
                                        <h6 class="prod-title"><a href="single-shop.html">Quarry Stone - 25T</a></h6>
                                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="col-12 col-lg-3 shop-sidebar">
                    <ul class="widgets wigets-shop">
                        <li class="widget wiget-cart">
                            <h5 class="title">Cart</h5>
                            <p class="not-product">No products in the cart.</p>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="pagination-cover">
                <ul class="pagination">
                    <li class="pagination-item item-prev"><a href="#"><i class="fa fa-angle-left"
                                                                         aria-hidden="true"></i></a>
                    </li>
                    <li class="pagination-item active"><a href="#">1</a></li>
                    <li class="pagination-item"><a href="#">2</a></li>
                    <li class="pagination-item"><a href="#">3</a></li>
                    <li class="pagination-item"><a href="#">4</a></li>
                    <li class="pagination-item"><a href="#">5</a></li>
                    <li class="pagination-item item-next"><a href="#"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--=================== SHOP END ===================-->

</x-guest-layout>
