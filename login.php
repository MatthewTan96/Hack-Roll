
<?php

    require_once'include/common.php';

?>

Welcome to NeuroParasite 


<br>
<br>
<body>
<h2> Login here: </h2>

<form method='POST' action="validate.php">

<!-- Username  -->
    <label for="username">Username:</label>
    <input type="username" placeholder='Enter Username' name="username" id="username">

<!-- Password -->
<br><br>     

    <label for="password">Password:</label>
    <input type="password" placeholder='Enter Password' class="password" name="password" id="password">

<br><br>
<button type="submit">Submit</button>


<br><br>


</form>

<h2> New user? Register here: </h2>


<form action="register.php" method="post">

<!-- Username  -->
<label for="username">Username:</label>
<input type="username" placeholder='Enter Username' name="username" id="username">

<!-- Password -->
<br><br>     

<label for="password">Password:</label>
<input type="password" placeholder='Enter Password' class="password" name="password" id="password">

<br><br>
<button type="submit">Register</button>
</form>

<h2> Errors </h2>
<?php


if (isset($_SESSION["errors"])){

    echo "<p> {$_SESSION['errors']} </p>";

}
?>


</body>