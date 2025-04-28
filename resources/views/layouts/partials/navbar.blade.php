<header>
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper d-flex align-items-center justify-content-between">
                            <div class="header-left d-flex align-items-center justify-content-between">
                                <!-- Logo-->
                                <div class="logo logo-large light-logo">
                                    <a href="index.html"><img
                                            src="{{ asset('assets/images/logo.png') }}"
                                            width="80"
                                            alt="logo"
                                        ></a>
                                </div>
                                <!-- Logo Mobile-->
                                <div class="logo logo-mobile light-logo">
                                    <a href="index.html"><img
                                            src="{{ asset('assets/images/logo.png') }}"
                                            width="60"
                                            alt="img"
                                        ></a>
                                </div>
                            </div>

                            <!-- Main-menu for desktop -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul
                                        class="listing"
                                        id="navigation"
                                    >
                                        <li class="single-list">
                                            <a
                                                href="{{ route('home') }}"
                                                class="single @if (request()->is('/')) active @endif"
                                            >Beranda</a>
                                        </li>
                                        <li class="single-list"><a
                                                href="{{ route('project.index') }}"
                                                class="single @if (request()->is('project')) active @endif"
                                            >Donasi</a>
                                        <li class="single-list"><a
                                                href="#"
                                                class="single"
                                            >Berita</a></li>
                                        <li class="single-list"><a
                                                href="#"
                                                class="single"
                                            >Tentang Kami</a></li>
                                        </li>
                                        <li class="single-list"><a
                                                href="#"
                                                class="single"
                                            >Kontak</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header-right">
                                <div class="cart">
                                    <!-- search button -->
                                    <a
                                        href="/admin"
                                        class="btn-primary-fill pill-btn"
                                    >Masuk</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="div">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
