<?php
if ($_POST['password'] != $haslo) {
    $status = "password";
}
else if ($_POST['text'] != "") {
	$text = $_POST['text'];

	$nazwa = $_POST['nazwa'];

	$data = date("d.m.Y H:i");
	$zawartosc = array (
	'nazwa'=>$nazwa,
	'data'=>$data,
	'text'=>$text
	);
	$datefile = date("U");

	$file = "data/news/{$datefile}.json"; 

	// uchwyt pliku, otwarcie do dopisania 
	$fp = fopen($file, "w"); 

	if (is_writable($file))
	{
		// blokada pliku do zapisu 
		flock($fp, 2); 
		
		// zapisanie danych do pliku 
		fwrite($fp, json_encode($zawartosc)); 
		
		// odblokowanie pliku 
		flock($fp, 3); 
		
		$status = "done";
	}
	else {
		$status = "error";
	}
	fclose($fp); 
}
else {
	$status = "failed";
}
?>
<meta http-equiv="refresh" content="0; url=<?php echo $path;?>addnews&<?php echo $status;?>" />
