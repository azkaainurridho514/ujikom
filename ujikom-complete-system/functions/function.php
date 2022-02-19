<?php
function token(){
	return 'U7%d#\xO0B2@-1Gmk?u6^/jQ*ha~p\f^53juYHGyU*O&8lk&jO*jklY*uYI&u?h@ku/YjbI*hj]l';
}

function logout()
{
	session_start();
	$_SESSION['auth'] = '';
	unset($_SESSION['auth']);
	session_unset();
	session_destroy();
	return header("location: ../");
}

