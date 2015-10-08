<?php
if($_POST){
session_start();
session_register();
$_SESSION['us_ftp']=$_POST['us_ftp'];
$_SESSION['cl_ftp']=$_POST['cl_ftp'];
$_SESSION['sr_ftp']=$_POST['sr_ftp'];
$_SESSION['pr_ftp']=$_POST['pr_ftp'];
header("location: ftp_conection.php");  
}
?>
<fieldset><legend>Conexion a servidor via FTP</legend><form action="" method="post" name="cx_ftp" id="cx_ftp">
  <strong>Usuario:</strong><br>
  <input name="us_ftp" type="text" id="us_ftp">
  <br>
  <strong>Clave:</strong><br>
  <input name="cl_ftp" type="password" id="cl_ftp">
  <br>
  <strong>Servidor:</strong><br>
  <input name="sr_ftp" type="text" id="sr_ftp">
  <br>
  <strong>Puerto:</strong><br>
  <input name="pr_ftp" type="text" id="pr_ftp">
  <br>
  <input name="ev_ftp" type="submit" id="ev_ftp" value="Entrar">
  <input name="rs_ftp" type="reset" id="rs_ftp" value="Borrar datos">
</form>
</fieldset>