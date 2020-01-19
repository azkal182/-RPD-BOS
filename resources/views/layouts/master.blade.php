<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/css/vendor.bundle.addons.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>



  {{-- plugin Acollapse table --}}
  {{-- <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
  {{-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> --}}


    {{-- plugin select2 --}}


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.7/select2-bootstrap.min.css'>





    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/css/shared/style.css') }}">

    <link rel="stylesheet" href="{{ asset ('css/mystyle.css') }}">

    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset ('adminTemplate/assets/css/demo_1/style.css') }}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset ('adminTemplate/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->

        <!-- HEADER -->

        @include('layouts.header')


        <!-- END HEADER -->


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

          <!-- SideBAR -->

          @include('layouts.sidebar')
        <!-- END SideBAR -->


        <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
            <!-- Page Title Header Starts-->


            <!-- KONTEN-->

            @yield('content')

            <!-- END KONTEN-->



          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- footer -->

          @include('layouts.footer')


          <!-- END footer -->

          <!-- partial -->
          </div>
        <!-- main-panel ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset ('adminTemplate/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset ('adminTemplate/assets/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset ('adminTemplate/assets/js/shared/off-canvas.js') }}"></script>
    <script src="{{ asset ('adminTemplate/assets/js/shared/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset ('adminTemplate/assets/js/demo_1/dashboard.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    {{-- plugin acolapse  --}}

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> --}}
    {{-- <script src="{{ asset ('js/jquery.aCollapTable.js') }}"></script> --}}

    {{-- plugin select2 --}}

    <script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>
    <script src="https://www.jqueryscript.net/demo/Minimal-Tree-Table-jQuery-Plugin-For-Bootstrap-TreeTable/js/javascript.js"></script>




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
  </body>
</html>
