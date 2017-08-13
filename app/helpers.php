<?php

function formatDate($param)
{
	if($param!="")
	{
		$array=explode("/", $param);
    	$fecha = $array[2].'/'.$array[0].'/'.$array[1];
    	return $fecha;
	}
	else
	{
		return $param;
	}
    
}