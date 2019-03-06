<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:12 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('admin/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Metro</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
							
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						
						<!-- end: Message Dropdown -->
						
						
					
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> Łukasz Holeczek
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->

				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="{{URL::to('/addcontact')}}"> <i class="icon-envelope"></i><span class="hidden-tablet">Add contact</span></a></li>
						<li><a href="{{URL::to('/allcontact')}}"><i class="icon-tasks"></i><span class="hidden-tablet">All contact </span></a></li>
					<!-- 	<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>



          <!-- content start here -->
			<div class="row-fluid">


				@yield('content')

				
			</div>		
           <!-- content end -->




			<div class="row-fluid">
				

			</div>
			
			<div class="row-fluid hideInIE8 circleStats">
				
				</div>

				<div class="span2 noMargin" onTablet="span4" onDesktop="span2">
                
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
                	
				</div>

				<div class="span2" onTablet="span4" onDesktop="span2">
              
				</div>
						
			</div>		
						
			<div class="row-fluid">
				</div>
				
				</div>
				
				<div class="widget yellow span4 noMargin" onTablet="span12" onDesktop="span4">
					
			
			
			</div>
			
			<div class="row-fluid">
				
				
				</div><!--/span-->
				
			
				
			
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('admin/js/modernizr.js')}}"></script>
	
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	
		<script src="j{{asset('admin/s/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('admin/js/excanvas.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.js')}}"></script>
	<script src="j{{asset('admin/s/jquery.flot.pie.js')}}"></script>
	<script src="j{{asset('admin/s/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('admin/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('admin/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('admin/js/counter.js')}}"></script>
	
		<script src="{{asset('admin/js/retina.js')}}"></script>

		<script src="{{asset('admin/js/custom.js')}}"></script>


		<!-- javascript modal is used for delete conformation -->

		<script src="{{('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>




	<!-- end: JavaScript-->
	
</body>
<!--  javascript modal is used for delete conformation start -->

<script>
		$(document).on("click","#delete", function(e){
  e.preventDefault();
  var link = $(this).attr("href");
   bootbox.confirm("Are you want to delete?", function(result) {
    if (result) {
      window.location.href = link;
    };
  });
});
</script>
<!-- javascript modal is used for delete conformation end  -->

</html>
