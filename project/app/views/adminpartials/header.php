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
				<p style = "font-family: Calibri; font-size: 15px; text-indent: 5px;"><?= $_SESSION['USER']->role ?></p>
			</div>
		</div>
		 <ul>
			<li >
				<a href = "<?= ROOT ?>/adminpending" >
					<i class = "bx bx-timer" style = "font-size:24px;"></i>
					<span class="nav-item">Pending Request</span>
				</a>
				<span class="tooltip">Pending Request</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/adminresidents">
					<i class = "bx bx-building-house" style = "font-size:24px;"></i>
					<span class="nav-item">Residents</span>
				</a>
				<span class="tooltip">Residents</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/adminhistory">
					<i class = "bx bx-history" style = "font-size:24px;"></i>
					<span class="nav-item">History</span>
				</a>
				<span class="tooltip">History</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/admindocuments">
					<i class = "bx bx-file" style = "font-size:24px;"></i>
					<span class="nav-item">Documents</span>
				</a>
				<span class="tooltip">Documents</span>
			</li>
            <li>
				<a href = "<?= ROOT ?>/adminspam">
					<i class = "bx bxs-x-circle" style = "font-size:24px;"></i>
					<span class="nav-item">Spam</span>
				</a>
				<span class="tooltip">Spam</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/adminsettings">
					<i class = "bx bxs-cog" style = "font-size:24px;"></i>
					<span class="nav-item">Settings</span>
				</a>
				<span class="tooltip">Settings</span>
			</li>
			<li>
				<a href = "<?= ROOT ?>/logout" onclick = "logoutfunc()">
					<i class = "bx bxs-log-out-circle" style = "font-size:24px;"></i>
					<span class="nav-item">Logout</span>
				</a>
				<span class="tooltip">Logout</span>
			</li>
		</ul>
	</div>