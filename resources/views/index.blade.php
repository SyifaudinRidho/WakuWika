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
        <h3 class="divider-title mt-n2"><span class="text">Kopi</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6" style="height: 150px;">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/kopi1.png" alt="Product Image" style="height: 100%; object-fit: cover;border-radius: 8px;"></div>
                    <div class="product-content">
                        <h3 class="product-title" style="margin-bottom: 0;"><a href="shop-details.html" style="font-size: 16px;color: black;font-weight: 700;">Beef Masalad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price" style="font-size: 12px;color: #4e4e4e;">Hot</span>
                        <span class="price" style="font-size: 12px;font-weight: 700;">Rp 12.000</span><div class="actions"><a href="/pesan" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">Jus</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6" style="height: 150px;">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/kopi1.png" alt="Product Image" style="height: 100%; object-fit: cover;border-radius: 8px;"></div>
                    <div class="product-content">
                        <h3 class="product-title" style="margin-bottom: 0;"><a href="shop-details.html" style="font-size: 16px;color: black;font-weight: 700;">Beef Masalad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price" style="font-size: 12px;color: #4e4e4e;">Hot</span>
                        <span class="price" style="font-size: 12px;font-weight: 700;">Rp 12.000</span><div class="actions"><a href="/pesan" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">teh</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6" style="height: 150px;">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/kopi1.png" alt="Product Image" style="height: 100%; object-fit: cover;border-radius: 8px;"></div>
                    <div class="product-content">
                        <h3 class="product-title" style="margin-bottom: 0;"><a href="shop-details.html" style="font-size: 16px;color: black;font-weight: 700;">Beef Masalad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price" style="font-size: 12px;color: #4e4e4e;">Hot</span>
                        <span class="price" style="font-size: 12px;font-weight: 700;">Rp 12.000</span><div class="actions"><a href="/pesan" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Order</a></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="divider-title"><span class="text">Chokelat</span></h3>
        <div class="row gy-4">
            <div class="col-lg-6" style="height: 150px;">
                <div class="as-product list-view">
                    <div class="product-img"><img src="assets/img/menu/kopi1.png" alt="Product Image" style="height: 100%; object-fit: cover;border-radius: 8px;"></div>
                    <div class="product-content">
                        <h3 class="product-title" style="margin-bottom: 0;"><a href="shop-details.html" style="font-size: 16px;color: black;font-weight: 700;">Beef Masalad</a></h3>
                        <p class="product-text">Lightly smoked and minced pork tenderloin topped with our chilli hot
                            sauce.</p><span class="price" style="font-size: 12px;color: #4e4e4e;">Hot</span>
                        <span class="price" style="font-size: 12px;font-weight: 700;">Rp 12.000</span><div class="actions"><a href="/pesan" class="as-btn" style="height: 29px;text-align: center;padding-top: 8px;text-transform: capitalize;font-weight: 700;font-size: 12px;padding-bottom: 7px;">Order</a></div>
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