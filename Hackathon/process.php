<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'choice' field is set in the POST data
    if (isset($_POST['choice'])) {
        $selectedChoice = $_POST['choice'];

        // Process the selected choice
        if ($selectedChoice === "option1") {
            // Option 1 is selected, perform an action for Option 1
            header("Location:patient.php");
        } elseif ($selectedChoice === "option2") {
            // Option 2 is selected, perform an action for Option 2
            header("Location:doctor.php");
        } else {
            // Handle an invalid choice
            echo "Invalid choice selected.";
        }
    } else {
        // Handle the case where 'choice' is not set in the POST data
        echo "Please make a selection.";
    }
}
?>