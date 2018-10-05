<?php 
spl_autoload_register(function($classname){
	$pathcontroller = "controller/$classname.php";
	$pathmodel = "model/$classname.php";
	$pathsystemdbconfig = "system/config/$classname.php";
	$pathsystemlibs = "system/libs/funcs.php";
	$pathsystemdb = "system/db/$classname.php";
	$pathsystemdefine= "system/define/define.php";
	$pathsystemconfig= "system/config/config.php";
	$pathsystemuoloadfiles= "system/libs/uploadfiles.php";
	
	if(file_exists($pathsystemdefine))
		include_once $pathsystemdefine;
	if(file_exists($pathsystemconfig))
		include_once $pathsystemconfig;
	if(file_exists($pathsystemlibs))
		include_once $pathsystemlibs;
	if(file_exists($pathcontroller))
		include_once $pathcontroller;
	if(file_exists($pathsystemdbconfig))
		include_once $pathsystemdbconfig;
	if(file_exists($pathsystemdb))
		include_once $pathsystemdb;
	if(file_exists($pathmodel))
		include_once $pathmodel;
	if(file_exists($pathsystemuoloadfiles))
		include_once $pathsystemuoloadfiles;	
});

?>