<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../" />
    <meta charset="UTF-8">
    <title>
        LAGACUAN - Dashboard
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="LAGACUAN - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta name="keywords" content="LAGACUAN - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="LAGACUAN - Link Alternatif Resmi Jeder WD, Official Login Jeder WD" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Jeder WD" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="icon" type="image/x-icon" href="https://gemswin.sgp1.digitaloceanspaces.com/favicon.png">

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
                    <div class="gap-1 d-flex d-lg-none align-items-center me-lg-20 gap-lg-2">
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
                        <div class="gap-1 mb-5 app-page-title d-flex flex-column me-3 mb-lg-0" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Title-->
                            <h1 class="m-0 text-gray-900 fs-2 fw-bold">
                                Dashboard
                            </h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="mb-2 breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                                <!--begin::Item-->
                                <li class="text-gray-600 breadcrumb-item fw-bold lh-1">
                                    <a href="index.html" class="text-gray-700 text-hover-primary me-1">
                                        <i class="text-gray-500 ki-outline ki-home fs-7"></i>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="text-gray-500 ki-outline ki-right fs-7 mx-n1"></i>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item fw-bold lh-1" style="color: #0074fb">

                                    @if (request()->is('/'))
                                        Lottery
                                    @elseif(request()->is('index-result'))
                                        Result
                                    @elseif(request()->is('index-prediksi'))
                                        Prediction
                                    @elseif(request()->is('index-bukti'))
                                        Testimony
                                    @elseif(request()->is('index-jadwal'))
                                        Schedule
                                    @elseif(request()->is('index-bola'))
                                        Football
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
                                    @elseif(request()->is('domain'))
                                        Domain
                                    @endif
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Navbar-->
                        <div class="flex-shrink-0 gap-2 app-navbar gap-lg-4">

                            <!--end::My apps links-->
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-lg-5" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="d-flex align-items-center"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin:Info-->
                                    <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                        <span class="text-gray-500 fs-8 fw-bold">Hello</span>
                                        <div href="pages/user-profile/overview.html"
                                            class="text-gray-800 text-hover-primary fs-7 fw-bold d-block">
                                            {{ Auth::user()->name }}</div>
                                    </div>
                                    <!--end:Info-->
                                    <!--begin::User-->
                                    <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-35px">
                                        <img class="" src="assets/media/avatars/person.png" alt="user" />
                                        <div
                                            class="bottom-0 mb-1 position-absolute translate-middle start-100 ms-n1 bg-success rounded-circle h-8px w-8px">
                                        </div>
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--begin::User account menu-->
                                <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="px-3 menu-item">
                                        <div class="px-3 menu-content d-flex align-items-center">
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
                                                        class="px-2 py-1 badge badge-light-success fw-bold fs-8 ms-2">Active</span>
                                                </div>
                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="my-2 separator"></div>

                                    <div class="px-5 menu-item">
                                        <a href="/my-profile" class="px-5 menu-link">My Profile</a>
                                    </div>



                                    <div class="my-2 separator"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->

                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="px-5 menu-item" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="px-5 menu-link">
                                            <span class="menu-title position-relative">Mode
                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                                    <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                                </span></span>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="py-4 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="px-3 my-0 menu-item">
                                                <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                                    data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-night-day fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">Light</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 my-0 menu-item">
                                                <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
                                                    data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-moon fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">Dark</span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="px-3 my-0 menu-item">
                                                <a href="#" class="px-3 py-2 menu-link" data-kt-element="mode"
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


                                    <div class="px-5 menu-item">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a onclick="event.preventDefault();
                        this.closest('form').submit();"
                                                class="px-5 menu-link">Sign Out</a>
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
                    <div class="px-6 pt-6 pb-6 d-none d-lg-flex flex-center" id="kt_app_sidebar_header">
                        <a href="index.html">
                            <img alt="Logo" src="https://gemswin.sgp1.digitaloceanspaces.com/logo-lagacuan.png"
                                class="h-50px" />
                        </a>
                    </div>
                    <!--end::Header-->
                    <div class="flex-grow-1">
                        <div id="kt_app_sidebar_menu_wrapper" class="hover-scroll-y" data-kt-scroll="true"
                            data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer"
                            data-kt-scroll-offset="20px">
                            <div class="px-5 mb-10 app-sidebar-navs-default">
                                <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                                    class="menu menu-column menu-rounded menu-sub-indention">
                                    <div class="pt-0 pb-0 menu-item">
                                        <div class="menu-content">
                                            <span class="menu-heading">Dashboard</span>
                                        </div>
                                    </div>
                                    <div class="mx-4 mb-4 separator"></div>
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                        <!--begin:Menu link-->

                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('/')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-shio')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-result')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-jadwal')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-bola')) class="menu-link active" style="background-color: #16438575;" @endif
                                                    class="menu-link" href="{{ route('index-bola') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Football Prediction</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>


                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-prediksi')) class="menu-link active" style="background-color: #16438575;" @endif
                                                    class="menu-link" href="{{ route('index-prediksi') }}">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Lottery Prediction</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-bukti')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-buku')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-keluhan')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                    <div class="pt-0 pb-0 menu-item">
                                        <div class="menu-content">
                                            <span class="menu-heading">Additional</span>
                                        </div>
                                    </div>
                                    <div class="mx-4 mb-4 separator"></div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="click" class="menu-item show menu-accordion">
                                        <!--begin:Menu link-->

                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-accordion">
                                            <!--begin:Menu item-->

                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('index-banner')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-pola')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('my-profile')) class="menu-link active" style="background-color: #16438575;" @endif
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
                                                <a @if (request()->is('index-contact')) class="menu-link active" style="background-color: #16438575;" @endif
                                                    class="menu-link" href="/index-contact">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">My Contact</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a @if (request()->is('domain')) class="menu-link active" style="background-color: #16438575;" @endif
                                                    class="menu-link" href="/domain">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Domain</span>
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
                    <div class="px-10 pb-8 d-flex flex-stack px-lg-15" id="kt_app_sidebar_footer">
                        <span class="gap-1 px-0 text-white d-flex flex-center theme-light-show fs-5">
                            <i class="text-gray-500 ki-outline ki-night-day fs-2"></i>Dark Mode</span>
                        <span class="gap-1 px-0 text-white d-flex flex-center theme-dark-show fs-5">
                            <i class="text-gray-500 ki-outline ki-moon fs-2"></i>Light Mode</span>
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
