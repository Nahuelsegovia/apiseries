
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Apiseries</title>
</head>
<body>
    <div class="container contenido">

        <div class="serie" id="serie">
        
        </div>

    </div>

    <div class="flex-center position-ref full-height">
        <form action="/api/ver" method="get">
        @csrf
        <input type="submit" id="obtenerDatos">
        </form>
        </div>
</body>
<script>
    let estadoDiv = 0;
    obtenerDatos.addEventListener('click', (event) =>{
    estadoDiv++;
    event.preventDefault();
    const peticion = new XMLHttpRequest();
    const pintar = document.getElementById('serie');
    
    peticion.open('GET', '/api/ver', true)
    peticion.addEventListener('load', (data) =>{
        let datos = JSON.parse(data.target.response);
        for(let recorrer of datos){
            console.log(recorrer);
            pintar.innerHTML += `<div class="portada-serie">
                                    <img src="imagen.jpg" alt="" srcset="">
                                </div>
                                <h1>${recorrer.titulo_serie}</h1>
                                <p>${recorrer.descripcion_serie}</p>
                                <div class="iconitos">
                                <i class="far fa-times-circle iconos uno"></i>
                                <i class="fas fa-angle-double-right iconos dos"></i>
                            </div>`;
        }
    });

    peticion.send()
    if(estadoDiv = 2){
        pintar.innerHTML = '';
        peticion.send();
        estadoDiv = 0;
    }
});
  
    </script>
<!-- JS, Popper.js, and jQuery -->
<script src="https://kit.fontawesome.com/f5a6b916a8.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>