<?php
 
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['email'])){
        die('');
    }
     
    //Nhúng file kết nối với database
    include('ketnoi.php');
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $email   = addslashes($_POST['email']);
    $password   = addslashes($_POST['password']);
    $fullname   = addslashes($_POST['fullname']);
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$email|| !$password || !$fullname )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
        // Mã khóa mật khẩu
        $password = md5($password);
          
   
    //Kiểm tra email đã có người dùng chưa
    if (mysql_num_rows(mysql_query("SELECT email FROM users WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
          
    //Lưu thông tin thành viên vào bảng
    @$addmember = mysql_query("
        INSERT INTO users (
            email,
            password,
            fullname
        )
        VALUE (
            '{$email}',
            '{$password}',
            '{$fullname}'
        )
    ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='/'>Về trang chủ</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>