<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title></title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{ asset('assets/styles/style.min.css') }}">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/waves/waves.min.css') }}">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/sweet-alert/sweetalert.css') }}">
	
	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/percircle/css/percircle.css') }}">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/chart/chartist/chartist.min.css') }}">

	<!-- Data Tables -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/datatables/media/css/dataTables.bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>
	<!-- Dropify -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/dropify/css/dropify.min.css') }}">
	<!-- RTL -->
	<link rel="stylesheet" href="{{ asset('assets/styles/style-rtl.min.css') }}">
	<!-- Color Picker -->
	<link rel="stylesheet" href="{{ asset('assets/color-switcher/color-switcher.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugin/tinymce/skins/lightgray/skin.min.css') }}">

	<script src="{{ asset('assets/plugin/tinymce/tinymce.min.js') }}"></script>

	<!-- Remodal -->
	<link rel="stylesheet" href="{{ asset('assets/plugin/modal/remodal/remodal.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugin/modal/remodal/remodal-default-theme.css') }}">
	<script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">الصفحات العالمية</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>

	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<!-- /.title -->
			<ul class="menu js__accordion">
				<li class="{{ $arr[0] }}">
					<a class="waves-effect" href="slider"><i class="menu-icon fa fa-home"></i><span>سلايدر</span></a>
				</li>
				<li class="{{ $arr[1] }}">
					<a class="waves-effect" href="/newsTicker"><i class="menu-icon fa fa-paste"></i><span>شريط الاخبار</span></a>
				</li>
				<li class="{{ $arr[2] }}">
					<a class="waves-effect" href="/faq"><i class="menu-icon fa fa-file-image-o"></i><span>كيفية الاستخدام</span></a>
				</li>
				<li class="{{ $arr[4] }}">
					<a class="waves-effect" href="/markets"><i class="menu-icon fa fa-cart-arrow-down"></i><span>الدليل </span></a>
				</li>
				<li class="{{ $arr[5] }}">
					<a class="waves-effect" href="/area"><i class="menu-icon fa fa-users"></i><span>المناطق</span></a>
				</li>
				<li class="{{ $arr[6] }}">
					<a class="waves-effect" href="/"><i class="menu-icon fa fa-sitemap"></i><span>الصيدليات</span></a>
				</li>
				<li class="{{ $arr[7] }}">
					<a class="waves-effect" href="/jops"><i class="menu-icon fa fa-cubes"></i><span>الوظائف</span></a>
				</li>
				<li class="{{ $arr[8] }}">
					<a class="waves-effect" href="/newspaper"><i class="menu-icon fa fa-cubes"></i><span>الجريدة</span></a>
				</li>
				<li class="{{ $arr[9] }}">
					<a class="waves-effect" href="/admin/project"><i class="menu-icon fa fa-cubes"></i><span>حسابات المستخدمين</span></a>
				</li>
				<li class="{{ $arr[10] }}">
					<a class="waves-effect" href="/contact"><i class="menu-icon fa fa-cubes"></i><span>معلومات التواصل</span></a>
				</li>
				<li class="{{ $arr[10] }}">
					<a class="waves-effect" href="/tender"><i class="menu-icon fa fa-cubes"></i><span>المناقصات  </span></a>
				</li>

			</ul>
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->
<div class="fixed-navbar">

	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<!-- /.ico-item fa fa-fa-arrows-alt -->
		<div class="ico-item toggle-hover js__drop_down ">
			<span class="fa fa-th js__drop_down_button"></span>
			<div class="toggle-content">
				<ul>
					<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
					<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
					<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
					<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
					<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
				</ul>
				<a href="#" class="read-more">More</a>
			</div>
			<!-- /.toggle-content -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>

	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul id="Notification" class="notice-list">

		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-left text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#message-popup -->


<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-xs-12">
				<div class="box-content">
					@yield('content')
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->

		</div>
		<!-- /.row -->
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/modernizr.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/nprogress/nprogress.js') }}"></script>
	<script src="{{ asset('assets/plugin/sweet-alert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/waves/waves.min.js') }}"></script>
	<!-- Full Screen Plugin -->
	<script src="{{ asset('assets/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

	<!-- Percent Circle -->
	<script src="{{ asset('assets/plugin/percircle/js/percircle.js') }}"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- Chartist Chart -->
	<script src="{{ asset('assets/plugin/chart/chartist/chartist.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/chart.chartist.init.min.js') }}"></script>

	<!-- FullCalendar -->
	<script src="{{ asset('assets/plugin/moment/moment.js') }}"></script>
	<script src="{{ asset('assets/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/fullcalendar.init.js') }}"></script>

	<script src="{{ asset('assets/scripts/main.min.js') }}"></script>
	<script src="{{ asset('assets/color-switcher/color-switcher.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/tinymce-rtl.init.min.js') }}"></script>

	<!-- Dropify -->
	<script src="{{ asset('assets/plugin/dropify/js/dropify.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/fileUpload.demo.min.js') }}"></script>

	<!-- Data Tables -->
	<script src="{{ asset('assets/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/datatables/media/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/datatables.demo.min.js') }}"></script>
	<!-- Remodal -->
	<script src="{{ asset('assets/plugin/modal/remodal/remodal.min.js') }}"></script>


	<script src="{{ asset('assets/scripts/sweetalert.init.min.js') }}"></script>

	<script src="{{ asset('assets/plugin/form-wizard/prettify.js') }}"></script>
	<script src="{{ asset('assets/plugin/form-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
	<script src="{{ asset('assets/plugin/jquery-validation/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/form.wizard.init.min.js') }}"></script>


<script>
        $( document ).ready(function() {
            setInterval(Notification, 100);
            function Notification() {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                        document.getElementById("Notification").innerHTML=this.responseText;

                    }
                }
                xmlhttp.open("GET","{{ asset("liveupdate.blade.php") }}",true);
                xmlhttp.send();
            }
        });

	</script>
</body>
</html>