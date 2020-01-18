
<?php

    require_once'include/common.php';

?>

<style> 
body {
  background-image: url("https://uqvk92z67p11sbpjb3nr4qo1-wpengine.netdna-ssl.com/wp-content/uploads/2019/06/apocalypse-1400x788.jpg");
  background-size: cover;
}

.login {
  color: white;
  font-style: oblique;
  font-size: 40px;
  text-align: center;
}

.scroll {
  text-align: center;
}

.credential{
  text-align: center;
  color: white;
  font-size: 20px;
}

.center{
  margin:auto;
}

.container{
  background-color:black;
  width: 40vw;
  align-items: center;
  opacity: .60;
  

}

</style>


<div class ="container">
  <h1 class=login> Welcome to NeuroParasite </h1>

<body>
    
    <h1 class=login> Login Access </h1>

    <form method='POST' action="validate.php">

    <!-- Username  -->
    <div class=scroll>
        <div class=credential> 
            <label for="username">Username:</label>
            <input type="username" placeholder='Enter Username' name="username" id="username">

        
    <!-- Password -->
    <br><br>     
    <div style="text-align: center">
        <label for="password">Password:</label>
        <input type="password" placeholder='Enter Password' class="password" name="password" id="password">
    
    <div style="text-align: center">
      <br><br>
      <input type="submit" value="Login">
    </div>
  </div>



    <br><br>


    </form>

    <h1 class=login> New User? Register Here: </h1>


    <div class=scroll>
        <div class=credential> 
            <form action="register.php" method="post">

            <!-- Username  -->
            <label for="username">Username:</label>
            <input type="username" placeholder='Enter Username' name="username" id="username">

            <!-- Password -->
            <br><br>     

            <label for="password">Password:</label>
            <input type="password" placeholder='Enter Password' class="password" name="password" id="password">
        </div>


        <div style="text-align: center">
      <br><br>
      <input type="submit" value="Register">
    </div>
  </div>
</div>
    </form>

    <!-- Display of errors -->
<div class=scroll>
    <div class=credential> 

        <h2> Errors (if any): </h2>
        <?php


        if (isset($_SESSION["errors"])){

            echo "<p> {$_SESSION['errors']} </p>";

        }
        else{
            echo "No error!";
        }
        ?>
    </div>
</div>


</body>