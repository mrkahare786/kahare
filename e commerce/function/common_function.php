<?php
include('./include/connect.php');


//getting products
function getproducts()
{
    global $con ;
    //condtion to check
    if(!isset($_GET['category']) && !isset($_GET['brands'])){

    $select_query = "SELECT * FROM product ORDER BY product_title LIMIT 3 ";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description']; // Corrected variable name
        $product_keyword = $row['product_keyword'];
        $product_img1 = $row['img1']; // Corrected variable name
        $product_price = $row['price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "
        <div class='col-md-4'>
            <div class='card'>
                <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
                </div>
            </div>
        </div>";
    }
}
}
function get_all_products()
{
    global $con ;
    //condtion to check
    if(!isset($_GET['category']) && !isset($_GET['brands'])){

    $select_query = "SELECT * FROM product ORDER BY product_title LIMIT 5 ";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description']; // Corrected variable name
        $product_keyword = $row['product_keyword'];
        $product_img1 = $row['img1'];
        $product_img2 = $row['img2'];
        $product_img3 = $row['img3']; // Corrected variable name
        $product_price = $row['price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "
        <div class='col-md-4'>
            <div class='card'>
                <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
                </div>
            </div>
        </div>
        ";
    }
}
}
function get_unique_brands()
{
    global $con ;
    //condtion to check
    if(isset($_GET['brand']) && !empty($_GET['brand'])){
     
    $brand_id = $_GET['brand'];
    $select_query = "SELECT * FROM product where brand_id=$brand_id ";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo "<h3 class='text-center text-danger'>No stock for this brand</h3>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description']; // Corrected variable name
        $product_keyword = $row['product_keyword'];
        $product_img1 = $row['img1']; // Corrected variable name
        $product_price = $row['price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4'>
            <div class='card'>
                <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
                </div>
            </div>
        </div>";
    }
}
}
//creating unique category function 
function get_unique_category()
{
    global $con ;
    //condtion to check
    if(isset($_GET['category']) && !empty($_GET['category'])){
    $category_id = $_GET['category'];
    $select_query = "SELECT * FROM product where category_id=$category_id ";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo "<h3 class='text-center text-danger'>No stock for this category</h3>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description']; // Corrected variable name
        $product_keyword = $row['product_keyword'];
        $product_img1 = $row['img1']; // Corrected variable name
        $product_price = $row['price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "<div class='col-md-4'>
            <div class='card'>
                <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
                </div>
            </div>
        </div>";
    }
}
}

// creating of function in brands 
function getbrands()
{
    global $con ;
    $select_brand = "SELECT * FROM brand";
    $result_brand = mysqli_query($con, $select_brand);
    $row_data = mysqli_fetch_assoc($result_brand); 
   // echo $row_data['brand_title'];
   while($row_data = mysqli_fetch_assoc($result_brand))
   {
    $brand_title = $row_data['brand_title'];
    $brand_id = $row_data['brand_id'];
    echo "<li class='nav-item'>
    <a class='nav-link text-light' href='index.php?brand=$brand_id'>$brand_title</a>
  </li>";
   }
}
function getcategory()
{
    global $con ;
    $select_category = "SELECT * FROM category";
    $result_category = mysqli_query($con, $select_category);
    
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        
        echo "<li class='nav-item'>
            <a class='nav-link text-light' href='index.php?category=$category_id'>$category_title</a>
        </li>";
    } 
}
//creating unique brand function 


function search_product()
{
    global $con ;
    //condtion to check
    if(isset($_GET['search_data_product'])){
        $search_data_value=$_GET['search_data'];
    $search_query = "SELECT * FROM product where product_keyword like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo "<h3 class='text-center text-danger'>No results match. No products found on this category !</h3>";
    }
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description']; // Corrected variable name
        $product_keyword = $row['product_keyword'];
        $product_img1 = $row['img1']; // Corrected variable name
        $product_price = $row['price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        echo "
        <div class='col-md-4'>
            <div class='card'>
                <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='index.php?product_id=$product_id' class='btn btn-info'>Add to Cart</a> <!-- Corrected class name -->
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a> <!-- Corrected class name -->
                </div>
            </div>
        </div>";
    }
}
}


