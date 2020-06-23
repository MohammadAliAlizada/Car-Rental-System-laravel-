@extends('cms.master3')

@section('content')

<p>Lists of Drivers That are registerd</p>

<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th>
          <input type="checkbox" id="check-all" class="flat">
        </th>
        <th class="column-title">Id </th>
        <th class="column-title">Pick Up </th>
        <th class="column-title">Drop Up </th>
        <th class="column-title">car_type</th>
        <th class="column-title">Accept</th>
        
        
        </th>
        <th class="bulk-actions" colspan="7">
          <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
        </th>
      </tr>
    </thead>

    <tbody>
    @foreach($drivers as $rider)
      <tr class="even pointer">
        <td class="a-center ">
          <input type="checkbox" class="flat" name="table_records">
        </td>
        <td>{{$rider->id}} </td>
<td>{{$rider->pick_up}}</td>
<td>{{$rider->drop_up}}</td>
<td>{{$rider->car_type}}</td>

<td><a href="{{ route('accept',['id' => encrypt($rider->id)]) }}" class="btn btn-primary show-tododetail-modal">Accept</a></td>
       
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
