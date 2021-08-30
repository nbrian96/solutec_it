<?php 
    include_once "app/config.inc.php";
    $titulo = "Inteligencia de Negocios - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>

<div class="container-fluid jumbotron" id="Jumbotron">
    <h1>Inteligencia de Negocios</h1>
</div>

<div class="container" id="textoJustificado">
    <div class="row">
        <div class="col-md-6">
            <p style="font-size: 1.2em;">
                Solución que transforma datos en información para la toma de decisiones en los diferentes niveles de una organización y automatiza la de generación de informes gerenciales mediante de creación de tableros de control para sistemas de tomas de decisión. La solución permite guardar datos históricos para hacer análisis de tendencia y generar modelos predictivos basados en series temporales.
            </p>
            <br>            
        </div>
        <div class="col-md-1">            
        </div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-6">
           <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <li>Aprovechamiento las características de SQL Server on premise o en la nube.</li><br>
                <li>Mejora el gobierno de datos de gestión empresarial.</li><br>
                <li>Potencia el uso de tablas dinámicas en Excel basadas en modelos OLAP o Tabulares.</li><br>
                <li>Disminuye los costos de la generación de informes gerenciales, automatizándolos.</li><br>
                <li>Incrementa la productividad de los analistas al liberar horas de preparación de datos que se redireccionan a nuevos y mejores análisis.</li><br>
                <li>Estandariza los informes de gestión, permitiendo un mejor benchmark entre las diversas unidades de la Organización.</li><br>
            </ul> 
        </div>        
    </div>
</div>

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>