function buscador(){
    var carpeta=$('#buscador').find(':selected').val();
    var cedula=""+$('#cedula').val();
    var nombre=""+$('#nombre').val();
    var data="carpeta="+carpeta+'&nombre='+nombre+'&cedula='+cedula;
    $.get('vista/buscador/tabla.php',data,function(html){ 
      
            $('#resultado').html(html);
      });
    
}


