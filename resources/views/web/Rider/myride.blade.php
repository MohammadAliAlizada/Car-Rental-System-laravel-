@extends('cms.master2')

@section('content')
<h3>List of My Rides</h3>



 <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Rider Id </th>
                            <th class="column-title">Pick UP </th> 
                            <th class="column-title">Drop Up </th>
                          
                            
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($accept as $accept)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$accept->rider_id}} </td>
        <td>{{$accept->pick_up}}</td>
        <td>{{$accept->drop_up}}</td>
               
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

@endsection
