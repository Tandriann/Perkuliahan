<?php
session_start();
// include('system/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Boxicons -->
	<link rel="icon" type="image/png" sizes="192x192" href="img/favicon/logo-small.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/logo-small.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/logo-small.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/logo-small.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href='css/boxicons/css/boxicons.min.css' rel='stylesheet' />
	<link href='library/jquery-ui/jquery-ui.min.css' rel='stylesheet' />
	<link href='library/epoch/css/epoch.css' rel='stylesheet' />
	<link href="style.css" rel="stylesheet" />
	<title>WOLIO™ Dashboard</title>
</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="javascript:void(0)" class="brand">
			<img src="img/josal_logo.png">
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="javascript:void(0)" id="btn-dashboard">
					<i class='bx bx-category'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-general-report">
					<i class='bx bx-note'></i>
					<span class="text">General Report</span>
				</a>
			</li>
			<!-- <li>
				<a href="javascript:void(0)" id="btn-server-monitoring">
					<i class='bx bx-server'></i>
					<span class="text">Server Monitoring</span>
				</a>
			</li> -->
			<li>
				<a href="javascript:void(0)" id="btn-service-monitoring">
					<i class='bx bx-desktop'></i>
					<span class="text">Service Monitoring</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-partner">
					<i class='bx bx-user-pin'></i>
					<span class="text">Partner</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-user">
					<i class='bx bx-user-circle'></i>
					<span class="text">User</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-merchant">
					<i class='bx bx-store'></i>
					<span class="text">Merchant</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-branch">
					<i class='bx bx-git-branch'></i>
					<span class="text">Branch</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-admin">
					<i class='bx bx-user'></i>
					<span class="text">Admin</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-finance">
					<i class='bx bx-money-withdraw'></i>
					<span class="text">Finance</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-backup-restore">
					<i class='bx bx-data'></i>
					<span class="text">Backup Restore</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-company-setting">
					<i class='bx bx-building'></i>
					<span class="text">Company Setting</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)" id="btn-system-setting">
					<i class='bx bx-cog'></i>
					<span class="text">System Setting</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="javascript:void(0)" class="logout" id="btn-logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-chevron-left-circle'></i>
			<!-- <a href="javascript:void(0)" class="nav-link">Live</a> -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Cari...">
					<button type="submit" class="btn-search"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode" style="display: none;"></label>
			<a href="javascript:void(0)" class="notification" id="btn-notification">
				<i class='bx bxs-bell'></i>
				<span class="num">0</span>
			</a>
			<a href="javascript:void(0)" class="profile" id="btn-profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main id="main-page"></main>
		<!-- MAIN -->

	</section>

	<!-- <script src="library/babel/babel.min.js" type="text/javascript"></script> -->
	<script src="library/jquery/jquery.min.js" type="text/javascript"></script>
	<script src="library/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="library/d3/d3.min.js" type="text/javascript"></script>
	<script src="library/epoch/js/epoch.js" type="text/javascript"></script>
	<script src="script.js"></script>
</body>

</html>