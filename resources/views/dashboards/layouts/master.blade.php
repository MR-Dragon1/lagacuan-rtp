<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../" />
    <meta charset="UTF-8">
    <title>
        JEDERWD - Dashboard
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="JEDERWD - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta name="keywords" content="JEDERWD - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="JEDERWD - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Jeder WD" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    {{-- Datatables --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    {{-- Bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>




</head>

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">
    <script>
        var defaultThemeMode = "dark"; // Mengubah nilai defaultThemeMode menjadi "dark"
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Header container-->
                <div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
                    <!--begin::Header logo-->
                    <div class="d-flex d-lg-none align-items-center me-lg-20 gap-1 gap-lg-2">
                        <!--begin::Mobile toggle-->
                        <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px d-flex d-lg-none"
                            id="kt_app_sidebar_toggle">
                            <i class="ki-outline ki-abstract-14 lh-0 fs-1"></i>
                        </div>
                        <!--end::Mobile toggle-->
                        <!--begin::Logo image-->
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/demo63.svg" class="h-25px theme-light-show" />
                            <img alt="Logo" src="assets/media/logos/demo63-dark.svg"
                                class="h-25px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Header logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
                        <!--begin::Page title-->
                        <div class="app-page-title d-flex flex-column gap-1 me-3 mb-5 mb-lg-0" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Title-->
                            <h1 class="fs-2 text-gray-900 fw-bold m-0">
                                Dashboard
                            </h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600 fw-bold lh-1">
                                    <a href="index.html" class="text-gray-700 text-hover-primary me-1">
                                        <i class="ki-outline ki-home text-gray-500 fs-7"></i>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="ki-outline ki-right fs-7 text-gray-500 mx-n1"></i>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-600 fw-bold lh-1">

                                    @if (request()->is('index-data'))
                                        Lottery
                                    @elseif(request()->is('index-result'))
                                        Result
                                    @elseif(request()->is('index-prediksi'))
                                        Prediction
                                    @elseif(request()->is('index-bukti'))
                                        Testimony
                                    @elseif(request()->is('index-jadwal'))
                                        Schedule
                                    @elseif(request()->is('index-buku'))
                                        Book
                                    @elseif(request()->is('index-keluhan'))
                                        Complaint
                                    @elseif(request()->is('index-banner'))
                                        Banner
                                    @elseif(request()->is('index-pola'))
                                        Set URL & Random RTP
                                    @elseif(request()->is('my-profile'))
                                        My Profile
                                    @elseif(request()->is('index-contact'))
                                        My Contact
                                    @elseif(request()->is('index-shio'))
                                        Shio
                                    @endif
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0 gap-2 gap-lg-4">
                            <!--begin::Search-->
                            <div class="app-navbar-item">
                                <!--begin::Search-->
                                <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                    data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                    <!--begin::Search toggle-->
                                    <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                        id="kt_header_search_toggle"></div>
                                    <!--end::Search toggle-->
                                    <!--begin::Menu-->
                                    <div data-kt-search-element="content"
                                        class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                        <!--begin::Wrapper-->
                                        <div data-kt-search-element="wrapper">
                                            <!--begin::Form-->
                                            <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                                autocomplete="off">
                                                <!--begin::Icon-->
                                                <i
                                                    class="ki-outline ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>
                                                <!--end::Icon-->
                                                <!--begin::Input-->
                                                <input type="text"
                                                    class="search-input form-control form-control-flush ps-10"
                                                    name="search" value="" placeholder="Search..."
                                                    data-kt-search-element="input" />
                                                <!--end::Input-->
                                                <!--begin::Spinner-->
                                                <span
                                                    class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                                    data-kt-search-element="spinner">
                                                    <span
                                                        class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                                </span>
                                                <!--end::Spinner-->
                                                <!--begin::Reset-->
                                                <span
                                                    class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                                    data-kt-search-element="clear">
                                                    <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                                                </span>
                                                <!--end::Reset-->
                                                <!--begin::Toolbar-->
                                                <div class="position-absolute top-50 end-0 translate-middle-y"
                                                    data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                                                        data-bs-toggle="tooltip" title="Show search preferences">
                                                        <i class="ki-outline ki-setting-2 fs-2"></i>
                                                    </div>
                                                    <!--end::Preferences toggle-->
                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-outline ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </form>
                                            <!--end::Form-->
                                            <!--begin::Separator-->
                                            <div class="separator border-gray-200 mb-6"></div>
                                            <!--end::Separator-->
                                            <!--begin::Recently viewed-->
                                            <div data-kt-search-element="results" class="d-none">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-350px">
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Users
                                                    </h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-6.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Karina
                                                                Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing
                                                                Manager</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-2.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Olivia
                                                                Bold</span>
                                                            <span class="fs-7 fw-semibold text-muted">Software
                                                                Engineer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-9.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Ana
                                                                Clark</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI/UX
                                                                Designer</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-14.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Nick
                                                                Pitola</span>
                                                            <span class="fs-7 fw-semibold text-muted">Art
                                                                Director</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <img src="assets/media/avatars/300-11.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Edward
                                                                Kulnic</span>
                                                            <span class="fs-7 fw-semibold text-muted">System
                                                                Administrator</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Customers
                                                    </h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/volicity-9.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company
                                                                Rbranding</span>
                                                            <span class="fs-7 fw-semibold text-muted">UI
                                                                Design</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tvit.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Company
                                                                Re-branding</span>
                                                            <span class="fs-7 fw-semibold text-muted">Web
                                                                Development</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/misc/infography.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Business
                                                                Analytics
                                                                App</span>
                                                            <span
                                                                class="fs-7 fw-semibold text-muted">Administration</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/leaf.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">EcoLeaf App
                                                                Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <img class="w-20px h-20px"
                                                                    src="assets/media/svg/brand-logos/tower.svg"
                                                                    alt="" />
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div
                                                            class="d-flex flex-column justify-content-start fw-semibold">
                                                            <span class="fs-6 fw-semibold">Tower Group
                                                                Website</span>
                                                            <span class="fs-7 fw-semibold text-muted">Google
                                                                Adwords</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Category title-->
                                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                        data-kt-search-element="category-title">
                                                        Projects
                                                    </h3>
                                                    <!--end::Category title-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-notepad fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Si-Fi
                                                                Project by
                                                                AU
                                                                Themes</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-frame fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Shopix
                                                                Mobile App
                                                                Planning</span>
                                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-outline ki-message-text-2 fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Finance
                                                                Monitoring
                                                                SAAS
                                                                Discussion</span>
                                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <a href="#"
                                                        class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-outline ki-profile-circle fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <span class="fs-6 fw-semibold">Dashboard
                                                                Analitics
                                                                Launch</span>
                                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Recently viewed-->
                                            <div class="mb-5" data-kt-search-element="main">
                                                <!--begin::Heading-->
                                                <div class="d-flex flex-stack fw-semibold mb-4">
                                                    <!--begin::Label-->
                                                    <span class="text-muted fs-6 me-2">Recently
                                                        Searched:</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-200px mh-lg-325px">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-laptop fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                                by
                                                                Keenthemes</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-outline ki-chart-simple fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                                API
                                                                Project
                                                                Meeting</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-chart fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                                Monitoring
                                                                App
                                                                Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                                Reference
                                                                FAQ</a>
                                                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-sms fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                                App
                                                                Development</a>
                                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i class="ki-outline ki-bank fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                                Mobile
                                                                App</a>
                                                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-40px me-4">
                                                            <span class="symbol-label bg-light">
                                                                <i
                                                                    class="ki-outline ki-chart-line-down fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                                UI
                                                                Design"
                                                                Launch</a>
                                                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Recently viewed-->
                                            <!--begin::Empty-->
                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                <!--begin::Icon-->
                                                <div class="pt-10 pb-10">
                                                    <i class="ki-outline ki-search-list fs-4x opacity-50"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Message-->
                                                <div class="pb-15 fw-semibold">
                                                    <h3 class="text-gray-600 fs-5 mb-2">
                                                        No result found
                                                    </h3>
                                                    <div class="text-muted fs-7">
                                                        Please try again
                                                        with a different
                                                        query
                                                    </div>
                                                </div>
                                                <!--end::Message-->
                                            </div>
                                            <!--end::Empty-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">
                                                Advanced Search
                                            </h3>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Contains the word" name="query" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="has" checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="users" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="orders" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="type"
                                                            value="projects" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="assignedto"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Assigned to" value="" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <input type="text" name="collaborators"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Collaborators" value="" />
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <!--begin::Radio group-->
                                                <div class="nav-group nav-group-fluid">
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="has" checked="checked" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
                                                            attachment</span>
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label>
                                                        <input type="radio" class="btn-check" name="attachment"
                                                            value="any" />
                                                        <span
                                                            class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                    </label>
                                                    <!--end::Option-->
                                                </div>
                                                <!--end::Radio group-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-5">
                                                <select name="timezone" aria-label="Select a Timezone"
                                                    data-control="select2" data-dropdown-parent="#kt_header_search"
                                                    data-placeholder="date_period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="next">
                                                        Within the next
                                                    </option>
                                                    <option value="last">
                                                        Within the last
                                                    </option>
                                                    <option value="between">
                                                        Between
                                                    </option>
                                                    <option value="on">
                                                        On
                                                    </option>
                                                </select>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-8">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <input type="number" name="date_number"
                                                        class="form-control form-control-sm form-control-solid"
                                                        placeholder="Lenght" value="" />
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="date_typer" aria-label="Select a Timezone"
                                                        data-control="select2"
                                                        data-dropdown-parent="#kt_header_search"
                                                        data-placeholder="Period"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="days">
                                                            Days
                                                        </option>
                                                        <option value="weeks">
                                                            Weeks
                                                        </option>
                                                        <option value="months">
                                                            Months
                                                        </option>
                                                        <option value="years">
                                                            Years
                                                        </option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="advanced-options-form-cancel">
                                                    Cancel
                                                </button>
                                                <a href="utilities/search/horizontal.html"
                                                    class="btn btn-sm fw-bold btn-primary"
                                                    data-kt-search-element="advanced-options-form-search">Search</a>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                        <!--begin::Preferences-->
                                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                                            <!--begin::Heading-->
                                            <h3 class="fw-semibold text-gray-900 mb-7">
                                                Search Preferences
                                            </h3>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="pb-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate
                                                        Programs</span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                                    <input class="form-check-input" type="checkbox" value="1"
                                                        checked="checked" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="py-4 border-bottom">
                                                <label
                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                    <span
                                                        class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </label>
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end pt-7">
                                                <button type="reset"
                                                    class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                    data-kt-search-element="preferences-dismiss">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-sm fw-bold btn-primary">
                                                    Save Changes
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Preferences-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Search-->
                            <!--begin::Notifications-->
                            <div class="app-navbar-item">
                                <!--begin::Menu- wrapper-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                    data-kt-menu="true" id="kt_menu_notifications">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                        style="
    background-image: url('assets/media/misc/menu-header-bg.jpg');
    ">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                            Notifications
                                            <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                        </h3>
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i
                                                                    class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Alice</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Phase 1
                                                                development
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 hr</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i
                                                                    class="ki-outline ki-information fs-2 text-danger"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                                Confidential</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Confidential
                                                                staff
                                                                documents
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i
                                                                    class="ki-outline ki-briefcase fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                                HR</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Corporeate
                                                                staff
                                                                profiles
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-success">
                                                                <i
                                                                    class="ki-outline ki-abstract-12 fs-2 text-success"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Redux</a>
                                                            <div class="text-gray-500 fs-7">
                                                                New frontend
                                                                admin theme
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i
                                                                    class="ki-outline ki-colors-square fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Breafing</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Product
                                                                launch
                                                                status
                                                                update
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-outline ki-picture fs-2 text-info"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                                Assets</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Collection
                                                                of banner
                                                                images
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i
                                                                    class="ki-outline ki-color-swatch fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                                Assets</a>
                                                            <div class="text-gray-500 fs-7">
                                                                Collection
                                                                of SVG icons
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">20 March</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="pages/user-profile/activity.html"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <i class="ki-outline ki-arrow-right fs-5"></i></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                            role="tabpanel">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column px-9">
                                                <!--begin::Section-->
                                                <div class="pt-10 pb-0">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-900 text-center fw-bold">
                                                        Get Pro Access
                                                    </h3>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="text-center text-gray-600 fw-semibold pt-1">
                                                        Outlines keep you
                                                        honest. They stoping
                                                        you from amazing
                                                        poorly about drive
                                                    </div>
                                                    <!--end::Text-->
                                                    <!--begin::Action-->
                                                    <div class="text-center mt-5 mb-9">
                                                        <a href="#" class="btn btn-sm btn-primary px-6"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-4">
                                                    <img class="mw-100 mh-200px" alt="image"
                                                        src="assets/media/illustrations/sketchy-1/1.png" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">New
                                                            order</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">New
                                                            customer</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Search
                                                            query</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">API
                                                            connection</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 week</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Database
                                                            restore</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Mar 5</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">System
                                                            update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">May 15</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Server
                                                            OS
                                                            update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Apr 3</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">API
                                                            rollback</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jun 30</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jul 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Sep 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->
                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                            tasks</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Dec 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="pages/user-profile/activity.html"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <i class="ki-outline ki-arrow-right fs-5"></i></a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->
                            <!--begin::Chat-->
                            <div class="app-navbar-item">
                                <!--begin::Menu wrapper-->

                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                            <!--begin::My apps links-->
                            <div class="app-navbar-item">
                                <!--begin::Menu wrapper-->

                                <!--begin::My apps-->

                                <!--end::My apps-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::My apps links-->
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-lg-5" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="d-flex align-items-center"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <!--begin:Info-->
                                    <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                        <span class="text-gray-500 fs-8 fw-bold">Hello</span>
                                        <div href="pages/user-profile/overview.html"
                                            class="text-gray-800 text-hover-primary fs-7 fw-bold d-block">
                                            {{ Auth::user()->name }}</div>
                                    </div>
                                    <!--end:Info-->
                                    <!--begin::User-->
                                    <div class="cursor-pointer symbol symbol symbol-circle symbol-35px symbol-md-35px">
                                        <img class="" src="assets/media/avatars/person.png" alt="user" />
                                        <div
                                            class="position-absolute translate-middle bottom-0 mb-1 start-100 ms-n1 bg-success rounded-circle h-8px w-8px">
                                        </div>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-40px me-5">
                                                <img alt="Logo" src="assets/media/avatars/person.png" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    {{ Auth::user()->name }}
                                                    <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Active</span>
                                                </div>
                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>

                                    <div class="menu-item px-5">
                                        <a href="/my-profile" class="menu-link px-5">My Profile</a>
                                    </div>



                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">Mode
                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                                    <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                                </span></span>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-night-day fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">Light</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-moon fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">Dark</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-screen fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">System</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->


                                    <div class="menu-item px-5">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a onclick="event.preventDefault();
                        this.closest('form').submit();"
                                                class="menu-link px-5">Sign Out</a>
                                        </form>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->
                            <!--begin::Sidebar menu toggle-->
                            <!--end::Sidebar menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_toggle">
                    <!--begin::Header-->
                    <div class="d-none d-lg-flex flex-center px-6 pt-6 pb-6" id="kt_app_sidebar_header">
                        <a href="index.html">
                            <img alt="Logo" src="assets/media/logos/logo-dash.png" class="h-50px" />
                        </a>
                    </div>
                    <!--end::Header-->
                    <div class="flex-grow-1">
                        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-y" data-kt-scroll="true"
                            data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer"
                            data-kt-scroll-offset="20px">
                            <div class="app-sidebar-navs-default px-5 mb-10">
                                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                                    class="menu menu-column menu-rounded menu-sub-indention">
                                    <div class="menu-item pb-0 pt-0">
                                        <div class="menu-content">
                                            <span class="menu-heading">Public</span>
                                        </div>
                                    </div>
                                    <div class="separator mb-4 mx-4"></div>
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-title">Dashboard</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-data')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-data') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">List Lottery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-shio')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-shio') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Shio Lottery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-result')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-result') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Result Lottery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-jadwal')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-jadwal') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Schedule Lottery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>


                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-prediksi')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-prediksi') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Prediction Lottery</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-bukti')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-bukti') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Testimony Jackpot</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-buku')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-buku') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Dream Book</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-keluhan')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-keluhan') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Customer Complaint</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>

                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <!--begin:Menu link-->
                                        <span class="menu-link">
                                            <span class="menu-title">Additional</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->

                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-banner')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-banner') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Banner</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-pola')) class="menu-link active" @endif
                                                    class="menu-link" href="{{ route('index-pola-rtp') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">RTP SLOT</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('my-profile')) class="menu-link active" @endif
                                                    class="menu-link" href="/my-profile">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">My Profile</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-contact')) class="menu-link active" @endif
                                                    class="menu-link" href="/index-contact">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">My Contact</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->

                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->

                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack px-10 px-lg-15 pb-8" id="kt_app_sidebar_footer">
                        <span class="d-flex flex-center gap-1 text-white theme-light-show fs-5 px-0">
                            <i class="ki-outline ki-night-day text-gray-500 fs-2"></i>Dark Mode</span>
                        <span class="d-flex flex-center gap-1 text-white theme-dark-show fs-5 px-0">
                            <i class="ki-outline ki-moon text-gray-500 fs-2"></i>Light Mode</span>
                        <div data-bs-theme="dark">
                            <div class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input h-25px w-45px" type="checkbox" value="1"
                                    id="kt_sidebar_theme_mode_toggle" />
                            </div>
                        </div>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Main-->
                @yield('content')
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-gray-900">
                    Activity Logs
                </h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        There are 2 new tasks for you in
                                        “AirPlus Mobile App” project:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Added at 4:23 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div
                                            class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System
                                                Development</span>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::User-->
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->
                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->
                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4">
                                <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Invitation for crafting engaging
                                        designs that speak human workshop
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Sent at 4:23 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3
                                        New Incoming
                                        Project Files:</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Sent at 10:30 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3"
                                                src="assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">
                                                    1.9mb
                                                </div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                src="assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT
                                                    Testing
                                                    Results</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">
                                                    18kb
                                                </div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                src="assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance
                                                    Reports</a>
                                                <!--end::Desc-->
                                                <!--begin::Number-->
                                                <div class="text-gray-500">
                                                    20mb
                                                </div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro
                                        Admin Dashboard
                                        project:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Initiated at 4:23 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        3 new application design concepts
                                        added:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Created at 4:23 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top"
                                            title="Marcus Dotson">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#"
                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to
                                        you in
                                        Multi-platform Database Design
                                        project
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">
                                                Added at 4:23 PM by
                                            </div>
                                            <!--end::Info-->
                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        You have received a new order:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Placed at 5:05 AM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">
                                                    Database Backup Process
                                                    Completed!
                                                </h4>
                                                <div class="fs-6 text-gray-700 pe-7">
                                                    Login into Admin
                                                    Dashboard to make sure
                                                    the data integrity is OK
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->
                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->
                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for
                                        Workshow Planning &
                                        Budget Estimation
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">
                                            Placed at 4:23 PM by
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
                    <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->
    <!--begin::Chat drawer-->

    <!--end::Chat drawer-->
    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
        data-kt-drawer-close="#kt_drawer_shopping_cart_close">
        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">
                    Shopping Cart
                </h3>
                <!--end::Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->
                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check
                            <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button
                                class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">39</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">339</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+
                                                    team
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">999</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span></span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->
                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">
                                                What’s in Startup Plan?
                                            </h2>
                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size
                                                and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                    Active
                                                    Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project
                                                    Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">
                                                What’s in Startup Plan?
                                            </h2>
                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size
                                                and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                    Active
                                                    Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project
                                                    Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">
                                                What’s in Startup Plan?
                                            </h2>
                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and
                                                enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                    Active
                                                    Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                    Project
                                                    Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">
                                                What’s in Startup Plan?
                                            </h2>
                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Users</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Project
                                                    Integrations</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
                                                    Module</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
                                                    Platform</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                    Cloud
                                                    Space</span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Upgrade Plan</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan-->
    <!--begin::Modal - View Users-->
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Browse Users</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out our
                            <a href="#" class="link-primary fw-bold">Users Directory</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Users-->
                    <div class="mb-15">
                        <!--begin::List-->
                        <div class="mh-375px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma
                                            Smith
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Art
                                                Director</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            smith@kpmg.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $23,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody
                                            Macy
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                Analytic</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            melody@altbox.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $50,500
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max
                                            Smith
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                Enginer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            max@kt.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $75,900
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean
                                            Bean
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web
                                                Developer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            sean@dellito.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $10,500
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian
                                            Cox
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX
                                                Designer</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            brian@exchange.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $20,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela
                                            Collins
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of
                                                Marketing</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            mik@pex.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $9,300
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis
                                            Mitcham
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Software
                                                Arcitect</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            f.mit@kpmg.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $15,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia
                                            Wild
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">System
                                                Admin</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            olivia@corpmail.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $23,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil
                                            Owen
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Account
                                                Manager</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            owen.neil@gmail.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $45,800
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan
                                            Wilson
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Web
                                                Desinger</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            dam@consilting.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $90,500
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma
                                            Bold
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate
                                                Finance</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            emma@intenso.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $5,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana
                                            Crown
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Customer
                                                Relationship</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            ana.cf@limtel.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $70,000
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-5">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert
                                            Doe
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing
                                                Executive</span></a>
                                        <!--end::Name-->
                                        <!--begin::Email-->
                                        <div class="fw-semibold text-muted">
                                            robert@benko.com
                                        </div>
                                        <!--end::Email-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::Sales-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-gray-900">
                                            $45,500
                                        </div>
                                        <div class="fs-7 text-muted">
                                            Sales
                                        </div>
                                    </div>
                                    <!--end::Sales-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Label-->
                        <div class="fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">
                                If you need more info, please check budget
                                planning
                            </div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - View Users-->
    <!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>
                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->
                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true"
                        data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5"
                            autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            <!--begin::Icon-->
                            <i
                                class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value=""
                                placeholder="Search by username, full name or email..."
                                data-kt-search-element="input" />
                            <!--end::Input-->
                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->
                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                            </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">
                                    Recently searched:
                                </h3>
                                <!--end::Heading-->
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span
                                                class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->
                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">
                                                    smith@kpmg.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-semibold text-muted">
                                                    melody@altbox.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">
                                                    max@kt.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>
                                                <div class="fw-semibold text-muted">
                                                    sean@dellito.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>
                                                <div class="fw-semibold text-muted">
                                                    brian@exchange.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>
                                                <div class="fw-semibold text-muted">
                                                    mik@pex.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-semibold text-muted">
                                                    f.mit@kpmg.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>
                                                <div class="fw-semibold text-muted">
                                                    olivia@corpmail.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-semibold text-muted">
                                                    owen.neil@gmail.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-semibold text-muted">
                                                    dam@consilting.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>
                                                <div class="fw-semibold text-muted">
                                                    emma@intenso.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>
                                                <div class="fw-semibold text-muted">
                                                    ana.cf@limtel.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>
                                                <div class="fw-semibold text-muted">
                                                    robert@benko.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>
                                                <div class="fw-semibold text-muted">
                                                    miller@mapple.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>
                                                <div class="fw-semibold text-muted">
                                                    lucy.m@fentech.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2" selected="selected">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>
                                                <div class="fw-semibold text-muted">
                                                    ethan@loop.com.au
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-semibold text-muted">
                                                    smith@kpmg.com
                                                </div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">
                                                    Guest
                                                </option>
                                                <option value="2">
                                                    Owner
                                                </option>
                                                <option value="3" selected="selected">
                                                    Can Edit
                                                </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset"
                                        data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                        Cancel
                                    </button>
                                    <button type="submit" id="kt_modal_users_search_submit"
                                        class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">
                                        No users found
                                    </div>
                                    <div class="text-muted fs-6">
                                        Try to search by username, full name
                                        or email...
                                    </div>
                                </div>
                                <!--end::Message-->
                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                            class="h-20px me-3" />Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->
                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                    <!--end::Textarea-->
                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">
                            Your Invitations
                        </div>
                        <!--end::Heading-->
                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                        <div class="fw-semibold text-muted">
                                            smith@kpmg.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                        <div class="fw-semibold text-muted">
                                            melody@altbox.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">
                                            Guest
                                        </option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                        <div class="fw-semibold text-muted">
                                            max@kt.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                        <div class="fw-semibold text-muted">
                                            sean@dellito.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                        <div class="fw-semibold text-muted">
                                            brian@exchange.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>
                                        <div class="fw-semibold text-muted">
                                            mik@pex.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>
                                        <div class="fw-semibold text-muted">
                                            f.mit@kpmg.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                        <div class="fw-semibold text-muted">
                                            olivia@corpmail.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                        <div class="fw-semibold text-muted">
                                            owen.neil@gmail.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">
                                            Guest
                                        </option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                        <div class="fw-semibold text-muted">
                                            dam@consilting.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                        <div class="fw-semibold text-muted">
                                            emma@intenso.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                        <div class="fw-semibold text-muted">
                                            ana.cf@limtel.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">
                                            Guest
                                        </option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                        <div class="fw-semibold text-muted">
                                            robert@benko.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                        <div class="fw-semibold text-muted">
                                            miller@mapple.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                        <div class="fw-semibold text-muted">
                                            lucy.m@fentech.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="selected">
                                            Owner
                                        </option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>
                                        <div class="fw-semibold text-muted">
                                            ethan@loop.com.au
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1" selected="selected">
                                            Guest
                                        </option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#"
                                            class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                        <div class="fw-semibold text-muted">
                                            melody@altbox.com
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm"
                                        data-control="select2" data-dropdown-parent="#kt_modal_invite_friends"
                                        data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="selected">
                                            Can Edit
                                        </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">
                                If you need more info, please check budget
                                planning
                            </div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    {{-- <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script> --}}
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
</body>

</html>
