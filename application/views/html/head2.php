<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Julio Vinachi">

    <title>Control de Inventario</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Estilos de Tablas -->
    <link href="<?php echo base_url();?>css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    
    <!--datapiker-->
    <link href="<?php echo base_url();?>css/jquery-ui.css" rel="stylesheet" type="text/css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.bs-callout {
  padding: 20px;
  margin: 20px 0;
  border: 1px solid #eee;
  border-left-width: 5px;
  border-radius: 3px;
}

.bs-callout-info {
  border-left-color: #1b809e;
}
textarea#descripcion{
    resize: none;
}
label#base,label#iva{
font-size: 1.5em;
}
td.td-fuente{
    font-size: 1.2em;
    color: white;
}
td.L,.L{
    text-align: left;
}
td.R,.R{
    text-align: right;
}
td.C,.C{
    text-align: center;
}

.input-group .form-control {

    position: static !important;
}
    </style>

        <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Datapiker -->
    <script src="<?php echo base_url();?>js/jquery-ui.js"></script>
</head>

<body>