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
                                href="index-2.html"
                                class="single"
                            >Beranda</a></li>
                        <li
                            class="breadcrumb-item single-list"
                            aria-current="page"
                        ><a
                                href="javascript:void(0)"
                                class="single"
                            >Donasi </a></li>
                    </ul>
                </nav>
                <h1
                    class="title wow fadeInUp"
                    data-wow-delay="0.1s"
                >Detail Donasi</h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Donation S t a r t -->
    <section class="donation-section top-bottom-padding2">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xxl-9 col-xl-8 col-lg-8">
                    <!-- Donate -->
                    <div class="donate-details">
                        <div class="donate-img position-relative">
                            <a href="javascript:void(0)">
                                <img
                                    class="w-100"
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="img"
                                >
                            </a>
                            <div class="donate-img-overlay"></div>
                        </div>
                        <div class="donate-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="donate-info-title">
                                    <h4 class="title text-capitalize">{{ $project->title }}</h4>
                                    <p class="subtitle">
                                        {{ $project->description }}
                                    </p>
                                    {{-- <div class="alert">
                                        <div class="icon">
                                            <i class="ri-error-warning-fill"></i>
                                        </div>
                                        <div class="alert-msg">
                                            <h4 class="title">Notice:</h4>
                                            <p class="pera">Text mode is enabled. while in test mode no live donations are
                                                processed</p>
                                        </div>
                                    </div> --}}
                                    <div class="progress custom-progress-two">
                                        <div
                                            class="progress-bar"
                                            style="width: 100%"
                                        ></div>
                                    </div>
                                    <div class="flex justify-content-between mt-14 mb-20">
                                        <div class="flex gap-20">
                                            <div class="charges">
                                                <p class="pera">Rp. {{ number_format($project->goal_amount) }}</p>
                                                <h4 class="title">Goals</h4>
                                            </div>
                                            <div class="charges">
                                                <p class="pera">Rp. {{ number_format($project->current_amount) }}</p>
                                                <h4 class="title">Raised</h4>
                                            </div>
                                        </div>
                                        <div class="forward-btn">
                                            <i class="ri-reply-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-16 flex-wrap">
                                <a
                                    href="{{ route('project.donate', $project->slug) }}"
                                    class="submit-btn"
                                >Donasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="right-element">
                        <!-- Category -->
                        <div class="category-section">
                            <p class="pera">Category List</p>
                            <div class="dotted">
                                <div class="active-dot"></div>
                                <div class="inactive-dot"></div>
                            </div>
                            <div class="category-box">
                                <ul class="listing">
                                    @foreach ($categories as $item)
                                        <li class="single-list">
                                            <a
                                                class="single"
                                                href="#"
                                            >{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Post -->

                        <!-- Related post -->
                        {{-- <div class="related-post-section">
                            <p class="pera text-capitalize">Related post</p>
                            <div class="dotted">
                                <div class="active-dot"></div>
                                <div class="inactive-dot"></div>
                            </div>
                            <div class="related-box">
                                <div class="single-post">
                                    <div class="post-img">
                                        <a href="#"><img
                                                src="assets/images/gallery/post-1.png"
                                                alt="img"
                                            ></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="date-time">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">November 28, 2023</p>
                                        </div>
                                        <h4 class="title"><a href="#">How Kids Make Sense of Life Experiences.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="single-post">
                                    <div class="post-img">
                                        <a href="#"><img
                                                src="assets/images/gallery/post-2.png"
                                                alt="img"
                                            ></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="date-time">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">November 28, 2023</p>
                                        </div>
                                        <h4 class="title"><a href="#">How Kids Make Sense of Life Experiences.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="single-post">
                                    <div class="post-img">
                                        <a href="#"><img
                                                src="assets/images/gallery/post-3.png"
                                                alt="img"
                                            ></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="date-time">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">November 28, 2023</p>
                                        </div>
                                        <h4 class="title"><a href="#">How Kids Make Sense of Life Experiences.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="single-post">
                                    <div class="post-img">
                                        <a href="#"><img
                                                src="assets/images/gallery/post-4.png"
                                                alt="img"
                                            ></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="date-time">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">November 28, 2023</p>
                                        </div>
                                        <h4 class="title"><a href="#">How Kids Make Sense of Life Experiences.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-of Donation -->
@endsection
