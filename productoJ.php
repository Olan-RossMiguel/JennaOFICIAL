<?php

// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'anime_store');

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

// Function to add a new order
function addOrder($customerName, $customerEmail, $orderItems) {
  global $db;

  // Calculate total amount
  $totalAmount = 0;
  foreach ($orderItems as $orderItem) {
    $productId = $orderItem['product_id'];
    $quantity = $orderItem['quantity'];
    $unitPrice = getProductPrice($productId);
    $totalAmount += $quantity * $unitPrice;
  }

  // Insert order into the 'orders' table
  $sql = "INSERT INTO orders (customer_name, customer_email, order_date, total_amount) VALUES (?, ?, NOW(), ?)";
  $stmt = $db->prepare($sql);
  $stmt->bind_param('sss', $customerName, $customerEmail, $totalAmount);
  $stmt->execute();
  $orderId = $stmt->insert_id;

  // Insert order items into the 'order_items' table
  foreach ($orderItems as $orderItem) {
    $productId = $orderItem['product_id'];
    $quantity = $orderItem['quantity'];
    $unitPrice = getProductPrice($productId);
    $sql = "INSERT INTO order_items (order_id, product_id, quantity, unit_price) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('iiii', $orderId, $productId, $quantity, $unitPrice);
    $stmt->execute();
  }

  // Return order ID
  return $orderId;
}

// Function to get product price
function getProductPrice($productId) {
  global $db;

  $sql = "SELECT price FROM products WHERE product_id = ?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param('i', $productId);
  $stmt->execute();
  $stmt->bind_result($price);
  $stmt->fetch();

  return $price;
}

// Example usage
$orderItems = [
  ['product_id' => 1, 'quantity' => 2],
  ['product_id' => 3, 'quantity' => 1],
];

$orderId = addOrder('John Doe', 'johndoe@example.com', $orderItems);
echo "Order created successfully with ID: $orderId";

// Close database connection
$db->close();
