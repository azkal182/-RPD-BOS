<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery aCollapTable Plugin Demos</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
{{--
<div class="container" style="margin-top:150px;">
<h1>jQuery aCollapTable Plugin Demos</h1>
 <div class="well">
          <a href="javascript:void(0);" class="btn btn-primary act-button-expand">+ Expand</a>
          <a href="javascript:void(0);" class="btn btn-primary act-button-collapse">- Collapse</a>
          <a href="javascript:void(0);" class="btn btn-primary act-button-expand-all ">+ Expand All</a>
          <a href="javascript:void(0);" class="btn btn-primary act-button-collapse-all">- Collapse All</a>
        </div>
<table class="collaptable table table-striped">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Description</th>
  </tr>
  <tr data-id="1" data-parent="">
    <td>1</td>
    <td>Element 1 data-id="1" data-parent=""</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="2" data-parent="1">
    <td>1.1</td>
    <td>Element 2 data-id="2" data-parent="1"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="3" data-parent="1">
    <td>1.2</td>
    <td>Element 3 data-id="3" data-parent="1"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="6" data-parent="3">
    <td>1.2.1</td>
    <td>Element 6 data-id="6" data-parent="3"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="7" data-parent="3">
    <td>1.2.2</td>
    <td>Element 7 data-id="7" data-parent="3"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="8" data-parent="3">
    <td>1.2.3</td>
    <td>Element 8 data-id="8" data-parent="3"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="4" data-parent="">
    <td>2</td>
    <td>Element 4 data-id="4" data-parent=""</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="5" data-parent="4">
    <td>2.1</td>
    <td>Element 5 data-id="5" data-parent="4"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>

  <tr data-id="9" data-parent="">
    <td>3</td>
    <td>Element 5 data-parent="4"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
  <tr data-id="10" data-parent="9">
    <td>3.1</td>
    <td>Element 5 data-parent="4"</td>
    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.</td>
  </tr>
<tr data-id="11" data-parent="10">
  <td>3.1.1</td>
  <td>Element 5 data-parent="4"</td>
  <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua.</td>
</tr>




</table>
</div> --}}


<div class="">
  <table class="collaptable table table-striped">
    <tr>
      <<th>#</th>
      <th>Name</th>
      <th>Description</th>
      <th>Description</th>

    </tr>

    <tr data-id="1" data-parent="" >
      <td >NO</td>
      <td ></td>
      <td >RENCANA  PENGGUNAAN DANA BOS SMK</td>
      <td ></td>
      <td ></td>

    </tr>


    <tr data-id="2" data-parent="" >
      <td >NO</td>
      <td ></td>
      <td >PENERIMAAN PESERTA DIDIK BARU DAN DAFTAR ULANG </td>
      <td ></td>
    </tr>




  </table>
</div>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="text-center card-title">RENCANA  PENGGUNAAN DANA BOS SMK</h1>

                  <table class="table table-bordered">

                    	<tbody>
                        <tr>
                    			<td rowspan="2">NO</td>
                    			<td rowspan="2">NO KODE</td>
                    			<td colspan="7" rowspan="2">URAIAN</td>
                    			<td rowspan="2">JUMLAH</td>
                    			<td colspan="4" class="text-center">TRIWULAN</td>
                    		</tr>
                    		<tr>
                    			<td>TRIWULAN 1</td>
                    			<td>TRIWULAN 2</td>
                    			<td>TRIWULAN 3</td>
                    			<td>TRIWULAN 4</td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td>VOL</td>
                    			<td>SATUAN</td>
                    			<td>HARGA SATUAN</td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td colspan="7">PENGEMBANGAN PERPUSTAKAAN</td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td colspan="7">A. Buku Teks Pelajaran</td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td colspan="6">1). PENYELENGGARA KURIKULUM 2013</td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td>Rp. 29.584.000</td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td colspan="5">a). Buku Teks Pelajaran Siswa Kelas X  (baru melaksanakan kurikulum 2013 mulai Tahun 2017 ini) </td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td>-  Pendidikan Agama Islam</td>
                    			<td>66</td>
                    			<td>EXP</td>
                    			<td>Rp. 14.500</td>
                    			<td>Rp. 957.000</td>
                    			<td></td>
                    			<td>Rp. 957.000</td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    		<tr>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    			<td></td>
                    		</tr>
                    	</tbody>

                  </table>
                </div>
              </div>
            </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="{{asset('js/jquery.aCollapTable.js')}}"></script>
<script>
$(document).ready(function(){
  $('.collaptable').aCollapTable({
    startCollapsed: true,
    addColumn: false,
    plusButton: '<span class="i">+</span>',
    minusButton: '<span class="i">-</span>'
  });
});
</script>
<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })(); -->

</script>

</body>
</html>



{{--
             @foreach($data as $row)
                <tr>
            <td>{{ $row->id_komp1 }}</td>


            <td>{{ $row->t_komp1 }}</td>
            @endforeach
            </tr>
            @foreach($data as $row)
               <tr>
            <td>{{ $row->t_komp2 }}</td>
            @endforeach
            </tr>
            @foreach($data as $row)
               <tr>
            <td>{{ $row->t_komp3 }}</td>
            @endforeach
            </tr>
            @foreach($data as $row)
               <tr>
            <td>{{ $row->t_komp4 }}</td>
            @endforeach
            </tr>
            @foreach($data as $row)
               <tr>
            <td>{{ $row->t_detail_komp }}</td>
            @endforeach --}}
