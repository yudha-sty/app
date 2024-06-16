<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>FlowerAdvisor</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/dashboard" class="logo">
                            <h1>FlowerAdvisor</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <br><br><br><br>
                                <br><br><br><br>
                                <br><br><br><br>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <br><br><br><br>
                                <br><br><br><br>
                                <br><br><br><br>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <br><br><br><br>
                                <br><br><br><br>
                                <br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon" onclick="copyToClipboard('HALLOW10')">
                            <img src="assets/images/service-01.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>HALLOW10</h4>
                            <p> The code section is html-code (not image). On copy icon click will copy “HALLOW10” to
                                clipboard</p>
                            <div class="main-button">
                            <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232807"> 
                                <i class="fa-brands fa-app-store-ios fa-3x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon" onclick="copyToClipboard('HALLOW10')">
                            <img src="assets/images/service-02.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>HALLOW10</h4>
                            <p> when this logo is clicked, it will copy the text "HALLOW10"</p>
                            <div class="main-button">
                                <a href="https://www.floweradvisor.com.ph/flowersphilippines ">flowersphilippines</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon" onclick="copyToClipboard('HALLOW10')">
                            <img src="assets/images/service-03.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>HALLOW10</h4>
                            <p> The code section is html-code (not image). On copy icon click will copy “HALLOW10” to
                                clipboard</p>
                            <div class="main-button">
                                <a href="https://www.floweradvisor.com.ph"><i class="fa-solid fa-arrow-right fa-3x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2024 Yudha Setyawan. All rights reserved.
                        </p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>

<script>
    function copyToClipboard(text) {
        // Buat elemen sementara untuk menampung teks yang akan disalin
        var tempElement = document.createElement("textarea");
        tempElement.value = text;
        document.body.appendChild(tempElement);

        // Pilih teks dan salin ke clipboard
        tempElement.select();
        document.execCommand("copy");

        // Hapus elemen sementara
        document.body.removeChild(tempElement);

        // Opsi: Tampilkan pesan konfirmasi (bisa dihapus jika tidak diperlukan)
        alert("Text copied to clipboard: " + text);
    }
</script>