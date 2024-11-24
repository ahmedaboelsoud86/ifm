@extends('template.layout')
@section('title')
Helps
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>Helps
                </div>
                
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Name </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> Company Name </th>
                            <th> Company Size </th>
                            <th> Options </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($helps as $index=>$item)
                        <tr class="odd gradeX">

                            <td>  {{ $index +1 }} </td>
                            <td>  {{ $item->title }} </td>
                            <td>  {{ $item->first_name .' '. $item->last_name  }} </td>
                            <td>  {{ $item->phone }} </td>
                            <td>  {{ $item->email }} </td>
                            <td>  {{ $item->company_name }} </td>
                            <td>  {{ $item->company_size }} </td>
                            <td class="center">
                            
                                <form action="{{ route('helps.destroy',$item->id) }}" style="display:inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="delete" class="btn default btn-xs black show-alert-delete-box">
                                    <i class="fa fa-trash-o"></i>  
                                </button>
                                </form>
                                <a href="{{ route('helps.show',$item->id) }}" title="show" class="btn default btn-xs purple">
                                <i class="fa fa-eye"></i></a>
                             </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>      
</div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="{{ asset('admin_assets/js/alert.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/select2/select2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/admin/pages/scripts/table-sliders.js') }}" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   TableManaged.init();
});
</script>
@endpush
