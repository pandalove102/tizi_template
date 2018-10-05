<?php

// function chuyentrang( $link = 'index.php' ) {
// 	header( 'location:' . $link );
// }
function chuyentrang( $link = 'http://localhost/laptopbaongoc_mvc/' ) {
	header( 'location:' . $link );
}

function xem_arr( $mang = array() ) {
	echo "<pre>";
	print_r( $mang );
	echo "</pre>";
}

function islogin() {
	if ( isset( $_SESSION[ 'login' ] ) && $_SESSION[ 'login' ] )
		return true;
	else
		return false;
}

function load_xml_id( $link_xml, $id_key, $id_value ) {
	//Note: nếu chỉ đọc XML thì dùng Simple load XML
	// nếu có tác động đến dữ liệu XML thì phải dùng: DOMDocument
	// tạo link dẫn đến XML
	$path_listuser = $link_xml;
	// tạo đối tượng DOMDocument
	$doc = new DOMDocument();
	//tải toàn bộ nội dung XML vào đối tượng $doc
	$doc->load( $path_listuser );
	// tìm root trong đối tượng $doc
	$root = $doc->documentElement;
	// lấy danh sách root ra 
	$nodecantim = "";
	$listnodenguoidung = $root->childNodes;
	foreach ( $listnodenguoidung as $node ) {
		if ( $node->nodeType == XML_ELEMENT_NODE ) {
			$nodethuoctinhs = $node->childNodes;
			foreach ( $nodethuoctinhs as $nodethuoctinh ) {
				if ( $nodethuoctinh->nodeType == XML_ELEMENT_NODE ) {
					if ( $nodethuoctinh->nodeName == $id_key && $nodethuoctinh->nodeValue == $id_value ) {
						$nodecantim = $node;
						return $nodecantim;
					}
				}
			}
		}



	}
}

function add_xml_ojb( $path, $obj, $post ) {
	$doc = new DOMDocument();
	//tai noi dung xml vao doi tuong (khởi tạo)
	$doc->load( $path );
	//tim node root
	$root = $doc->documentElement;
	//varray($_POST);
	//tao node nguoi dung môi
	$obj = $doc->createElement( $obj );
	if ( !isset( $post[ 'trangthai' ] ) )
		$post[ 'trangthai' ] = 0;
	foreach ( $post as $k => $v ) {
		$k = $doc->createElement( $k, $v );
		$obj->appendChild( $k );

		if ( $k == 'mk_dangnhap_nguoidung' ) {
			$k = $doc->createElement( $k, md5( $v ) );
			$obj->appendChild( $k );
		}
	}
	$root->appendChild( $obj );
	$doc->save( $path );
}

function update_xml_id( $link_xml, $obj_key, $obj_value, $post ) {
	//Note: nếu chỉ đọc XML thì dùng Simple load XML
	// nếu có tác động đến dữ liệu XML thì phải dùng: DOMDocument
	// tạo link dẫn đến XML
	$path_listuser = $link_xml;
	// tạo đối tượng DOMDocument
	$doc = new DOMDocument();
	//tải toàn bộ nội dung XML vào đối tượng $doc
	$doc->load( $path_listuser );
	// tìm root trong đối tượng $doc
	$root = $doc->documentElement;
	// lấy danh sách root ra 
	$nodecantim = "";
	$listnodenguoidung = $root->childNodes;
	foreach ( $listnodenguoidung as $node ) {
		if ( $node->nodeType == XML_ELEMENT_NODE ) {
			$nodethuoctinhs = $node->childNodes;
			foreach ( $nodethuoctinhs as $nodethuoctinh ) {
				if ( $nodethuoctinh->nodeType == XML_ELEMENT_NODE ) {
					if ( $nodethuoctinh->nodeName == $obj_key && $nodethuoctinh->nodeValue == $obj_value ) {

						foreach ( $post as $k => $v ) {

							$node->getElementsByTagName( $k )->item( 0 )->nodeValue = $v;
							if ( $k == 'mk_dangnhap_nguoidung' ) {

								$node->getElementsByTagName( $k )->item( 0 )->nodeValue = md5( $v );
							}
						}
						$doc->save( $path_listuser );
					}
				}
			}
		}


	}
}

function get_id($link_xml, $obj_key){

	$path_listuser = $link_xml;
	// tạo đối tượng DOMDocument
	$doc = new DOMDocument();
	//tải toàn bộ nội dung XML vào đối tượng $doc
	$doc->load( $path_listuser );
	// tìm root trong đối tượng $doc
	$root = $doc->documentElement;
	// lấy danh sách root ra 
	$lg=0;
	$listnodenguoidung = $root->childNodes;
	foreach ( $listnodenguoidung as $node ) {
		if ( $node->nodeType == XML_ELEMENT_NODE ) {
			$nodethuoctinhs = $node->childNodes;
			foreach ( $nodethuoctinhs as $nodethuoctinh ) {
				if ( $nodethuoctinh->nodeType == XML_ELEMENT_NODE )
				 {
				 	if ( $nodethuoctinh->nodeName == 'id_nguoidung')
				 	{
				 		$lg+=1;
				 	}
				 }
			}
		}
	}
	return 'ND'.time().'_'.$lg;
	

}

