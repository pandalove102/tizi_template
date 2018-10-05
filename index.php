<?php
include 'system/autoload.php';

if(isset($_GET['controller']) && isset($_GET['act']))
{
     $controller=$_GET['controller'];
     $act=$_GET['act'];
}
else
{
    $controller='hethong';
    $act='trangchu';
}


$path='controller/'.$controller.'_controller.php';
if(file_exists($path))
{
    include_once $path;
    $classname=$controller.'_controller';
    if(class_exists($classname))
    {
        
        $obj = new $classname();
        if(method_exists($obj,$act))
        {
            $obj->$act();
            
        }
        else
        {
            $controller=new hethong_controller();
            $controller->_404();
        }
    
        
    }
    else
    {
        $controller=new hethong_controller();
        $controller->_404();
    }
}
else
{
    $controller=new hethong_controller();
    $controller->_404();

}

?>