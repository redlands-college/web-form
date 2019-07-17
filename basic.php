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
            font-family: Arial; 
            font-size: 16px;
        }

        #Wrapper {
            display: flex; 
            justify-content: flex-start;
            margin-left: 50px;
        }

        #Container {
            width: 50%; 
            display: flex; 
            flex-direction: column; 
            align-items: flex-start; 
            background-color: #fff; 
            margin-top: 20px;
            padding-bottom: 30px;
        }

        #Title {
            margin-bottom: 20px; 
            display: flex; 
            flex-direction: column; 
            align-items: flex-start;
        }

        h1 {
            margin-bottom: 0;
        }

        h3 {
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
            padding: 10px 50px;
            font-size: 1em;
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
    <form method="get" action="response-basic.php">
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
                </div>
                <div class="column">
                    <input type="submit" value="JOIN">
                </div>
            </div>
        </div>
    </form>
</body>
</html>