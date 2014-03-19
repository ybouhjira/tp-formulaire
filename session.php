<?php

try
{
    // Sessions
    if(!session_start())
        throw new Exception("Impossible de lancer une session");

    $_SESSION = array_merge($_SESSION, $_POST);

    // Cookies
    foreach ($_POST as $key => $value)
        setcookie($key, $value, time() + 3600 * 24 * 356);
}
catch(Exception $exc)
{
	echo $exc->getMessage();
}


