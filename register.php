
<?php
    require_once'include/common.php';

    #Check if 



    #Check if username is already on the database. Repeats not allowed 


    $accountDAO = new AccountDAO;
    $databaseUsernames = $accountDAO->getAllUsernames();
    var_dump($databaseUsernames);

    

?>