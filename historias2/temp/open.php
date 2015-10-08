<?php
$direccion=$_GET['archivo'];
// ruta al archivo remoto
$remote_file = ''.$direccion;
$local_file = 'archivo.pdf';

// abrir un archivo para escribir
$handle = fopen($local_file, 'w');
$ftp_server="127.0.0.1";
// establecer una conexión básica
$conn_id = ftp_connect($ftp_server);
$ftp_user_name="HISTORIAS";
$ftp_user_pass="123456";
// iniciar sesión con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// intenta descargar un $remote_file y guardarlo en $handle
if (ftp_fget($conn_id, $handle, $remote_file, FTP_ASCII, 0)) {
 $mi_pdf = 'archivo.pdf';  
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
readfile($mi_pdf);
} else {
 
}

// cerrar la conexión ftp y el gestor de archivo
ftp_close($conn_id);
fclose($handle);

?>

