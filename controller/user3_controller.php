<?php 
class user3_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user3/';
       
    }
    function mini_cart()
    {
        if(isset($_SESSION['login']) &&  $_SESSION['login'])
        {
            
        }
        else
        {
            return "";
        }
    }
    function trangchu()
    {
        ob_start();//cached output, tranh loi khi su dung header(...)
        $_SESSION['user_dangnhap']="";
        $_SESSION['pass_dangnhap']="";
        $_SESSION['ten_quantri']="";
        $_SESSION['awatar_nguoidung']="";
        $_SESSION['login']=FALSE;
        setcookie('login_user','1',time()-1);
        setcookie('user_dangnhap',"",time()-1);
        setcookie('pass_dangnhap',"",time()-1);
        setcookie('awatar_nguoidung',"",time()-1);
        setcookie('ten_quantri',"",time()-1);
        $this->render('home1',$data=array(),'layout_user3');
    }
    function trangchu2()
    {
        $this->render('home2',$data = array(),'layout_user3');
    }
    function _404()
    {
        $this->render('404',$data = array(),'layout_user3');
    }
    function shop()
    {
          $data=array('minicart'=>$this->mini_cart());
        if(isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'])
        {
            $id_danhmuc=$_GET['id_danhmuc'];
        }
        else $id_danhmuc=1;
        // if(isset($_GET['id_nhomsp']) && $_GET['id_nhomsp'])
        // {
        //     $id_nhomsp=$_GET['id_nhomsp'];
        // }else $id_nhomsp=1;
        
        $sr1=new danhmucsanpham_model();
        $sr=new sanpham_model();
        $sr2=new nhomsanpham_model();
        $data=array('sanpham'=>$sr->danhsach_sanpham_danhmuc_model($id_danhmuc),
                    'danhmuc'=>$sr1->danhsach_danhmucsanpham_model(),
                    'nhomsanpham'=>$sr2->danhsach_nhomsanpham_model());
        $this->render('shop',$data,'layout_user3');
    }
    function shoplist()
    {
        $this->render('shop',$data = array(),'layout_user3');
    }
    function blog()
    {
        $this->render('blog',$data = array(),'layout_user3');
    }
    function about()
    {
        $this->render('about',$data = array(),'layout_user3');
    }
    function cart()
    {
        $this->render('cart',$data = array(),'layout_user3');
    }
    function checkout()
    {
        $this->render('checkout',$data = array(),'layout_user3');
    }
    function contact()
    {
        $this->render('contact',$data = array(),'layout_user3');
    }
    function login()
    {
        $this->render('login',$data = array(),'layout_user3');
    }
    function check_login()
    {
        // xem_arr($_POST);
        $sr=new user3_model();
        if(!isset($_POST['remem']))
        {
            $_POST['remem']=0;
        }
        $kq=$sr->check_login_model($_POST['user'],$_POST['pass'],$_POST['remem']);
        if($kq==true)
        {
            header('location:?controller=user3&act=trangchu');
        }else
        {
            
            $data = array('thongbao'=>"<div class='alert alert-danger'> Đăng nhập sai user hoặc pass đăng nhập hoặc tài khoản bạn đã bị khoá , vui lòng liên hệ Admin !!  </div>");
            header('location:?controller=user3&act=login');
           
        }
        
    }
   
    function account()
    {
        $this->render('account',$data = array(),'layout_user3');
    }
    function singleblog()
    {
        $this->render('singleblog',$data = array(),'layout_user3');
    }
    function singleproduct()
    {
        $this->render('singleproduct',$data = array(),'layout_user3');
    }
    function thankyou()
    {
        $this->render('thankyou',$data = array(),'layout_user3');
    }
    function wishlist()
    {
        $this->render('wishlist',$data = array(),'layout_user3');
    }
    function forgotpassword()
    {
        xem_arr($_POST);
        $this->render('forgotpassword',$data = array(),'layout_user3');
    }
  
    function search()
    { 
        $sr1=new nhacungcap_model();
        $sr2=new nhomsanpham_model();
        $sr3=new user3_model();
       
        if(isset($_POST['kw']) && $_POST['kw'])
        {
            $kw=$_POST['kw'];
            $data=array(
                'nhacungcap'=>$sr1->danhsach_nhacungcap_model(),
                'nhomsanpham'=>$sr2->danhsach_nhomsanpham_model(),
                'search'=>$sr3->seach($kw)
            );
            $this->render('search',$data,'layout_user3');
        }else
        {
            $data=array(
                'nhacungcap'=>$sr1->danhsach_nhacungcap_model(),
                'nhomsanpham'=>$sr2->danhsach_nhomsanpham_model(),
                'thongbao'=>"Không có kết quả tìm kiếm , vui lòng nhập từ khoá cần tìm !! "
            );
            $this->render('search',$data,'layout_user3');
        }
        //SELECT * FROM table_sanpham WHERE ten_sanpham LIKE '%hp%' and gia BETWEEN 100 and 7000000 and id_nhomsanpham=3 and id_nhacungcap=3
       
    }
    // logout
    function logout()
    {
       
       $sr=new user3_model();
       $kq=$sr->logout_model();
       if($kq==true)
       {
         $this->render('logout',$data = array(),'layout_user3');
       }else
       {
           echo "lỗi";
       }
        
    }
    // đăng kí thành công successful_registration
    function successful_registration()
    {
        $this->render('successful_registration',$data = array(),'layout_user3');
    }
    // reset passwords thành công
    function successful_password()
    {
        $this->render('successful_password',$data = array(),'layout_user3');
    } 

    function seach_name_product()
    {
        
        if(isset($_GET['kw']) && $_GET['kw'])
        {
            $kw=$_GET['kw'];
            echo $kw;
            exit();
            $sr=new user3_model();
            $data=$sr->seach($kw);
            if(count($data)>0)
            {
                $this->render('shop',$data,'layout_user3'); 
                
            }else
            {
                return "không có kết quả !!!! ";
            }
        }
       
    }
   
    // thông báo đơn hàng qua mail 
    // thông báo subsrice thành công 
    // thông bảo huỷ sub thành công 
    // thông báo đơn hàng sẵn sàng giao
    // thông báo đơn hàng sẵn đang giao
    // thông báo đơn hàng sẵn giao hàng thanh công
    // thông báo đơn hàng sẵn giao hàng thất bại 
    // nhắc khách hàng sắp hết 
    // thông báo có sản phẩm mới 
    // thông báo khuyến mãi 
    // kích hoạt chế độ bảo hành thành công 


    
    



    
   
   
   

}
?>