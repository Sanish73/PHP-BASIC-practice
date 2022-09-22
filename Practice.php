<?php 
    if(isset($_POST["submitMe"])){
        if($_SERVER['REQUEST_METHOD']=='POST'){
         
            // $namee = $_POST['name'];
            $userName = $_POST['username'];
            $pass = $_POST['password'];
            $mess = $_POST['textArea'];
            
           setcookie($userName , $pass , time()+60*60*364);

        //    $admin = array("admin", "sanish", "samundra","sonima","kailash");
        //    $adminPass = array("admin","thapa","open","go","please");

        //   echo $admin;
            if($userName =="sanish" || $userName =="admin" ||$userName =="samundra" ||$userName =="sonima"   ){
                if($pass =="open" || $pass == "please" || $pass=="go"){
                      if(strlen($mess)>=1 ){
                        
                        echo "welcome  ".$userName;
                        echo "<br/>";
                        echo "your message:  ".$mess;
                        echo "<br/>";
                        echo "<br/>";
                        
                      }
                     else{
                    echo "Please insert message!!!";
                         }
            }else{
                echo "please input valid info.!!";
            }
        }
        
            
           
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?PHP $_SERVER['PHP_SELF']?>" method="post">
        <!-- Name:   <input type="text" name="name">
        <br/> -->
        Username:<input type="text" name="username">
        <br/>
        Password:<input type="password" name="password">
    
      <br/>  Message:     <br/>
      
      <textarea name="textArea" rows="7" cols="39"></textarea>
        <br/>
                <input type="submit" name="submitMe" value="submit">
    </form>
</body>
</html>