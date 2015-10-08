<?php
header("Content-Type: text/html; charset=iso-8859-1"); 
$carpeta=$_GET['carpeta'];
$nombre=$_GET['nombre'];
$cedula=$_GET['cedula'];
include_once '../lista/listado.php';
      
$tipos = array ("PDF","pdf");
 
$lista=listar_ficheros ($tipos, "C:\ARCHIVO DE HISTORIAS CLINICAS/".$carpeta);
$lista2= explode(',', $lista);
$numero=  count($lista2);
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
<table style="width: 600px; height: 56px;" border="1">
      <tbody>
        <tr>
            <td style="width: 150.65px;"><center>NOMBRE</center></td>
          
                
        </tr>
        <?php
        
        
        
        for ($i=0;$i<$numero;$i++){
       if($nombre==""&&$cedula==""){
           echo "
            
        <tr>
            <td ><center><a href='temp/open.php?archivo=".$carpeta."/".$lista2[$i]."'>".$lista2[$i]."</center></td>
          </tr>";
       }else{
           if(!($nombre=="")||!($cedula=="")){
              $cadena_de_texto = $lista2[$i];
           
           $cadena_buscada="".$nombre.$cedula;
           $cadena_buscada=strtoupper($cadena_buscada);
           $pos = strpos($cadena_de_texto, $cadena_buscada);
         
           if ($pos === false) {
    
} else {
    echo "
            
        <tr>
            <td ><center><a href='temp/open.php?carpeta=/".$carpeta."&archivo=".$lista2[$i]."'>".$lista2[$i]."</center></td>
          </tr>";
    
} 
           }
           

           
           
           
       }
            
       
            
        }
        
        ?>
        </table>
        
</div>