<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php require_once 'formProcess.php' ?>
    <form action="" method = "POST">
       <p> First name: <input type = "text" name = "firstname" value ="" placeholder = "Enter Firstname here"></p>
        <p>Last name: <input type = "text" name = "lastname" value ="" placeholder = "Enter last name here"></p>
        <input type = "submit" name = "submit" value = "Submit">
    
    </form>
</body>
</html>