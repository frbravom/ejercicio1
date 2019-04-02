<?php
include('lib/constantes.php');
include('lib/vacaciones.php');
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
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div id="contenedor">
            <div>
                <div id="titulositio"><img src="jpg/logo.jpg"/>Ejercicio 01</div>
                <div id="titulo">Index</div>
            </div>
            <div id="menu"><?php include('menu.php'); ?></div>
            <div id="contenido"></div>
        </div>

    </body>

    <script>
        $("#prisolicitud-1").on("click", function (event) {
            if (($("[id*=subsolicitud-ingprod]").css("display") != "none")) {
                $("[id*=subsolicitud-ingprod]").css("display", "none");
                $("[id*=subsolicitud-ingvtas]").css("display", "none");
                $("[id*=subsolicitud-ingbod]").css("display", "none");
            } else {
                $("[id*=subsolicitud-ingprod]").show();
                $("[id*=subsolicitud-ingprod]").css("display", "block");
                $("[id*=subsolicitud-ingvtas]").show();
                $("[id*=subsolicitud-ingvtas]").css("display", "block");
                $("[id*=subsolicitud-ingbod]").show();
                $("[id*=subsolicitud-ingbod]").css("display", "block");
            }
        });
        
        $("#prisolicitud-2").on("click", function (event) {
            if (($("[id*=subsolicitud-infvtas]").css("display") != "none")) {
                $("[id*=subsolicitud-infvtas]").css("display", "none");
            } else {
                $("[id*=subsolicitud-infvtas]").show();
                $("[id*=subsolicitud-infvtas]").css("display", "block");
            }
        });
        
        $("#prisolicitud-3").on("click", function (event) {
            if (($("[id*=subsolicitud-conprod]").css("display") != "none")) {
                $("[id*=subsolicitud-conprod]").css("display", "none");
            } else {
                $("[id*=subsolicitud-conprod]").show();
                $("[id*=subsolicitud-conprod]").css("display", "block");
            }
        });
        
        
        
        
        
        
        
        
        

        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
