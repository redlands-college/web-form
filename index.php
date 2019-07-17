<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2F3A70; 
            font-family: Roboto, Arial; 
            font-size: 16px;
        }

        #Wrapper {
            display: flex; 
            justify-content: center;
        }

        #Container {
            width: 50%; 
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            background-color: #fff; 
            border: 1px solid #101A40; 
            border-radius: 10px; 
            margin-top: 50px;
            padding-bottom: 30px;
        }

        #Title {
            margin-bottom: 20px; 
            display: flex; 
            flex-direction: column; 
            align-items: center;
        }

        h1 {
            color: #666; 
            margin-bottom: 0;
        }

        h3 {
            color: #888;
        }

        .column {
            display: flex; flex-direction: column;
        }

        label {
            font-size: 0.8em;
            margin-bottom: 0.5em;
        }

        input[type=text], select {
            font-size: 1em;
            padding: 10px;
            width: 300px;
            margin-bottom: 20px;
        }

        input[type=submit] {
            background-color: #101A40;
            color: #fff;
            padding: 10px 50px;
            font-size: 1em;
            border-radius: 5px;
        }

        #Gender {
            margin-bottom: 20px;
        }

        #Gender span {
            margin-left: 10px;
            margin-right: 30px;
        }

        #Newsletter {
            margin-bottom: 20px;
        }

        #Newsletter span {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form method="get" action="response.php">
        <div id="Wrapper">
            <div id="Container">
                <div id="Title">
                    <h1>Create Your Account</h1>
                    <h3>Please enter your details below</h3>
                </div>
                <div class="column">
                    <label for="firstname">First Name</label>
                    <input type="text" placeholder="Enter first name" name="firstname">

                    <label for="lastname">Last Name</label>
                    <input type="text" placeholder="Enter last name" name="lastname">

                    <label for="gender">Gender</label>
                    <div id="Gender">
                        <input type="radio" name="gender" value="Male"><span>Male</span>
                        <input type="radio" name="gender" value="Female"><span>Female</span>
                    </div>

                    <label for="age">Age</label>
                    <select name="age">
                        <?php
                            for ($x=10; $x<=30; $x++) {
                                echo "<option value=\"$x\">$x</option>";
                            }
                        ?>
                    </select>

                    <label for="newsletter">Newsletter</label>
                    <div id="Newsletter">
                        <input type="checkbox" name="newsletter">
                        <span>Please send me monthly newsletter</span>
                    </div>
                </div>
                <div class="column">
                    <input type="submit" value="JOIN" >
                </div>
            </div>
        </div>
    </form>
</body>
</html>