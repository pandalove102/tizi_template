<?php 
class user2_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user2/';
    }
    function trangchu()
    {
        $this->render('home',$data = array(),'layout_user2');
    }
    function aboutus()
    {
        $this->render('aboutus',$data = array(),'layout_user2');
    }
    function sections()
    {
        $this->render('sections',$data = array(),'layout_user2');
    }
    function blogpost()
    {
        $this->render('blogpost',$data = array(),'layout_user2');
    }
    function blogposts()
    {
        $this->render('blogposts',$data = array(),'layout_user2');
    }
    function contactus()
    {
        $this->render('contactus',$data = array(),'layout_user2');
    }
    function ecommerce()
    {
        $this->render('ecommerce',$data = array(),'layout_user2');
    }
    function landing()
    {
        $this->render('landing',$data = array(),'layout_user2');
    }
    function pricing()
    {
        $this->render('pricing',$data = array(),'layout_user2');
    }
    function product()
    {
        $this->render('product',$data = array(),'layout_user2');
    }
    function profile()
    {
        $this->render('profile',$data = array(),'layout_user2');
    }
    function signup()
    {
        $this->render('signup',$data = array(),'layout_user2');
    }
    



    
   
   
   

}
?>