//view details function 
function view_details()
{
    global $con;
    // Condition to check
    if(isset($_GET['product_id'])) {
        if(!isset($_GET['category']) && !isset($_GET['brands'])) {
            $product_id = $_GET['product_id'];
            $select_query = "SELECT * FROM product where product_id=$product_id ";
            $result_query = mysqli_query($con, $select_query);

            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_keyword = $row['product_keyword'];
                $product_img1 = $row['img1'];
                $product_img2 = $row['img2'];
                $product_img3 = $row['img3'];
                $product_price = $row['price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='./admin/product_img/$product_img1' class='card-img-top' alt='Image 1'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <a href='index.php?product_id=$product_id' class='btn btn-info'>Add to Cart</a>
                            <a href='index.php' class='btn btn-secondary'>Go Home</a>
                        </div>
                    </div>
                </div>
                <div class='col-md-8'>
          <!-- related carts  -->
            <div class='row'>
               <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>Related Products</h4>
               </div>
               <div class='col-md-6'>
                <img src='./admin/product_img/$product_img2' class='card-img-top' alt='$product_title'>
                </div>
            <div class='col-md-6'>
                <img src='./admin/product_img/$product_img3' class='card-img-top' alt='$product_title'>
            </div>
        </div>
    </div>
    ";
            }
        } 
    }
}

// access the ip address
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $get_ip_add  = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $get_ip_add  = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else
     {  
        $get_ip_add = $_SERVER['REMOTE_ADDR'];  
     }  
     return  $get_ip_add ;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;
// cart function
function cart()
{
    if(isset($_GET['add_to_cart']))
    {
        global $con;
        $get_ip_add = getIPAddress();
        $get_product_id = $_GET['add_to_cart'];
        
        // Fix: Use backticks (`) instead of single quotes (') for table and column names
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address= '$get_ip_add' AND product_id = '$get_product_id'";
        $result_query = mysqli_query($con, $select_query);
        
        // Fix: Check if the query executed successfully before using the result
        if (!$result_query) {
            die("Query failed: " . mysqli_error($con));
        }
        
        // Check for the number of rows
        $num_of_rows = mysqli_num_rows($result_query);
        
        if($num_of_rows > 0)
        {
            echo "<script>alert('This item is already present in the cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else
        {
            // Fix: Use backticks (`) instead of single quotes (') for table name
            $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ('$get_product_id', '$get_ip_add', 0)";
            $result_query = mysqli_query($con, $insert_query);
            
            if ($result_query) {
                echo "<script>alert('Item added to cart')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            } else {
                die("Insertion failed: " . mysqli_error($con));
            }
        }
    }
}

 // function to get cart number 
 function cart_item()
 {
    if(isset($_GET['add_to_cart']))
    {
            global $con;
            $get_ip_add = getIPAddress();
            $get_product_id=$_GET['add_to_cart'];
            $select_query= "SELECT * FROM cart_details WHERE ip_address= '$get_ip_add' AND product_id = '$get_product_id'";
            $result_query = mysqli_query($con, $select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows>0)
            {
                echo "<script>alert('this item already present inside the cart')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
    
    else
        {
           $insert_query="INSERT INTO cart_details(product_id,ip_address,quantity) values 
            ( $get_product_id,$get_ip_add,0) ";
            $result_query = mysqli_query($con, $insert_query);
             echo "<script>alert('Item added to cart')</script>";
            echo "<script>window.open('index.php','_self')</script>";
          }
        }
    }
// total cart price
function total_cart_price()
{
    global $con ;
    $get_ip_add = getIPAddress();
    $total_price=0;
    $cart_query="SELECT * FROM cart_details WHERE ip_address= '$get_ip_add'";

    $get_product_id=$_GET['add_to_cart'];
    $select_query= "SELECT * FROM cart_details WHERE ip_address= '$get_ip_add' AND product_id = $get_product_id";
    $result = mysqli_query($con, $cart_query);
    //$num_of_rows=mysqli_num_rows($result);
    while($row=mysqli_fetch_array($result)){
        $product_id = $row['product_id'];
        $select_products = "SELECT * FROM 'product' where product_id='$product_id' ";
        $result_products = mysqli_query($con, $select_products);
        while($row_products_price=mysqli_fetch_array($result_products)){
            $product_price=array($row_products_price['product_price']);
            $product_values=array_sum($product_price);
            $total_price+=$product_values;
        }

    }
    echo $total_price;
}

 
?>