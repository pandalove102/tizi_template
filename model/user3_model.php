<?php 
 ob_start();//cached output, tranh loi khi su dung header(...)
//  session_start();
class user3_model extends model
{
    function seach($kw="")
    {
        if(is_null($kw))
            return false;
        else
        {
            $sql="SELECT * FROM table_sanpham WHERE ten_sanpham LIKE '%$kw%';";
            $this->setquery($sql);
            return $this->loadallrow();     
        }
        
    }
    
    function check_login_model($user,$pass,$remem)
    {
        
        if(isset($user) && isset($pass))
        {
            
            if(trim($user)!='' && trim($pass)!='')
            {
                $sr=new quantri_model();
                $data=array('danhsachquantri'=>$sr->danhsach_quantri_model());
                // xem_arr($data['danhsachquantri']);
                // exit();
                foreach($data['danhsachquantri'] as $k=>$v)
                {
                    // echo $v->ten_trangthai;
                    //     exit();
                    if($v->ten_trangthai=='Active')
                    {
                        if($v->user_dangnhap==$user && $v->pass_dangnhap==$pass)
                            {   
                                ob_start();//cached output, tranh loi khi su dung header(...)
                                session_start();
                                $thongbao="<div class='alert alert-success'> Đăng nhập thành công !! </div>";
                                $_SESSION['login']=true;
                                // $_SESSION['cart']=true;
                                $_SESSION['user_dangnhap']=$user;
                                $_SESSION['pass_dangnhap']=$pass;
                                $_SESSION['ten_quantri']=$v->ten_quantri; 
                                $_SESSION['awatar_nguoidung']=$v->awatar_nguoidung; 
                                if($remem==1)
                                {
                                    $time=time() + 86400;
                                    setcookie('login',true,$time);
                                    setcookie('user_dangnhap',$_SESSION['user_dangnhap'],$time);
                                    setcookie('pass_dangnhap',$_SESSION['pass_dangnhap'],$time);
                                    setcookie('awatar_nguoidung',$_SESSION['awatar_nguoidung'],$time);
                                    setcookie('ten_quantri',$_SESSION['ten_quantri'],$time);
                                }
                                return TRUE;
                        }
                        else
                        {
                            // $thongbao= 'tài khoản bạn đã bị khoá , vui lòng liên hệ Admin !!';
                           
                             return FALSE; 
                            
                        }
                        
                        return true;
                
                    } else
                    {
                        // $thongbao= 'Đăng nhập sai user đăng nhập !! ';
                        
                         return FALSE; 
                    }   
                    
        
                }
               
            }
            
        }
        
        
        
    }
    function logout_model()
    {
        // unset($_SESSION['login']);
        // unset($_SESSION['user_dangnhap']);
        // unset($_SESSION['pass_dangnhap']);
        // unset($_SESSION['ten_quantri']);
        // unset($_SESSION['awatar_nguoidung']);
        session_start();
        setcookie('login_user','1',time()-1);
        setcookie('user_dangnhap','1',time()-1);
        setcookie('pass_dangnhap','1',time()-1);
        setcookie('awatar_nguoidung','1',time()-1);
        setcookie('ten_quantri','1',time()-1);
        session_destroy();
        
        return true;
        
        
       
    }
}

?>
