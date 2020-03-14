@extends('admin.layout')
@section('content')

@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<div class="row-fluid sortable ui-sortable">        
    <div class="box span12">
        <div class="box-header" data-original-title="">
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <!-- <div class="row-fluid">
                    <div class="span6">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
                            <label>
                                <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                    <option value="10" selected="selected">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> records per page
                            </label>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="dataTables_filter" id="DataTables_Table_0_filter">
                            <label>Search: <input type="text" aria-controls="DataTables_Table_0"></label>
                        </div>
                    </div>
                </div> -->
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" aria-controls="DataTables_Table_0" aria-label="" style="width: 158px;">Roll</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 229px;">Name</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 125px;">phone</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 133px;">image</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 133px;">address</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 133px;">department</th>
                            <th class="sorting" aria-controls="DataTables_Table_0" aria-label="" style="width: 269px;">Actions</th>
                        </tr>
                    </thead>   

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($bba_students as $student)
                        <tr class="odd">
                            <td class="  sorting_1">{{ $student->roll}}</td>
                            <td class="  sorting_1">{{ $student->name}}</td>
                            <td class="  sorting_1">{{ $student->phone}}</td>
                            <td class="  sorting_1">
                                <img src="{{ asset('$student->image') }}">
                            </td>
                            <td class="  sorting_1">{{ $student->address}}</td>
                            <td class="  sorting_1">{{ $student->department}}</td>
                            <td class="center ">
                                <a class="btn btn-success" href="#">
                                    <i class="halflings-icon white zoom-in"></i>  
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="halflings-icon white trash"></i> 
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row-fluid"><div class="span12">
                    <!-- <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div> -->
                </div>
                <div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination">
                    <!-- <ul>
                        <li class="prev disabled"><a href="#">← Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#">Next → </a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>            
</div>
</div><!--/span-->

</div>

@endsection