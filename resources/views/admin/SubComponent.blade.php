@foreach($subcomponents as $subcomponent)
<tr data-id="{{$subcomponent->id}}" data-parent="{{$subcomponent->parent_id}}" data-level="{{$dataLevel + 1}}">
      <td></td>
      <td></td>
       <td data-column="name">&nbsp&nbsp&nbsp{{$subcomponent->name}} id saya {{$subcomponent->id}} jadi {{$subcomponent->id + 1}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
 @if(count($subcomponent->subcomponent))
            @include('admin.SubComponent',['subcomponent' => $subcomponent->subcomponent, 'dataParent' => $subcomponent->id, 'dataLevel' => $dataLevel ])
        @endif
@endforeach
