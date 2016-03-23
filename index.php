<?php

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include(dirname(__FILE__) . '/local-config.php');
} else {
	echo "No configurations found!";
	exit;
}


$controller = isset( $_GET['page'] ) ? $_GET['page'] : 'home';
// Check if controller exist
if ( !file_exists( 'controllers/'.$controller.'.php' ) )
	$controller = 'home';

include ( 'functions.php' );
include ( 'controllers/'.$controller.'.php' );