<?php      
    include('connection.php');  
    $user = $_POST['user'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($user);  
        $password = stripcslashes($pass);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1><center> Login failed. Invalid username or password</center></h1>";  
        }     
?>  
