<?php
include('../lib/constantes.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consulta de Productos</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="contenedor">
            <div>
                <div id="titulositio"><img src="../jpg/logo.jpg"/>Ejercicio 01</div>
                <div id="titulo">Consulta de Productos</div>
            </div>
            <div id="menu"><?php include('../menu.php'); ?></div>
            <div id="contenido"></div>
        </div>
    </body>
    <script>
        /*
         $("[id*=subsolicitud-conprod]").show();
         
         $("[id*=subsolicitud-conprod]").css("display", "block");
         $("[id*=subsolicitud-1]").css("display", "block");
         $("[id*=subsolicitud]").on("click", function (event) {
         var idname = $(this).attr("id");
         idname=idname.substring(1,16);
         $("[id*="+idname+"]").css("display", "block");
         
         }
         */
        $("[id*=prisolicitud]").on("click", function (event) {
            var idname = $(this).attr("id");
            idname = idname.substring(13, 14);
            //$("[id*=subsolicitud-"+idname+"]").css("display", "block");

            if (($("[id*=subsolicitud-" + idname + "]").css("display") != "none")) {
                $("[id*=subsolicitud-" + idname + "]").css("display", "none");
            } else {
                $("[id*=subsolicitud-" + idname + "]").css("display", "block");
            }
            
        });
        
        $('[data-toggle="tooltip"]').tooltip();

    </script>
</html>
