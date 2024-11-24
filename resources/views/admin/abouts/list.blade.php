@extends('template.layout')
@section('title')
About
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>About
                </div>
                <div class="actions">       
                    @if($about)
                        <a href="#"  disabled class="btn btn-default btn-sm ">Add New About</a> 
                    @else
                        <a href="{{ route('abouts.create') }}"   class="btn btn-default btn-sm ">Add New About</a> 
                    @endif   
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th width="220"> Frist Image </th>
                            <th width="220"> Second Image </th>
                            <th> Number OF Years </th>
                            <th> Title EN </th>
                            <th> Title AR </th>
                            <th> Description EN </th>
                            <th> Description AR </th>
                            <th> Options </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($about)
                        <tr class="odd gradeX">
                            <td>  <img class="img-thumbnail" width="200" src="{{ asset('assets/images/'.$about?->frist_image) }}" ></td>
                            <td>  <img class="img-thumbnail" width="200" src="{{ asset('assets/images/'.$about?->second_image) }}" ></td>
                            <td>  {{ $about?->number_of_years }} </td>
                            <td>  {{ $about->translate('en')?->title }} </td>
                            <td>  {{ $about->translate('ar')?->title }} </td>
                            <td>  {{ $about->translate('en')?->description }} </td>
                            <td>  {{ $about->translate('ar')?->description }} </td>
                            <td class="center">
                                <form action="{{ route('abouts.destroy',$about->id) }}" style="display:inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"    title="delete" class="btn default btn-xs black show-alert-delete-box">
                                    <i class="fa fa-trash-o"></i>  
                                </button>
                                </form>
                                <a href="{{ route('abouts.edit',$about->id) }}" title="update" class="btn default btn-xs purple">
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
<script src="{{ asset('admin_assets/admin/pages/scripts/table-abouts.js') }}" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   TableManaged.init();
});
</script>
@endpush
