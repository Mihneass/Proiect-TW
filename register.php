﻿﻿<!DOCTYPE html>
<html lang="en">

<head>
<title>Titlu</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>

  
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
</body>
</html>