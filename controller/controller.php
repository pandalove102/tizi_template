<?php
// defined('DOMAIN') or die('access deny'); 
class controller
{
   
   var $pathview = 'view/';
   var $css="";
   var $js="";
   function render($view,$data=array(),$layout='layout')
   {
       $this->load('view/'.$layout.'.php',$view,$data);
   }
   //$css : 1 mang href css hoặc 1 href css
	function loadcss($css = array())
	{
		if(is_array($css))
		{
			foreach($css as $cs)
			{
				$this->css.='<link href="'.$cs.'" rel="stylesheet">';
			}
		}else
		{
		   $this->css='<link href="'.$css.'" rel="stylesheet">';
		}
		
	}
	function loadjs($js=array())
	{
		if(is_array($js))
		{
			foreach($js as $j)
			{
				$this->js.= '<script src="'.$j.'" ></script>';
			}
		}else
		{
		 	$this->js= '<script src="'.$js.'" ></script>';
		}
	}
	function loadmodule($modules = array(),$path='view/layout/')
	{
		if(is_array($modules))
		{
			foreach($modules as $md)
			{
				//include  $path.$md.'.php';
				$this->load($path.$md.'.php');
			}
		}else
		{
			//include  $path.$modules.'.php';
			$this->load( $path.$modules.'.php');
		}
	}	
	function load($path='',$view,$data=array())
	{	
		// if(!is_null($data))
		// {
		// 	foreach($data as $da)
		// 		extract($da);
		// }
		include_once  $path;
	}	 




}
?>