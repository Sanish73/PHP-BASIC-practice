<?php 
//     echo ("Hello WOrld");
// echo "<br>";
//     $name = "sansih";

//     unset($name);

//     echo $name;

// $marks = 90;

// echo ($marks>80)? "pass" : "fail";

// $name = array("sanish" , "sanish1","sansh2");
// for($i=0;$i<count($name);$i++){
//     echo $name[$i];
//     echo "<br>";
// }
// echo count($name);


// $name = array("good"=> "sanish","bad"=>"sanish2");

// echo $name['good'];

if(isset($_POST['Submit'])){
    $name = $_FILES['upload']['name'];
    $size = $_FILES['upload']['size'];
    $type = $_FILES['upload']['type'];
    $tmp_name = $_FILES['upload']['tmp_name'];
//------------uplaod----------------------------------------
    $uploads_dir = 'uploads/';

    // $name3 = "sanish";
    $name2 = basename($_FILES['upload']['name']);
    $filename = date("YFD").$name2;

    if(move_uploaded_file($tmp_name,"$uploads_dir/$filename")){
        echo "file has been uploaded"."<br><br><hr>";
        echo date("Y-");
        echo date("F-");
        echo date("D");
        // echo date("h");
        // echo date("i");
        // echo date("s");
        // echo date("u");
        // echo date("v");
    }else{
        echo "probelm";
    }
//----------------------------------------------------------

        if($type){
       
             echo "<hr><br>Welcome "."Sanish<br>";
             echo "name = ".$name."<br>";
             echo "size = ".$size."<br>";
             echo "type = ".$type."<br>";
             echo "temp-name = ".$tmp_name."<br>";
             exit();
    }else{
        echo "not Valid image";
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
    <h2>Registration form</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">
        First Name:<input type="text" name="first_name"><br><br>
        Last Name:<input type="text" name="last_name"><br><br>
        <!-- email:<input type="text" name="email"><br><br> -->
        Add:<input type="file" name="upload">

    <input type="submit" value="Submit" name="Submit">
</form>
</body>
</html>