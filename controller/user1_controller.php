<?php 
class user1_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user1/';
    }
    function trangchu()
    {
        $this->render('home',$data = array(),'layout_user1');
    }
    function cart()
    {
        $this->render('cart',$data = array(),'layout_user1');
    }
    function table()
    {
        $this->render('table',$data = array(),'layout_user1');
    }
    function notifications()
    {
        $this->render('notifications',$data = array(),'layout_user1');
    }
    function aboutus()
    {
        $this->render('aboutus',$data = array(),'layout_user1_empty');
    }
    function _404()
    {
        $this->render('404',$data = array(),'layout_user1');
    }
    function _422()
    {
        $this->render('422',$data = array(),'layout_user1');
    }
    function _500()
    {
        $this->render('500',$data = array(),'layout_user1');
    }
    function addproduct()
    {
        $this->render('addproduct',$data = array(),'layout_user1');
    }
    function blogpost()
    {
        $this->render('blogpost',$data = array(),'layout_user1_empty');
    }
    function blogposts()
    {
        $this->render('blogposts',$data = array(),'layout_user1_empty');
    }
    function contactus()
    {
        $this->render('contactus',$data = array(),'layout_user1_empty');
    }
    function discover()
    {
        $this->render('discover',$data = array(),'layout_user1_empty');
    }
    function ecommerce()
    {
        $this->render('ecommerce',$data = array(),'layout_user1_empty');
    }
    function landing()
    {
        $this->render('landing',$data = array(),'layout_user1');
    }
    function login()
    {
        if(is_null($_POST))
        {
            $this->render('login',$data = array(),'layout_user1_empty');
        } 
        else{
           // xem_arr($_POST);
            $sr=new hethong_controller();
            $kq=$sr->check_login();
            if($kq==true)
            {
                $this->render('home1',$data = array(),'layout_user1');
            }
        }
        
    }
    function product()
    {
        $this->render('product',$data = array(),'layout_user1_empty');
    }
    function profile()
    {
        $this->render('profile',$data = array(),'layout_user1_empty');
    }
    function register()
    {
        $this->render('register',$data = array(),'layout_user1_empty');
    }
    function search()
    {
        $this->render('search',$data = array(),'layout_user1_empty');
    }
    function nucleoiconsdemo()
    {
        $sr='class="demo-icons"';
        $data=array('class'=>$sr);
        $this->render('nucleoiconsdemo',$data,'layout_user1_empty');
    }
    function setting()
    {
        $this->render('setting',$data=array(),'layout_user1');
    }
    function design()
    {
        $this->render('design',$data=array(),'layout_user1_empty');
    }
    function presentation()
    {
        $this->render('presentation',$data=array(),'layout_user1_empty');
    }
    function sections()
    {
        $this->render('sections',$data=array(),'layout_user1_empty');
    }
    function home1()
    {
        $this->render('home1',$data=array(),'layout_user1_empty');
    }




    
   
   
   

}
?>