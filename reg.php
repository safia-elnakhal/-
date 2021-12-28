<?php
$conn=mysqli_connect('127.0.0.1','root','','test');

if (!$conn) {

    echo 'no connection';

}
else{echo 'connected';}

$name =$_POST['name'];
$email =$_POST['email'];
$kind =$_POST['kind'];
$adress =$_POST['adress'];
$details =$_POST['details'];

$sql="INSERT INTO user(name,email,kind,adress,details) values('$name' ,'$email', '$kind','$adress','$details')";

if (!mysqli_query($conn ,$sql)){

    echo 'fiald' ;

}

else{echo 'Inserted';}
?>