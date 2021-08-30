<?php 
    include_once "app/config.inc.php";
    $titulo = "Marcos y Normativas - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Marcos y Normativas</h1>
</div>
<div class="container" id="textoJustificado">
    <div class="row">
        <div class="col-md-6">
            <p style="font-size: 1.3em;">
                ​​Implemente marcos y normativas referenciales en su organización para asegurar 
                los procesos que hacen de su organización un modelo de eficiencia y experticia.
            </p>
            <br>            
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
            <p style="padding-left: 60px;"><b>Marcos referenciales</b></p>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 1.2em;">
                <li>Togaf: Es un esquema de arquitectura empresarial para contar con información confiable y a tiempo.</li><br>
                <li>ITIL: Brindamos consultoría y capacitación a las entidades interesadas en tener una visión global del ciclo de vida de la tecnología.</li><br>
                <li>Cobit: Apoyamos a las organizaciones interesadas en montar un modelo de gobierno holístico de TI para mantener un equilibrio entre la realización 
                    de beneficios y la optimización de los niveles de riesgo y utilización de los recursos.</li><br>
                <li>PETI: apoyamos a empresas y entidades de gobierno en la realización de su plan estratégico de TI para crear un marco de trabajo que permita cumplir 
                    con sus objetivos de negocio.</li><br>
                
                <br>
                <p style="color: #9e9ea1;"><b>CMMI</b></p>
                <li>Análisis de los procesos organizacionales.</li><br>
                <li>Análisis de madurez de los procesos de la organización frente a su adopción, adaptación y adherencia de los mismos dentro de la empresa.</li><br>
                
                <br>
                <p style="color: #9e9ea1;"><b>Normativas</b></p>
                <li>ISO 27001.</li><br>
                <li>ISO 20000.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>