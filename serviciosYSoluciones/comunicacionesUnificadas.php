<?php 
    include_once "app/config.inc.php";
    $titulo = "Comunicaciones Unificadas - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Comunicaciones Unificadas</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.2em;">                    
                Se configura en el marco de la visión de las comunicaciones inteligentes, por eso reúne conversaciones, reuniones, archivos, aplicaciones de Office, e integraciones de terceros para brindar un centro único para el trabajo en equipo dentro de Office 365. Más de 13 millones de personas ahora usan Microsoft Teams a diario‎, más de 19 millones de personas lo usan semanalmente, con disponibilidad en 53 idiomas en 181 países.
            </p><br>            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 16px;">
                <li>Llamadas integrales y capacidades de reuniones a Microsoft Teams, junto con datos e información de valor desde Microsoft Graph, y un fuerte mapa de ruta de innovación para impulsar a los equipos a que consigan más.</li><br>
                <li>Hablamos de una solución en constante actualización, que periódicamente recibe novedades y características enfocadas a cada perfil de trabajador, por ejemplo, los trabajadores de campo.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>