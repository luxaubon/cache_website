<?php
// TOP
	$loadmodule = 'namefile';
	$dir_cache = "cache/";
	$myfile = str_replace(array("/","","."),"",$loadmodule);
	$cache_minute = 1500;
	$file_cache = $dir_cache."cache.".$myfile.".html";

	if (file_exists($file_cache)){
			if (strtotime("+".$cache_minute." minute", filemtime($file_cache)) > time()){
				echo file_get_contents($file_cache);
				exit();
			}
		}
		ob_start();


// FOOTEr
	$output = ob_get_contents();
		ob_end_clean();
		file_put_contents($file_cache,$output);
		echo $output; 


?>