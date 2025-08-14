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
    <link href="{!! asset('styles2') !!}/css/phone.css" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/themefisher-fonts/css/themefisher-fonts.min.css">  

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .animasi-pilih{
            color: white;
            display: inline-block;
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
          .animasi-pilih-active{
            color: white;
            display: inline-block;
        }
        .animasi-pilih-active::after{
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background: white;
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
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-lg-0">
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

        <div class="container-fluid bg-primary  bg-header" style="margin-bottom: 10px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white">URL Spesial</h1>
                    <a href="/" class="animasi-pilih">Kirim Pesan</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="/URL-Spesial" class="animasi-pilih-active">URL Spesial</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-fluid py-2 " >
        <div class="container py-0">
            <div class="section-title text-center position-relative pb-3 mb-3 mx-auto">
                <h1 class="mb-0">Buat URL WhatsAppMe</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-6">
                    @desktop
                    <div class="position-relative pb-3 mb-2">
                        <h5 class="fw-bold text-secondary text-uppercase mb-0">Create URL WhatsApp</h5>
                        <p class="fw-bold text-secondary text-uppercase p-0 m-0">_______________________</p>
                    </div>
                    @enddesktop

                    @if (session('error'))
                        <div class="alert alert-danger alert dismissible fade-show" role="alert">
                         <p>{{session('error')}}</p>
                        </div>
                    @endif

                    <form action="/create" method="post">
                        @csrf 
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="number" id="inputnomor" name="noWA" class="form-control border-0 bg-dark" placeholder="Masukkan Nomor WA: 08XX XXXX XXXX" style="height: 55px;" oninput="MyFunctionNomor()" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="url-field" class="form-control border-0 bg-dark" name="url" placeholder="Enter your WhatsApp Url name" oninput="MyFunctionURL()"  style="height: 55px;" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="output" class="form-control border-0 bg-dark" style="height: 55px;color:#1ebea5;" value="Your url is.." readonly>
                            </div>
                            <div class="form-control col-12" style="padding: 7px;padding: 7px;border: none; background: white;">
                                <div class="toolbar">
                                    <div class="item" data-tool="bold">B</div>
                                    <div class="item" data-tool="italic">I</div>
                                    <div class="item" data-tool="striketrhough">S</div>
                                    <ul>
                                        <div class="li" > <i style="display: block" class="fa fa-question-circle text-white"></i>
                                            <div class="tips">
                                                <h3>Tool tips!</h3>
                                                <p>Apabila preview belum berubah tekan spasi diakhir kalimat, Terima kasih.</p> 
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <textarea id="inputpesan" class="form-control border-0 bg-dark pr-4 py-3" rows="4" placeholder="Tulis pesan anda disini" oninput="MyFunctionChat()"></textarea>
                            </div>
                            <textarea style="display: none;" name="teks" id="msg" ></textarea>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Create WhatsAppMe</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-1 px-4" style="">
                </div>
                <div class="col-lg-5">

                    <div class="phone p-0 " >
                        <div class="chat">
                            <div class="top-chat">
                                <div class="profile">
                                    <img src="{!! asset('styles') !!}/images/profile.png" alt="">
                                </div>
                                <div class="nowa">
                                    <span id="outputnomor">+62 ...</span>
                                </div>
                                <div class="option-right">
                                </div>
                            </div>
                            <div class="laman">
                                <div class="laman-container">
                                    <div class="pesan send">
                                        <span id="outputpesan" class="pesan">Silahkan isikan pesan anda..
                                        </span>
                                        <span class="detail">
                                            <span class="time">12.59 PM</span>
                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-chat">

                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <br><br>

                 <div class="container-fluid" style="padding-bottom: 3rem !important;" >
            <div class="container">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-secondary text-uppercase">F.A.Q</h5>
                    <h1 class="mb-0">Pertanyaan Seputar URL Spesial</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-12" >
                                <h4>Apa itu URL Spesial?</h4>
                                <p class="mb-0">URL Spesial adalah salah satu fitur pada <a class="text-secondary" href="/">WhatsAppMe</a>, dimana URL Spesial tersebut berisi Nomor Whatsapp dan teks/kalimat yang telah anda buat sebelumnya apabila anda menginginkannya (Optional). URL Spesial biasa digunakan untuk tujuan promosi Toko anda maupun kebutuhan Sosial Media lainnya. <br><br>
                                    Konsep URL Spesial ialah ketika customer/seseorang mengklik URL Spesial buatan anda, maka customer akan secara langsung diarahkan ke laman chat di WhatsApp anda. Dan apabila anda mengisikan pesan di URL Spesial, maka pesan tersebut akan otomatis muncul ketika seseorang mengklik URL Spesial anda.</p>
                            </div>
                            <div class="col-12 " >
                               
                                <h4>Apakah URL Spesial berbayar?</h4>
                                <p class="mb-0">Tidak. URL Spesial WhatsAppMe dapat dengan mudah dan gratis anda buat, sehingga anda tidak perlu takut dikenakan biaya untuk itu.</p>
                            </div>
                            <div class="col-12 ">
                                
                                <h4>Apakah nama URL bisa duplikat atau sama?</h4>
                                <p class="mb-0">Nama URL tidak bisa duplikat atau sama, URL WhatsAppMe menggunakan konsep Unique seperti Email, Nomor handphone, dan lainnya. Sehingga URL yang sudah ada sebelumnya tidak dapat dibuat kembali.</p>
                            </div>
                            <div class="col-12 ">
                                
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

    {{-- Nomor Live input type --}}
    <script>
        function MyFunctionNomor(){
        var input = document.getElementById("inputnomor");
        if(input.value == "") {
            var output = '+62 ...';
        } else {
        var output = '+62 '+input.value;
        }

        // console.log(output);
        document.getElementById("outputnomor").innerText = output;
        }
    </script>

    {{-- URL Live input type --}}
    <script>
        function MyFunctionURL(){
        var input = document.getElementById("url-field");
        if(input.value == "") {
            var output = 'Your url is..';
        } else {
            var baseUrl = window.location.origin;
            var output = baseUrl + '/' + input.value;
        }

        // console.log(output);
        document.getElementById("output").value = output;
        }
    </script>

    {{-- Chat Live input type --}}
    
    <script>
        function MyFunctionChat(){
         
         var text = document.getElementById("inputpesan").value;
         var newText = text.replace(/\n/g, "<br>\n");
         
         var db = text.replace(/ /g, "%20");
             db = db.replace(/\n/g, "%0a");

         const htmlFormat = [
            { symbol: '*', tag: 'b' },
            { symbol: '_', tag: 'em' },
            { symbol: '~', tag: 'del' },
        ];

        htmlFormat.forEach(({ symbol, tag }) => {
            if(!newText) return;

            const regex = new RegExp(`\\${symbol}([^${symbol}]*)\\${symbol}`, 'gm');
            const match = newText.match(regex);
            if(!match) return;

            match.forEach(m => {
                let formatted = m;
                for(let i=0; i<2; i++){
                    formatted = formatted.replace(symbol, `<${i > 0 ? '/' : ''}${tag}>`);
                }
                newText = newText.replace(m, formatted);
            });
        });

        // console.log(text);    
        document.getElementById("msg").innerText = db; //database
        document.getElementById("outputpesan").innerHTML = newText; //phone
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- -ForInputToolsTextArea --}}
    <script>
       
       var yourTextarea=document.getElementById("inputpesan");
        var insertAtCursor=function(myField,myValueBefore,myValueAfter){
            if(document.selection){
                myField.focus();
                document.selection.createRange().text=myValueBefore+document.selection.createRange().text+myValueAfter;
            }else if(myField.selectionStart||myField.selectionStart=='0'){
                var startPos=myField.selectionStart;
                var endPos=myField.selectionEnd;
                    myField.value=myField.value.substring(0,startPos)+myValueBefore+myField.value.substring(startPos,endPos)+myValueAfter+myField.value.substring(endPos,myField.value.length);
            }}

        $("#inputpesan").keydown(function(e){
            if(e.ctrlKey){
                if(e.keyCode==66){insertAtCursor(yourTextarea,'*','*');
                return false;
            }

            if(e.keyCode==73){
                insertAtCursor(yourTextarea,'_','_');
                return false;
            }
            if(e.keyCode==83){
                insertAtCursor(yourTextarea,'~','~');
                return false;
            }}});
            
        $(".toolbar .item").click(function(){
                if($(this).data("tool")=='bold'){
                    insertAtCursor(yourTextarea,'*','*');
                }

            if($(this).data("tool")=='italic'){
                insertAtCursor(yourTextarea,'_','_');
            }

            if($(this).data("tool")=='striketrhough'){
                insertAtCursor(yourTextarea,'~','~');
            }
            $("#inputpesan").keyup();
        });

    </script>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/wow/wow.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/easing/easing.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/waypoints/waypoints.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/counterup/counterup.min.js"></script>
    <script src="{!! asset('styles2') !!}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{!! asset('styles2') !!}/js/main.js"></script>
</body>

</html>