function del_xml( $path, $obj, $ma ) {
	$doc = new DOMDocument();
	//tai noi dung xml vao doi tuong (khởi tạo)
	$doc->load( $path );
	//tim node root
	$root = $doc->documentElement;
	//lay danh sach node con
	$listnodeobj = $root->childNodes;
	$nodecantim = null;
	foreach ( $listnodeobj as $nodeobj ) {
		if ( $nodeobj->nodeType == XML_ELEMENT_NODE ) {
			$nodethuoctinhs = $nodeobj->childNodes;
			foreach ( $nodethuoctinhs as $nodethuoctinh ) {
				if ( $nodethuoctinh->nodeType == XML_ELEMENT_NODE ) {
					if ( $nodethuoctinh->nodeName == 'id_nguoidung' && $nodethuoctinh->nodeValue == $ma ) {
						$nodecantim = $nodeobj;
						break;
					}
				}
			}
		}
	}
	$root->removeChild( $nodecantim );
	$doc->save( $path );
}

function ketnoi_database($host='localhost',$dname='database_laptop',$user='root',$pass='')
{
	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
}

function load_data_login_pdo_v1()
{
	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
	$query=$db->query('SELECT id_quantri,ten_quantri,user_dangnhap,pass_dangnhap,table_trangthai.ten_trangthai 
					   FROM table_quantri,table_trangthai 
					   WHERE table_quantri.trangthai=table_trangthai.id_trangthai');
	$data=$query->fetchAll(PDO::FETCH_OBJ);
	return $data;
	
}
function load_data_listsanpham_pdo_v1()
{
	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
	$query=$db->query('SELECT id_sanpham,ten_sanpham,gia,table_trangthai.ten_trangthai 
					   FROM table_sanpham, table_trangthai 
					   WHERE table_sanpham.trangthai=table_trangthai.id_trangthai');
	$data=$query->fetchAll(PDO::FETCH_OBJ);
	return $data;
	
}
function load_detail_sanpham_pdo_v1()
{

	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
	$query=$db->query('SELECT *,table_trangthai.ten_trangthai 
					   FROM table_sanpham, table_trangthai 
					   WHERE table_sanpham.trangthai=table_trangthai.id_trangthai');
	$data=$query->fetch(PDO::FETCH_OBJ);
	return $data;


}
function load_danhsach_nhacungcap_pdo_v1()
{

	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
	$query=$db->query('SELECT id_nhacungcap,ten_nhacungcap 
					   FROM table_nhacungcap 
					   WHERE 1');
	$data=$query->fetchALL(PDO::FETCH_OBJ);
	return $data;


}

function load_danhsach_loaisanpham_pdo_v1()
{

	try {
		$opt=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		$db= new PDO('mysql:host=localhost;dbname=database_laptop','root','',$opt);
		$db->query('set names utf8');
		
	} catch (PDOException $e) {
		exit('không thể kết nối đến server');
	}
	$query=$db->query('SELECT id_nhomsanpham,ten_nhomsanpham, table_trangthai.ten_trangthai 
				       FROM  table_nhomsanpham,table_trangthai 
					   WHERE table_nhomsanpham.trangthai=table_trangthai.id_trangthai');
	$data=$query->fetchALL(PDO::FETCH_OBJ);
	return $data;


}



function strtoseo($value) //Được sử dụng để làm link alias ("Đường dẫn ảo") -              
{ 

  $marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",

  "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề"

  ,"ế","ệ","ể","ễ",

  "ì","í","ị","ỉ","ĩ",

  "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"

  ,"ờ","ớ","ợ","ở","ỡ",

  "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",

  "ỳ","ý","ỵ","ỷ","ỹ",

  "đ",

  "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"

  ,"Ằ","Ắ","Ặ","Ẳ","Ẵ",

  "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",

  "Ì","Í","Ị","Ỉ","Ĩ",

  "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"

  ,"Ờ","Ớ","Ợ","Ở","Ỡ",

  "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",

  "Ỳ","Ý","Ỵ","Ỷ","Ỹ",

  "Đ",

  " ","?",":","\"","'",",",".","!","#","@","$","(",")","[","]","{","}","|","+","`","&","/","%","\\","<",">");



  $marKoDau=array("a","a","a","a","a","a","a","a","a","a","a"

  ,"a","a","a","a","a","a",

  "e","e","e","e","e","e","e","e","e","e","e",

  "i","i","i","i","i",

  "o","o","o","o","o","o","o","o","o","o","o","o"

  ,"o","o","o","o","o",

  "u","u","u","u","u","u","u","u","u","u","u",

  "y","y","y","y","y",

  "d",

  "A","A","A","A","A","A","A","A","A","A","A","A"

  ,"A","A","A","A","A",

  "E","E","E","E","E","E","E","E","E","E","E",

  "I","I","I","I","I",

  "O","O","O","O","O","O","O","O","O","O","O","O"

  ,"O","O","O","O","O",

  "U","U","U","U","U","U","U","U","U","U","U",

  "Y","Y","Y","Y","Y",

  "D",

  "-","","","","","","","","","","","","","","","","","","","","","","","-","","");

  $value = str_replace($marTViet,$marKoDau,$value); //Thay thế tất cả chữ có dấu thành chữ không dấu

  $value = mb_strtolower(trim($value), "UTF-8"); //Chuyển tất cả chuỗi đó thành chữ hoa

  $value = str_replace(' ','-',$value); // Thay các dấu ' ' thành dấu '-'



  $value = str_replace('?','',$value);

  $value = str_replace('/','-',$value); 
  $value = str_replace('%','',$value);  

  $charaterA = '#(à|ả|ã|á|ạ|ă|ằ|ẳ|ẵ|ắ|ặ|â|ầ|ẩ|ẫ|ấ|ậ)#imsU'; //#imsU là một chuỗi các kí tự đặc biệt     

  $replaceCharaterA = 'a';     

  $value = preg_replace($charaterA, $replaceCharaterA, $value);               

  $charaterD = '#(đ)#imsU';    

  $replaceCharaterD = 'd';      

  $value = preg_replace($charaterD,$replaceCharaterD,$value);            

  $charaterE = '#(è|ẻ|ẽ|é|ẹ|ê|ề|ể|ễ|ế|ệ)#imsU';      

  $replaceCharaterE = 'e';      

  $value = preg_replace($charaterE,$replaceCharaterE,$value);         

  $charaterI = '#(ì|ỉ|ĩ|í|ị)#imsU';      

  $replaceCharaterI = 'i';      

  $value = preg_replace($charaterI,$replaceCharaterI,$value);            

  $charaterO = '#(ò|ỏ|õ|ó|ọ|ô|ồ|ổ|ỗ|ố|ộ|ơ|ờ|ở|ỡ|ớ|ợ)#imsU';      

  $replaceCharaterO = 'o';      

  $value = preg_replace($charaterO,$replaceCharaterO,$value);                  

  $charaterU = '#(ù|ủ|ũ|ú|ụ|ư|ừ|ử|ữ|ứ|ự)#imsU';      

  $replaceCharaterU = 'u';      

  $value = preg_replace($charaterU,$replaceCharaterU,$value);            

  $charaterY = '#(ỳ|ỷ|ỹ|ý|ỵ)#imsU';      

  $replaceCharaterY = 'y';      

  $value = preg_replace($charaterY,$replaceCharaterY,$value); 

  $value = str_replace(',','',$value); 

  $value = str_replace('---','-',$value);   

  $value = str_replace('--','-',$value);   

  $value = str_replace('-–-','-',$value);    

  $value = str_replace('_','-',$value); 

  $value = str_replace('(','',$value); 

  $value = str_replace(')','',$value); 

  $value = str_replace('{','',$value); 

  $value = str_replace('&','',$value); 

  $value = str_replace('}','',$value); 

  $value = str_replace('.','-',$value); 

  $value = str_replace('--','-',$value);    

  $value = str_replace('ỏ','o',$value); 

  $value = preg_replace('/[^\p{L}\p{N}]/u', '-', $value);

  $value = str_replace("--",'-',$value);  

  return $value;  

}





























function uploadfile()
    {
         $filename;
         $path;
         $filetype = array('png','jpg','gif');
         $name='file_';
         $maxsize;
        function __construct($fileinfo, $dd, $msize) 
        {
            $this->filename = $fileinfo;
            $this->maxsize =$msize;
            $this->path = $dd;
            
        }
        if($this->filename)
        {
            if(is_array($this->filename['name']))
            {
                $maxs = $this->maxsize *1024 *1024;
                $kq ='';
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
                        echo $duoi;
                        if(in_array($duoi, $this->filetype))
                        {
                            $newname = $this->name.time().$i.'.'.$duoi;
                            $fullpath  = $_SERVER['DOCUMENT_ROOT'].'/all/xml/admin/libs/'.$this->path.'/'.$newname;
                            echo $fullpath;
                            move_uploaded_file($tmp_name,$fullpath);
                            return $newname;
                            
                            
                        }	
                    }
                }
                
            }
		}
	}













































?>