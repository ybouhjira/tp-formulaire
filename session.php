<?php

try
{
    if(!session_start())
        throw new Exception("Impossible de lancer une session");

    $_SESSION = array_merge($_SESSION, $_POST);
}
catch(Exception $exc)
{
	echo $exc->getMessage();
}


