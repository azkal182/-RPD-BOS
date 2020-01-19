<style>
body { background-color:#fafafa; font-family:'Open Sans';}
.container { margin:150px auto;}
    .treegrid-indent {
        width: 0px;
        height: 16px;
        display: inline-block;
        position: relative;
    }

    .treegrid-expander {
        width: 0px;
        height: 16px;
        display: inline-block;
        position: relative;
        left:-17px;
        cursor: pointer;
    }
</style>

@extends('layouts.master')

@section('content')

  <style media="screen">
    .act-tr-level-1{
      background-color : #ffff8d;


    }

    .act-tr-level-1:hover{
      background-color: #ffea00 !important;
    }

    .act-tr-level-2{
      background-color : #bbdefb;
    }

    .act-tr-level-2:hover{
      background-color : #64b5f6 !important;

    }
}
  </style>
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
                    <li><a href="#">Watchlist <span>
                      <i class="mdi mdi-check-circle-outline"></i>
                    </span></a></li>
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
                                        <option>=== Select Komponen 1 ===</option>
                                        @foreach ($komp1s as $key => $value)
                                        <option value="{{$value->id_komp1}}">{{ $value->t_komp1 }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Komponen 2</label>
                                    <select class="form-control myselect2" id="SelectComponent2">
                                        <option value="0" disabled="true" selected="true">=== Select Komponen 2 ===</option>


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




{{-- <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center card-title">RENCANA PENGGUNAAN DANA BOS SMK</h1>

            <div class="table-responsive">

                <table id="tree-table" border="1" class="collaptable table table-hover table-bordered ">
                    <thead class="thead-light">
                        <tr>
                            <th rowspan="2"></th>
                            <th class="text-center align-middle" rowspan="2">No</th>
                            <th class="text-center align-middle" rowspan="2">No Kode</th>
                            <th class="text-center align-middle" colspan="4" rowspan="2">Uraian</th>
                            <th class="text-center align-middle" rowspan="2">Jumlah</th>
                            <th class="text-center align-middle" colspan="4">Triwulan</th>
                        </tr>
                        <tr>
                            <th>Triwulan 1</th>
                            <th>Triwulan 2</th>
                            <th>Triwulan 3</th>
                            <th>Triwulan 4</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>VOL</th>
                            <th>SATUAN</th>
                            <th>HARGA SATUAN</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($parentcomponent as $component)
                        <tr class="table-danger" data-id="{{$component->id}}" data-level="5" data-parent="" data-level="0">
                            <td></td>
                            <td class="text-center">{{$component->id}}</td>
                            <td></td>
                            <td data-column="name">{{$component->name}}</td>
                            <td>{{$component->level}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @if(count($component->subcomponent))
                            @include('admin.SubComponent',['subcomponents' => $component->subcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])
                            @endif
                            @endforeach
                    </tbody>
                </table>

            </div>


        </div>
    </div>
</div>
<!-- Page Title Header Ends-->

<div>


</div> --}}






<div class="card">
    <div class="card-body">
        <h1 class="text-center card-title">RENCANA PENGGUNAAN DANA BOS SMK</h1>

        <div class="table-responsive">

            <table id="tree-table" border="1" class="collaptable table table-hover table-bordered ">
                <thead class="thead-light">
                    <tr>
                        <th rowspan="2"></th>
                        <th class="text-center align-middle" rowspan="2">No</th>
                        <th class="text-center align-middle" rowspan="2">No Kode</th>
                        <th class="text-center align-middle" colspan="4" rowspan="2">Uraian</th>
                        <th class="text-center align-middle" rowspan="2">Jumlah</th>
                        <th class="text-center align-middle" colspan="4">Triwulan</th>
                    </tr>
                    <tr>
                        <th>Triwulan 1</th>
                        <th>Triwulan 2</th>
                        <th>Triwulan 3</th>
                        <th>Triwulan 4</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>VOL</th>
                        <th>SATUAN</th>
                        <th>HARGA SATUAN</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($parentcomponent as $component)
                    <tr data-id="{{$component->id}}" data-level="1" data-parent="" data-level="{{$component->level}}">
                        <td class="text-center">{{$component->id}}</td>
                        <td></td>
                        <td data-column="name" colspan="2">{{$component->name}}</td>
                        {{-- <td></td> --}}
                        <td>{{$component->level}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>


                    @if(count($component->detailcomponent))
                        @include('admin.detailcomponent',['detailcomponents' => $component->detailcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])

                    @endif

                    @if(count($component->subcomponent))

                        @include('admin.SubComponent',['subcomponents' => $component->subcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])
                        @endif
                        @endforeach
                </tbody>
            </table>

        </div>


    </div>
</div>
</div>











@endsection
