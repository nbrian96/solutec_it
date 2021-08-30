<?php 
    include_once "app/config.inc.php";

    $titulo = "Soluciones y Tecnología Empresarial - SMART";
    
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>

<!-- Soluciones y Tecnologia Empresarial SMART -->
<div class="container">
    <div class="jumbotron" id="Jumbotron">
        <h1>Soluciones y Tecnologia Empresarial SMART</h1>
        <br>
        <div id="textoJustificado">
            <p>Disfrutamos materializar ideas a través de la tecnología.</p>
            <p>
               <b>HACE POSIBLE EL TRABAJO REMOTO
               </b>
            </p>
            <p>  
                El desafío que trae la crisis por la pandemia de COVID-19 para las empresas en el mundo y la Argentina, hacen necesario evolucionar a modelos de trabajo a distancia para proteger a sus colaboradores y darle continuidad a su negocio.
            </p>
            <p>
                Para garantizar que tu empresa continúa con su actividad habitual, es necesario proporcionar a tus colaboradores la posibilidad de trabajar de manera remota, evitando así los desplazamientos.
            </p>
            <p>
                Nuestros servicios profesionales están diseñados para que tu empresa evolucione a la nueva normalidad.
            </p>
            <i style="font-size: 1.3em;">
                <b>... estamos convencidos que, si somos apasionados, nos divertimos en nuestro trabajo y ofrecemos nuestro conocimiento y mejor esfuerzo, 
                nuestros clientes potenciarán sus productos y servicios!!!
                </b>
            </i>
        </div>  
        <br>              
    </div>
</div>

<div class="container">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img class="img-responsive" src="<?php echo RUTA_IMG ?>portada1.jpg">
      </div>

      <div class="mySlides fade">
        <img class="img-responsive" src="<?php echo RUTA_IMG ?>portada2.jpg">
      </div>

      <div class="mySlides fade">
        <img class="img-responsive" src="<?php echo RUTA_IMG ?>portada3.jpg">
      </div>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>    
</div>


<br>

<!-- Nuestros Valores -->
<div class="container">
    <div class="jumbotron" id="Jumbotron" style="text-align: left;">
        <h2><strong>Nuestros Valores</strong></h2>                
        <div id="valores">
            <i>
                <b>Diversión:</b> Nos gozamos lo que hacemos, permitiendo a cada integrante ser auténtico.
                <hr id="lineaValores">
                <b>Empatía:</b> Nos gusta promover el trato cercano y ponernos en los zapatos del otro.
                <hr id="lineaValores">
                <b>Valentía:</b> Somos un equipo que no le teme a los retos.
                <hr id="lineaValores">
                <b>Creatividad:</b> Buscamos formas diferentes de hacer las cosas.
                <hr id="lineaValores">
                <b>Aprendizaje:</b> Somos apasionados por aprender y compartir nuevos conocimientos.
                <hr id="lineaValores">
                <b>Integridad:</b> Para nosotros los más importante es la calidad humana. 
            </i>
        </div> 
        <br>               
    </div>
</div>

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>