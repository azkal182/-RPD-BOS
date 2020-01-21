@foreach ($detailcomponents as $detailcomponent)


  <tr data-id="{{$detailcomponent->id}}" data-parent="{{$detailcomponent->components_id}}"
    data-level="{{$detailcomponent->level}}">
        <td></td>
        <td></td>
        <td style="max-width: 40px;"></td>
         <td data-column="name">{{$detailcomponent->detail_component}} </td>
        <td>{{$detailcomponent->vol}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      {{-- @if(count($detailcomponent->telepon))
          @include('admin.detailcomponent',['detailcomponents' => $component->telepon])
          @endif --}}

@endforeach
