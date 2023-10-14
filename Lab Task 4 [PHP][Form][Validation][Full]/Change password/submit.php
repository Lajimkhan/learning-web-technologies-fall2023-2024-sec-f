<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $retypePassword = $_POST["retype_password"];

    // Validate form data
    if (validateForm($currentPassword, $newPassword, $retypePassword)) {
        echo "Form submission successful!";
        // Process further actions if needed
    } else {
        echo "Form validation failed!";
    }
}

// Function to validate form data
function validateForm($currentPassword, $newPassword, $retypePassword) {
    // Validation Rules
    // A. New Password should not be the same as the Current Password
    // B. New Password must match with the Retyped Password

    // Rule A
    if ($currentPassword === $newPassword) {
        echo "Error: New Password should not be the same as the Current Password.<br>";
        return false;
    }

    // Rule B
    if ($newPassword !== $retypePassword) {
        echo "Error: New Password must match with the Retyped Password.<br>";
        return false;
    }

    // All validation passed
    return true;
}
?>
