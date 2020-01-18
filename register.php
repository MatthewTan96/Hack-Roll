
<?php

    require_once'include/common.php';

    var_dump($_POST);


    if ($_POST['username'] == '' || $_POST['password'] == '') {
        $_SESSION["errors"] = "Username or password is blank ";
        header('Location: login.php');
    }
    



    #Check if username is already on the database. Repeats not allowed 


    $accountDAO = new AccountDAO;
    $databaseUsernames = $accountDAO->getAllUsernames();
    var_dump($databaseUsernames);

    

?>