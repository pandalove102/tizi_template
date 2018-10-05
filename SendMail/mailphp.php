<?php 
// 2 cach gui mail
//cach 1: dung mail cua php (cần 1 hosting đang chạy thật khong phải localhost)
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//mail('php23453thang@gmail.com','test mail php','hom nay hoc bai gui mail<a></a>',$headers);
//cach 2:mượn server mail cua bên thứ  3: smtp  (cd: smtp.gmail.com) (dùng thư viện đc cung cấp)
 include 'mailer.php';
if(guimail('php26238@gmail.com','test gui mail localhost','<a href="https://google.com">click vô đây</a>',1))
	echo 'ok';
else
	echo 'no';
//2 ky thuat gui mail
//1: phpmailer : chi gui dc o tren server that
//if(mail('php26238@gmail.com','test','gui mail <a href="http://virut.com">click vo day</a>',$headers))
	//echo 'ok';
//else 
	//echo 'no';
//2: smtp mailer : gửi nhờ qua 1 server cua ben thư 3 (api  dịch vụ cua ben thư 3)

?>