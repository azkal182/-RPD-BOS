@foreach ($detailcomponents as $detailcomponent)
  <tr data-id="{{$detailcomponent->id}}" data-parent="{{$detailcomponent->parent_id}}"
    {{-- data-level="{{$detailcomponent->level}}" --}}
    >
        <td></td>
        <td></td>
        <td style="max-width: 40px;"></td>
         <td data-column="name">{{$detailcomponent->name}} </td>
        <td>{{$detailcomponent->level}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

    {{-- @if(count($detailcomponent->detailcomponent))
        @include('admin.detailcomponent',['detailcomponents' => $subcomponent->detailcomponent, 'dataParent' => $component->id , 'dataLevel' => 1])
        @endif --}}

@endforeach
