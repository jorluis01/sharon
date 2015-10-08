<div id="contiene_buscador"  align="center">
    
    Nombre: <input type="text" name="nombre" id="nombre" /><br /></p>
    Numero: <input type="text" name="cedula" id="cedula" /><br /></p>
    
    Tipo Documento:<select name="tipo" id="buscador">    
       <option value="CEDULA EXTRANJERIA" selected="selected">CEDULA EXTRANJERIA</option>
       <option value="CEDULAS DE CIUDADANIA">CEDULAS DE CIUDADANIA</option>
       <option value="PACIENTES FALLECIDOS">PACIENTES FALLECIDOS</option>
       <option value="REGISTROS CIVILES">REGISTROS CIVILES</option>
       <option value="TARJETAS DE IDENTIDAD">TARJETAS DE IDENTIDAD</option>
        
   </select></p>
    <button  onclick="buscador()">buscar</button>
    
    
</div>
<div id="resultado" align="center">

<?php


