@extends('cms.master')

@section('content')

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 

                  <div class="x_content">

                    <p>Lists of Registered Company</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">FristName </th>
                            <th class="column-title">LastName </th>
                            <th class="column-title">Company Email </th>
                            <th class="column-title">Phone Number </th>
                            <th class="column-title">Edit</th>
                            <th class="column-title">Delete </th>
                            <th class="column-title">Delete </th>
                            
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($companies as $cpm)
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$cpm->firstname}} </td>
                          <td>{{$cpm->lastname}}</td>
                          <td>{{$cpm->email}}</td>
                          <td>{{$cpm->phone}}</td>
                          <td><a href="{{route('riderUpdate',['id' => encrypt($cpm->id)])}}" class="fa fa-edit fa-2x" ></a></td>
                          <td><a href="{{route('riderDelete',['id' => encrypt($cpm->id)])}}" class="fa fa-trash fa-2x"></a></td>
                          <td><a href="{{route('cpmDetailList',['id' => encrypt($cpm->id)])}}" class="btn btn-primary show-tododetail-modal">Details</a></td>
                                            
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
							
						



@endsection
