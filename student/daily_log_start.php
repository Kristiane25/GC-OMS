<?php

// Function to log OJT session start
function logSessionStart()
{
    // Get the current date and time
    $currentDate = date('Y-m-d');
    $currentTime = date('H:i:s');

    // Log entry format: [Date] [Time] - Log Message
    $logEntry = "[" . $currentDate . "] [" . $currentTime . "] - ";

    // Log your OJT monitoring activities
    $logMessage = "Started OJT session.";
    $logEntry .= $logMessage;

    $con = mysqli_connect('localhost', 'root', '', 'u_reg') or die('Unable To connect');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    session_start();
    $name = $_SESSION['name'];
    $u_id = $_SESSION['u_id'];

    // Prepare the log entry for insertion
    $logEntry = mysqli_real_escape_string($con, $logEntry);
    $name = mysqli_real_escape_string($con, $name);

    $sql = "INSERT INTO log_table (log_entry, u_id, name) VALUES ('$logEntry', '$u_id', '$name')";

    if ($con->query($sql) === TRUE) {
        echo "Log entry stored in the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

logSessionStart();
echo "<script>window.open('index.php','_self')</script>"; 
?>
