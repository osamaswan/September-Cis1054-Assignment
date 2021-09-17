
<?php include "assets/templates/connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "assets/templates/header.php" ?>
</head>
<body>
    <?php include "assets/templates/nav.php" ?>
    <div class="Listcontainer" style="width: 300%">
        <h2>Product List</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC";
            $result = mysqli_query($connect,$query);
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_array($result)){
                    $name = $row['prdname'];
                    $ID = $row['id'];
                
            
        ?>
            <div class="col-md-3">
                <form method="post" action="prodlist.php?action=add&id=<?php echo $row["id"] ?>">
                    <div class="product">
                        <img src ="<?php echo $row["image"];/* print image*/ ?>" class="img-r">
                        <h3 class="product-name"><?php echo "<li><a href='details.php?ID={$row['id']}'>{$name}</a></li>";/*output product name from database */ ?></h3>
                        <h4 class="price"><?php echo $row["price"]; /* output price from database*/ ?></h4>
                        <h4 class="description"><?php echo $row["description"]; /*output description*/ ?></h4> 
                        <h4 class="Catagory"><?php echo $row["catagoryid"];/*since catagory are numbers we need to convert them */ ?></h4>
                        

                    </div>
                </form>
            </div>
            <?php
                }
            }    
            ?>
                         
                        
    </div>
    
    
<?php include "assets/templates/footer.php" ?>
</body>
</html>