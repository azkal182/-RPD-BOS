@foreach($subcomponents as $subcomponent)

    <tr
        @if ($subcomponent->level == 2)
          class="table-warning"
        @endif

        @if ($subcomponent->level == 3)
          class="table-info"
        @endif

      data-id="{{$subcomponent->id}}" data-parent="{{$subcomponent->parent_id}}" data-level="{{$subcomponent->level}}">

      <td></td>
      <td></td>
      <td></td>
       <td data-column="name">{{$subcomponent->name}} </td>
      <td>{{$subcomponent->level}}</td>
      <td>{{$subcomponent->id}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    @if(count($subcomponent->telepon))
        @include('admin.detailcomponent',['detailcomponents' => $subcomponent->telepon])
        @endif
 @if(count($subcomponent->subcomponent))
            @include('admin.SubComponent',['subcomponents' => $subcomponent->subcomponent, 'dataParent' => $subcomponent->id, 'dataLevel' => $dataLevel ])
        @endif
@endforeach
