<?php
class Sesion {

	public static function start()
	{
		if (empty($_SESSION)) {
			session_start ();
		}
		

	}
	
	public static function set($nombre, $valor) {

	  $_SESSION [$nombre] = $valor;

	}

	public static function get($nombre) {

		if (isset ( $_SESSION [$nombre] )) {
		  return $_SESSION [$nombre];
		}else {
		  return false;
		}
	}
	
	
	
	public static function borrarsesíon() {
	    session_destroy ();
	}
}
?>