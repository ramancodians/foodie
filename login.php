<?php
include('config/db.php');
include('views/head.php');
include('views/header.php');



$auth_errors = '';

if(isset($_SESSION['isLogged'])){
    // that means user is logged in
    //echo "user is aleady logged! hello,".$_SESSION['name'];
    //header('Location: index.php');
    echo "user is logged!";

}else{
    // user is logged out
    echo "user is not logged!";

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
                $_SESSION['user'] = $row;
            }
           
            // this is where magic happens
            if($username == $dbUsername && $password == $dbPassword){
                //echo "<br> User is there in DB";
                $_SESSION['isLogged'] = true;
                $_SESSION['name'] = $dbUsername;
                header('Location: index.php');
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
  
  
   
   <div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Login
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="register.html">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<p class="text-danger"><?php echo $auth_errors; ?></p>
				<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="email" id="email" class="form-control" placeholder="Email-Id" value=""> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password"> 
				  </div>
				  <input type="submit" id="login-submit" value="Login">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
   
    <?php
  // include('views/cart.php'); 
   include('views/footer.php'); 
?>