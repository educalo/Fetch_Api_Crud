const btn_insertar = document.getElementById("insertar");
const tabla= document.getElementById("cuerpoTabla");

function leerDatos(){
    let template = "";
    const url = "leer.php"
    fetch(url)
        .then(r => r.json())
        .then(data => {
            
            //console.log(data);
            data.forEach(element => {
                
                const id = element.id;
                const nombre = element.nombre;
                const descripcion = element.descripcion;
                const fecha = element.fecha;

                template += `<tr>
                <th scope="row">${id}</th>
                <td>${nombre}</td>
                <td>${descripcion}</td>
                <td>${fecha}</td>
                <td class="text-center"><button class="btn btn-success" id="editar" value="${id}">Editar</button> <button class="btn btn-danger" id="borrar" value="${id}">Borrar</button></td>
                </tr>`
                
                //console.log(element);
            });
            document.getElementById("cuerpoTabla").innerHTML=template;
        })
}

//esta fuera del click para que se ejecute cuando se recarge la pagina
leerDatos();

btn_insertar.addEventListener("click", function(e){
    //evita que se recarge la pagina, evita su comportamiento normal
    e.preventDefault();
    
    const url = "insertar.php"
    //objeto de tipo formulario
    const data = new FormData();
    
    //conseguimos los datos del formulario
    const nombre =document.getElementById("nombre").value;
    const descripcion = document.getElementById("descripcion").value;
    const fecha = document.getElementById("fecha").value;
    
    
    data.append('nombre', nombre);
    data.append('descripcion', descripcion);
    data.append('fecha', fecha);

    fetch(url,{method: 'POST', body:data});

    //cuando se introduzcan nuevos datos se lean
    leerDatos();
})

//el boton borrar no exite a la hora de crear esto
tabla.addEventListener("click", function(e){
    
    //para saber que parte de la tabla se ha clikado
    //console.log(e.target.id);
    //alert(e.target.id);
    //console.log(e.target.value);
    if (e.target.id=="borrar"){
        const id = e.target.value;
        const url ="borrar.php";
        const data = new FormData();
        data.append("id",id);
        fetch(url,{method: 'POST', body:data});
        leerDatos();
    }

    if (e.target.id=="editar"){
        const id = e.target.value;
        window.location = `actualizar.php?id=${id}`;
    }

},true)