<?php 

include 'config.php';

if (isset($_POST['email'])) {
     print_r('submit button is set now');
   if (empty($_POST['email'])) {
       echo 'Email not entered';
   } else {
       $email = $_POST['email'];

       // Prepare and bind
       $stmt = $conn->prepare("INSERT INTO subscription_emails (email) VALUES (?)");
       if ($stmt) {
           $stmt->bind_param("s", $email);

           // Execute the statement
           if ($stmt->execute()) {
               echo 'Email subscribed successfully';
           } else {
               echo 'Error: ' . $stmt->error;
           }

           // Close the statement
           $stmt->close();
       } else {
           echo 'Failed to prepare statement: ' . $conn->error;
       }
   }
}
?>