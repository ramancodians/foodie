<div class="header">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <a href="index.php"><img src="images/logo.jpg" class="img-responsive" id="logo" alt=""></a>
            </div>
            <?php
if(!isset($_SESSION['isLogged'])){ ?>
                <div class="header-right">
                    <p>Questions? Call us Toll-free!<span>9738570413 </span>
                        <label>(11AM to 11PM)</label>
                    </p>

                </div>
                <?php }else{ ?>
                <div class="user-info pull pull-right">
                    <img class="user-img img-responsive" src="images/users/<?php echo $_SESSION['user']['user_img']; ?>" >
                    <span><?php echo $_SESSION['user']['full_name']?></span>
                    
                    
                </div>
            <?php }
                    ?>
                    <div class="clearfix"></div>
        </div>
    </div>
    <div class="menu-bar">
        <div class="container">
            <div class="top-menu">
                <ul>
                    <li class="active"><a href="index.php" class="scroll">Home</a></li>|
                    <li><a href="popular-restaurents.html">Popular Restaurants</a></li>|
                    <li><a href="order.html">Order</a></li>|
                    <li><a href="contact.html">contact</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="login-section">
                <ul>
                    <?php if(!isset($_SESSION['isLogged'])){echo '<li><a href="login.php">Login</a></li>';}else{
                            echo '<li><a href="logout.php">Logout</a> </li>';
}?> |
                        <li><a href="register.php">Register</a> </li> |
                        <li><a href="#">Help</a></li>
                        <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
