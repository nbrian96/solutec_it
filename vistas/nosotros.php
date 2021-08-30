<?php 
    include_once "app/config.inc.php";

    $titulo = "Nosotros";
    
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>

<div class="container-fluid jumbotron" id="Jumbotron">
    <h1>Nuestra Empresa</h1>
</div>

<div class="container">
    <div id="textoJustificado" style="font-size:1.2em;">
        <p>
        Solutec-IT, es una empresa pionera en la prestación de servicios informáticos PYMES y corporativos, 
        creada para garantizar la seguridad y correcto funcionamiento de sus sistemas, permitiéndole a los empresarios 
        y directivos centrarse en sus negocios. Desde hace más de 25 años presta servicios a reconocidas empresas de 
        plaza en los rubros de Soporte e Instalaciones, Seguridad informática, Consultoría informática, Auditoría informática, 
        Monitoreo preventivo, Tercerización de servicios, Virtualización, Licenciamiento de software entre otros.
        </p>
        <p>
        Solutec-IT, presta sus servicios en forma altamente personalizada, comprendiendo que cada empresa es única, 
        creando una solución a la medida de cada necesidad. Somos especialistas en identificar y entender las necesidades 
        informáticas de nuestros clientes para ofrecerles la mejor solución integral. La alta calidad y confiabilidad de los 
        servicios prestados por Solutec-IT, como así también su extensa trayectoria la convierte en uno de los principales 
        referentes de plaza en un tema imprescindible hoy en día, como es la Seguridad Informática. Cuenta con un staff de 
        profesionales altamente calificados, laboratorios propios y una flota de vehículos que las 24 horas del día, los 365 
        días del año se encuentran al servicio de los clientes.
        </p>
        <p>
        Solutec-IT, es miembro de las más prestigiosas asociaciones nacionales e internacionales dedicadas a la Auditoria 
        Informática manteniéndonos actualizados e implementando permanentemente las últimas recomendaciones emanadas de las mismas.
        </p>
    </div>
</div>

<br>

<div class="container"> 
    <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>imagen3.jpg" width="730em">
</div>

<br><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>imagen4.jpg" width="500em">
        </div>
    </div>
    <p id="textoJustificado" style="font-size: 1.2em;"> 
        Somos un equipo de profesionales que pretendemos brindar a las empresas soluciones integrales en el area de gestion 
        humanas permitiéndoles alcanzar un mayor desarrollo y competitividad, por medio de procesos ágiles y metodologías tecnológicas actualizadas.
    </p>
</div>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <hr id="lineaHorizontal">
            <h2 id="tituloNosotros">Licenciamiento</h2>
        </div>
    </div><br>    
    <div class="row">
        <div class="col-md-6">           
            <div id="textoJustificado" style="font-size: 1.2em;">
                <p>¿Qué licencias debo adquirir? En la actualidad existen diversas modalidades de licenciamiento. 
                </p><p>Para lograr una buena inversión al momento de adquirir licencias, resulta imprescindible el 
                asesoramiento personalizado de consultores especializados en esta materia.</p>
            </div><br>
        </div>        
        <div class="col-md-6">
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>licenciamiento.jpg" width="500em">
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <hr id="lineaHorizontal">
            <h2 id="tituloNosotros">Empresas</h2>
        </div>
    </div><br>    
    <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>licencias-de-software.jpg" width="100%">
            <br>
        </div>
        <div class="col-md-6">            
            <div id="textoJustificado" style="font-size: 1.2em;">
                <p>Las empresas que poseen experiencia e idoneidad en licenciamiento pueden acreditar la misma a través 
                de la certificación internacional de tales competencias.</p>
                <p>SOLUTEC-IT, posee las siguientes competencias otorgadas por Microsoft: Education Specialist Consultores 
                Education Specialist. Esta certificación garantiza la aptitud e idoneidad de la empresa para brindar 
                soluciones de licenciamiento a entidades educativas. 
                Esta alternativa permite acceder a descuentos muy importantes en la modalidad de “Software Education”.</p>
            </div>
        </div>        
    </div>
</div>

<br><br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <hr id="lineaHorizontal">
            <h2 id="tituloNosotros">Consultores</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">           
            <div id="textoJustificado" style="font-size: 1.2em;">
                <p>Los profesionales especializados en consultoría en licenciamiento pueden acreditar tal condición mediante 
                    la certificación de la especialidad.</p>
                <p>SOLUTEC-IT cuenta con profesionales certificados por Microsoft como Small Business Licensing Specialist, 
                    quienes lo ayudarán a licenciar correctamente.</p>
            </div><br>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" id="centrarImagen" src="<?php echo RUTA_IMG ?>consultoria.jpg" width="500em">
        </div>
    </div>
</div>
<br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
