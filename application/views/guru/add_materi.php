<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>House of Learning - Tambah Materi</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="<?=base_url('assets')?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?=base_url('assets')?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css"
        rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?=base_url('assets')?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css"
        rel="stylesheet" type="text/css" />
    <link
        href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css"
        rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url('assets')?>/assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet"
        type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?=base_url('assets')?>/assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?=base_url('assets')?>/img/favicon.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="<?=base_url('guru')?>">
                <img alt="Logo" src="<?=base_url('assets')?>/img/logo.png" width="90px;" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
                id="kt_aside">

                <!-- begin:: Brand -->
                <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                    <div class="kt-aside__brand-logo">
                        <a href="<?=base_url('guru')?>">
                            <img alt="Logo" width="35px;" src="<?=base_url('assets')?>/img/favicon.png" />
                        </a>
                    </div>
                </div>

                <!-- end:: Brand -->

                <!-- begin:: Aside Menu -->
                <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                    <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                        data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                        <ul class="kt-menu__nav ">
                            <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"><a
                                    href="<?=base_url('guru')?>" class="kt-menu__link"><i
                                        class="kt-menu__link-icon flaticon2-protection"></i><span
                                        class="kt-menu__link-text">Applications</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <div class="kt-menu__wrapper">

                                    </div>
                                </div>
                            </li>
                            <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open" aria-haspopup="true"
                                data-ktmenu-submenu-toggle="click"><a href="javascript:;"
                                    class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-calendar-5"></i><span
                                        class="kt-menu__link-text">Tambah</span><i
                                        class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                    <ul class="kt-menu__subnav">
                                        <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Tambah</span></span>
                                        </li>
                                        <li class="kt-menu__item " aria-haspopup="true"><a href="#"
                                                class="kt-menu__link "><i
                                                    class="kt-menu__link-icon la la-commenting"></i><span
                                                    class="kt-menu__link-text">Materi</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- end:: Aside Menu -->
            </div>
            <div class="kt-aside-menu-overlay"></div>

            <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

                    <!-- begin: Header Menu -->
                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout- ">
                            <ul class="kt-menu__nav ">
                                <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a
                                        href="<?=base_url('guru')?>" class="kt-menu__link "><span
                                            class="kt-menu__link-text">Dashboard</span></a></li>
                                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel"
                                    data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                        class="kt-menu__link kt-menu__toggle"><span
                                            class="kt-menu__link-text">Materi</span><i
                                            class="kt-menu__hor-arrow la la-angle-down"></i></a>
                                    <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                        <ul class="kt-menu__subnav">
                                            <li class="kt-menu__item " aria-haspopup="true"><a href="javascript:;"
                                                    class="kt-menu__link "><i
                                                        class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span
                                                        class="kt-menu__link-text">Tambah Materi</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- end: Header Menu -->

                    <!-- begin:: Header Topbar -->
                    <div class="kt-header__topbar">
                        <!--begin: User bar -->
                        <div class="kt-header__topbar-item kt-header__topbar-item--user">
                            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                                <span class="kt-hidden kt-header__topbar-username">Nick</span>
                                <img class="kt-hidden" alt="Pic"
                                    src="<?=base_url('assets')?>/assets/media/users/default.jpg" />
                                <span class="kt-header__topbar-icon"><i
                                        class="flaticon2-user-outline-symbol"></i></span>
                            </div>
                            <div
                                class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                                <!--begin: Head -->
                                <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                                    <div class="kt-user-card__avatar">
                                        <img class="kt-hidden-" alt="Pic"
                                            src="<?=base_url('assets')?>/assets/media/users/default.jpg" />

                                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                        <span
                                            class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                                    </div>
                                    <div class="kt-user-card__name font-weight-bold">
                                        Hai!, &nbsp;<?php
