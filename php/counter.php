<?php
	header('Content-Type: application/json');
	header("Access-Control-Allow-Origin: *");
	$id = $_GET['id'];
	$start = $_GET['start'];
	$file = $_SERVER['DOCUMENT_ROOT'].'/storage/'.$id.'.txt';
	$counter = 1;  
	if ( file_exists( $file ) ) {
		if ( !isset($_COOKIE['bhCounterCookie']) ) {
			if( $_GET['count'] == 'true' ){
				$counter += file_get_contents( $file );
			} else {
				$counter = file_get_contents( $file );
			}
		}
	}
	file_put_contents( $file , $counter );
	$json = ['count' => $counter + $start];
	echo json_encode( $json );
?>