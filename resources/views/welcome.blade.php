<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Itrends-Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/vendor/bootstrap.min.css') }}">
  <!-- Icon Font CSS -->
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/vendor/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/vendor/plaza-font.css') }}">

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/animation.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/fancy-box.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins/jqueryui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">

    </head>
    <body>
        <div class="row" id="app">

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>


    {{-- <select class="form-control Langchange">
        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
    </select> --}}
    <!-- Modernizer JS -->
 <script src="{{ asset('frontend_assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
 <!-- jQuery JS -->
 <script src="{{ asset('frontend_assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
 <!-- Bootstrap JS -->
 <script src="{{ asset('frontend_assets/js/vendor/popper.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/vendor/bootstrap.min.js') }}"></script>

 <!-- Plugins JS -->
 <script src="{{ asset('frontend_assets/js/plugins/slick.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/swiper.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/jquery.nice-select.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/countdown.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/image-zoom.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/fancybox.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/scrollup.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/jqueryui.min.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/plugins/ajax-contact.js') }}"></script>
 <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <script type="text/javascript">
        var url = "{{ route('LangChange') }}";
        $(".Langchange").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
    </script>
</html>
