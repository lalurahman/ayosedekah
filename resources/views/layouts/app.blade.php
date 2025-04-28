<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
>

<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="description"
        content="Ayo Sedekah"
    >
    <meta
        name="keywords"
        content="sedekah"
    >
    <meta
        name="author"
        content="initTheme"
    >
    <meta
        property="og:type"
        content="website"
    >
    <meta
        property="og:title"
        content="Website Donation"
    >
    <meta
        property="og:site_name"
        content="donate Website"
    >
    <meta
        property="og:description"
        content="Ayo Sedekah"
    >
    <meta
        name="twitter:description"
        content="Ayo Sedekah"
    >
    <title>@yield('title')</title>
    @include('layouts.partials.styles')
</head>

<body>
    @include('layouts.partials.navbar')
    <main>
        @yield('content')
    </main>
    <!-- Footer S t a r t -->
    @include('layouts.partials.footer')
    <!-- End-of Footer -->
    <!-- Scroll Up  -->
    <div
        class="progressParent"
        id="back-top"
    >
        <svg
            class="backCircle svg-inner"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an overlay element -->
    <div class="overlay"></div>
    <!-- jquery-->
    @include('layouts.partials.scripts')
</body>

</html>