$data['user'] = $this->db->get_where('guru', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_guru'];
?>
                                    </div>
                                </div>

                                <!--end: Head -->

                                <!--begin: Navigation -->
                                <div class="kt-notification">
                                    <a href="#" class="kt-notification__item">
                                        <div class="kt-notification__item-icon">
                                            <i class="flaticon2-hourglass kt-font-brand"></i>
                                        </div>
                                        <div class="kt-notification__item-details">
                                            <div class="kt-notification__item-title kt-font-bold">
                                                Tambah data materi
                                            </div>
                                            <div class="kt-notification__item-time">
                                                Tambah Materi House of Learning
                                            </div>
                                        </div>
                                    </a>
                                    <div class="kt-notification__custom">
                                        <a href="<?=base_url('welcome/logout')?>"
                                            class="btn btn-label-brand btn-sm btn-bold">Log Out</a>
                                    </div>
                                </div>

                                <!--end: Navigation -->
                            </div>
                        </div>

                        <!--end: User bar -->
                    </div>

                    <!-- end:: Header Topbar -->
                </div>

                <!-- end:: Header -->
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                    <!-- begin:: Subheader -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-subheader__main">
                            <h1 class="kt-subheader__title font-weight-bold"
                                style="font-size: 35px !important; letter-spacing:-1px;">
                                Tambah Materi </h1>
                        </div>
                        <div class="kt-subheader__toolbar">
                            <div class="kt-subheader__wrapper">
                                <a href="#" class="btn kt-subheader__btn-daterange">
                                    <span class="kt-subheader__btn-daterange-title"
                                        id="kt_dashboard_daterangepicker_title">Tanggal</span>&nbsp;
                                    <span class="kt-subheader__btn-daterange-date"
                                        id="kt_dashboard_daterangepicker_date"><?php echo date('d / M / y'); ?></span>

                                    <!--<i class="flaticon2-calendar-1"></i>-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                        class="kt-svg-icon kt-svg-icon--sm">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z"
                                                id="check" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z"
                                                id="Combined-Shape" fill="#000000" />
                                        </g>
                                    </svg> </a>
                            </div>
                        </div>
                    </div>

                    <!-- end:: Subheader -->

                    <!-- begin:: Content -->

                    <!-- begin:: Content -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

                        <!--Begin::Dashboard 7-->

                        <!--Begin::Section-->

                        <div class="row">
                            <div class="col-md-12 bg-white p-4 container"
                                style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                <form method="post" enctype="multipart/form-data"
                                    action="<?=base_url('guru/add_materi')?>">
                                    <input type="hidden" name="id">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Guru</label>
                                            <input required type="text" readonly name="nama_guru" value="<?php
$data['user'] = $this->db->get_where('guru', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_guru'];?>" class="form-control" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Nama Mata Pelajaran</label>
                                            <input required type="text" readonly name="nama_mapel" value="<?php
$data['user'] = $this->db->get_where('guru', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama_mapel'];?>" class="form-control" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input required type="file" name="video" class="custom-file-input"
                                                    id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Upload Video
                                                    Materi Disini</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Deskripsi Materi</label>
                                        <textarea class="form-control" required name="deskripsi"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputState">Kelas</label>
                                        <select required id="inputState" name="kelas" class="form-control">
                                            <option selected>Pilih disini</option>
                                            <option value="X">X ( Kelas Sepuluh )</option>
                                            <option value="XI">XI ( Kelas Sebelas )</option>
                                            <option value="XII">XII ( Kelas Dua Belas )</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Tambah materi</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>

                <!--End::Section-->
                <br>
                <!--end:: Widgets/Order Statistics-->


                <!-- begin:: Footer -->
                <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop">
                    <div class="kt-footer__copyright">
                        2024&nbsp;&copy;&nbsp;<a href="https://github.com/" target="_blank"
                            class="kt-link">Kelompok Pem Web 2 & Descienfy</a>
                    </div>
                    <div class="kt-footer__menu">
                        Made with &nbsp; <span class="" style="color: red"> &#10084;</span> &nbsp; by Kel Pem Web 2
                    </div>
                </div>

                <!-- end:: Footer -->
            </div>
        </div>
    </div>

    <!-- end:: Page -->



    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- end::Scrolltop -->

    <!-- end::Demo Panel -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#4dbf1c",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
    </script>

    <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/moment/min/moment.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/wnumb/wNumb.js" type="text/javascript">
    </script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery-form/dist/jquery.form.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js"
        type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js"
        type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets')?>/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/bootstrap-switch/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js"
        type="text/javascript"></script>
    <script
        src="<?=base_url('assets')?>/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/nouislider/distribute/nouislider.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/owl.carousel/dist/owl.carousel.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/autosize/dist/autosize.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/markdown/lib/markdown.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/bootstrap-markdown/init.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/bootstrap-notify/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery-validation/dist/jquery.validate.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery-validation/dist/additional-methods.js"
        type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/jquery-validation/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/raphael/raphael.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/morris.js/morris.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript">
    </script>
    <script
        src="<?=base_url('assets')?>/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/waypoints/lib/jquery.waypoints.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/es6-promise-polyfill/promise.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/components/vendors/sweetalert2/init.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery.repeater/src/jquery.input.js"
        type="text/javascript"></script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript">
    </script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="<?=base_url('assets')?>/assets/demo/demo7/base/scripts.bundle.js" type="text/javascript">
    </script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="<?=base_url('assets')?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js"
        type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript">
    </script>
    <script src="<?=base_url('assets')?>/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript">
    </script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<?=base_url('assets')?>/assets/app/custom/general/dashboard.js" type="text/javascript">
    </script>

    <!--end::Page Scripts -->

    <!--begin::Global App Bundle(used by all pages) -->
    <script src="<?=base_url('assets')?>/assets/app/bundle/app.bundle.js" type="text/javascript">
    </script>

    <!--end::Global App Bundle -->
</body>

<!-- end::Body -->

</html>