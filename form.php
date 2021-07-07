<?php 
if (isset($_POST['submitButton'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];

    echo "<h4> Welcome ". $name . "<br> Your email address is " . $email . "</h4>";
}
?>
<!DOCTYPE html>
<html>
    
    <form action = "form.php" method = "POST" >
        <input name = "email" type = "email" required placeholder = "Enter your email here"> <br>
        <input name = "name" type = "text" required placeholder = "Enter your name here"><br>
        <input type = "password" name = "password " required placeholder = "Enter your password here"><br>
        <button type = "submit" name = "submitButton"> Submit</button>
    </form>

 
</html> 