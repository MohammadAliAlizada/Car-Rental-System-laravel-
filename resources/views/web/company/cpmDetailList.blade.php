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
                            <th class="column-title">User Id</th>
                            <th class="column-title">Company </th>
                            <th class="column-title">Address</th>
                          
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
                       
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>{{$companies->user_id}} </td>
                          <td>{{$companies->companyName}}</td>
                          <td>{{$companies->address}}</td>
                         
                          <td><a href="{{route('riderUpdate',['id' => encrypt($companies->id)])}}" class="fa fa-edit fa-2x" ></a></td>
                          <td><a href="{{route('riderDelete',['id' => encrypt($companies->id)])}}" class="fa fa-trash fa-2x"></a></td>
                          <td><a href="{{route('cpmDetailList',['id' => encrypt($companies->id)])}}" class="btn btn-primary show-tododetail-modal">Details</a></td>
                                            
                            </td>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
							
						



@endsection
