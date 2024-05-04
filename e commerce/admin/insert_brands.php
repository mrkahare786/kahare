<!-- <?php
include('../include/connect.php');
if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['cat_title']; // Use the correct form field name
    $select_query = "SELECT * FROM brand WHERE brand_title='$brand_title'"; // Use the correct column name
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Brand is already present')</script>";
    } else {
        $insert_query = "INSERT INTO brand (brand_title) VALUES ('$brand_title')";
        $res = mysqli_query($con, $insert_query);
        if (!$res) {
            die("Error:". mysqli_error($con));
        } else {
            echo "<script>alert('Brand added')</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Brands</h2>
<form method="POST" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert brand" aria-label="Brand" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="form-control bg-info" name="insert_brand" value="Insert Brand">
    </div>
</form> -->
<?php
include('../include/connect.php');
if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title']; // Use the correct form field name
    $select_query = "SELECT * FROM brand WHERE brand_title='$brand_title'"; // Use the correct column name
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Brand is already present')</script>";
    } else {
        $insert_query = "INSERT INTO brand (brand_title) VALUES ('$brand_title')";
        $res = mysqli_query($con, $insert_query);
        if (!$res) {
            die("Error: " . mysqli_error($con));
        } else {
            echo "<script>alert('Brand added')</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Brands</h2>
<form method="POST" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="category" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert Brand">
    </div>
</form>

