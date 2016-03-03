<?php

include('config/db.php');
include('config/auth.php');
include('views/head.php');
include('views/header.php');



 $q = "SELECT * FROM restaurants WHERE id =".$_GET['id'];
//echo $q;

$result = $conn->query($q);

?>

    <?php
                        while($row = $result->fetch_assoc()) {
                    ?>

        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo-box">
                            <img src="images/food/<?php echo $row['logo_img'];?>" alt="" class="img-responsive img-square">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h1>  <?php echo $row['name'];?></h1>
                            <h3>  <?php echo $row['cuisine'];?></h3>
                            
                            </br>
                            </br>
                            </br>
                            <button class="btn btn-success">Place an Order from here</button>
                            <h5>Rs. 200/- for one person*</h5>
                            
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-right">
                            <div class="btn btn-info btn-not"><h3>Rating : 4.5</h3></div>
                            <div class="star-box">
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star fa-2x"></i>
                                <i class="fa fa-star-half fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="reviews">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <h4> PHONE NUMBER</h4>
                            <h2>080 49653401</h2>
                            <h5 class="text-danger">Table reservation recommended</h5>
                            </br>
                            </br>

                            <h4>ADDRESS</h4>
                            <p>Church Street › 1 A Church street Bangalore opposite starbucks coffee, Church Street, Bangalore 560001</p>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div>
                            <form action="api/post-review.php" method="post">
                                <h5><strong>Write review</strong></h5>
                                <textarea class="form-control" placeholder="Write review here"></textarea>
                                <button class="btn btn-success" id="submitReview">Done</button>

                            </form>
                            
                        </br>
                        </br>
                             <h3>User Reviews </h3>
                             
                             <?php
                            
                            
 $q = "SELECT * FROM reviews WHERE restaurant_id =".$_GET['id'];
//echo $q;

$result = $conn->query($q);

?>

    <?php
                        while($r = $result->fetch_assoc()) {
                            print_r($r);
                    ?>
                             
                            <div class="row review">
                               
                                <div class="col-xs-2">
                                    <img src="images/users/1.jpg" alt="" class="img-responsive img-circle user-img pull pull-left">
                                   
                                </div>
                                <div class="col-xs-6">
                                    </br>
                                     <h5><strong><?php echo $r['']?></strong></h5>
                                     <h6>time of post</h6>
                                </div>
                                <div class="col-xs-4">
                                    <div class="text-right text-warning">
                                       </br>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>
                                RATED   Went there for an office outing...dinner it was! Tough choice it was to choose from an array of restaurants in the church street lane...but we finally zeroed on this one....and we weren't disappointed to say the least. The menu was baffling. The guys and ladies there were quite courteous and prompt. Had paneer pops..chicken spicy meatballs.. Chicken lasagne..blueberry cheesecake. Will surely recommend this one for a pocket friendly hangout place. Will visit again.. Keep up the good work!!
                            </p>
                        </div>
                    </div>
                    <?php
                         // print_r($row);
                        }

                        ?>
                    
                    <div class="col-sm-3">
                        <div>
                            <div class="row well">
                                <div class="col-xs-4">
                                    <img src="images/5p.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="col-xs-8">
                                    <div>
                                        <h4>Name of something</h4>
                                    <button class="btn btn-success">9.2</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php
                         // print_r($row);
                        }

                        ?>




            <?php
    // include('views/cart.php');
     include('views/footer.php');
?>