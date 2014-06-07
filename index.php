<html>
	<head>
		<style>
			body {
				background: url(../images/bg.jpg) 50% 0;
				text-align: center;
			}
			#form {
				text-align: center;
			}
			#mainpage {
				margin: 20px;
			}
		</style>
	</head>
	<body>
		<!-- first fucking block with three fucking buttons -->
		<div id="mainpage">
			<a href=""><img src="images/btn-zapis.png" /></a>
		</div>
		<!--вторая поеблятина с поиском -->
		<div id="form">
			<form action="scr_search.php" method="POST" id="form">
				<select name="search" id="search">
					<option value="" selected>Выберите услугу...</option>
					<option value="Модельная стрижка">Модельная стрижка</option>
					<option value="Стрижка под 0">Стрижка "под 0"</option>
					<option value="Стрижка полубокс">Стрижка "полубокс"</option>
				</select>
				<input type="submit" id="submit" />
			</form>
			<div id="ResultMessage" style="display:none;">
			
			</div>
		</div>
		<script src="jquery-1.10.2.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>