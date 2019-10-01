<?php

session_start();

session_unset();//tira todos os index que foram criados
session_destroy();//destroe a sessão o usuario terá que logar novamente

header("Location: ../../");

?>