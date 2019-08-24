<!DOCTYPE html>
	<html>
	<head>
		<title>code generation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="index.css">
		</head>
	<body>
		<?php
		require 'config.php';

      $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
      $code=substr(str_shuffle($str_result), 0, 3); 
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$contact=$_POST['email'];
			$subject=$_POST['subject'];
			$msg=$_POST['msg'];
      
      $imgpath=$_FILES['image']['tmp_name'];
      $filepath=$_FILES['file']['tmp_name'];
          	if($imgpath){
                    $img_binary = fread(fopen($imgpath, "r"), filesize($imgpath));
                    $picture = base64_encode($img_binary);

                    $insert=mysqli_query($conn,"INSERT INTO message(name,contact,subject,msg,image,codeg) VALUES ('$name','$contact','$subject','$msg','$picture','$code')");
                        if($insert){
                          $yourcode="yourcode message is:".$code;
                        }
                        else{
                          echo $conn->error;
                        }      
            }
          
            if($filepath){
              $yourfile = $code."/".$_FILES["file"]["name"];
	            			
            }
          }
	?>
  <h5><img src = "image.jpeg" height="30%" width="30%" ></h5>
  <hr>
              <p><?php echo $yourcode;?> </p>
              <a href = "receiver.php"><button>SEND MESSAGE</button></a>
              <a href = "index.php"><button>HOME</button></a><BR>
 
</body>
</html>

		