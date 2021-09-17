<?php require_once "assets/templates/connection.php" ?>
<?php
if (isset($_POST["add"])){
        if (isset($_SESSION["wishlist"])){
            $item_array_id = array_column($_SESSION["wishlist"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["wishlist"]);
                $item_array = array(
                    "product_id" => $_GET["id"],
                    'product_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'product_description' => $_POST["description"],
                    'product_catagory' => $_POST["catagory"],
                    
                );
                $_SESSION["wishlist"][$count] = $item_array;
                echo '<script>window.location="wishlist.php"</script>';
            }else{
                echo '<script>alert(" This product have already been added to the wishlist")</script>';
                echo '<script>window.location="wishlist.php"</script>';
            }
        }else{
            $item_array = array(
                $prdid => $_GET["id"],
                'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_description' => $_POST["description"],
                'product_catagory' => $_POST["catagory"],
            );
            $_SESSION["wishlist"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["wishlist"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["prodlist"][$keys]);
                    echo '<script>alert("Product has been Removed")</script>';
                    echo '<script>window.location="prodlist.php"</script>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include "assets/templates/header.php" ?>
</head>
<body>
    <div style="clear: both">
            <h3>Product List</h3>
            <table class="table table-bordered">
                <?php  if(!empty($_SESSION["wishlist"])){
                    
                            foreach ($_SESSION["wishlist"] as $key => $value) {
                                ?>
                            
                                
                        
                                    <tr>
                                        <td> <?php echo $value["product_id"]; ?> </td>
                                        <td> <?php echo $value["product_name"]; ?> </td>
                                        <td> <?php echo $value["product_price"]; ?> </td>
                                        <td> <?php echo $value["product_description"]; ?> </td>
                                        <td> <?php echo $value["product_catagory"]; ?> </td>
                                        <td><a href="wishlist.php?action=delete&id=<?php echo $value["id"]; ?>"><sp class="text-danger">Remove Item</span></a></td>
                                    </tr> 
                                    <?php 
                                    }
                        }
                            ?> 
            </table> 
            </div> 
    <?php include "assets/templates/footer.php" ?>
</body>
</html>
