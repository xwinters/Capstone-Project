<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>E-RPG | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">E</span>-RPG</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <form action="/login_script.php"> <!--Need to create this file-->
        Username:<br>
        <input type="text" name="Username"><br>
        Password:<br>
        <input type="text" name="Password"</br>
        <input type="submit" value="Submit">
    </form>

    <footer>
      <p>Team Blanco, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
