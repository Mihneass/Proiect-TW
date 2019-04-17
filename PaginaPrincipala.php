<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Main</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/stilizare-butoane.css" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="header">
        <a href="PaginaPrincipala.php"><img alt="Logo" src="biciclete.png" class="bicla"/></a>
        <div class="meniu">
            <a href="Calendar.php"><p class="calendar">Calendar</p></a>
            <a href="Cereri.php"><p class="cont">Comenzile mele</p></a>
        </div>
    </div>

    <div class="forms">
    <div class="register">

<form class="continut">
    <div class="imgcontainer">
          <h1>
            Create Account
        </h1>
    </div>

    <div class="container">

        <label for="uname"><b>Username</b></label>

        <input type="text" placeholder="Enter Username" id="uname" required>

        <br />

        <label for="pass"><b>Password</b></label>
        <br />
        <input type="password" placeholder="Enter Password" id="pass" required>

        <label for="email"><b>Email</b></label>

        <input type="email" placeholder="Enter Email" id="email" required>

        <label>
            <input type="checkbox" name="remember" required>
            <b> I have read and agree to the <a href="terms.txt">terms of service.</a>
            </b>
        </label>

        <button type="submit">Register</button>

    </div>

   
 
</form>
</div>

<div class="login">

<form class="continut">
    
<h1>
            Login
        </h1>
    <div class="container">

        <label for="uname"><b>Username</b></label>
        <br />
        <input type="text" placeholder="Enter Username" id="uname" required>

        <br />

        <label for="pass"><b>Password</b></label>
        <br />
        <input type="password" placeholder="Enter Password" id="pass" required>

        <label>
            <input type="checkbox" name="remember"><b>Remember</b>
        </label>

        <span class="pass">Forgot <a href="#">password?</a></span>


        <button type="submit">Login</button>

    </div>

   
 
</form>
</div>

    </div>
   




</body>
</html>