<?php
$files = array();
$dir = opendir('data/news/'); // open the cwd..also do an err check.
while(false != ($file = readdir($dir))) {
        if(($file != ".") and ($file != "..") and ($file != "index.php")) {
                $files[] = $file; // put in array.
        }   
}

natsort($files); // sort.
$files = array_reverse($files, false);
// print.
foreach($files as $file) {
	$fp = fopen("data/news/{$file}", "r");
	$tekst = fread($fp, 9999);
    $tekst = json_decode($tekst, true);
	echo '<div class="container-fluid" style="border-bottom: solid 2px grey; word-wrap: break-word;"><h2 class="float-left">';
	echo $tekst['nazwa'];
	echo '</h2><h5 class="float-right">';
	echo $tekst['data'];
	echo '</h5><br><hr style="margin-top:18px;"><p>';
	echo $tekst['text'];
	echo '</p></div><br>';
}
?>
