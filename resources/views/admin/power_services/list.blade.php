@extends('template.layout')
@section('title')
Power Services
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>Power Services
                </div>
                <div class="actions">       
                    <a href="{{ route('power_services.create') }}" class="btn btn-default btn-sm ">Add New Power of Services</a>    
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Title EN </th>
                            <th> Title AR </th>
                            <th> Description EN </th>
                            <th> Description  AR</th>
                            <th> Options </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($power_services as $index=>$item)
                        <tr class="odd gradeX">

                            <td>  {{ $index +1 }} </td>
                            <td>  {{ $item->translate('en')?->title }} </td>
                            <td>  {{ $item->translate('ar')?->title }} </td>
                            <td>  {{ $item->translate('en')?->description }} </td>
                            <td>  {{ $item->translate('ar')?->description }} </td>
                            <td class="center">
                                <form action="{{ route('power_services.destroy',$item->id) }}" style="display:inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"    title="delete" class="btn default btn-xs black show-alert-delete-box">
                                    <i class="fa fa-trash-o"></i>  
                                </button>
                                </form>
                              
                                <a href="{{ route('power_services.edit',$item->id) }}" title="update" class="btn default btn-xs purple">
                                <i class="fa fa-edit"></i></a>
                              
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
