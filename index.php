<?php
if($_SERVER['REQUEST_METHOD']=='GET'){

 $username=$_GET['username'];
 $username=$_GET['phone'];
 $username=$_GET['email'];
 $username=$_GET['message'];


 $error=array();
 if(strlen($username)<=3){

	$error[]='username muse be greater than 3 character';
 }
 if(strlen($php)<=10){

	$error[]='phone muse be greater than 11 number';
 }
}

else {}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact form</title>
   <meta charset="UTF-8">
	
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/><!-- adding the bootstrap file which was downloaded and added to the static file-->
 <link rel="stylesheet" type="text/css" href="css/all.css"/>
 <link rel="stylesheet" type="text/css" href="css/style.css"/> 
</head>

  <body>
<div class="container">
<h1 class="text-center">Contact Me</h1>
   <form class="contact-form" method="GET" action ="<?php echo $_SERVER['PHP_SELF']?>">
       <input 
        	class="form-control"
        	type="text" 
        	name ="username" 
        	placeholder="please Enter your name here">
	<i class="fa fa-user fa-fw"></i>
       <input 
        	class="form-control"
        	type="text"
        	name ="phone" 
        	placeholder="please Enter your phone">
	<i class="fa fa-envelope fa-fw"></i>
       <input
        	class="form-control"
        	type="email" 
        	name ="email"
		placeholder="please Enter your email">
	<i class="fa fa-phone fa-fw"></i>
	<textarea 
        	class="form-control"
			placeholder="your message "
			name="message"		>
        </textarea>
        <input 
		class="btn btn-success btn-block"
		type="submit"
		value="send message">
<i class="fa fa-paper-plane fa-fw send-icon"></i>
   </form>

</div>





  </body>
</html>
  																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					