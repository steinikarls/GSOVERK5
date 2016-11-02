<?php
session_start(); 
 $_SESSION = [];		
	    if (isset($_COOKIE[session_name()])) {
	      setcookie(session_name(), '', time()-864000, '/');   
	    }
	    session_destroy();

 header('Location: http://tsuts.tskoli.is/2T/1810943469/GSOVERK5/');
 exit();

?>