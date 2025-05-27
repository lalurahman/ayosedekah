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
                    <div class="card-style box-shadow border-0 p-4">
                        <div class="small-tittle mb-50">
                            <h2 class="title text-capitalize font-600 position-relative">Informasi Transfer</h2>
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
                                <div class="col-12 col-lg-6">
                                    <div class="contact-form mb-24">
                                        <label class="contact-label">Nama</label>
                                        <input
                                            class="form-control contact-input"
                                            type="text"
                                            placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
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
                                <a
                                    href="#"
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
                                <a href="#"> <img
                                        src="{{ asset('storage/' . $project->image) }}"
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
                                            <h4 class="title text-capitalize">{{ $project->title }}</h4>
                                            <p class="subtitle">{{ $project->description }}</p>
                                            <div class="priceListing">
                                                <ul class="listing">
                                                    <li class="listItem">
                                                        <p class="leftCap font-600">Donasi Terkumpul Saat Ini</p>
                                                        <p class="rightCap font-600">Rp.
                                                            {{ number_format($project->current_amount) }}</p>
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
