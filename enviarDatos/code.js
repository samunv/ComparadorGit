window.addEventListener("DOMContentLoaded", function(){
    

    function peticion(url){
        let f_descripcion = document.formulario.descripcion.value; 
        let data_send = new FormData(); 
        data_send.append("descripcion", f_descripcion); 


        fetch(url, {
            method: "POST", 
            body: data_send
        })
            .then(response => response.json())
            .then(datos => {
                //console.log(datos); 
                mostrarResultados(datos); 
            })
            .catch (err => console.log(err))
    }

    function mostrarResultados(datosIn){
        let miDiv = document.getElementById("resultado"); 
        let html = ""; 


        for (let i = 0; i < datosIn.length ; i ++){
            html+="<p> Código: " + datosIn[i].codigo + " </p>"; 
            html+="<p> Precio: " + datosIn[i].precio + " </p>";
            html+="<p> Descripción: " + datosIn[i].descripcion + " </p>";
        }
        miDiv.innerHTML = html; 
    }
})