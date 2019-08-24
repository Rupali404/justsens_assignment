
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="sender.css">
</head>
<body>
    	<h2>JustSend</h2>
      <form action="codeg.php" method="post" enctype="multipart/form-data">
        <div clas="container">
            <label> Name</label>
            <input type="text" id="name" name="name" placeholder="your name"><br>

           <label> Email or mobile number</label>
            <input type="text" id="email" name="email" placeholder="email or phone"><br>

            <label> Subject</label>
            <textarea  id="subject" name="subject"></textarea><br>

            <label> Message</label>
            <textarea  id="msg" name="msg"></textarea><br><br>

            <label>Profile</label>
             <input type="file" name="image" id="image"><br><br>

            <label> file</label>
             <input type="file" name="file" id="image"><br>
             
        <input type="submit" name="submit" value="send" class="btn">
    </form>
  </div>
	<script type="text/javascript">
    function validate(){
      var name=document.getElementById('name').value;
      var email=document.getElementById('email').value;

       if (name==null || name==""){  
          alert("Name can't be blank");  
          return false;  
      }else if (email==null || email==""){  
          alert("Contact field can't be blank");  
          return false;
      }
       return true;
    }
  </script>
  </body>
	</html>