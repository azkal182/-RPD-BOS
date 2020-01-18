@foreach($subcomponents as $subcomponent)
<tr data-id="{{$subcomponent->id}}" data-parent="{{$subcomponent->parent_id}}" data-level="">
      <td></td>
      <td></td>
      <td></td>
       <td data-column="name">&nbsp&nbsp&nbsp{{$subcomponent->name}} </td>
      <td>{{$dataLevel + 1}}</td>
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
