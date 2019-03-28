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
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php');?></div>
            <div id="contenido"></div>
        </div>
    </body>
    <script>
        $("[id*=subsolicitud-conprod]").show();
        $("#subsolicitud-conprod").addClass("active");
        $("[id*=subsolicitud]").css("display","block");
        $('[data-toggle="tooltip"]').tooltip();
    </script>
</html>
