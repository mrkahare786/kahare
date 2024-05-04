
<?php
include('../include/connect.php');

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords']; // Correct variable name
    $product_category = $_POST['category_id'];
    $product_brand = $_POST['brand_id']; // Correct variable name
    $product_price = $_POST['price'];
    $product_status = 'true';
     // Correct variable name

    // Correct destination directory for uploaded files
$upload_dir = './product_img/';

// Update the destination paths without including the temporary file paths
$product_img1 = $_FILES['product_img1']['name'];
$product_img2 = $_FILES['product_img2']['name'];
$product_img3 = $_FILES['product_img3']['name'];

$product_img1_destination = $upload_dir . $product_img1;
$product_img2_destination = $upload_dir . $product_img2;
$product_img3_destination = $upload_dir . $product_img3;

// Move uploaded files to the correct destination
move_uploaded_file($_FILES['product_img1']['tmp_name'], $product_img1_destination);
move_uploaded_file($_FILES['product_img2']['tmp_name'], $product_img2_destination);
move_uploaded_file($_FILES['product_img3']['tmp_name'], $product_img3_destination);

       

        // Insert data into the database
        $insert_query = "INSERT INTO product (product_title, product_keyword, product_description, category_id, brand_id, img1, img2, 
        img3, price, d, stat) VALUES ('$product_title', '$product_keywords', '$description', '$product_category', '$product_brand',
         '$product_img1', '$product_img2', '$product_img3', '$product_price', NOW(),'$product_status')";

        $res = mysqli_query($con, $insert_query);

        if (!$res) {
            die("Error: " . mysqli_error($con));
        } else {
            echo "<script>alert('Product added');</script>";
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Entry Form</title>
    <!--include css file  -->
    <link rel="stylesheet" href="./style.css">
    <!-- Include Bootstrap CSS -->
   
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- fontawesome link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container-fluid mt-5">
        <h2 class="mb-4 "><b>Product Entry Form</b></h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product_title" class="form-label">Product Title:</label>
                <input type="text" name="product_title" id="product_title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="product_img1" class="form-label">Product Image 1:</label>
                <input type="file" name="product_img1" id="product_img1" class="form-control" required accept="image/*">
            </div>
            <div class="mb-3">
                <label for="product_img2" class="form-label">Product Image 2:</label>
                <input type="file" name="product_img2" id="product_img2" class="form-control" required accept="image/*">
            </div>
            <div class="mb-3">
                <label for="product_img3" class="form-label">Product Image 3:</label>
                <input type="file" name="product_img3" id="product_img3" class="form-control" required accept="image/*">
            </div>

            <div class="mb-3">
                <label for="product_description" class="form-label">Product Description:</label>
                <textarea name="product_description" id="product_description" class="form-control" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="product_keywords" class="form-label">Product Keywords:</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Select Category:</label>
                <select name="category_id" id="category" class="form-select" required>
                    <?php 
                    $select_query="SELECT * FROM category";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                       
                    }
                    ?>  
                </select>
            </div>

            <div class="mb-3">
                <label for "brand" class="form-label">Select Brand:</label>
                <select name="brand_id" id="brand" class="form-select" required>
                <?php 
                    $select_query = "SELECT * FROM brand";
                    $result_query = mysqli_query($con, $select_query);

                    while ($row = mysqli_fetch_assoc($result_query))
                     {
                        $brand_title = $row['brand_title'];
                        $brand_id = $row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                ?>
                </select>
            </div>

            <div class="mb-3">
            <label for="product_price" class="form-label">Product price:</label> 
            <input type="text" name="price" id="" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>
            <div class = "mb-3">
            <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert products"">
            </div>
        </form>
    </div>
    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
