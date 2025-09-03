<?php 
session_start(); 
include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: login.php?error=Index Number is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {

        // hashing the password
        $pass = md5($pass);
        

        $sql = "SELECT * FROM users WHERE index_number='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['index_number'] === $uname && $row['password'] === $pass) {
                $_SESSION['index_number'] = $row['index_number'];
                $_SESSION['id'] = $row['id'];

                // Fetch feedback from the 'tickets' table
                $index_number = $row['index_number'];
                $feedback_sql = "SELECT feedback FROM tickets WHERE student_number='$index_number'";
                $feedback_result = mysqli_query($conn, $feedback_sql);

                if (mysqli_num_rows($feedback_result) > 0) {
                    $feedback_row = mysqli_fetch_assoc($feedback_result);
                    $feedback = $feedback_row['feedback'];
                } else {
                    $feedback = "No feedback available.";
                }

                // Redirect to viewTicket.php with feedback
                header("Location: viewTicket.php?id=$index_number");
                exit();
            } else {
                header("Location: login.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect User name or password");
            exit();
        }
    }

} else {
    header("Location: login.php");
    exit();
}
?>
