<?php

session_start();

$_session['logado'] = false;

session_destroy();

header('Location: index.php');



?>