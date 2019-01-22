<?php
if ($_GET['failed']==="") {
	echo '
	<div class="alert alert-warning alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Błąd!</strong> Nie możesz dodać newsa bez tytułu!
	</div>
';}
else if ($_GET['error']==="") {
	echo '
	<div class="alert alert-danger alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Błąd!</strong> Folder nie można zapisać newsa!
	</div>
';}
else if ($_GET['password']==="") {
	echo '
	<div class="alert alert-danger alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Błąd!</strong> Złe hasło!
	</div>
';}
else if ($_GET['done']==="") {
	echo '
	<div class="alert alert-success alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Zapisano!</strong> News został zapisany!
	</div>
';}

?>
<script src="<?php echo $path;?>core/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea', menubar: false});</script>
<form action="post" method="post">
	Nazwa: <input type="text" name="nazwa" value=""> <br>
    Hasło: <input type="password" name="password" value="">
    <br>
	<textarea name="text"><?php echo $text; ?></textarea>
	<input type="hidden" name="site" value="<?php $_SERVER['REQUEST_URI'] ?>">
	<br><br>
	<input name="submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Zapisz">
</form>
