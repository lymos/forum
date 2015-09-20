<?php
/**
 * common functions
 */
 
function showMessage($msg){
	echo '<script type="text/javascript"> alert("'.$msg.'"); </script>';
}

function setSession($name, $value){
	if(! $_SESSION){
		session_start();
	}
	$_SESSION[$name] = $value;
}

function getSession($name){
	if(! $_SESSION){
		session_start();
	}
	if(isset($_SESSION[$name]))
		return $_SESSION[$name];
	else
		return null;
}

function cookie(){
	
}

function getClassName($class){
	if(strstr($class, '\\')){
		$array = explode('\\', $class);
		return end($array);
	}
	return $class;
}