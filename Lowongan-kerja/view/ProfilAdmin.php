<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="../awesome/css/font-awesome.css">
	<link type="text/css" rel="stylesheet" href="../asset/css/materialize.min.css"  media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="../asset/css/styleadmin.css">
	<title>ADMIN</title>
	<style type="text/css">
		.nav-side-menu {
			overflow: auto;
			font-family: Roboto-Regular;
			font-size: 15px;
			font-weight: 200;
			background-color: #2e353d;
			position: fixed;
			top: 1px;
			width: 220px;
			height: 100%;
			color: #e1ffff;
		}
		.nav-side-menu .brand {
			background-color: #23282e;
			line-height: 50px;
			display: block;
			text-align: center;
			font-size: 14px;
		}
		.nav-side-menu .toggle-btn {
			display: none;
		}
		.nav-side-menu ul,
		.nav-side-menu li {
			list-style: none;
			padding: 0px;
			margin: 0px;
			line-height: 35px;
			cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
     */
 }
 .nav-side-menu ul :not(collapsed) .arrow:before,
 .nav-side-menu li :not(collapsed) .arrow:before {
 	font-family: FontAwesome;
 	content: "\f078";
 	display: inline-block;
 	padding-left: 10px;
 	padding-right: 10px;
 	vertical-align: middle;
 	float: right;
 }
 .nav-side-menu ul .active,
 .nav-side-menu li .active {
 	border-left: 3px solid #d19b3d;
 	background-color: #4f5b69;
 }
 .nav-side-menu ul .sub-menu li.active,
 .nav-side-menu li .sub-menu li.active {
 	color: #d19b3d;
 }
 .nav-side-menu ul .sub-menu li.active a,
 .nav-side-menu li .sub-menu li.active a {
 	color: #d19b3d;
 }
 .nav-side-menu ul .sub-menu li,
 .nav-side-menu li .sub-menu li {
 	background-color: #181c20;
 	border: none;
 	line-height: 28px;
 	border-bottom: 1px solid #23282e;
 	margin-left: 0px;
 }
 .nav-side-menu ul .sub-menu li:hover,
 .nav-side-menu li .sub-menu li:hover {
 	background-color: #020203;
 }
 .nav-side-menu ul .sub-menu li:before,
 .nav-side-menu li .sub-menu li:before {
 	font-family: FontAwesome;
 	content: "\f105";
 	display: inline-block;
 	padding-left: 10px;
 	padding-right: 10px;
 	vertical-align: middle;
 }
 .nav-side-menu li {
 	padding-left: 0px;
 	border-left: 3px solid #2e353d;
 	border-bottom: 1px solid #23282e;
 }
 .nav-side-menu li a {
 	text-decoration: none;
 	color: #e1ffff;
 }
 .nav-side-menu li a i {
 	padding-left: 10px;
 	width: 30px;
 	padding-right: 20px;
 }
 .nav-side-menu li:hover {
 	border-left: 3px solid #d19b3d;
 	background-color: #4f5b69;
 	-webkit-transition: all 1s ease;
 	-moz-transition: all 1s ease;
 	-o-transition: all 1s ease;
 	-ms-transition: all 1s ease;
 	transition: all 1s ease;
 }
 @media (max-width: 767px) {
 	.nav-side-menu {
 		position: relative;
 		width: 100%;
 		margin-bottom: 10px;
 	}
 	.nav-side-menu .toggle-btn {
 		display: block;
 		cursor: pointer;
 		position: absolute;
 		right: 10px;
 		top: 10px;
 		z-index: 10 !important;
 		padding: 3px;
 		background-color: #ffffff;
 		color: #000;
 		width: 40px;
 		text-align: center;
 	}
 	.brand {
 		text-align: left !important;
 		font-size: 22px;
 		padding-left: 20px;
 		line-height: 50px !important;
 	}
 }
 @media (min-width: 767px) {
 	.nav-side-menu .menu-list .menu-content {
 		display: block;
 	}
 }
 body {
 	margin: 0px;
 	padding: 0px;
 }

 img.man-logo {
 	padding: 10px;
 	width: 40%;
 }

</style>
</head>
<body style="background-color:#cfd8dc;">
	<div class="nav-side-menu">
		<div class="brand">
			<img src="../img/man.png" class="man-logo">
		</div>

		<div class="menu-list">

			<ul id="menu-content" class="menu-content collapse out">
				<li class="collapsed">
					<a href="Admin.php">
						<i class="fa fa-home" aria-hidden="true"></i> Beranda
					</a>
				</li>

				<li  data-toggle="collapse" data-target="#products" class="collapsed">
					<a href="TableUserAdmin.php">
						<i class="fa fa-users" aria-hidden="true"></i> Daftar Member
					</a>
				</li>
				<li data-toggle="collapse" data-target="#new" class="collapsed ">
					<a href="TablePerusahaanAdmin.php">
						<i class="fa fa-building" aria-hidden="true"></i> Daftar Perusahaan
					</a>
				</li>

				<li data-toggle="collapse" data-target="#service" class="collapsed">
					<a href="TableIklanAdmin.php">
						<i class="fa fa-bar-chart" aria-hidden="true"></i> Daftar Iklan 
					</a>
				</li>  

				<li data-toggle="collapse" data-target="#service" class="collapsed active">
					<a href="ProfilAdmin.php">
						<i class="fa fa-user fa-lg"></i> Profil
					</a>
				</li>
				<li>
					<a href="home.php">
						<i class="fa fa-sign-in" aria-hidden="true"></i> Log out
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="container col-md-10">
			<form class="col s10">
				<h2 style="text-decoration:underline;">DATA ADMIN</h2>
				<div class="row">
					<div class="input-field col s5">	
						<input id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix">Nama Depan</label>
					</div>
					<div class="input-field col s5">
						<input id="icon_telephone" type="tel" class="validate">
						<label for="icon_telephone">Nama Belakang</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate">
						<label for="Alamat">Alamat</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="icon_telephone" type="tel" class="validate">
						<label for="icon_telephone">No Telfon</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<input id="Email" type="Email" class="validate">
						<label for="EMail">Email
						</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10">
						<textarea id="textarea1" class="materialize-textarea"></textarea>
						<label for="textarea1">Deskripsi</label>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../asset/js/materialize.min.js"></script>
</body>
</html>