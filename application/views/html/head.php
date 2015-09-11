<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Bienvenido a la Aplicaci&oacute;n de control de Inventario</title>

	<!-- Estilos css-->
    <link href="<?php echo base_url();?>css/metro.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/metro-icons.css" rel="stylesheet">

	<!-- Js -->
    <script src="<?php echo base_url();?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>js/metro.js"></script>

	    <style>
        .login-form {
            width: 400px;
            height: 300px;
            position: fixed;
            top: 50%;
            margin-top: -150px;
            left: 50%;
            margin-left: -200px;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
        div#mensaje{
            width: 100%;
            text-align: center;
            font-size: 1.5em;
            color: white;
            padding: 5px 0 5px 0;
            background-color: red;
        }
        div#mensaje.info{

            background-color: silver;
        }
    </style>


    <script>

        $(function(){
            var form = $(".login-form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });
        });
    </script>
</head>
<body >