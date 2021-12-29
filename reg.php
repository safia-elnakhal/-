
<html>
<body>
  <?php
$conn=mysqli_connect('127.0.0.1','root','','test');

if (!$conn) {

    echo 'no connection';

}
else{echo 'connected';}

 if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
  Welcome <?php echo $_POST["name"]; ?><br>
  Your email address is: <?php echo $_POST["email"]; ?>
  and kind <?php echo $_POST['kind'];?>
  and adress <?php echo $_POST['adress'];?>
  and details <?php echo $_POST['details'];

?>
  <?php 
}
        else{ ?>
   <script> location.replace("yourHtmlFileName.html") </script>
   <?php     } 

// $name=$_POST['name'];
// $email=$_POST['email'];
// $kind=$_POST['kind'];
// $adress=$_POST['adress'];
// $details=$_POST['details'];

$sql="INSERT INTO user(name,email,kind,adress,details) values('name' ,'email', 'kind','adress','details')";

if (!mysqli_query($conn ,$sql)){

    echo 'fiald' ;

}

else{echo 'Inserted';}
?>  
</body>
</html> 

    
