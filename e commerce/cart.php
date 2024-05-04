<?php
include('include/connect.php');
include('function/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>e commerce</title>
      <!--include css file  -->
      <link rel="stylesheet" href="./style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous">
    <!-- fontawe-somelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .cart_item{
        width: 50px;
        height: 50px;
        object-fit:contain;
      }
    </style>
  </head>
  <body>
      <!-- container class -->
      <div class="container-xxl p-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
              <div class="container-fluid">
                  <a class="navbar-brand" href="admin/index.php"><img src="./images/soldier.png" alt="issue" class="logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="user_area/user_registration.php">Registration</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Price</a>
                      </li>
                    </ul>
                
                    
                  </div>
            </div>
         </nav>
      </div>
      <!-- calling to cart function -->
      <?php
       cart();
       ?>
      <div class="container-xxl p-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-secondary p-*">
                <div class="container-fluid">
                  <p>login</p>

                  <p>welcome guest</p>
                </div>
          </nav>
      </div>
       <div class="container mt-6">
           <h2 class="text-center">Cart Details</h2>
       </div>  
       <div class="container mt-4">
            <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Image</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Operation</th>
                    </tr>
                </thead>
    <tbody>
<!-- php code to display dynamic data -->
<?php
global $con;
$get_ip_add = getIPAddress();
$total_price = 0;
$cart_query = "SELECT * FROM cart_details WHERE ip_address= '$get_ip_add'";
$result = mysqli_query($con, $cart_query);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

while ($row = mysqli_fetch_array($result)) {
    $product_id = $row['product_id'];
    $select_products = "SELECT * FROM product where product_id='$product_id' ";
    $result_products = mysqli_query($con, $select_products);

    if (!$result_products) {
        die("Query failed: " . mysqli_error($con));
    }

    while ($row_products_price = mysqli_fetch_array($result_products)) {
        // Check if the keys exist before accessing them
        if (isset($row_products_price['product_price']) && isset($row_products_price['product_image1'])) {
            $product_price = $row_products_price['product_price'];
            $price_table = $row_products_price['product_price'];
            $product_title = $row_products_price['product_title'];
            $product_image1 = $row_products_price['product_image1'];
            $product_values = $product_price;
            $total_price += $product_values;
            ?>
            <tr>
                <td><?php echo $product_title ?></td>
                <td><img src="./images/<?php echo $product_image1 ?>" alt="Product Image" class="cart_img"></td>
                <td><input type="text" value="1" class="form-input w-50"></td>
                <td><?php echo $price_table ?>/-</td>
                <td colspan="2">
                    <button class="btn btn-primary px-3 ">Update</button><button class="btn btn-primary px-3">Remove</button>
                </td>
            </tr>
            <?php
        }
    }
}
?>

       
        </tr>
    </tbody>
</table>

                <!-- subtotal  -->
                <div class="d-flex">
                  <h4 class="px-3">Subtotal: <strong class="text-info"><?php echo $total_price ?></strong></h4>
                  <a href="index.php"><button class="btn btn-primary px-3 mx-2">Return Home</button></a>
                  <a href="#"><button class="btn btn-primary px-3 mx-2">Checkout</button></a>
                </div>
            </div>
       </div>

   
     <!-- Responsive Footer -->
     <!-- <footer class="fixed-bottom bg-info text-dark p-2 id="footer">
        <div class="container text-center">
            <p>E COMMERCE</p>
        </div>
    </footer> -->
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
      
  </body>
</html>