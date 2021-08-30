<?php 
    include_once "app/config.inc.php";
    $titulo = "Escáneres";

    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div align="center">
                <img src="<?php echo RUTA_IMG ?>impresoras/escan1.jpg" width="100%" >
            </div>
        </div>
        <div class="col-md-7">
            <h2>Impresora Multifunción Canon MG3010</h2>
            <h3>Especificaciones</h3>
            <p> 
                <b>Marca:</b> Canon<br>
                <b>Modelo:</b> MG3010<br>
                <b>Tipo de impresora:</b> Multifunción <br>
                <b>Resolución de impresión:</b> 4800x600dpi<br>
                <b>Formato de papel maximo:</b> Oficio <br>
                <b>Velocidad de Impresión ByN:</b> 8 ppm <br>
             
            </p>      
        </div>
        
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-5">
            <div align="center">
                <img src="<?php echo RUTA_IMG ?>impresoras/escan2.jpg" width="100%" >
            </div>
        </div>
        <div class="col-md-7">
            <h2>Scanner Rotativo Kodak i940</h2>
            <h3>Especificaciones</h3>
            <p> 
                <b>Marca:</b> Kodak <br>
                <b>Modelo:</b> i940 <br>
                <b>Resolución de Escaneo:</b> 1200 dpi <br>
                <b>Velocidad de Escaneo:</b> 1 min<br>
                <b>Formato de papel maximo:</b> A4 <br>
                <b>Tipo:</b> Rotativo <br>
               
            </p>      
        </div>
        
    </div>
</div><br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
