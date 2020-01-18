<?php

class AccountDAO {

    public function getAllUsernames(){
        $sql = " select username from login_credentials";
        $connMgr = new ConnectionManager();      
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $result[] =$row['username'];
        }
        return $result;
    }

    
    public function register($username,$password){
        $sql = 'INSERT INTO login_credentials(username,password), 
        VALUES ($username,$password)';

        $connMgr = new ConnectionManager();
        $conn = $connMgr->getConnection();

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);

        $isAddOK = False;
        if ($stmt->execute()) {
            $isAddOK = True;    
        }
        
        return $isAddOK;
    }
}


?>
