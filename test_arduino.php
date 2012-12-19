<?php

	include_once 'geshi.php';

	$source = file_get_contents('sample.ino');
	$language = "arduino";
	$target = "_blank";
	
	$geshi = new GeSHi($source, $language);
	$geshi->set_line_style('background: #FCFCFC;');
	$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
	$geshi->set_link_target($target);
	$code = $geshi->parse_code();

	// Display highlighted code
	echo( $code );

	// Write highlighted code to cache...
	//$destination = "sample.html";
	//file_put_contents( $destination, $code );

?>