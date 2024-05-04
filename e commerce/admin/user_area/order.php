<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Order Details</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Customer ID</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Example order data (replace with data fetched from database)
                    $orders = [
                        ['invoice' => 'INV001', 'customer_id' => 'CUST001', 'product_id' => 'PROD001', 'quantity' => 2, 'status' => 'Pending'],
                        ['invoice' => 'INV002', 'customer_id' => 'CUST002', 'product_id' => 'PROD002', 'quantity' => 1, 'status' => 'Shipped'],
                        ['invoice' => 'INV003', 'customer_id' => 'CUST003', 'product_id' => 'PROD003', 'quantity' => 3, 'status' => 'Delivered'],
                    ];

                    // Loop through orders and display each order as a table row
                    foreach ($orders as $order) {
                        echo "<tr>";
                        echo "<td>{$order['invoice']}</td>";
                        echo "<td>{$order['customer_id']}</td>";
                        echo "<td>{$order['product_id']}</td>";
                        echo "<td>{$order['quantity']}</td>";
                        echo "<td>{$order['status']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Bundle JS (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
