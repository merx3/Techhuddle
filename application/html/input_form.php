<?php if(!$data["game_over"]){ ?>
	<form method="post">
		Enter coordinates (row, col), e.g. A5 
		<input type="text" name="coord" maxlength="4" autocomplete="off" autofocus>
		<input type="submit" value="Shoot">
	</form>
<?php 
} 
else {
?>
	<a href="">Play again?</a>
<?php
}
?>