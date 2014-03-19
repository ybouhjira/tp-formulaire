<?php

try
{
    if(!session_start())
        throw new Exception("Impossible de lancer une session");

    $_SESSION = array_merge($_SESSION, $_POST);

    // foreach ($_POST as $key => $value)
    //     $_SESSION[$key] = $value;
}
catch(Exception $exc)
{
	echo $exc->getMessage();
}


