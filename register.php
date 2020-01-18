
<?php

    require_once'include/common.php';

    var_dump($_POST);

    if ($_POST['username'] == '' || $_POST['password'] == '') {
        $_SESSION["errors"] = "Username or password is blank ";
        header('Location: login.php');
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    #Retrieve usernames on the database
    $AccountDAO = new AccountDAO;
    $databaseUsernames = $AccountDAO->getAllUsernames();
    
    #Check if username is already on the database. Repeats not allowed 

    foreach ($databaseUsernames as $databaseUsername){
        if ($databaseUsername == $username){
            $_SESSION["errors"] = "Username already taken!";
            header('Location: login.php');
        }
    }
    
    #If username created, save username in a session and continue to the home page 

    $AccountDAO->register($username,$password);
    
    $_SESSION('username') = $username;
    $_SESSION('password') = $password;

    header('Location: home.php');

?>