<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WhatsAppMe - Create A Special URL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <!-- Favicon -->
    <link href="{!! asset('styles') !!}/images/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{!! asset('styles2') !!}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{!! asset('styles2') !!}/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{!! asset('styles2') !!}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{!! asset('styles2') !!}/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/themefisher-fonts/css/themefisher-fonts.min.css">  

    <style>
        .animasi-pilih{
            color: white;
            display: inline-block;
        }
        .animasi-pilih-active{
            color: rgb(255, 255, 255);
            display: inline-block;
        }
        .animasi-pilih-active::after{
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: white;
        }
        .animasi-pilih::after{
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: white;
            transition: width .3s;
        }

        .animasi-pilih:hover::after{
            width: 100%;
        }
                /* Chrome, Safari, Edge, Opera */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>

</head>

<body>
    <!-- Spinner Start -->
    <!--<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">-->
    <!--    <div class="spinner"></div>-->
    <!--</div>-->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5  py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img style="margin-bottom: 3%" src="{!! asset('styles') !!}/images/logo.png" width="50px"><font style="color: rgb(27, 112, 83)"> WhatsAppMe</font>
                </h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="" class="nav-item nav-link"><h2>Create a Special WhatsApp URL</h2></a>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary bg-header" style="margin-bottom: 10px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white">Kirim Pesan</h1>
                    <a href="/" class="animasi-pilih-active">Kirim Pesan</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/URL-Spesial" class="animasi-pilih">URL Spesial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-fluid" >
        <div class="container py-0">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Buat Pesan Langsung</h1>
            </div>

            
            <div class="row g-5">
                <center>
                <div class="col-lg-6" >
                    <form action="/send" method="post"> 
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="number"  name="noWA" class="form-control border-0 bg-dark" placeholder="Masukkan Nomor WA: 08XX XXXX XXXX" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea id="inputpesan" class="form-control border-0 bg-dark pr-4 py-3" rows="4" placeholder="Isi pesan anda (Optional)" oninput="MyFunctionChat()"></textarea>
                            </div>
                            <textarea style="display: none;" name="teks" id="msg" ></textarea>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                </center>
            </div>

        </div>
    </div>
    <!-- Service End -->
    <br><br>

        <!-- About Start -->
        <div class="container-fluid">
            <div class="container" style="padding-top: 3rem !important;">
                    
                        <div class="section-title text-center position-relative pb-3 mx-auto">
                            <h5 class="fw-bold text-secondary text-uppercase">About Us</h5>
                            <h1 class="mb-0">APA ITU WhatsAppMe?</h1>
                        </div> 
                <div class="row g-5">
                    <div class="col-lg-2">
                    </div>

                    <div class="col-lg-8">
                        <p><a class="text-secondary" href="/">WhatsAppMe</a> adalah website yang menyediakan layanan gratis yang mudah digunakan untuk mengirim pesan langsung ke nomor WhatsApp yang sudah anda save maupun belum anda save, <a class="text-secondary" href="/">WhatsAppMe</a> juga memberikan layanan gratis untuk membuat URL WhatsApp Spesial milik anda sendiri.   
                        </p>
                        <div class="row g-0  mb-3" style="margin-left: 7%">
                            <div class="col-sm-6 " >
                                <h5 class="mb-3"  ><i class="fa fa-check text-secondary me-3"></i>Gratis tanpa bayar</h5>
                                <h5 class="mb-3" ><i class="fa fa-check text-secondary me-3"></i>Mudah digunakan</h5>
                            </div>
                            <div class="col-sm-6 " >
                                <h5 class="mb-3" ><i class="fa fa-check text-secondary me-3"></i>Tanpa Donwload Aplikasi</h5>
                                <h5 class="mb-3" ><i class="fa fa-check text-secondary me-3"></i>URL milik anda sendiri</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    
        <!-- Features Start -->
        <div class="container-fluid" style="padding-bottom: 3rem !important;" >
            <div class="container"  style="padding-top: 3rem !important;">
                <div class="section-title text-center position-relative pb-3  mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-secondary text-uppercase">F.A.Q</h5>
                    <h1 class="mb-0">Pertanyaan Seputar WhatsAppMe</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-12">
                            <h4>Apa itu WhatsAppMe?</h4>
                                <p class="mb-0"><a class="text-secondary" href="/">WhatsAppMe</a> adalah website yang menyediakan layanan gratis untuk seseorang mengirim pesan tanpa harus save nomor tujuan terlebih dahulu. <a class="text-secondary" href="/">WhatsAppMe</a> juga memberikan layanan URL Spesial kamu secara gratis.</p>
                            </div>
                            <div class="col-12 " >
                            
                                <h4>Apakah bisa jika nomor yang dituju belum disave?</h4>
                                <p class="mb-0">Sangat bisa. Baik nomor yang sudah disave maupun sama sekali belum disave ke dalam kontak, tetap bisa mengirimkan pesan secara langsung ke WhatsApp mereka.</p>
                            </div>
                            <div class="col-12 ">
                            
                                <h4>Apa itu URL Spesial?</h4>
                                <p class="mb-0">URL Spesial adalah salah satu fitur pada <a class="text-secondary" href="/">WhatsAppMe</a>, dimana URL Spesial tersebut berisi Nomor Whatsapp dan teks pembuka. URL Spesial biasa digunakan untuk tujuan promosi Toko anda maupun kebutuhan Sosial Media lainnya.</p>
                            </div>
                           
                            <div class="col-12 " >
                            
                                <h4>Bagaimana dengan privasi data kami, apakah aman?</h4>
                                <p class="mb-0">WhatsAppMe.com peduli dengan perlindungan data pribadi dan privasi Anda. Semua data yang tersimpan tidak akan dikomersialkan dan tidak akan dibagikan kepada pihak yang ketiga.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Start -->

    <!-- Footer Start -->
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="/">2022 WhatsAppMe</a>. All Rights Reserved. 
						
                    </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/wow/wow.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/easing/easing.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/waypoints/waypoints.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/counterup/counterup.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/owlcarousel/owl.carousel.min.js"></script>

    <script>
            function MyFunctionChat(){
            
            var text = document.getElementById("inputpesan").value;
            
            var db = text.replace(/ /g, "%20");
                db = db.replace(/\n/g, "%0a");

            // console.log(text);    
            document.getElementById("msg").innerText = db; //database
        }
    </script>

    <!-- Template Javascript -->
    <script src="{!! asset('styles2') !!}/js/main.js"></script>
</body>

</html>