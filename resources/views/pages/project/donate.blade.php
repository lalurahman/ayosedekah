@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-nav wow fadeInUp"
                    data-wow-delay="0.0s"
                >
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a
                                href="index.html"
                                class="single"
                            >Beranda</a></li>
                        <li
                            class="breadcrumb-item single-list"
                            aria-current="page"
                        ><a
                                href="javascript:void(0)"
                                class="single"
                            >Donasi</a></li>
                    </ul>
                </nav>
                <h1
                    class="title wow fadeInUp"
                    data-wow-delay="0.1s"
                >Kirim Donasi</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Donation Payment S t a r t -->
    <div class="donation-payment section-padding">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-lg-7">
                    <!-- Payment -->
                    <div class="card-style box-shadow border-0 p-4">
                        <div class="small-tittle mb-50">
                            <h2 class="title text-capitalize font-600 position-relative">Pilih Nominal</h2>
                        </div>
                        <ul class="selectPricing mb-20">
                            <li
                                class="listItem"
                                data-amount="20000"
                            >Rp. 20.000</li>
                            <li
                                class="listItem "
                                data-amount="50000"
                            >Rp. 50.000</li>
                            <li
                                class="listItem"
                                data-amount="100000"
                            >Rp. 100.000</li>
                            <li
                                class="listItem"
                                data-amount="150000"
                            >Rp. 150.000</li>
                            <li
                                class="listItem"
                                data-amount="200000"
                            >Rp. 200.000</li>
                        </ul>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Nominal</label>
                                        <input
                                            class="form-control contact-input left_default_amount"
                                            type="number"
                                            min="1"
                                            value="20000"
                                            placeholder="Rp. 50.000"
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Nama</label>
                                        <input
                                            class="form-control contact-input"
                                            type="text"
                                            placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Nomor HP</label>
                                        <input
                                            class="form-control contact-input"
                                            type="number"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-12 payment-gateway-wrapper mt-10">
                                <ul class="payment-gateway-list mb-10">
                                    <li class="single-gateway-item selected"><img
                                            src="assets/images/icon/payment-method1.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method2.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method3.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method4.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method6.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method7.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method8.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method10.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method12.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method13.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method15.png"
                                            alt="img"
                                        ></li>
                                    <li class="single-gateway-item "><img
                                            src="assets/images/icon/payment-method16.png"
                                            alt="img"
                                        ></li>
                                </ul>
                                <div class="remember-me terms-condition">
                                    <label>
                                        <input
                                            class="checkbox-style"
                                            type="checkbox"
                                            value="remember"
                                            name="remember"
                                        >
                                        <small>I agree to all the
                                            <a href="terms-condition.html">
                                                <span>Terms</span></a> and <a href="privacy-policy.html"><span>Privacy
                                                    policy</span>
                                            </a>
                                        </small>
                                        <span class="checkmark-style"></span>
                                    </label>
                                </div>
                                <a
                                    href="payment-success.html"
                                    class="btn-primary-submit"
                                >Donasi Sekarang</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-7">
                    <div class="blog-section-two">
                        <div class="single-blog h-calc">
                            <div class="blog-img position-relative">
                                <a href="blog-details.html"> <img
                                        src="{{ asset('assets/images/gallery/gallery-2.png') }}"
                                        class="img-fluid w-100"
                                        alt="img"
                                    > </a>
                                <div class="blog-img-overlay-text"></div>
                            </div>
                            <!-- Payment Details -->
                            <div class="paymentDetails card-style box-shadow border-0 mb-24">
                                <div class="blog-info">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="blog-info-title">
                                            <h4 class="title text-capitalize">Detail Donasi</h4>
                                            <p class="subtitle">We understand that there are many people
                                                organization The seeking support</p>
                                            <div class="priceListing">
                                                <ul class="listing">
                                                    <li class="listItem">
                                                        <p class="leftCap font-600">Donasi Anda</p>
                                                        <p class="rightCap total_donation_amount font-600">Rp. 20.000</p>
                                                    </li>
                                                    <li class="listItem">
                                                        <p class="leftCap rightCap font-600">Total</p>
                                                        <p class="rightCap total_donation_amount font-600">Rp. 20.000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-of Donation Payment -->
@endsection
