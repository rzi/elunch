<!doctype html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
	<title>Schneider elunch - zarządzanie użytkownikami</title>
    <link rel="stylesheet" href="/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="/www/css/style.css" type="text/css"/>
</head>
<body class="ddcss3support">

	<!-- gora strony -->
	<header class="site-top">
		<div class="container ">
			<div class="d-flex flex-row">
				<div class="flex-fill p-2 bd-highlight">
					<a href="/"><img src="/www/img/logo.png"> </a>
				</div>

				<div class="flex-fill align-self-center ">
					<h1>Zarządzanie użytkownikami </h1>
				</div>
			</div>

			<div id="hrline">
			</div>
		</div>

	</header>
	<br>

	<!-- Tresc strony -->
	<section class="container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 ">
					<div class="container">
							<h4>Dodaj użytkownika</h4>
							<form action="addUser.php" method="post">
								SESA:<br />
								<input type="text" name="sesa" /><br />
								Imię:<br />
								<input type="text" name="imie" /><br />
								Nazwisko:<br />
								<input type="text" name="nazwisko" /><br />
								Numer SAP:<br />
								<input type="text" name="numer_sap" /><br />
								e-mail:<br />
								<input type="text" name="email" /><br />
								Grupa:<br />
								<input type="text" name="grupa" list="lista_grup" /><br />
								<datalist id="lista_grup">
									<option value="MBC">
									<option value="DVC">
								</datalist>
								Typ użytkownika:<br />
								<input type="text" name="typ" list="lista_typ" /><br />
								<datalist id="lista_typ">
									<option value="user">
									<option value="admin">
								</datalist>
								<br/>
								<input type="submit" value="dodaj" />
								</form>

								<br>

					</div>

				</div>
				<div class="col-xs-12 col-sm-9 ">
					<div class="container text-center" id="menuLewe3" class="menuCSS3">

								<h4>Lista użytkowników</h4>
							<div class="mydive" id="mydive">
								<?php
								require "tableUsers.php";
								?>
							<div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Stopka strony -->
	<footer class="site-footer">
		<div class="container text-center">
		<br>	Copyright 2006-2018 elunch.cba.pl
		</div>
	</footer>

	<script src="/www/js/jquery.js"></script>
	<script src="/www/js/bootstrap.min.js"></script>
	<script src="/www/js/custom.js"></script>

</body>
</html>
