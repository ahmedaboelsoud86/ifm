@extends('template.layout')
@section('title')
Settings
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>Settings
                </div>
                <div class="actions">
                    @if($contactinfo)       
                       <a href="#" disabled class="btn btn-default btn-sm ">Add New Settings</a>  
                    @else
                       <a href="{{ route('settings.create') }}" class="btn btn-default btn-sm ">Add New Settings</a>  
                    @endif
                      
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> Adress En </th>
                            <th> Adress Ar </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th> Whatspp </th>
                            <th> Linkedin </th>
                            <th> Youtube </th>
                            <th> Instagram</th>
                            <th> Facebok</th>
                            <th> Twitter</th>
                            <th> Options </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($contactinfo)
                        <tr class="odd gradeX">
                            
                            <td>  {{ json_decode($contactinfo->adress, true)['adress_en'] }} </td>
                            <td>  {{ json_decode($contactinfo->adress, true)['adress_ar'] }} </td>
                            <td>  {{ $contactinfo->phone }} </td>
                            <td>  {{ $contactinfo->email }} </td>
                            <td>  {{ $contactinfo->whatsapp }} </td>
                            <td>  {{ $contactinfo->linkedin }} </td>
                            <td>  {{ $contactinfo->youtube }} </td>
                            <td>  {{ $contactinfo->instagram }} </td>
                            <td>  {{ $contactinfo->facebok }} </td>
                            <td>  {{ $contactinfo->twitter }} </td>
                            <td class="center">
                                <form action="{{ route('settings.destroy',$contactinfo->id) }}" style="display:inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"    title="delete" class="btn default btn-xs black show-alert-delete-box">
                                    <i class="fa fa-trash-o"></i>  
                                </button>
                                </form>
                                <a href="{{ route('settings.edit',$contactinfo->id) }}" title="update" class="btn default btn-xs purple">
                                <i class="fa fa-edit"></i></a>
                             </td>
                        </tr>
                        @endif
                      
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
