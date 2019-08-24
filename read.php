<!DOCTYPE html>
<html>
  <title>form</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<?php
require 'config.php';
if (isset($_POST['submit'])){
    //echo "hello";
  $code=$_POST['code'];
  //echo $code;
 $result=mysqli_query($conn,"SELECT * FROM message WHERE codeg='$code'");
  $rows=mysqli_num_rows($result);
  if ($rows==1){
  $message=$result->fetch_assoc();
    $id=$message['id'];
    $name=$message['name'];
    $contact=$message['contact'];
    $subject=$message['subject'];
    $msg=$message['msg'];
    $image=$message['image'];
  }
}
?>
<h5><img src = "image.jpeg" height="30%" width="30%"></h5>
      <?php
    if($image){
      echo "<img src=data:image/jpg;base64,$image width='50%'>";
      }else{
        echo"There are not image attached to this message";
        }
    ?> 
    <hr>
      <p>Message: <?php echo $msg; ?> </p>
      <hr>
      <p>Download File: <?php ?> 
      </p>
      <form action="delete.php" method="post">
        <input type="hidden" name="code" value="<?php echo $code;?>">
        <button name="submit"type="submit" value="submit">Delete msg</button><BR>
      </form>
      <a href = "index.php"><button>HOME</button></a><BR>
  </body>
</html>
