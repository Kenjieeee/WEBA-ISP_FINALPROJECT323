<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="
https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="<?= ROOT ?>/assests/css/main.css">
	<script src = "<?= ROOT ?>/assets/js/navigation.js"></script>
	<title>SIDEBAR</title>
</head>
<body>
	<div class="sidebar">
		<div class="top">
			<div class="logo">
				<i class="bx bxl-codepen"></i>
			<span>REQUEST BARANGAY CLEARANCE</span>
			</div>
			<i class="bx bx-menu" id="btn"></i>
		</div>
		<div class="user">
			<?php if(empty($_SESSION['USER']->img)){?>
			<img src="<?=ROOT ?>/assests/images/defaultprof.png" class = "user-img" alt="me">
			<?php  }else{?> 
				<img src="<?=ROOT ?>/assests/images/<?= $_SESSION['USER']->img ?>" class = "user-img" alt="me">

			 <?php } ?>
			<div>
				<p class = "bold"><?= $_SESSION['USER']->fname." ".$_SESSION['USER']->lname ?></p>
				<a href="<?=ROOT?>/editprofile" style = "color: black; text-decoration: none;">
					<p style = "font-family: Calibri; font-size: 13px; text-indent: 5px;">Edit Profile</p>
				</a>
			</div>
		</div>
		 <ul>
			<li>
				<a href = "<?= ROOT ?>/dashboard">
					<i class = "bx bx-grid-alt"></i>
					<span class="nav-item">Dashboard</span>
				</a>
				<span class="tooltip">Dashboard</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/request">
					<i class = "bx bx-git-pull-request"></i>
					<span class="nav-item">Request</span>
				</a>
				<span class="tooltip">Request</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/pending">
					<i class = "bx bx-time"></i>
					<span class="nav-item">Pending/Process</span>
				</a>
				<span class="tooltip">Pending/Process</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/completed">
					<i class = "bx bx-message-square-check"></i>
					<span class="nav-item">Completed</span>
				</a>
				<span class="tooltip">Completed</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/settings">
					<i class = "bx bxs-cog"></i>
					<span class="nav-item">Settings</span>
				</a>
				<span class="tooltip">Settings</span>
			</li>
			<li>
				<a href = "" onclick = "logoutfunc()">
					<i class = "bx bxs-log-out-circle"></i>
					<span class="nav-item">Logout</span>
				</a>
				<span class="tooltip">Logout</span>
			</li>
		</ul>
	</div>