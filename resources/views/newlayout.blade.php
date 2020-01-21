@extends('layouts.coreui')
@section('content')

  <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="text-center card-title">RENCANA PENGGUNAAN DANA BOS SMK</h5>
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
                <tr class="table-danger" data-id="{{$component->id}}" data-parent="" data-level="0">
                    <td></td>
                    <td class="text-center">{{$component->id}}</td>
                    <td></td>
                    <td data-column="name">{{$component->name}}</td>
                    <td></td>
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

@endsection
