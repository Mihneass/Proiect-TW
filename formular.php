﻿<!DOCTYPE html>
<html lang="en">

<head>
<title>titlu</title>
    <style>
        body {
            font-family: Arial;
        }

        .container {
            padding: 16px;
        }

        label {
            padding: 1px 10px;
        }

            label.mail {
               left:44%;
               position:absolute;
            }

        input[type=text], input[type=password], input[type=email], input[type=file], input[type=number] {
            width: 40%;
            padding: 12px 20px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #0094ff;
            color: black;
            padding: 20px 40px;
            margin: 10px 0;
            cursor: pointer;
            width: 100%;
        }

        .main {
          
            width: 100%;
            overflow: auto;
            padding-top: 100px;
            background-color: rgba(0,0,0,0.4);
        }

        .continut {
            background-color: grey;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }


        .close {
            color: black;
            font-size: 40px;
            position: absolute;
            left: 100px;
            top: 130%;
        }

          

        button:hover {
            opacity: 0.5;
        }

        .pass {
            float: right;
        }

        .detalii {
            height: 150px;
            display: table-column-group;
        }
       
        
    </style>
</head>

<body>

    <h1 class="avatar">Formular</h1>

    <div id="mainID" class="main">

        <form class="continut animatie" action="/action_page.php">
            <div class="imgcontainer">
                <button onclick="window.location.href = 'PaginaPrincipala.php'">Close</button>

            </div>

            <div class="container">

                <label for="uname"><b>Username</b></label>
                <label for="mail" class="mail"><b>Email</b></label>
                <br />

                <input type="text" placeholder="Enter Username" id="uname" required>
                <input type="email" placeholder="Enter Mail" id="mail" required>

                <br />
                <label for="object"><b>Object Name</b></label>
                <label for="price" class="mail"><b>Number of objects</b></label>
                <br />
                <input type="text" placeholder="Enter Object Name" id="object" required>
                <input type="number" placeholder="Enter Number" id="price" required>

                <br />
                <label for="detalii"><b>Details</b></label>
                <br />

                <textarea rows="4" cols="50" class="detalii" placeholder="Enter Details" id="detalii">
                </textarea>


                <input type="file" name="myfile"  >

                <br />
                <label for="address"><b>Address</b></label>
                <br />
                <input type="text" placeholder="Enter Address" id="address" required>


                <button type="submit">Submit</button>


            </div>



        </form>
    </div>
</body>
</html>
