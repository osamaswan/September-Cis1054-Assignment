<?php 
    if(isset($_GET['ID']))
    require_once "assets/templates/connection.php";
    $ID = mysqli_real_escape_string($connect, $_GET['ID']);
    $query = "SELECT * FROM product WHERE id='$ID' ";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);
    ?>
<?php include "assets/templates/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "assets/templates/header.php" ?>   
</head>
<body>
    <?php include "assets/templates/nav.php" ?>
    <div class="col-md-10">
        <form method="post" action="wishlist.php?action=add&id=<?php echo $row["id"] ?>">
                            <div class="productcontent">
                                <div class="left-side">
                                    <img src ="<?php echo $row["image"];/* print image*/ ?>" class="img-r">
                                </div>
                                <div class="right-side">
                                    <h4 ><?php echo $row["prdname"]; /* output name from database*/ ?></h4>
                                    <h4 ><?php echo $row["price"]; /* output price from database*/ ?></h4>
                                    <h4><?php echo $row["description"]; /*output description*/ ?></h4> 
                                    <h4><?php echo $row["catagoryid"]; ?></h4>
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["prdname"]; ?>">
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                    <input type="submit" name="add to wishlist" style="margin-top: 5px;" class="btn btn-success" value="Add to Wishlist">
                                </div>
                            </div>    
         </form>
    </div>
    <?php include "assets/templates/footer.php" ?>
</body>
</html>
