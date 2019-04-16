﻿<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Titlu</title>
<link href="StyleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>

  
    <div id="mainID" class="main">

        <form class="continut">
            <div class="imgcontainer">
                  <h1 style="font-size:7vw">   Create Account
                </h1>
            </div>

            <div class="container">

                <label for="uname"><b>Username</b></label>
                <br />
                <input type="text" placeholder="Enter Username" id="uname" required>
                <br />

                <label for="pass"><b>Password</b></label>
                <br />
                <input type="password" placeholder="Enter Password" id="pass" required>
                <br />

                <label for="email"><b>Email</b></label>
                <br />
                <input type="email" placeholder="Enter Email" id="email" required>
                <br />

                <label>
                        <br />
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
