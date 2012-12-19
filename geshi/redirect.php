<?php

	$language = $_GET['language'] . '.php';
	$search = $_GET['search'];

	if ( file_exists( $language ) )
	{
   		include( $language );
   		
   		if ( isset( $language_data['REDIRECT'][$search] ) )
   		{
	   		$url = $language_data['REDIRECT'][$search];
   		   		
   			header('HTTP/1.1 200 OK');
   			header("Location: " . $url);
			exit;   		   			
   		}
   		else
   		{
   			echo( 'ERROR: Redirect ' . $search . ' in ' . $language . ' not found.' );
   		}
	}

?>