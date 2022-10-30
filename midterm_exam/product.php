<?php
include 'db_connect.php';
?>
<?php
$sql = "SELECT ProductName, UnitsInStock FROM products where CategoryID=1";
    $result = $conn->query($sql);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
<div class="container" boder='2'>
        
        <table>
            <thead>
                <tr>
                    
                     <td><b> Productname </td></b>
                    <td><b> Units in stock </td></b>
                </tr>
            </thead>
            <?php while($row = $result->fetch_assoc()): 
            ?>
  <tr>
   <td><?php echo $row['ProductName']; ?></td>
   <td><?php echo $row['UnitsInStock']; ?></td>
   </tr>
   <?php endwhile ?>
            </tbody>
        </table>
</body>
</html>