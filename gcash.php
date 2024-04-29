<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $gcashNumber = $_POST["gcash_number"];
    $amount = $_POST["amount"];

    // Perform validation (you might need more thorough validation)
    if (empty($gcashNumber) || empty($amount)) {
        // Handle empty fields
        echo "Please fill out all fields.";
    } else {
        // Process payment (this is just a placeholder)
        // Here you would typically integrate with the GCash API or your payment processor
        // This is just a placeholder response
        // Check if payment is successful
        $paymentSuccessful = true; // Assume payment is successful for demonstration

        if ($paymentSuccessful) {
            // Display success message
            echo "Payment processed successfully!";
            // You can also redirect the user to a thank you page
            // header("Location: thank_you.php");
            // exit();
        } else {
            // Display error message
            echo "Payment failed. Please try again later.";
        }
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: gcash.html");
    exit();
}
?>
