<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contact Form</title>
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	 <link rel="stylesheet" type="text/css" href="css/formstyle.css">
</head>

<body>
  <div class="wrapper">  
    <div id="contact_form">
    <form name="form1" id="ff" method="post" action="insert.php">
	<center><h1>Contact Form</h1></center>
<p>Our Onsite Service Company Cover Kalua Kangsa, Sungai Siput (u), 
Ipoh Area support services.</p>
<p>Email: fandc@fandctechnology.com<br>
Phone: +60 011 1118 1124</br></p>    

        <label>
		<span>Name:</span>
        <input type="text" placeholder="Please enter your name" name="name" id="name" required autofocus>
        </label>
        
        <label>
		<span>City:</span>    
		<input type="text" placeholder="Please enter your city" name="city" id="city" required>
        </label>
        
        <label>
		<span>Phone:</span>
        <input type="tel" placeholder="Please enter your phone" name="phone" id="phone">
        </label>
        
        <label>
		<span>Email:</span>
        <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
      	</label>
		
		<label>
        <span>Message:</span>
        <input type="message" placeholder="message" name="message" id="" required>
        </label>

      
		<input class="sendButton" type="submit" name="Submit" value="Send">
			
	</form>
	</div>
   </div>

</body>
</html>