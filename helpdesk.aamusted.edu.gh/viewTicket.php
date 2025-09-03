<?php
session_start();
include "db.php";

// Check if a student number is provided
if (!isset($_GET['id'])) {
    die("No student number provided.");
}

$student_number = htmlspecialchars($_GET['id']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch ticket data
$sql = "SELECT id, student_number, student_email, help_topic_id, department_id, academic_year, semester, description, file_name, created_at, feedback FROM tickets WHERE student_number = '$student_number'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ticket = $result->fetch_assoc();
} else {
    die("No ticket found for this student number.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Response</title>
    <link rel="icon" href="images/logo.ico"/>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            margin-top: 30px;
        }
        header {
            background-color: #650000;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        header nav ul {
            list-style: none;
            padding: 0;
        }
        header nav ul li {
            display: inline;
            margin: 0 10px;
        }
        header nav .btn {
            margin: 0 10px; /* Adjust the margin to leave space between buttons */
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
        }
        .ticket-details h2 {
            margin-top: 0;
        }
        form textarea {
            resize: vertical;
            min-height: 100px;
        }
        .admin-feedback {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            font-size: 1.2em;
        }
        .main-feedback {
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>VIEW RESPONSE</h1>
        <nav class="d-flex justify-content-center" >
            <a class="btn btn-outline-light" href="change-password.php">Change password</a>
            <a class="btn btn-outline-light" href="index.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="ticket-details">
                    <h2>Ticket Details</h2>
                    <p><strong>Ticket ID:</strong> <?php echo $ticket['id']; ?></p>
                    <p><strong>Student Number:</strong> <?php echo $ticket['student_number']; ?></p>
                    <p><strong>Description:</strong> <?php echo $ticket['description']; ?></p>
                    <p><strong>Created At:</strong> <?php echo $ticket['created_at']; ?></p>
                    <div class="admin-feedback">
                        FEEDBACK: <br> <?php echo $ticket['feedback']; ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66af8f6632dca6db2cb9dce6/1i4esgcsp';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</html>



