<?php
include('config/db.php');
include('config/auth.php');
 include('views/head.php');
 include('views/header.php');
 include('views/banner.php');

if(isset($_GET['search'])){
    //user searched for something 
    // that means search.php?search=test and search is set to something, in this case it's test.
    $q = "SELECT * FROM restaurants WHERE name LIKE '%".$_GET['search']."%'";
    //echo $q;
    $result = $conn->query($q);
}else{
    
}

?>

<div class="container search-page">
   <?php
    while($row = $result->fetch_assoc()) {
    ?>
    <div class="row">
        <div class="col-md-8 well">
            <div>
                <a href="restaurant.php?id=<?php echo $row['id'];?>"><h2><?php echo $row['name'];?></h2></a>
                <p><?php echo $row['area'];?> | <?php echo $row['address'];?></p>
                <button class="btn btn-success"><strong><?php echo $row['rating'];?></strong></button>
            </div>
        </div>
    </div>
<?php
    }
?>
    
</div>



	


<?php
//include('views/cart.php');
include('views/footer.php');
?>