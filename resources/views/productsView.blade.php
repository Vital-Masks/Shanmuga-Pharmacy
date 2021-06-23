@extends('shared.layout')

@section('content')

<!-- Shopping Section Start -->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny py-5">
        <div class="container py-lg-5">
            <!-- <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
            <p class="text-center">Handpicked Favourites just for you</p> -->

            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="side_filter__section">
                        <div class="filter__section_1 p-2">
                            <div>
                                <input class="form-control" placeholder="search"/>
                            </div>
                            <div class="mt-2">
                                <ul>
                                    <li>Home Items</li>
                                    <li>Watch</li>
                                    <li>Cinema</li>
                                </ul>
                            </div>
                        </div>
                        <div class="filter__section_2">

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="top_filter__section">
                        <div>
                            <h5>32 Items found</h5>
                        </div>
                        <div class="dropdown show">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by price
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>

                    <!-- /row-->
                    <div class="ecom-products-grids row">
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2 transmitv">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-1.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-11.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Women Maroon Top">
                                            <input type="hidden" name="amount" value="899.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women Maroon Top </a></h3>
                                    <span class="price"><del>$975.00</del>$899.99</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-2.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-22.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Men's Pink Shirt">
                                            <input type="hidden" name="amount" value="599.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Men's Pink Shirt </a></h3>
                                    <span class="price"><del>$775.00</del>$599.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-3.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-33.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Dark Blue Top">
                                            <input type="hidden" name="amount" value="799.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Dark Blue Top </a></h3>
                                    <span class="price"><del>$875.00</del>$799.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-4.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-44.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Women Tunic">
                                            <input type="hidden" name="amount" value="399.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Women Tunic </a></h3>
                                    <span class="price"><del>$475.00</del>$399.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-5.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-55.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Yellow T-Shirt">
                                            <input type="hidden" name="amount" value="299.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Yellow T-Shirt</a></h3>
                                    <span class="price"><del>$575.00</del>$299.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-6.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-66.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Straight Kurta">
                                            <input type="hidden" name="amount" value="699.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Straight Kurta </a></h3>
                                    <span class="price"><del>$775.00</del>$699.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-7.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-77.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="White T-Shirt">
                                            <input type="hidden" name="amount" value="599.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">White T-Shirt </a></h3>
                                    <span class="price"><del>$675.00</del>$599.99</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-6 product-incfhny mt-4">
                            <div class="product-grid2">
                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1 img-fluid" src="assets/images/shop-8.jpg">
                                        <img class="pic-2 img-fluid" src="assets/images/shop-88.jpg">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

                                        <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                        </li>
                                    </ul>
                                    <div class="transmitv single-item">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="transmitv_item" value="Blue Sweater">
                                            <input type="hidden" name="amount" value="499.99">
                                            <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">Blue Sweater</a></h3>
                                    <span class="price"><del>$575.00</del>$499.99</span>
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- //row-->
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Shopping Section End -->


@endsection