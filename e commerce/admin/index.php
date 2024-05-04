<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- adding links -->
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous">
    <!-- fontawe-somelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
    
     
     <style>
        .footer{
            position: absolute;
            bottom: 0;
        }
     </style>
</head>
<body>
    <!-- navbar keys -->
    <div class="container fluid p-0 ">
       <nav class="navbar navbar-expand-lg navbar-light bg-info ">
        <div class="container-fluid">
            <img src="../img/soldier.png" alt="issue" class="logo">
            <nav class="navbar navbar-expand-lg">
               <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">welcome guest</a>
                    <p><a href="C:\xampp\htdocs\xyzPHP\e commerce\index.php"> Home</a></p>
                </li>
               </ul> 

            </nav>
        </div>
       </nav> 
       
       <div class="bg-light">
        <h3 class="text-center p-2">MANAGE DETAILS</h3>
       </div>
       <!--third child   -->
       <div class="row">
         <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-5">
                
                <p class="text-light text-center">Admin panel</p>

            </div>
            <div class="button text-center">
                <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert product</a></button>
                <button><a href="#" class="nav-link text-light bg-info my-1">View product</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Category</a></button>

                <button><a href="#" class="nav-link text-light bg-info my-1">View Category</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="#" class="nav-link text-light bg-info my-1">View Brands</a></button>
                
                <button><a href="./user_area/order.php" class="nav-link text-light bg-info my-1">All Order</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Payement</a></button>
                <button><a href="#" class="nav-link text-light bg-info my-1">List User</a></button>
                <button><a href="#" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
         </div>
       </div>
       <!-- four child -->
       <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category']))
        {
            include('insert-category.php');
        }
        if(isset($_GET['insert_brand']))
        {
            include('insert_brands.php');
        }

        ?>

       </div>
       <!-- last child  -->
       <div class="bg-info p-3 text-center footer ">
        <p> Admin Area</p>
       </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</body>
</html>