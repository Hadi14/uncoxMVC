<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/Custome-style.css">
    <link rel="stylesheet" href="./css/all.min.css">

</head>

<body>
    <?
    require_once("./Config/main.php");
    $guest = isset($_SESSION['suname']);
    if ($guest) {
        echo $_SESSION['suname'] . " " .  "عزیز خوش آمدید ";
    } else {
        echo "کاربر مهمان خوش آمدید";
    }
    ?>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">



        <!-- ! Sidebar *********************************************-->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <!-- <span class="icon logo" aria-hidden="true"></span> -->
                        <i class="bi bi-buildings"></i>
                        <div class="logo-text">
                            <span class="logo-title">آمار ماهیانه </span>
                            <span class="logo-subtitle">داشبورد مدیریتی</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>صفحه اصلی</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon document" aria-hidden="true"></span>حوزه حمایت
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="./insert-poplulation.php">آمار جمعیتی</a>
                                </li>
                                <li>
                                    <a href="./economy.php"> آمار معیشت</a>
                                </li>
                                <li>
                                    <a href="dowry.php">جهیزیه</a>
                                </li>
                                <li>
                                    <a href="insurance.php">بیمه های اجتماعی</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>صندوق امدادولایت
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="bank.php">صندوق امدادولایت</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon folder" aria-hidden="true"></span>فرهنگی
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="categories.php">فرهنگی</a>
                                </li>
                            </ul>
                        </li>



                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon image" aria-hidden="true"></span>مسکن و ساختمان
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="media-01.php">ثبت آمار مسکن</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon paper" aria-hidden="true"></span>اشتغال و خودکفایی
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="pages.php">ثبت آمار اشتغال</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="comments.php">
                                <span class="icon message" aria-hidden="true"></span>
                                نیروی انسانی
                            </a>
                            <span class="msg-counter">7</span>
                        </li>
                    </ul>
                    <span class="system-menu__title mt-5">پنل مدیر سیستم</span>
                    <ul class="sidebar-body-menu">
                        <li>
                            <a href="#"><span class="icon edit" aria-hidden="true"></span>تعریف و ویرایش کاربران</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon category" aria-hidden="true"></span>Extentions
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="#">Extentions-01</a>
                                </li>
                                <li>
                                    <a href="#">Extentions-02</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon user-3" aria-hidden="true"></span>Users
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="#">Users-01</a>
                                </li>
                                <li>
                                    <a href="#">Users-02</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="##" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <picture>
                            <source srcset="./img/avatar/avatar-illustrated-03.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-03.png" alt="User name">
                        </picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title">Enginner</span>
                        <span class="sidebar-user__subtitle">Support manager</span>
                    </div>
                </a>
            </div>
        </aside>
        <!-- End Sidebar *-*****************************************************-->



        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <div class="search-wrapper">
                            <i data-feather="search" aria-hidden="true"></i>
                            <input type="text" placeholder="جستجو ...." required>
                        </div>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <div class="lang-switcher-wrapper">
                            <button class="lang-switcher transparent-btn" type="button">
                                فا
                                <i data-feather="chevron-down" aria-hidden="true"></i>
                            </button>
                            <ul class="lang-menu dropdown">
                                <li><a href="##">English</a></li>
                                <li><a href="##">فارسی</a></li>
                            </ul>
                        </div>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="notification-wrapper">
                            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                                <span class="sr-only">To messages</span>
                                <span class="icon notification active" aria-hidden="true"></span>
                            </button>
                            <ul class="users-item-dropdown notification-dropdown dropdown">
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">System just updated</span>
                                            <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                                                here.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon danger">
                                            <i data-feather="info" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">The cache is full!</span>
                                            <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                                                interfere ...</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">New Subscriber here!</span>
                                            <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="link-to-page" href="##">Go to Notifications page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>پروفایل</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>تنظیمات</span>
                                    </a></li>
                                <li class="exitLi"><a class="danger" href="./logout.php">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>خروج</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">آمار ماه های اخیر ...</h2>
                    <div class="row stat-cards">


                        <!-- **** -->
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-info">
                                    <p class="stat-cards-info__num">تعداد خانوار تحت پوشش ماه قبل</p>
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                                        <p class="stat-cards-info__title">43,159</p>
                                    </div>
                                    <p class="stat-cards-info__progress mt-3">
                                        <span class="stat-cards-info__profit success mx-1">
                                            <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                        </span>
                                        تغییر نسبت به ماه قبل
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- ****** -->
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-info">
                                    <p class="stat-cards-info__num">مبلغ معیشت پرداخت شده</p>
                                    <div class="d-flex  align-items-center">
                                        <i class="bi bi-cash-stack mx-2 stat-cards-icon primary"></i>
                                        <p class="stat-cards-info__title">43,159</p>
                                    </div>
                                    <p class="stat-cards-info__progress mt-3">
                                        <span class="stat-cards-info__profit success mx-1">
                                            <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                        </span>
                                        تغییر نسبت به ماه قبل
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- ****** -->
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-info">
                                    <p class="stat-cards-info__num">تعداد اشتغال ایجاد شده</p>
                                    <div class="d-flex  align-items-center">
                                        <i class="fa-solid fa-user-nurse  mx-2 stat-cards-icon primary"></i>
                                        <p class="stat-cards-info__title">43,159</p>
                                    </div>
                                    <p class="stat-cards-info__progress mt-3">
                                        <span class="stat-cards-info__profit success mx-1">
                                            <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                        </span>
                                        تغییر نسبت به ماه قبل
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- ****** -->
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-info">
                                    <p class="stat-cards-info__num">مبلغ صدقات جمع آوری شده</p>
                                    <div class="d-flex  align-items-center">
                                        <i class="bi bi-currency-dollar mx-2 stat-cards-icon primary"></i>
                                        <p class="stat-cards-info__title">43,159</p>
                                    </div>
                                    <p class="stat-cards-info__progress mt-3">
                                        <span class="stat-cards-info__profit success mx-1">
                                            <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                                        </span>
                                        تغییر نسبت به ماه قبل
                                    </p>
                                </div>
                            </article>
                        </div>
                        <!-- ****** -->

                    </div>
                    <!-- ******************** -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="chart">
                                روند آمارهای حوزه ها از ابتدای سال
                                <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
                            </div>
                            <div class="users-table table-wrapper">
                                <table class="posts-table text-center">
                                    <caption class="text-primary caption-top mt-5 pb-0 text-center">آمارهای ثبت شده ماه اخیر
                                    </caption>
                                    <thead>
                                        <tr class="users-table-info border border-muted">
                                            <th>
                                                <label class="users-table__checkbox ">
                                                    <input type="checkbox" class="check-all ">
                                                    <span class="ms-4">عکس پروفایل</span>
                                                </label>
                                            </th>
                                            <th>عنوان</th>
                                            <th>ثبت کننده</th>
                                            <th>وضعیت</th>
                                            <th>تاریخ</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="./img/avatar/avatar-face-02.png" alt="User Name">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                ثبت فعالیت آمار جمعیتی
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <!-- <picture>
                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img
                              src="./img/avatar/avatar-face-02.png" alt="User Name">
                          </picture> -->
                                                    هادی هاشمی
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td class="digitfont">1402-04-02</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a class="text-center" href="##">ویرایش</a></li>
                                                        <li><a class="text-center" href="##">تایید</a></li>
                                                        <li><a class="text-center" href="##">رد</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="./img/avatar/avatar-face-02.png" alt="User Name">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                ثبت فعالیت آمار جمعیتی
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <!-- <picture>
                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img
                              src="./img/avatar/avatar-face-02.png" alt="User Name">
                          </picture> -->
                                                    هادی هاشمی
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td class="digitfont">1402-04-02</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a class="text-center" href="##">ویرایش</a></li>
                                                        <li><a class="text-center" href="##">تایید</a></li>
                                                        <li><a class="text-center" href="##">رد</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="./img/avatar/avatar-face-02.png" alt="User Name">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                ثبت فعالیت آمار جمعیتی
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <!-- <picture>
                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img
                              src="./img/avatar/avatar-face-02.png" alt="User Name">
                          </picture> -->
                                                    هادی هاشمی
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td class="digitfont">1402-04-02</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a class="text-center" href="##">ویرایش</a></li>
                                                        <li><a class="text-center" href="##">تایید</a></li>
                                                        <li><a class="text-center" href="##">رد</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="./img/avatar/avatar-face-02.png" alt="User Name">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                ثبت فعالیت آمار جمعیتی
                                            </td>
                                            <td>
                                                <div class="pages-table-img">

                                                    هادی هاشمی
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td class="digitfont">1402-04-02</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a class="text-center" href="##">ویرایش</a></li>
                                                        <li><a class="text-center" href="##">تایید</a></li>
                                                        <li><a class="text-center" href="##">رد</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="users-table__checkbox">
                                                    <input type="checkbox" class="check">
                                                    <div class="categories-table-img">
                                                        <picture>
                                                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img src="./img/avatar/avatar-face-02.png" alt="User Name">
                                                        </picture>
                                                    </div>
                                                </label>
                                            </td>
                                            <td>
                                                ثبت فعالیت آمار جمعیتی
                                            </td>
                                            <td>
                                                <div class="pages-table-img">
                                                    <!-- <picture>
                            <source srcset="./img/avatar/avatar-face-03.webp" type="image/webp"><img
                              src="./img/avatar/avatar-face-02.png" alt="User Name">
                          </picture> -->
                                                    هادی هاشمی
                                                </div>
                                            </td>
                                            <td><span class="badge-pending">Pending</span></td>
                                            <td class="digitfont">1402-04-02</td>
                                            <td>
                                                <span class="p-relative">
                                                    <button class="dropdown-btn transparent-btn" type="button" title="More info">
                                                        <div class="sr-only">More info</div>
                                                        <i data-feather="more-horizontal" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="users-item-dropdown dropdown">
                                                        <li><a class="text-center" href="##">ویرایش</a></li>
                                                        <li><a class="text-center" href="##">تایید</a></li>
                                                        <li><a class="text-center" href="##">رد</a></li>
                                                    </ul>
                                                </span>
                                            </td>
                                        </tr>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <article class="customers-wrapper">
                                <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>
                                <!--              <p class="customers__title">New Customers <span>+958</span></p>
              <p class="customers__date">28 Daily Avg.</p>
              <picture><source srcset="./img/svg/customers.svg" type="image/webp"><img src="./img/svg/customers.svg" alt=""></picture> -->
                            </article>
                            <article class="white-block">
                                <div class="top-cat-title">
                                    <h3>سریعترین ثبت ماه اخیر</h3>
                                    <p>کل تعداد ثبت های هر ماه 9 سری آمار می باشد</p>
                                </div>
                                <ul class="top-cat-list">
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                جمعیتی <span>08:15</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                هادی هاشمی <span class="purple">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                مشارکت های مردمی<span>09:10</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                حمزه اکبرزاده <span class="blue">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                صندوق امدادولایت <span>10:20</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                مهدی صالحی <span class="danger">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                فرهنگی <span>11:20</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                رسول صالحی <span class="success">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                مسکن و ساختمان<span>11:20</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                فرشید حیدریان<span class="warning">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                اشتغال و خودکفایی <span>11:20</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                یادگاربراتی <span class="warning">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="##">
                                            <div class="top-cat-list__title">
                                                نیروی انسانی <span>11:20</span>
                                            </div>
                                            <div class="top-cat-list__subtitle">
                                                مهدی ترکی <span class="warning">1402-02-04</span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank" rel="noopener noreferrer">elegant-dashboard.com</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="./plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom-script.js"></script>
</body>

</html>