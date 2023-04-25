<?php
    
    if(isset($_POST['name'])){
        $email  = $_POST['email'];
        $name = $_POST['name'];
        $service = $_POST['service'];
        $budget = $_POST['budget'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = "New Quotation";
    }else{
        $email  = $_POST['email'];
        $name = $_POST['name'];
        $service = $_POST['service'];
        $budget = $_POST['budget'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = "New Quotation";
    }
    
    $to = "yourmail@gmail.com";
    $from = $email;
    $headers = "From: $from";
    $msg = "This email is ent by $name having phone number $phone with message $message Service Name $service Total Budget $budget";
    
    if(mail($to,$subject,$msg,$headers)){
        $arr = array("status"=>true);   
    }else{
        $arr = array("status"=>false);   
    }
    
    echo json_encode($arr);

?>