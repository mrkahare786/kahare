<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous">
    <!-- fontawe-somelink -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>User Registration</title>
<!-- </head>
<body>

<div class="container-fluid mt-5">
  <h2>User Registration</h2>
  
  <form action="" methos="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="username" class="form-label">Username:</label>
      <input type="text" class="form-control" id="username" required>
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" required>
    </div>
    
    <div class="mb-3">
      <label for="userImage" class="form-label">User Image:</label>
      <input type="file" class="form-control" id="userImage" accept="image/*">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="password" class="form-control" id="password" required>
    </div>

    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmPassword" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <textarea class="form-control" id="address" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="contact" class="form-label">Contact:</label>
      <input type="tel" class="form-control" id="contact" required>
    </div>

    <button type="button" class="btn btn-primary" onclick="registerUser()">Register</button>
  </form>
  <p>you have already register <a href="user_login.php" class="btn btn-secondary mt-3">Login</a>
</div> -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
              
<div class="container-fluid mt-5">
  <h2 class="card-header bg-primary text-center">User Registration</h2>
  
  <form action="" methos="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="username" class="form-label">Username:</label>
      <input type="text" class="form-control" id="username" required>
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" class="form-control" id="email" required>
    </div>
    
    <div class="mb-3">
      <label for="userImage" class="form-label">User Image:</label>
      <input type="file" class="form-control" id="userImage" accept="image/*">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password:</label>
      <input type="password" class="form-control" id="password" required>
    </div>

    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password:</label>
      <input type="password" class="form-control" id="confirmPassword" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address:</label>
      <textarea class="form-control" id="address" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="contact" class="form-label">Contact:</label>
      <input type="tel" class="form-control" id="contact" required>
    </div>

    <button type="button" class="btn btn-primary" onclick="registerUser()">Register</button>
  </form>
  <p>you have already register <a href="user_login.php" class="btn btn-secondary mt-3">Login</a>
</div>
            </div> 
        </div>
    </div>
</div>
    // Optionally, you can reset the form after registration
    document.getElementById('registrationForm').reset();
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>
</html>
