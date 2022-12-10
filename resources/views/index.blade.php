@extends('layout.user')
@section('content')
<style>
    .as-product.list-view .actions .as-btn {
        height: 40px;
        padding: 14px 19px;
        width: 170px;
        border-radius: 20px;
    }
    .as-product.list-view .product-content {
        background: #fff;
    }
</style>
    
<div class="breadcumb-wrapper background-image" style="background-image: url(&quot;assets/img/breadcumb/breadcumb-bg.jpg&quot;);">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">WELCOME TO RESTAURANT FOOD <span class="font-style text-theme2">WakuWika</span></h1>
            
        </div>
    </div>
</div>

<section class="space-top space-extra-bottom shape-mockup-wrap">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title"><span class="font-style text-theme" style="font-size: 20px;">Menu Makanan Kami</span></h2>
            <p class="sec-text ms-auto me-auto" style="font-size: 14px;">Tersedia berbagai minuman asyik yang bisa temani apapun mood kamu</p>
        </div>
        <h3 class="divider-title mt-n2"><span class="text">Breakfast Food</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6" style="height: 150px;">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/kopi1.png" alt="Product Image" style="height: 100%; object-fit: cover;border-radius: 8px;"></div>
                    <div class="product-content">
                        <h3 class="product-title" style="margin-bottom: 0;"><a href="shop-details.html" style="font-size: 16px;color: black;font-weight: 700;">Beef Masalad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price" style="font-size: 12px;color: #4e4e4e;">Hot</span>
                        <span class="price" style="font-size: 12px;font-weight: 700;">Rp 12.000</span><div class="actions"><a href="cart.html" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_2.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Dhokla Sambar</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$190.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_3.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Egg Roll</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$160.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_4.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Vegetable Soup</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$170.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_5.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Roti canai Paratha</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$120.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_6.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Dosa Chutney</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$100.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">Lunch Food</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_7.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Beef Masala Salad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$180.85<del>$350.99</del></span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_8.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Dhokla Sambar</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$190.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_9.png" alt="Product Image"></div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Egg Roll</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$160.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_10.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Fried Rice</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$170.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_11.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Dal Paneer</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$120.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_12.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Hyderabadi biryani</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$100.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">Dinner Food</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_13.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Fried Rice</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$180.85<del>$350.99</del></span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_14.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Dal Makhani Paneer</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$190.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_15.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Beef Masala Salad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$160.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_16.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Chicken tikka</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$170.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">Healthy Food</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_17.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Vegetable soup</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$180.85<del>$350.99</del></span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_18.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Greek salad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$190.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_19.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Indian cuisine Pakora</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$160.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/menu_rest_1_20.png" alt="Product Image">
                    </div>
                    <div class="product-content">
                        <h3 class="product-title"><a href="shop-details.html">Vegetable dish</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price">$170.85</span>
                        <div class="actions"><a href="cart.html" class="as-btn">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="shape-mockup jump" style="top: 12%; right: 5%;"><img src="assets/img/shape/leaf_4.png" alt="shape"></div>
    <div class="shape-mockup jump" style="top: 36%; left: 4%;"><img src="assets/img/shape/leaf_4.png" alt="shape">
    </div>
    <div class="shape-mockup jump-reverse" style="bottom: 15%; left: 4%;"><img src="assets/img/shape/leaf_5.png" alt="shape"></div>
    <div class="shape-mockup leaf jump" style="right: 0px; bottom: 15%;"><img src="assets/img/shape/leaf_6.png" alt="shape"></div>
</section>
@endsection