
<?php
 
// ALL RIGHTS RESERVED BY SHAYER MAHMUD SOWMIK [ IGN0R3DH4X0R ]
// IF YOU COPY, THEN GIVE ME CREDITZ
// T E A M - X
 
if (isset($_POST['ajax'])) {
$to = $_POST['to'];
$subject = $_POST['sub'];
$msg = $_POST['msg'];
$from = $_POST['from'];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .= "From: ".$_POST['name']."<".$_POST['from'].">";
$headers = "From:" . $from;
 
$send = mail($to,$subject,$msg,$headers);
 
if ($send) {
    echo "<p id='success'>Sent Successfully $to</p>";
}else{
    echo "<p id='error'>Sorry, fill in the box first.$to</p>";
}
exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
    <title>Ultra Sms Spoofing</title>
    <style>
    img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
    body{
        margin: 5;
        padding: 8;
        background-color: #1c214e;
    }
    ::placeholder {
        color: lightskyblue;
        opacity: .9;
        font-size: 15px!important;
    }
    .main{
        max-width: 768px;
        margin: 0 auto;
    }
    #title{
        color: ;
        text-shadow: 0 0 20px skyblue;
        text-align: center;
        font-family: Montserrat;
    }
    a:hover{
        color: cyan;
        text-shadow: 0 0 20px cyan;
        text-align: center;
        font-family: Montserrat;
    }
    a{
        color: cyan;
        text-shadow: 0 0 20px cyan;
        text-align: center;
        font-family: Montserrat;
    }
    h4{
        color: cyan;
        text-shadow: 0 0 20px skyblue;
        text-align: center;
        font-family: Montserrat;
    }
    input[type="text"]{
        background-color: #1c214e;
        box-shadow: 0 0 11px 0px cyan;
        height: 40px;
        width: 47%;
        border: none;
        border-radius: 4px;
        padding: 15px;
        margin: 1%;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        color: cyan;
        font-family: Montserrat;
        font-size: 14px;
    }
    input[type="text"]:hover{
        box-shadow: 0 0 11px 0px cyan;
    }
    #sub{
        width: 96.5%;
    }
    textarea{
        background-color: #1c214e;
        box-shadow: 0 0 11px 0px cyan;
        height: 200px;
        width: 97%;
        max-width: 97%;
        border: none;
        border-radius: 4px;
        padding: 15px;
        margin: 1%;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        color: cyan;
        font-family: Montserrat;
        font-size: 14px;
    }
    textarea:hover{
        box-shadow: 0 0  11px 0px cyan;
    }
    #btn{
        background-color: #1c214e;
        box-shadow: 0 0 11px 0px cyan;
        width: 96.5%;
        height: 40px;
        margin-left: 5px;
        margin-bottom: 40px;
        color: cyan;
        border: none;
        border-radius: 4px;
        font-family: Montserrat;
        font-size: 18px;
        font-weight: bold;
        letter-spacing: 1px;
        box-sizing: border-box;
        outline: none;
        transition: .5s ease-in;
        cursor: pointer;
    }
    #btn:hover{
        color: ;
    }
    #success{
        font-family: Montserrat;
        color: cyan ;
    }
    #error{
        font-family: Montserrat;
        color: cyan;
    }
    </style>
</head>
<body><br>
  <h2 style="color:cyan;text-align: center;text-color:cyan;">UlTRA MAIL SPOOF</h2>
  <br>
</h1>
        <div id="result" style="text-align: center;"></div>
    <div>
        <input type="text" name="from" id="from" placeholder="SPOOFED MAIL">
        <input type="text" name="to" id="to" placeholder="TARGET MAIL">
    </div><br>
    <div>
        <input type="text" name="sub" id="sub" placeholder="SUBJECT">
    </div><br>
    <div>
        <textarea name="msg" id="msg" placeholder="Type your message"></textarea>
        <!--textarea name="to" id="to" placeholder="MAILLIST [SEPERATE BY NEW LINES]"></textarea-->
    </div>
    <div><br><br>
<button id="btn" onclick="return false">SEND NOW</button>
        <h4>BY: TEAM X 1337</h4>
    </div>
    
   <Teamx></Teamx>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#btn").on('click',function(){
        var mailist = $("#to").val().split("\n");
        var tmailist =  mailist.length;
        for (var current = 0; current < tmailist; current++) {
        var from = $("#from").val();
        var name = $("#name").val();
        var sub = $("#sub").val();
        var msg = $("#msg").val();
        var to = mailist[current];
        var data = "ajax=1&from=" + from + "&name=" + name + "&sub=" + sub + "&msg=" + msg + "&to=" + to;
            $.ajax({
                type : 'POST',
                data:  data,
                success: function(data) {
                    $("#result").append(data);
                }
            });
        }
 
 
    });
});
</script>
</body>
</html>
