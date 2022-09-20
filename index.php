<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0048</title>
</head>
<body>
    <div>
        <form method="POST">
            <input type="text" placeholder="First Name" name="fname"><br><br>
            <input type="text" placeholder="Second Name" name="sname"><br><br>
            <button type="submit" name="submit">send</button><br><br>
        </form>
        <div>
            <h2>
                <?php
                     echo "Hello " . $_POST['fname'] . " " . $_POST['sname'] . "! Greetings from BindAPI.";
                 ?>
            </h2>
        </div>
    </div>
</body>
</html>