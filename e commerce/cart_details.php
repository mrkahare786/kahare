
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Shopping Cart</title>
</head>
<body>

<div class="container mt-5">
  <h2>Shopping Cart</h2>
  
  <form id="cartForm">
    <div class="mb-3">
      <label for="product_id" class="form-label">Product ID:</label>
      <input type="text" class="form-control" id="product_id" required>
    </div>
    
    <div class="mb-3">
      <label for="ip_address" class="form-label">IP Address:</label>
      <input type="text" class="form-control" id="ip_address" required>
    </div>
    
    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity:</label>
      <input type="number" class="form-control" id="quantity" required>
    </div>
    
    <button type="button" class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
  </form>
  
  <div id="cartDetails" class="mt-4">
    <!-- Cart details will be displayed here -->
  </div>
</div>

<script>
  // Map product_id to product names
  var productMap = {
    '1': 'Product A',
    '2': 'Product B',
    '3': 'Product C',
    // Add more mappings as needed
  };

  function addToCart() {
    // Get values from the form
    var product_id = document.getElementById('product_id').value;
    var ip_address = document.getElementById('ip_address').value;
    var quantity = document.getElementById('quantity').value;
    
    // Get the product name based on product_id
    var productName = productMap[product_id] || 'Unknown Product';

    // Create a new row in the cart details
    var cartDetails = document.getElementById('cartDetails');
    var newRow = document.createElement('div');
    newRow.className = 'mb-2';
    newRow.innerHTML = '<strong>Product:</strong> ' + productName +
                      ', <strong>IP Address:</strong> ' + ip_address +
                      ', <strong>Quantity:</strong> ' + quantity;
    
    // Append the new row to the cart details
    cartDetails.appendChild(newRow);
    
    // Clear the form fields
    document.getElementById('product_id').value = '';
    document.getElementById('ip_address').value = '';
    document.getElementById('quantity').value = '';
  }
</script>

</body>
</html>
