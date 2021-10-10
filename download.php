<?php 

	/**$file = $_GET['file'] .".pdf" ;
	
	header("content-disposition: attachment; filename=" .urlencode($file));
	
	$rf = fopen($file, "r");
	
	while (!feof($rf)){
		echo fread($rf, 90000);
		flush();
	}
	
	fclose($rf);**/
	
	if(!empty($_GET['file'])){
		$filename = basename($_GET['file']);
		/**$filepath = 'file/' . $filename;**/
		$filepath = $filename;
		if(!empty($filename) && file_exists($filepath) ){
			//Define headers
			
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary ");
			
			readfile($filepath);
			exit;
		}
		else{
			
			echo "This File Is Not Exist";
		}
	}

	
	
	

?>