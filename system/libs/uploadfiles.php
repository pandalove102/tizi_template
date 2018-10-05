<?php
//Ứng dụng UploadFile
class FileManager
{
    private $filename;
    private $path;
    private $filetype = array('png','jpg','gif');
    // private $name='file_';
    private $name='';
    private $maxsize;
    function __construct($fileinfo, $dd, $msize,$name_sr) 
    {
        $this->filename = $fileinfo;
        $this->maxsize =$msize;
        $this->path = $dd;
        $this->name=$name_sr;
        
    }
    
    function myUpLoads()
    {
        $kq="";
        if($this->filename)
        {
            if(is_array($this->filename['name']))
            {  // xem_arr($this->filename['name']);
                $maxs = $this->maxsize *1024 *1024;
                foreach($this->filename['name'] as $i=>$name)
                {
                    $type = $this->filename['type'][$i];
                    $size = $this->filename['size'][$i];
                    $tmp_name = $this->filename['tmp_name'][$i];
                    $error = $this->filename['error'][$i];
                    if($size > 0 && $size <=$maxs)
                    {
                        $tachduoi = explode('.', $name);
                        $duoi = end($tachduoi);
                        $duoi = strtolower($duoi);
                        //echo $duoi;
                        if(in_array($duoi, $this->filetype))
                        {
                            
                            $newname = $this->name.time().$i.'.'.$duoi;
                            $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/laptopbaongoc_mvc/'.$this->path.'/'.$newname;
                             //echo $fullpath;
                            move_uploaded_file($tmp_name,$fullpath);
                            // echo $newname;
                            $kq=$kq.'#'.$newname;
                        }	
                    }
                   
                }
              
            }
        }
        $kq=ltrim($kq,'#');
       // echo $kq;
        return $kq;
    }



    function myUpLoad()
    {
        if($this->filename)
        {
           
            if(is_array($this->filename))
            {
               
                $maxs = $this->maxsize *1024 *1024;
                $kq="";
                foreach($this->filename as $i=>$name)
                {
                    $type = $this->filename['type'];
                    $size = $this->filename['size'];
                    $tmp_name = $this->filename['tmp_name'];
                    $error = $this->filename['error'];
                    if($size > 0 && $size <=$maxs)
                    {
                        $tachduoi = explode('.', $name);
                        $duoi = end($tachduoi);
                        $duoi = strtolower($duoi);
                        //echo $duoi;
                        if(in_array($duoi, $this->filetype))
                        {
                            $newname = $this->name.time().'.'.$duoi;
                            $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/laptopbaongoc_mvc/'.$this->path.'/'.$newname;
                            //echo $fullpath;
                            move_uploaded_file($tmp_name,$fullpath);
                              return $newname;
                            
                            
                            
                        }	
                    }
                }
                
                // $kq=ltrim($kq,'#');
                // $kq=explode('#',$kq);
                return $kq['0'];
            }
		}
    }

    // function upload_hinh()
    // {
    //     $kq="";
    //     xem_arr($this->filename);
    //     foreach($this->filename as $k=>$v)
    //     {   
    //          xem_arr($v);
    //         if($v['name'])
    //     {
    //         if(is_array($v['name']))
    //         {
    //             $maxs = $this->maxsize *1024 *1024;
    //             $kq ='';
    //             foreach($v as $i=>$value)
    //             {
    //                 // xem_arr($v);
    //                 // xem_arr($value);
                    
    //                 //($value);
    //                 $type = $value['type'];
    //                 $size = $value['size'];
    //                 $tmp_name = $value['tmp_name'];
    //                 $error = $value['error'];
    //                 if($size > 0 && $size <=$maxs)
    //                 {
    //                     $tachduoi = explode('.', $value);
    //                     $duoi = end($tachduoi);
    //                     $duoi = strtolower($duoi);
    //                     //echo $duoi;
    //                     if(in_array($duoi, $v->filetype))
    //                     {
    //                         $newname = $v['name'].time().$i.'.'.$duoi;
    //                         $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/admin1/'.$v->path.'/'.$newname;
    //                         //echo $fullpath;
    //                         move_uploaded_file($tmp_name,$fullpath);
    //                         //echo $newname;
    //                         $kq+=$newname;
                            
                            
    //                     }	
    //                 }
    //             }
                
    //         }
    //     }
    //     }

    //     return $kq;
       
    // }
}
//Đổi tên tập tin
// if(isset($_POST['newname']))
// {
//     $new = $_POST['newname'];
//     $old =$_POST['oldname'];
//     $catduoi = explode(".", $_POST['oldname']);
//     $duoi = end($catduoi);
//     $duoi = strtolower($duoi);
//     $cattm = explode("/", $old);
//     unset($cattm[count($cattm) -1]);
//     $pathms = implode("/", $cattm);
//     $pathms = $pathms."/".$new.".".$duoi;
//     if(isset($_POST['luu']))
//     {
//         rename($old, $pathms);
//     }
// }
//Di chuyển file
// if(isset($_POST['newaddress']))
// {
//     $new = $_POST['newaddress'];
//     echo $old =$_POST['oldaddress'];
//     $tachddcu = explode("/", $old);
//     $file = end($tachddcu);
//     unset($tachddcu[count($tachddcu)-1]);
//     $duogdanms = implode("/", $tachddcu);
//    echo  $diachims = $new."/".$file;
//     if(isset($_POST['move']))
//     {
//         copy($old, $diachims);
//         unlink($old);
//     }
// }

?>