@extends('template.layout')
@section('title')
Sliders
@endsection
@section('content')
@include('partials._session')                    
<div class="row">
    <div class="col-md-12  col-sm-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i>Sliders
                </div>
                <div class="actions">       
                    <a href="{{ route('sliders.create') }}" class="btn btn-default btn-sm ">Add New Slider</a>    
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> Image </th>
                            <th> Link To </th>
                            <th> Title EN </th>
                            <th> Title AR </th>
                            <th> Top Header EN </th>
                            <th> Top Header AR </th>
                            <th> Buttom Header EN </th>
                            <th> Buttom Header AR</th>
                            <th> Options </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $index=>$item)
                        <tr class="odd gradeX">

                            <td>  {{ $index +1 }} </td>
                            <td>  <img class="img-thumbnail" width="200" src="{{ asset('assets/images/'.$item->image) }}" ></td>
                            <td>  {{ $item->linkto }} </td>
                            <td>  {{ $item->translate('en')?->title }} </td>
                            <td>  {{ $item->translate('ar')?->title }} </td>
                            <td>  {{ $item->translate('en')?->top_header }} </td>
                            <td>  {{ $item->translate('ar')?->top_header }} </td>
                            <td>  {{ $item->translate('en')?->buttom_header }} </td>
                            <td>  {{ $item->translate('ar')?->buttom_header }} </td>    
                            <td class="center">
                            
                                <form action="{{ route('sliders.destroy',$item->id) }}" style="display:inline;" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"    title="delete" class="btn default btn-xs black show-alert-delete-box">
                                    <i class="fa fa-trash-o"></i>  
                                </button>
                                </form>
                              
                                <a href="{{ route('sliders.edit',$item->id) }}" title="update" class="btn default btn-xs purple">
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
