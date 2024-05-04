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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- fontawe-somelink -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
      <!-- container class -->
      <div class="container-xxl p-0">
          <nav class="navbar navbar-expand-lg navbar-light bg-info">
              <div class="container-fluid">
                  <a class="navbar-brand" href="admin/index.php"><img src="./img/soldier.png" alt="issue" class="logo"></a>
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
                        <a class="nav-link" href="#">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Price</a>
                      </li>
                    </ul>
                    <form class="d-flex" action="search_product.php" method="GET">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                      <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                     <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product"> 
                    </form>
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
      <div class="col-md-2 bg-secondary p-0 float-end" >
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
              <a class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php 
              //   $select_brand = "SELECT * FROM brand";
              //   $result_brand = mysqli_query($con, $select_brand);
              //   $row_data = mysqli_fetch_assoc($result_brand); 
              //  // echo $row_data['brand_title'];
              //  while($row_data = mysqli_fetch_assoc($result_brand))
              //  {
              //   $brand_title = $row_data['brand_title'];
              //   $brand_id = $row_data['brand_id'];
              //   echo "<li class='nav-item'>
              //   <a class='nav-link text-light' href='#'>$brand_title</a>
              // </li>";
              //  }
              getbrands();
            ?>
          </ul>
      
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
              <a class="nav-link text-light"><h4>Category</h4></a>
            </li>
            <?php 
               
                // $select_category = "SELECT * FROM category";
                // $result_category = mysqli_query($con, $select_category);
                
                // while ($row_data = mysqli_fetch_assoc($result_category)) {
                //     $category_title = $row_data['category_title'];
                //     $category_id = $row_data['category_id'];
                    
                //     echo "<li class='nav-item'>
                //         <a class='nav-link text-light' href='#'>$category_title</a>
                //     </li>";
                // } 
                getcategory();
               
                ?>
                
            </ul>
       </div>
       <div class="container mt-4">
    <h2>Image Gallery</h2>
    <div class="row">
    <div class="col-md-10">
        <div class="row">
            <?php
            //  $select_query = "SELECT * FROM product ";
            //  $result_query = mysqli_query($con, $select_query);

            //  while ($row = mysqli_fetch_assoc($result_query))
            //   {
            //      $product_id = $row['product_id'];
            //      $product_title = $row['product_title'];
            //      $product_description = $row['product_description']; // Corrected variable name
            //      $product_keyword = $row['product_keyword'];
            //      $product_img1 = $row['img1']; // Corrected variable name
            //      $product_price = $row['price'];
            //      $category_id = $row['category_id'];
            //      $brand_id = $row['brand_id'];
            //      echo "
            //      <div class='col-md-4'>
            //          <div class='card'>
            //              <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
            //              <div class='card-body'>
            //                  <h5 class='card-title'>$product_title</h5>
            //                  <p class='card-text'>$product_description</p>
            //                  <a href='#' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
            //                  <a href='#' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
            //              </div>
            //          </div>
            //      </div>";
            //}
             search_product();
             get_unique_category();
             get_unique_brands();
            ?>
                
        </div>
    </div>
            </div>   
    </div> 
   </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
      crossorigin="anonymous">
      </script>
      
  </body>
</html>