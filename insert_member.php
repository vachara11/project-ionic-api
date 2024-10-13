<?php 
include("config.db.php"); //ดึงไฟล์เชื่อมต่อฐานข้อมูลเข้ามา
$dataJSON = json_decode(file_get_contents('php://input'), true);
$message = array();

// ประกาศตัวแปร สำหรับเพิ่มข้อมูล
$title_member = $dataJSON['postTitle'];
$name_member = $dataJSON['postName'];
$sname_member = $dataJSON['postSname'];
$userName_member = $dataJSON['postUsername'];
$passWord_member = $dataJSON['postPassword'];
$position_member = $dataJSON['postPosition'];
$st_member ="y";
$sql_insert = "INSERT INTO `tbl_member` (`id`, `title`, `name`, `sname`, `username`, `password`, `position`, `st`) 
VALUES (NULL, '$title_member', '$name_member', '$sname_member', '$userName_member', '$passWord_member', '$position_member', '$st_member');";
$qr_insert = mysqli_query($conn,$sql_insert);

if($qr_insert){
    //เพิ่มข้อมูลได้
    http_response_code(201);
    $message['status']= "Success";
}else{
    // เพิ่มไม่ได้
    http_response_code(422);
    $message['status'] = "Error";
}

//ส่งข้อมูลการดำเนินการกลับไป
    echo json_encode($message);
    echo mysqli_error($conn);

?>