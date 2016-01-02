<?php
	
defined('BASEPATH') OR exit('No se permite acceso directo a script');

class Reportes extends CI_Model {
	var $sql="";

public function __construct() {        
    parent::__construct();
}
	
	function asientos_compras($mes_year){
		
	}

	function asiento_general_mensual($mes_year){
		/* SQL
		SELECT  `tipo_cuenta` ,  `cuentas`.`nombre` , SUM( monto ) 
		FROM  `compras` ,  `cuentas` 
		WHERE  `afecta` LIKE  '09-2015'
		AND  `cod_compa` LIKE  '0001'
		AND  `cuentas`.`codigo` LIKE  `compras`.`tipo_cuenta` 
		GROUP BY  `tipo_cuenta` 
		*/

		/* USANDO FORMULAS
		SELECT  `tipo_cuenta` ,  `cuentas`.`nombre` , ROUND( SUM( monto ) / 1.12, 2 ) 
		FROM  `compras` ,  `cuentas` 
		WHERE  `afecta` LIKE  '09-2015'
		AND  `cod_compa` LIKE  '0001'
		AND  `cuentas`.`codigo` LIKE  `compras`.`tipo_cuenta` 
		GROUP BY  `tipo_cuenta` 
		*/
		
		/*  FORMUlAS  
		FORMAT( SUM( monto ) / 1.12, 2 )  1,000.25 //separacion de miles en coma (,)
		TRUNCATE(0.166, 2)
		-- will be evaluated to 0.16

		TRUNCATE(0.164, 2)
		-- will be evaluated to 0.16
		ROUND(0.166, 2)       			//Redondea a la alta el 3er decimal
		-- will be evaluated to 0.17

		ROUND(0.164, 2)
		-- will be evaluated to 0.16
		*/
	}
}//fin de clase Reportes