<?php 

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$diretorioArquivo = 'public/login.php';
header("Location: http://$host$uri/$diretorioArquivo");
exit;

?>