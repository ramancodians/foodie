<?php

$auth_errors = '';

if(isset($_SESSION['isLogged'])){
    // that means user is logged in
    //echo "user is aleady logged! hello,".$_SESSION['name'];
    //header('Location: index.php');
}else{
    // user is logged out
    if(isset($_POST['email'])){
        //this means he/she submitted the login form
        $username = $_POST['email'];
        $password = $_POST['password'];
        $dbUsername = '';   
        $dbPassword = '';
        
        $q = "SELECT * FROM users where email = '$username'";
      
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                 $dbUsername = $row['email'];   
                 $dbPassword = $row['password'];
            }
           
            // this is where magic happens
            if($username == $dbUsername && $password == $dbPassword){
                //echo "<br> User is there in DB";
                $_SESSION['isLogged'] = true;
                $_SESSION['name'] = $dbUsername;
            }else{
               $auth_errors = $auth_errors.'<h6>Invalid username or password</h6>';
            }
           
        }else{
           //echo "No user with that username";
             $auth_errors = $auth_errors.'<h6>No User with this username</h6>';
        }
        
    }else{
         //echo "data is not there in POST";
        // $auth_errors = $auth_errors.'<h6>Invalid username or password</h6>';
    }
}

?>