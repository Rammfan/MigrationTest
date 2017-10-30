<?php 
	require_once "tmp/up.php";
?>

<div class="content">
	<div class="cont-head">
		Войти в систему
	</div>
	<div class="cont-body">
		<form action="">
			<label for="">
				Логин / Номер документа
				<input name="login" type="text">
			</label>
			<label for="">
				Пароль<br>
				<input name="pass" type="password">
			</label>
			<div class="form-foo">
				<input type="submit" value="Войти">
			</div>
			
		</form>
	</div>
</div>

<?php 
	require_once "tmp/down.php";
?>
