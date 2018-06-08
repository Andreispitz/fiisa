<?php
	session_start();
?>

<html lang="ro">
<head>
<link rel="stylesheet" type="text/css" href="b.css">
<title>OPeM</title>
<link rel="shortcut icon" href="pen.ico">
 <meta property="og:url" content="localhost/index.php" /> 
 <meta property="og:type" content="website" /> 
 <meta property="og:title" content="Your page title" /> 
 <meta property="og:description" content="Your page description" /> //Give a short page description here. 
 <meta property="og:image" content="Your shareable image src" /> //Give your full image source.
</head>


<body>

	<?php
			if(isset($_SESSION['u_id'])){
				echo '"<nav class="menu">
		<ul>
				<li > 
					<a href="index.php">ACASA</a>
				</li>
				<li>
					<a href="creaza.php">CREEAZA</a>
				</li>
				
				<li>
					<a href="toatep.php">PETITII</a>
				</li>
				<li>
					<a href="contul_meu.php">CONTUL MEU</a>
				</li>

		</ul>
	</nav>"';
			}
			else{
				echo '"<nav class="menu">
		<ul>
				<li style="padding-left: 70px"> 
					<a href="index.php">ACASA</a>
				</li>
				<li style="padding-left: 70px">
					<a href="toatep.php">PETITII</a>
				</li>
				<li style="padding-left: 70px">
					<a href="logare.php">CONTUL MEU</a>
				</li>

		</ul>
	</nav>"';
			}
		?>