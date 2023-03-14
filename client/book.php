<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//session_start();
//error_reporting(0);
include"login/server.php";
$link = mysqli_connect("localhost", "root", "", "royal_event");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if (isset($_POST['addbooking'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $eventdate = $_POST['eventdate'];
    $starttime = $_POST['est'];
    $endtime = $_POST['eetime'];
    $vaddress=$_POST['address'];
    $eventtype=$_POST['eventtype'];
    $addinfo=$_POST['info'];
    $bookingid=mt_rand(100000000, 999999999);

    //code to get index
    // Define array to store data
    $data = array();
                                                                                            
    // Execute SELECT query
    $result = $link->query("SELECT ServiceName from   tblservice");

            // Check if query was successful
    if ($result) {
        // Loop through result set and store data in array
        while ($row = $result->fetch_assoc()) {
        $data[] = $row['ServiceName'];
        }
    } else {
        echo "Error: " . $link->error;
    }

      // Retrieve selected value from form data
    $selected_value = $_POST['service'];
    

    
    // Get index of selected value
    $ind = array_search($selected_value, $data);
    $index=$ind+1;

    // Attempt insert query execution
    $sql = "INSERT INTO tblbooking(BookingID, ServiceID,Name,MobileNumber, Email, EventDate, EventStartingtime,EventEndingtime,VenueAddress, EventType,AdditionalInformation,user) VALUES (' $bookingid','$index','$name','$contact', '$email', '$eventdate', '$starttime', '$endtime','$vaddress','$eventtype','$addinfo','$_SESSION[user]')";
    if(mysqli_query($link, $sql)){
        echo "<script>alert('Booking information Successful'); window.location.href='pay/index.php';</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
}

?>