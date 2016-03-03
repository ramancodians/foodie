<?php
include('config/db.php');
include('config/auth.php');
include('views/head.php');
include('views/header.php');
?>

    <div class="container registration">
        </br>
        </br>
        <div class="row">
            <div class="col-sm-8">
                <div>
                    <h1>Registration</h1>
                    </br>
                    </br>

                    <?php
if(isset($_POST['first_name'])){
    //user submitted form
    $q = "INSERT INTO `food`.`users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `area`, `city`, `user_img`, `cover_img`, `added`) VALUES (NULL, '".$_POST['first_name']." ".$_POST['last_name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['phone']."', '".$_POST['address']."', '".$_POST['area']."', '".$_POST['city']."', 'no-pic.jpg', 'cover.jpg', CURRENT_TIMESTAMP);";
    
    
    echo $q;
//    
//    $q = "INSERT INTO `food`.`users` (`id`, `full_name`, `password`, `first_name`, `last_name`, `email`, `img`, `gender`, `address`, `city`, `phone`) VALUES (NULL, '".$_POST['username']."', '".$_POST['password']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['firstname'].".jpg', '".$_POST['gender']."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['phone']."');";

echo $q;
          $submitedform = false;

  if ($conn->query($q) === TRUE) {
      $submitedform = true;
    echo "<h1>YouR Account successfully created!</h1><p>Go <a href='index.php'>Home Page And Login</a></p>";
    echo "<h1>Go to <a href='login.php'>Login Page</a>.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}




?>

                        <form method="post" action="" class="<?php if(isset($submitedform)){ echo "hide";} ?>">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter First Name Here.." class="form-control" name="first_name" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter Last Name Here.." class="form-control" name="last_name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password Here.." class="form-control" required name="password">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" placeholder="Enter Email Address Here.." class="form-control" required name="email">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Gender</label>
                                        </br>
                                        <input type="radio" name="gender" value="male" required> Male
                                        <input type="radio" name="gender" value="female" required> Female
                                    </div>
                                    <div class="col-sm-6 form-group">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>City</label>
                                        <input type="text" placeholder="Enter City Name Here.." class="form-control" name="city">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>State</label>
                                        <select class="form-control" name="state">
                                            <option value='Andaman and Nicobar Islands'>Andaman and Nicobar Islands</option>
                                            <option value='Andhra Pradesh'>Andhra Pradesh</option>
                                            <option value='Arunachal Pradesh'>Arunachal Pradesh</option>
                                            <option value='Assam'>Assam</option>
                                            <option value='Bihar'>Bihar</option>
                                            <option value='Chandigarh'>Chandigarh</option>
                                            <option value='Chhattisgarh'>Chhattisgarh</option>
                                            <option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
                                            <option value='Daman and Diu'>Daman and Diu</option>
                                            <option value='Delhi'>Delhi</option>
                                            <option value='Goa'>Goa</option>
                                            <option value='Gujarat'>Gujarat</option>
                                            <option value='Haryana'>Haryana</option>
                                            <option value='Himachal Pradesh'>Himachal Pradesh</option>
                                            <option value='Jammu and Kashmir'>Jammu and Kashmir</option>
                                            <option value='Jharkhand'>Jharkhand</option>
                                            <option value='Karnataka'>Karnataka</option>
                                            <option value='Kerala'>Kerala</option>
                                            <option value='Lakshadweep'>Lakshadweep</option>
                                            <option value='Madhya Pradesh'>Madhya Pradesh</option>
                                            <option value='Maharashtra'>Maharashtra</option>
                                            <option value='Manipur'>Manipur</option>
                                            <option value='Meghalaya'>Meghalaya</option>
                                            <option value='Mizoram'>Mizoram</option>
                                            <option value='Nagaland'>Nagaland</option>
                                            <option value='Odisha'>Odisha</option>
                                            <option value='Puducherry'>Puducherry</option>
                                            <option value='Punjab'>Punjab</option>
                                            <option value='Rajasthan'>Rajasthan</option>
                                            <option value='Sikkim'>Sikkim</option>
                                            <option value='Tamil Nadu'>Tamil Nadu</option>
                                            <option value='Telengana'>Telengana</option>
                                            <option value='Tripura'>Tripura</option>
                                            <option value='Uttar Pradesh'>Uttar Pradesh</option>
                                            <option value='Uttarakhand'>Uttarakhand</option>
                                            <option value='West Bengal'>West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Zip</label>
                                        <input type="text" placeholder="Enter Zip Code Here.." class="form-control" name="zip">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea placeholder="Enter Address Here.." rows="3" class="form-control" name="address"></textarea>
                                </div>


                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Enter Phone Number Here.." class="form-control" name="phone">
                                </div>

                                </br>
                                </br>
                                <button type="submit" class="btn btn-lg btn-info">Submit</button>
                            </div>
                        </form>
                        </br>
                        </br>

                </div>
            </div>
        </div>

        </br>
        </br>
        </br>
        </br>

    </div>


    <?php
   include('views/footer.php'); 
?>