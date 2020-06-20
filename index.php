<?php include("conexion_bd/database.php") ?>

<?php include("index/encabezado.php") ?>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<div>
  <div>

    <p id="visto"><b>Lo m&aacute;s visto</b></p>
    <hr color="red" size=2 id="linea">

  </div>

  <div class="">
    <div class="">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Facebook-negro.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/comparacion.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
           

            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Captura.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>


            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Captura.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          
          <div class="carousel-item">
            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Facebook-negro.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/comparacion.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Captura.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>

            


            <div class="card" style="width: 18rem;" id="tarjeta">
              <img id="imgindex" src="imagenes/Proveedores/hites/Captura.PNG" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <button class="btn btn-outline-danger">
            <span id="sigu" class="fas fa-chevron-circle-left" aria-hidden="true"></span>
          </button>

          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <button class="btn btn-outline-danger">
            <span id="sigu" class="fas fa-chevron-circle-right" aria-hidden="true"></span>
          </button>
          <span class="sr-only">Next</span>
        </a>
  </div>

</div>



<?php include("index/piedepagina.php") ?>