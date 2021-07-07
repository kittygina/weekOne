<?php
    if (isset($_POST['submit'])) {
        echo "this is a POST method <br />";
        echo "First name:" . $_POST['firstname'] . '<br>';
        echo "Last name:" .$_POST['lastname']. '<br>';
    }elseif ($_GET['submit']) {
        echo "this is a GET method <br />"; 
        echo "First name:" .$_GET['firstname'] . '<br>';
        echo "Last name:" .$_GET['lastname']. '<br>';
    }

    ?>