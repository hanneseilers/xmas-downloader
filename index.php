<html lang="de">

	<head>
		<title>XMAS-Downloader</title>
	</head>
	
	<body>
		<?php
		
			// CONFIG
			
			$file_download_directory = "downloads/";		// subdirectory where to look or the requested files
			$file_name = "xmas_lego42106_<CODE>.pdf";		// add <CODE> where code should be added
			
			// CONFIG END
		
			$code = null;
			if( array_key_exists('c', $_GET) )
				$code = $_GET['c'];
			if( array_key_exists('code', $_GET) )
				$code = $_GET['code'];
			
			if( is_null($code) )			
				echo "<b>no parameter found!</b>";				
			else {			
				if( strlen($code) < 6 )
					echo "<b>no valid code!</b>";
				else {
				
					// search for existing file
					$filename = $file_download_directory . str_replace("<CODE>", $code, $file_name);
					if( !file_exists($filename) )
						echo "nothing found for code: <b>" . $code . "</b>";
					else {
					
						echo "<a href=" . $filename . "><button style='width: 100%; height: 100%;'><h1>".
							"<svg width='32px' height='32px' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d='M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zM432 456c-13.3 0-24-10.7-24-24s10.7-24 24-24s24 10.7 24 24s-10.7 24-24 24z'/></svg>".
							" DOWNLOAD FILE</h1></button></a>";
					
					}
				
				}			
			}
				
		?>
	</body>
	
</html>
