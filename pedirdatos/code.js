window.addEventListener("DOMContentLoaded", function () {

    let miBoton = document.getElementsByTagName("button")[0]; 

    miBoton.addEventListener("click", function(){

        peticion ("procesado.php"); 

    })

    function peticion(url){
        fetch(url)
            .then(response => response.json())
            .then(datos => {
                console.log(datos); 
                //mostrarResultados(datos); 
            })
            .catch (err => console.log(err))
    }

    function mostrarResultados(datosIn){
        let miDiv = document.getElementById("resultado"); 
        let html = ""; 


        for (let i = 0; i < datosIn.length ; i ++){
            html+="<p> Código: " + datosIn[i].codigo + " </p>"; 
            html+="<p> Precio: " + datosIn[i].precio + " </p>";
        }
        miDiv.innerHTML = html; 
    }



});
