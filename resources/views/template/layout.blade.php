<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>@yield('title')</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/css/components.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/admin/layout/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="{{ asset('admin_assets/global/plugins/noty/noty.css') }}">
<script src="{{ asset('admin_assets/global/plugins/noty/noty.min.js') }}"></script>
<!-- END GLOBAL MANDATORY STYLES -->
@stack('css')
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="">
			<img src="{{ asset('admin_assets/admin/layout/img/logo.png') }}" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				
					
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="{{ asset('admin_assets/admin/layout/img/avatar3_small.jpg') }}"/>
					<span class="username username-hide-on-mobile">
					{{-- {{ Auth::user()->name }}  --}}
					</span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="">
							<i class="icon-lock"></i> Change Password </a>
						</li>
						<li>
							<a  href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
							<i class="icon-key"></i> Log Out </a>
							<form id="logout-form" action="" method="POST" style="display: none;">
                                @csrf
                            </form>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

			<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<br>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="{{ Request::segment(2) === 'sliders' ? 'active open' : '' }} ">
					<a href="{{ route('sliders.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Sliders</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'abouts' ? 'active open' : '' }} ">
					<a href="{{ route('abouts.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">About</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'categories' ? 'active open' : '' }} ">
					<a href="{{ route('categories.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Category of Facilities</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'facilities' ? 'active open' : '' }} ">
					<a href="{{ route('facilities.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Facilities</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'articles' ? 'active open' : '' }} ">
					<a href="{{ route('articles.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Articles</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'clients' ? 'active open' : '' }} ">
					<a href="{{ route('clients.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Clients</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'settings' ? 'active open' : '' }} ">
					<a href="{{ route('settings.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Settings</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'power_services' ? 'active open' : '' }} ">
					<a href="{{ route('power_services.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Power Services</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'awards' ? 'active open' : '' }} ">
					<a href="{{ route('awards.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Awards and Accreditations</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'teams' ? 'active open' : '' }} ">
					<a href="{{ route('teams.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Teams</span>
					</a>
				</li>
                <li class="{{ Request::segment(2) === 'category_services' ? 'active open' : '' }} ">
					<a href="{{ route('category_services.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Category Services</span>
					</a>
				</li>
				<li class="{{ Request::segment(2) === 'services' ? 'active open' : '' }} ">
					<a href="{{ route('services.index')}}" >
					<i class="fa fa-inbox"></i>
					<span class="title">Services</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="row">
				<div class="col-md-12">
					@yield('content')
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="{{ asset('admin_assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('admin_assets/global/plugins/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ asset('admin_assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('admin_assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('admin_assets/global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/admin/layout/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/admin/layout/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/admin/layout/scripts/demo.js') }}" type="text/javascript"></script>

@stack('js')
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   //TableManaged.init();
});
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>