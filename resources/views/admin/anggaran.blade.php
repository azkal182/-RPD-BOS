@extends('layouts.coreui')

@section('content')

  <style media="screen">
  .table-level2, .table-level2>td, .table-level2>th {
    background-color: #ffeeba
  }

  .table-hover .table-level2:hover {
    background-color: #ffe8a1
  }

  .table-hover .table-level2:hover>td, .table-hover .table-level2:hover>th {
    background-color: #ffe8a1
  }

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

    <div class="soft-wraper">

    </div>
  <div class="card">
  <div class="card-header">
    <div class="row">
    <div class="col-sm-4">
      <button type="button" id="myBtn" class="btn btn-primary toolbar-item" data-toggle="modal" data-target="#myModal">Tambah Anggaran</button>
    </div>
     <div class="col-md-1 offset-md-6">
       <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
            Export
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Item</a>
            <a class="dropdown-item" href="#">Another Item</a>
            <a class="dropdown-item" href="#">One more item</a>
          </div>
        </div>
     </div>
  </div>

  <div class="card-body">
    <h5 class="text-center card-title">RENCANA PENGGUNAAN DANA BOS SMK </h5>
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


              @foreach($tes as $component)
                @php
                  echo $component->telepone;
                @endphp
                @if ($component->level == 1)



              <tr class="table-danger" data-id="{{$component->id}}" data-parent="" data-level="1">
                  <td>{{$component->subcomponent->count()}}</td>
                  <td class="text-center">{{$component->id}}</td>
                  <td></td>
                  <td data-column="name" >{{$component->name}}</td>
                  <td></td>
                  <td>{{$component->id}}</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>


              @if(count($component->telepon))


                  @include('admin.detailcomponent',['detailcomponents' => $component->telepon, 'dataParent' => $component->id , 'dataLevel' => 1])
                  @endif

                      @if(count($component->subcomponent))
                          @include('admin.SubComponent',['subcomponents' => $component->subcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])
                          @endif
                  @endif
                  @endforeach

                {{-- @foreach($parentcomponent as $component)

                <tr class="table-danger" data-id="{{$component->id}}" data-parent="" data-level="1">
                    <td>{{$component->subcomponent->count()}}</td>
                    <td class="text-center">{{$component->id}}</td>
                    <td></td>
                    <td data-column="name" >{{$component->name}}</td>
                    <td></td>
                    <td>{{$component->id}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @if(count($tes->telepon))

                    @include('admin.detailcomponent',['detailcomponents' => $component->telepon, 'dataParent' => $component->id , 'dataLevel' => 1])
                    @endif

                @if(count($component->subcomponent))
                    @include('admin.SubComponent',['subcomponents' => $component->subcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])
                    @endif
                    @endforeach --}}
            </tbody>
        </table>
        <span class="glyphicon  glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
</span>
    </div>
  </div>
</div>







@endsection
