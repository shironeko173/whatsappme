

<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>Here is Your WhatsApp Me! </title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Portfolio HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Html5 Portfolio Template v1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


  <!-- Essential Stylesheets -->
  <link rel="stylesheet" href="{!! asset('styles') !!}/https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800">
  <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/animate.css">
  <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/slick/slick.css">
  <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="{!! asset('styles') !!}/plugins/themefisher-fonts/css/themefisher-fonts.min.css">  

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{!! asset('styles') !!}/css/style.css">
  
  <!-- Theme Stylesheet -->
  <link rel="stylesheet" href="#" id="color-changer">
  
  <!--Favicon-->
  <link rel="icon" href="{!! asset('styles') !!}/images/logo.png" type="image/x-icon">

<style>
  .success {
    display: block;
    max-width:450px ;
    text-align: center;
    margin-top: 10%;
    margin-right: auto;
    margin-bottom: auto;
    margin-left: auto;
  }

  img {
    max-width: 100%;
    max-height: 100%;
  }

  a {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    /* -webkit-line-clamp */
  }
</style>

</head>
<body><!-- set class="dark" on body tag for DARK-THEME -->


<main class="site-wrapper">
  <div class="pt-table">
    <div class="pt-tablecell page-home relative">
      <div class="overlay"></div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
            <div class="page-title home text-center">
              <div class="success">
                <img src="{!! asset('styles') !!}/images/success.png" alt="">
              </div>
              @foreach ($myWA as $item)
              <p> URl WhatsAppMe anda : <a style="color:#1ebea5" target="_blank" href="{{ $item->Weburl }}"> {{ $item->Weburl }}</a></p>
              <div id="MyQrCode" style="display: inline-block; padding:3%" >
                {!! QrCode::size(200)->generate($item->Weburl); !!}
              </div>
              @endforeach
              
              <div>
                <button id="dl-qr" class="btn btn-primary">Download QrCode</button>
              </div>

            </div>



          </div> <!-- /.col-xs-12 -->

          

        </div> <!-- /.row -->
      </div> <!-- /.container -->

    </div> <!-- /.pt-tablecell -->
  </div> <!-- /.pt-table -->
</main> <!-- /.site-wrapper -->

{{-- Download QR --}}
<script src="{!! asset('styles') !!}/js/html2canvas.min.js"></script>
<script>
  document.getElementById("dl-qr").onclick = function(){
    const screenshotTarget = document.getElementById('MyQrCode');

    html2canvas(screenshotTarget).then((canvas) => {
      const base64image = canvas.toDataURL("image/png");
      var anchor = document.createElement('a');
      anchor.setAttribute("href", base64image);
      anchor.setAttribute("download","MyQrCode.png");
      anchor.click();
      anchor.remove();
    });
  };
</script>

<!-- 
Essential Scripts
=====================================-->
<script src="{!! asset('styles') !!}/plugins/jquery-2.2.4.min.js"></script>
<script src="{!! asset('styles') !!}/plugins/bootstrap/bootstrap.min.js"></script>
<script src="{!! asset('styles') !!}/plugins/jquery.nicescroll.min.js"></script>
<script src="{!! asset('styles') !!}/plugins/isotope/isotope.pkgd.min.js"></script>
<script src="{!! asset('styles') !!}/plugins/slick/slick.min.js"></script>

<script src="{!! asset('styles') !!}/js/script.js"></script>

</body>
</html>