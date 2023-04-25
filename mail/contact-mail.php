<?php
    
    if(isset($_POST['name'])){
        $email  = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
    }else{
        $email  = $_GET['email'];
        $name = $_GET['name'];
        $message = $_GET['message'];
        $subject = $_GET['subject'];
    }
    
    $to = "yourmail@gmail.com";
    $from = $email;
    $headers = "From: $from";
    $msg = "This email is sent by $name with message $message";
    
    if(mail($to,$subject,$msg,$headers)){
        $arr = array("status"=>true);   
    }else{
        $arr = array("status"=>false);   
    }
    
    echo json_encode($arr);

?>