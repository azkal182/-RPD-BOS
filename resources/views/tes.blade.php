@extends('layouts.master')

@section('content')
<!-- Page Title Header Starts-->
<div class="row page-title-header">
  <div class="col-12">
    <div class="page-header">
      <h4 class="page-title">Dashboard</h4>
      <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
        <ul class="quick-links">
          <li><a href="#">ICE Market data</a></li>
          <li><a href="#">Own analysis</a></li>
          <li><a href="#">Historic market data</a></li>
        </ul>
        <ul class="quick-links ml-auto">
          <li><a href="#">Settings</a></li>
          <li><a href="#">Analytics</a></li>
          <li><a href="#">Watchlist</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="col-md-12">

      <div class="sort-wrapper" style="width: 100%;">
        <button type="button" id="myBtn" class="btn btn-primary toolbar-item" data-toggle="modal" data-target="#myModal">Tambah Anggaran</button>



            <!-- Modal content-->
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="" action="index.html" method="post">
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Komponen 1</label>
                        <select class="form-control myselect2" id="SelectComponent1">
                            @foreach ($komp1s as $key => $value)
                              <option value="{{$value->id_komp1}}">{{ $value->t_komp1 }}</option>
                            @endforeach

                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Komponen 2</label>
                        <select class="form-control myselect2" id="SelectComponent2">


                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Komponen 3</label>
                        <select class="form-control myselect2" id="SelectComponent3">
                          <option></option>


                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Komponen 4</label>
                        <select class="form-control myselect2" id="SelectComponent4">
                          <option></option>

                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Detail Komponen</label>
                        <select class="form-control myselect2" id="SelectDetailComponent">
                          <option></option>


                        </select>
                      </div>

                      {{-- <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1">Triwulan 1</label>
                       </div>

                       <div class="form-row">
                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputCity">harga satuan</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>



                      </div>





                      <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck2">
                         <label class="form-check-label" for="exampleCheck1">Triwulan 1</label>
                       </div>

                       <div class="form-row">
                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputCity">harga satuan</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>



                      </div>


                      <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck3">
                         <label class="form-check-label" for="exampleCheck1">Triwulan 1</label>
                       </div>

                       <div class="form-row">
                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputCity">harga satuan</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>



                      </div>


                      <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck4">
                         <label class="form-check-label" for="exampleCheck1">Triwulan 1</label>
                       </div>

                       <div class="form-row">
                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-1">
                            <label for="inputCity">vol</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="form-group col-md-1">
                            <label for="inputState">sat</label>
                            <select id="inputState" class="form-control">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4">
                            <label for="inputCity">harga satuan</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div> --}}



                      {{-- </div> --}}



                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>



        <div class="dropdown ml-lg-auto ml-3 toolbar-item">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
          <div class="dropdown-menu" aria-labelledby="dropdownexport">
            <a class="dropdown-item" href="#">Export as PDF</a>
            <a class="dropdown-item" href="#">Export as DOCX</a>
            <a class="dropdown-item" href="#">Export as CDR</a>
          </div>
        </div>
      </div>
    </div>
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
<!-- Page Title Header Ends-->







@endsection
