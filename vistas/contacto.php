<?php 
    include_once "app/config.inc.php";

    $titulo = "Contacto";
    
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>

<div class="container-fluid jumbotron" id="Jumbotron">
        <h1>Contáctenos</h1>
        <p>Para ponerte en contacto con nosotros puedes llamarnos al 1559113028.</p>
        <p>O enviar un mail a  <a href="mailto:info@solutec-it.com" target="_blank">info@solutec-it.com</a></p>
        <br>
        <p>¡Visítanos! Nos ubicamos en Av. Santa Fe 1440 - Local 29</p>            	
</div>
<br>
<div class="container">    
    <div class="row">        
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.321016299072!2d-58.38985718477052!3d-34.59604318046146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccab92336bd3d%3A0x484b4b386e7e5aa8!2sAv.%20Santa%20Fe%201440%2C%20C1016%20CABA!5e0!3m2!1ses!2sar!4v1579312793638!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>           
        <div class="col-md-3"></div>
    </div>
</div>
<br><br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>