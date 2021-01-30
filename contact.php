<!DOCTYPE html>
<html>
<head>
	<link href="./contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>contact</title>
</head>
<body >
<nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="index.html"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="project.html">Project</a></li>
          
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
 <br>
    <br>
    <br>
    <br><br>
    <br><br>
    <br><br>
    <p >Let's start our collaboration</p>
    <div>
    <form method='post'>
		<input name="name" placeholder="What is your name?" class="name" required />
		<input name="emailaddress" placeholder="What is your email?" class="email" type="email" required />
    <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="msg" required></textarea>
    <input name="submit" class="btn" type="submit" value="submit now" />
</form>

						<?PHP
						if($_POST['submit'])
						{
						$conn=mysqli_connect("localhost","root","","test");
						$insmes=mysqli_query($conn,"insert into messages (msg,name,email) values ('$_POST[msg]','$_POST[name]','$_POST[email]')") or die (mysqli_error($conn));
						}
						?>
</div>

</body>
</html>

