
<!DOCTYPE html>
<html lang="en'">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge'">
	<meta charset="utf-8'">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Dana | Loan Management" />
	<meta name="author" content="" />

	<link rel="icon" href="{{ asset('images/logo/dana_icon.ico') }}">

	<title>Kompass | Event Management System</title>

	<link rel="stylesheet" href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons/entypo/css/entypo.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-icons/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('css/neon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('css/skins/white.css') }}">
	<link rel="stylesheet" media="print" href="{{ asset('css/print.css?v=1.1') }}">


	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
	<script src="{{ asset('js/jquery.key.min.js') }}"></script>


</head>

<body class="page-body  page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	@include('layouts.side_nav')
	<div class="main-content">
				
		<div class="row user-panel">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-3 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown "><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="{{ asset('images/default_pic.jpg') }}" alt="" class="img-circle" width="44" />
							
						</a>
		
		            <ul class="nav-item dropdown">
					
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
		
						
					 
		            </ul>
				</ul>	
		
			</div>
			
			<div class="col-md-6 text-center">
				<h3 class="text-info p-0 m-0">Kompass Discover Great Event</h3>
			</div>

		 <!-- Raw Links -->
         <div class="col-md-3 clearfix hidden-xs">
	
    <ul class="list-inline links-list pull-right">
	
	<button type="button" class="btn btn-primary btn-xs" onclick=""><i class="entypo-text"></i>INVITE</button>
	<button type="button" class="btn btn-primary btn-xs" onclick=""><i class="entypo-text"></i>CHECKIN</button>
	<button type="button" class="btn btn-primary btn-xs" onclick=""><i class="entypo-text"></i>CheckIN QR</button>
	<button type="button" class="btn btn-secondry btn-xs" onclick=""><i class="entypo-text"></i>CHECKOUT</button>
	<button type="button" class="btn btn-default btn-xs" onclick=""><i class="entypo-user"></i></button>
	<button type="button" class="btn btn-default btn-xs" onclick=""><i class="entypo-chat"></i></button>
	<button type="button" class="btn btn-default btn-xs" onclick=""><i class="entypo-plus-circled"></i></button>

</div>


</div>
<div class="clear"></div>
<hr />
<div class="container">
@yield('cont')
</div>


		<!-- Footer -->
		<br><br><br><br><br>
		<footer class="footer-main'">	
		@yield('content')
			<div>
				<div class="pull-right'">
					Developed By: &nbsp;<strong class="only-print'">enteridea.com</strong>
					<a class="not-print" href="http://enteridea.com" target="_blank'">Enter Idea</a>
				</div>
				<div>
					&copy; <?=date('Y')?> <strong>Dana</strong>, <span class="text-primary">Loan Management System</span>
				</div>
			</div>
		</footer>
	</div>
</div>
	<script>
		function showPasswordChangeModal(){
			jQuery.noConflict();
			
			$('#pass_change_modal').modal('show', {backdrop: 'static'});
		}
		//Change the ID to activate
		$('#pass_orm').submit(function(event){
			event.preventDefault();
			var new_pass = $('#new_pass').val();
			var confirm_pass = $('#confirm_pass').val();
			if(new_pass == confirm_pass){
				$.ajax({
					type        : 'POST',
					url         : '',
					data        : {'new_pass' : new_pass}, 
					
					
					error: function(){
						alert('There was a problem');
					},
					success: function(){
						// window.location.href = '';
						alert('ch');
					}
				})
			}
			else{
				$('#pass_form_msg').html('Passwords must be same');
			}

		});
	</script>
	<div class="modal fade custom-width" id="pass_change_modal') }}">
		<div class="modal-dialog" style="width: 40%') }}">
			<div class="modal-content') }}">
				
				<div class="modal-header') }}">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true') }}">&times;</button>
					<h4 class="modal-title text-center') }}">Change Password</h4>
				</div>
				
				<div class="modal-body') }}">
				
					<form role="form" method="post" action="home/change_password" id="pass_form') }}">
						
						<h4 class="text-center text-danger" id="pass_form_msg') }}"></h4>
						<div class="form-group row') }}">
							<label class="col-md-4') }}">New Password</label>
							<div class="col-md-6') }}">
								<input type="password" id="new_pass" class="form-control" required name="new_pass" placeholder="New Password" autocomplete="off') }}">
							</div>
						</div>
						<div class="form-group row') }}">
							<label class="col-md-4') }}">Confirm New Password</label>
							<div class="col-md-6') }}">
								<input type="password" id="confirm_pass" class="form-control" required name="confirm_pass" placeholder="Confirm New Password" autocomplete="off') }}">
							</div>
						</div>

					</form>
					
				</div>
				
				<div class="modal-footer') }}">
					<button type="button" class="btn btn-default" data-dismiss="modal') }}">Cancel</button>
					<button type="submit" class="btn btn-info" form="pass_form') }}">Save</button>
				</div>
			</div>
		</div>
	</div>

    	

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{ asset('js/rickshaw/rickshaw.min.css') }}">
	<link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2-bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}">
	<link rel="stylesheet" href="{{ asset('js/selectboxit/jquery.selectBoxIt.css') }}">
	<link rel="stylesheet" href="{{ asset('js/daterangepicker/daterangepicker-bs3.css') }}">
	<link rel="stylesheet" href="{{ asset('js/icheck/skins/minimal/_all.css') }}">
	<link rel="stylesheet" href="{{ asset('js/icheck/skins/square/_all.css') }}">
	<link rel="stylesheet" href="{{ asset('js/icheck/skins/flat/_all.css') }}">
	<link rel="stylesheet" href="{{ asset('js/icheck/skins/futurico/futurico.css') }}">
	<link rel="stylesheet" href="{{ asset('js/icheck/skins/polaris/polaris.css') }}">

	<!-- Bottom scripts (common) -->
	<script src="{{ asset('js/gsap/TweenMax.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	


	<!-- Imported scripts on this page -->
	<script src="{{ asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js') }}"></script>
	<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('js/rickshaw/vendor/d3.v3.js') }}"></script>
	<script src="{{ asset('js/rickshaw/rickshaw.min.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/morris.min.js') }}"></script>
	<script src="{{ asset('js/toastr.js') }}"></script>
	
	<script src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
	
	<script src="{{ asset('js/datatables/datatables.js') }}"></script>
	<script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
	<script src="{{ asset('js/neon-chat.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-colorpicker.min.js') }}"></script>
	<script src="{{ asset('js/moment.min.js') }}"></script>
	<script src="{{ asset('js/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('js/jquery.multi-select.js') }}"></script>
	<script src="{{ asset('js/icheck/icheck.min.js') }}"></script>
	<script src="{{ asset('js/fileinput.js') }}"></script>
	<script src="{{ asset('js/select2/select2.min.js') }}"></script>
	
	
	
	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('js/neon-custom.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	

	<!-- Demo Settings -->
	<script src="{{ asset('js/neon-demo.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('css/custom.css?v=1.1') }}">

	<script>
		$(document).ready(function(){
			jQuery.noConflict();
			
			let base_url = ``;

			$.key('ctrl+alt+n', function() {
				$('.page-container').toggleClass('sidebar-collapsed')
			});
			
			$.key('ctrl+alt+q', function() {
				window.location = base_url+"ques";
			});
			$.key('ctrl+alt+h', function() {
				window.location = base_url+"hajji";
			});
			$.key('ctrl+alt+d', function() {
				window.location = base_url+"trxn/deposit";
			});
			$.key('ctrl+alt+c', function() {
				window.location = base_url+"trxn/cost";
			});
			$.key('ctrl+alt+p', function() {
				window.location = base_url+"party";
			});
			$.key('ctrl+alt+u', function() {
				window.location = base_url+"pp";
			});
		});
	</script>
	
</body>
</html>