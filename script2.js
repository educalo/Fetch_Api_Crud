const btn_actualizar = document.getElementById("actualizar");

btn_actualizar.addEventListener("click", function(e){
    //alert("hola mundo");
    //evita que se recarge la pagina, evita su comportamiento normal
    e.preventDefault();
    
    const url = "actualizarDatos.php"
    //objeto de tipo formulario
    const data = new FormData();
    
    //conseguimos los datos del formulario
    const id =document.getElementById("id").value;
    const nombre =document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const fecha = document.getElementById("fecha").value;
    
    
    data.append('nombre', nombre);
    data.append('descripcion', descripcion);
    data.append('fecha', fecha);
    data.append('id', id);

    fetch(url,{method: 'POST', body:data});
    //volver a situacion de antes
    window.location ="index.php"

})

