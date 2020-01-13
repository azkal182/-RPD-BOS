<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>CodePen - github.com/select2/select2-bootstrap-theme/issues/41: Select2 in Bootstrap Modal</title>

<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/ionicons/css/ionicons.css') }}">
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/typicons/src/font/typicons.css') }}">
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset ('adminTemplate/assets/vendors/css/vendor.bundle.addons.css') }}">


{{-- plugin select2 --}}


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.7/select2-bootstrap.min.css'>

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


























<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'> --}}
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.7/select2-bootstrap.min.css'>


</head>
<body>

  <div class="main-panel">
    <div class="content-wrapper">
<!-- partial:index.partial.html -->
<div class="container text-center" style="padding-top: 40px;">



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">
  Launch demo modal
</button>
</div>



<!-- Modal -->
<div class="modal fade" id="modal">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">

        <div class="control-group">
          <label for="select2-multiple" class="control-label">State</label>
          <select id="select2-multiple" class="form-control select2-single">
            <option></option>
            <optgroup label="Alaskan/Hawaiian Time Zone">
              <option value="AK">Alaska</option>
              <option value="HI" disabled="disabled">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option><option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option><option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option>
              <option value="VT">Vermont</option><option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </optgroup>
            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
            <option value="TPZ">The Panic Zone</option>
            <option value="TTZ">The Twilight Zone</option>
          </select>
        </div>



    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- partial -->



</div><!-- /.modal-dialog -->
</div

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


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
{{-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js'></script>


<script type="text/javascript">

  $.fn.select2.defaults.set( "theme", "bootstrap" );

  $( ".select2-single" ).select2({
    placeholder: 'Select a State…',
    width: null
  });

  $( ".modal" ).modal();
  </script>



</html>
