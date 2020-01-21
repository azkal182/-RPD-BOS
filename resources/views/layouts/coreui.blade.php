<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset ('coreui/assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset ('coreui/assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset ('coreui/assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('coreui/assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset ('coreui/assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset ('coreui/assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset ('coreui/assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset ('coreui/assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('coreui/assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset ('coreui/assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('coreui/assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset ('coreui/assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('coreui/assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset ('coreui/assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset ('coreui/assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Icons-->
    <link href="{{ asset ('coreui/vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('coreui/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset ('coreui/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset ('coreui/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">




    {{-- plugin select2 --}}


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
    {{-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.7/select2-bootstrap.min.css'> --}}





    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="{{ asset ('css/glyphicons.css') }}" rel="stylesheet">




    <link rel="stylesheet" href="{{ asset ('css/mystyle.css') }}">



  </head>
  <body class="c-app">
    <body class="c-app">

      <!-- sidebar -->
      @include('layouts.coreuisidebar')
      <!-- endsidebar -->

      <div class="c-wrapper">
        <!-- header -->
        @include('layouts.coreuiheader')
        <!-- end header -->
        <div class="c-body">
          <main class="c-main">
            <div class="container-fluid">
              <div class="fade-in">

                @yield('content')

              </div>
            </div>
          </main>
        </div>
        @include('layouts.coreuifooter')
      </div>

  </body>

  <!-- CoreUI and necessary plugins-->
  <script src="{{ asset ('coreui/vendors/pace-progress/js/pace.min.js') }}"></script>
  <script src="{{ asset ('coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>


  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>

  <script src="https://www.jqueryscript.net/demo/Minimal-Tree-Table-jQuery-Plugin-For-Bootstrap-TreeTable/js/javascript.js"></script>
  {{-- <script src="{{ asset ('js/Minimal-Tree-Table-jQuery-Plugin-For-Bootstrap-TreeTable.js') }}"></script> --}}




</script>





  <script type="text/javascript">
    $('#SelectComponent1').on('change', function(e){
      console.log(e);
      var id_komp1 = e.target.value;
      $.get('/json-komp2?id_komp1=' + id_komp1, function(data){
        console.log(data);
        $('#SelectComponent2').empty();
        $('#SelectComponent2').append('<option value="0" disabled="true" selected="true">===  Select Komponen 2 ===</option>');
        $.each(data, function(index, SelectComponent2Obj){
          $('#SelectComponent2').append('<option value="'+ SelectComponent2Obj.id_komp2 +'" >'+ SelectComponent2Obj.t_komp2 +'</option>')
        });

      });
    });

    $('#SelectComponent2').on('change', function(e){
      console.log(e);
      var id_komp2 = e.target.value;
      $.get('/json-komp3?id_komp2=' + id_komp2, function(data){
        console.log(data);
        $('#SelectComponent3').empty();
        $('#SelectComponent3').append('<option value="0" disabled="true" selected="true">===  Select Komponen 3 ===</option>');
        $.each(data, function(index, SelectComponent3Obj){
          $('#SelectComponent3').append('<option value="'+ SelectComponent3Obj.id_komp3 +'" >'+ SelectComponent3Obj.t_komp3 +'</option>')
        });

      });
    });

    $('#SelectComponent3').on('change', function(e){
      console.log(e);
      var id_komp3 = e.target.value;
      $.get('/json-komp4?id_komp3=' + id_komp3, function(data){
        console.log(data);
        $('#SelectComponent4').empty();
        $('#SelectComponent4').append('<option value="0" disabled="true" selected="true">===  Select Komponen 4 ===</option>');
        $.each(data, function(index, SelectComponent4Obj){
          $('#SelectComponent4').append('<option value="'+ SelectComponent4Obj.id_komp4 +'" >'+ SelectComponent4Obj.t_komp4 +'</option>')
        });

      });
    });

    $('#SelectComponent4').on('change', function(e){
      console.log(e);
      var id_komp4 = e.target.value;
      $.get('/json-detail-komp?id_komp4=' + id_komp4, function(data){
        console.log(data);
        $('#SelectDetailComponent').empty();
        $('#SelectDetailComponent').append('<option value="0" disabled="true" selected="true">===  Select Komponen 5 ===</option>');
        $.each(data, function(index, SelectDetailComponentObj){
          $('#SelectDetailComponent').append('<option value="'+ SelectDetailComponentObj.id_detail_komp +'" >'+ SelectDetailComponentObj.t_detail_komp +'</option>')
        });

      });
    });


    $(document).ready(function() {
        $('.myselect2').select2({
          placeholder: 'Select a State…',
          width: null
        });
    });

    $.fn.select2.defaults.set( "theme", "bootstrap" );

    $( ".select2-single" ).select2({
      placeholder: 'Select a State…',
      width: null
    });


    // $(document).ready(function(){
    //   $('.collaptable').aCollapTable({
    //     startCollapsed: false,
    //     addColumn: false,
    //     plusButton: '<i class="fa fa-chevron-right"></i>',
    //     minusButton: '<i class="fa fa-chevron-down"></i>'
    //
    //
    //   });
    // });



    // $( ".modal" ).modal();

</script>


  <!-- End custom js for this page-->
</html>
