<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <style>
        label {
            font-size: 0.8em;
            margin-bottom: 0.5em;
        }

        input[type=text] {
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

        .Male {
            color: blue;
        }

        .Female {
            color: pink;
        }
    </style>
</head>
<body style="font-family: Roboto, Arial; font-size: 16px;">
    <div style="display: flex; justify-content: flex-start;">
        <div style="width: 50%; display: flex; flex-direction: column; align-items: flex-start; height: 400px; background-color: #fff; margin-top: 20px;">
            <div style="margin-top: 20px; margin-left: 50px; display: flex; flex-direction: column;">
                <?php
                    $name = $_GET["firstname"] . " " . htmlspecialchars($_GET["lastname"]);
                    echo "<span class='$gender'>Welcome $name</span>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>