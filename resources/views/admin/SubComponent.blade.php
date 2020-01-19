@foreach($subcomponents as $subcomponent)
<tr data-id="{{$subcomponent->id}}" data-parent="{{$subcomponent->parent_id}}" data-level="{{$subcomponent->level}}">

      <td></td>
      <td></td>
       <td data-column="name" colspan="2">{{$subcomponent->name}} </td>
       {{-- <td></td> --}}
      <td>{{$subcomponent->level}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>




 @if(count($subcomponent->subcomponent))
            @include('admin.SubComponent',['subcomponents' => $subcomponent->subcomponent, 'dataParent' => $subcomponent->id, 'dataLevel' => $dataLevel ])
        @endif
@endforeach
