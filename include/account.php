<?php

class Account {

    public function getAllUsernames(){
        $sql = " select username from login_credentials";
        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

}


?>
