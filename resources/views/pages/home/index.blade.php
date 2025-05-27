@extends('layouts.app')

@section('content')
    <!-- Hero area S t a r t-->
    <section class="hero-area">
        <div class="single-slider hero-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                        <div class="hero-caption-one mb-20">
                            <h4
                                class="key-title font-700 mb-20 wow fadeInUp"
                                data-wow-delay="0.0s"
                            >Sedekah Hari Ini, Keberkahan Selamanya</h4>
                            <h1
                                class="title font-700 wow fadeInUp"
                                data-wow-delay="0.1s"
                            >Kebaikan yang Tak Pernah Putus!</h1>
                            <p
                                class="pera wow fadeInUp"
                                data-wow-delay="0.3s"
                            >Setiap rupiah yang Anda berikan membawa manfaat besar—membantu mereka yang membutuhkan,
                                meringankan beban sesama, dan menjadi investasi pahala yang abadi. Mari berbagi dan
                                tebarkan kebaikan.</p>
                            <div class="d-flex gap-20 flex-wrap">
                                <a
                                    href="donation.html"
                                    class="btn-primary-fill hero-btn wow fadeInLeft"
                                    data-wow-delay="0.4s"
                                >Donasi Sekarang</a>
                                <a
                                    href="volunteer.html"
                                    class="btn-tertiary-fill hero-btn wow fadeInRight"
                                    data-wow-delay="0.4s"
                                >Gabung Relawan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="d-flex justify-content-center">
                            <div class="hero-image position-relative d-none d-lg-block">
                                <img
                                    src="{{ asset('assets/images/hero/Tanpa judul (414 x 499 piksel).png') }}"
                                    width="200"
                                    alt="img"
                                    class="w-100 tilt-effect wow fadeInUp"
                                    data-wow-delay="0.1s"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Hero-->

    <!-- helpful area S t a r t-->
    <section class="helpful-area">
        <div class="container">
            <div class="row justify-content-center gy-24">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInLeft"
                        data-wow-delay="0.2s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Wakaf Al-Quran</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInLeft"
                        data-wow-delay="0.0s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Berbagi Makanan</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc wow fadeInRight"
                        data-wow-delay="0.0s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Pembangunan Masjid</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInRight"
                        data-wow-delay="0.2s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Perlengkapan Ibadah</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInRight"
                        data-wow-delay="0.2s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Kemanusiaan</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInRight"
                        data-wow-delay="0.2s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Bencana Alam</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div
                        class="helpful-card h-calc  wow fadeInRight"
                        data-wow-delay="0.2s"
                    >
                        <div class="helpful-card-icon">
                            <i class="ri-money-dollar-circle-line"></i>
                        </div>
                        <div class="helpful-card-caption">
                            <h4 class="caption-title">Berbagi Sembako</h4>
                            <p class="caption-para">When deciding which charity to donate to, it important to do
                                your research.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of helpful-->

    <!-- Donate S t a r t -->
    <section class="donate-section bottom-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mt-100 mb-50">
                        <!-- <span class="sub-tittle text-capitalize font-600">We Love To Help Poor</span> -->
                        <h2 class="title font-700">Donasi Sekarang</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-24">
                @foreach ($projects as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div
                            class="single-donate h-calc wow fadeInUp"
                            data-wow-delay="0.0s"
                        >
                            <div class="donate-img position-relative">
                                <a href="{{ route('project.show', $item->slug) }}"> <img
                                        class="w-100"
                                        src="{{ asset('storage/' . $item->image) }}"
                                        alt="img"
                                    > </a>
                                <div class="donate-badge">
                                    <p class="subtitle">{{ $item->projectCategory->name }}</p>
                                </div>
                            </div>
                            <div class="donate-info">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="donate-info-title">
                                        <h4 class="title text-capitalize">
                                            <a href="{{ route('project.show', $item->slug) }}">{{ $item->title }}</a>
                                        </h4>
                                        <p class="subtitle">
                                            {{ $item->description }}
                                        </p>
                                        {{-- <div class="progress custom-progress-two">
                                            <div
                                                class="progress-bar"
                                                style="width: 100%"
                                            ></div>
                                        </div> --}}
                                        {{-- <div class="flex justify-content-between mt-14 mb-20">
                                            <div class="flex gap-20">
                                                <div class="charges">
                                                    <p class="pera">Rp. {{ number_format($item->goal_amount) }}</p>
                                                    <h4 class="title">Goals</h4>
                                                </div>
                                                <div class="charges">
                                                    <p class="pera">Rp. {{ $item->current_amount }}</p>
                                                    <h4 class="title">Raised</h4>
                                                </div>
                                            </div>
                                            <div class="forward-btn">
                                                <i class="ri-reply-fill"></i>
                                            </div>
                                        </div> --}}
                                        <a
                                            href="{{ route('project.show', $item->slug) }}"
                                            class="btn donate-btn w-100"
                                        >Donasi Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End-of Donate -->
@endsection
