<?php
function listar_ficheros ($tipos, $carpeta){
   
    $lista="";   

//Comprobamos que la carpeta existe
    if (is_dir ($carpeta)){
        //Escaneamos la carpeta usando scandir
        $scanarray = scandir ($carpeta);
        for ($i = 0; $i < count ($scanarray); $i++){
            //Eliminamos  "." and ".." del listado de ficheros
            if ($scanarray[$i] != "." && $scanarray[$i] != ".."){
		//No mostramos los subdirectorios
		if (is_file ($carpeta . "/" . $scanarray[$i])){
                        //Verificamos que la extension se encuentre en $tipos
			$thepath = pathinfo ($carpeta . "/" . $scanarray[$i]);
			if (in_array ($thepath['extension'], $tipos)){
				$lista= $lista."".$scanarray[$i] . ",";
			}
                }
            }
        }
    } else {
        echo "La carpeta no existe";
    }
    return $lista;
}
?>