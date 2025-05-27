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
                >Daftar Donasi</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- donate S t a r t -->
    <section class="donate-section top-bottom-padding">
        <div class="container">
            <div class="row gy-24">
                @foreach ($projects as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
                        <div class="single-donate h-calc">
                            <div class="donate-img position-relative">
                                <a href="{{ route('project.donate', $item->slug) }}"> <img
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
                                        <h4 class="title text-capitalize"><a
                                                href="{{ route('project.donate', $item->slug) }}"
                                            >{{ $item->title }}</a></h4>
                                        <p class="subtitle">{{ $item->description }}</p>
                                        <div class="progress custom-progress-two">
                                            <div
                                                class="progress-bar"
                                                style="width: 100%"
                                            ></div>
                                        </div>
                                        <div class="flex justify-content-between mt-14 mb-20">
                                            <div class="flex gap-20">
                                                <div class="charges">
                                                    <p class="pera">Rp. {{ number_format($item->goal_amount) }}</p>
                                                    <h4 class="title">Goals</h4>
                                                </div>
                                                <div class="charges">
                                                    <p class="pera">Rp. {{ number_format($item->current_amount) }}</p>
                                                    <h4 class="title">Raised</h4>
                                                </div>
                                            </div>
                                            <div class="forward-btn">
                                                <i class="ri-reply-fill"></i>
                                            </div>
                                        </div>
                                        <a
                                            href="{{ route('project.donate', $item->slug) }}"
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
    <!-- End-of donate -->
@endsection
