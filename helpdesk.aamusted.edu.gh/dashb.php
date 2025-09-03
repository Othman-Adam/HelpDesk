

 <?php
// config.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_number = $_POST['student_number'];
    $feedback = $_POST['feedback'];

    $sql = "UPDATE tickets SET feedback='$feedback' WHERE id=$student_number";
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: dashb.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css">
    <link rel="icon" href="images/logo.ico">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background: #F6BE00;
            color: #fff;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .navbar .header {
            display: flex;
            align-items: center;
        }

        .navbar .school-logo {
            height: 50px;
            margin-right: 15px;
        }

        .navbar .school-name {
            margin: 0;
        }

        .navbar h1 {
            margin: 0;
            font-size: 1.5em;
        }

        .navbar #logout-btn {
            background-color: #fff;
            color: #881414;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .tab-links {
            display: flex;
            cursor: pointer;
            margin-bottom: 20px;
            border-bottom: 2px solid #881414;
        }

        .tab-links div {
            flex: 1;
            padding: 15px;
            text-align: center;
            background-color: #f1f1f1;
            border-right: 1px solid #ccc;
            border-radius: 5px 5px 0 0;
        }

        .tab-links div:last-child {
            border-right: none;
        }

        .tab-links div.active {
            background-color: #fff;
            border-bottom: 2px solid #007bff;
            font-weight: bold;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .ticket-table {
            margin-top: 20px;
        }

        .ticket-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .ticket-table th, .ticket-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .ticket-table th {
            background-color: #881414;
            color: #fff;
        }

        .ticket-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .ticket-table tr:hover {
            background-color: #f1f1f1;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
        }

        .modal-content h2 {
            margin-top: 0;
        }

        .close-btn {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .tab-links {
                flex-direction: column;
            }

            .tab-links div {
                border-bottom: 1px solid #ccc;
            }

            .tab-links div:last-child {
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="header">
            <div class="logo">
            <img src="images/logo.png" alt="Logo" width="80px" height="80px">
        </div>
                <h1 class="school-name">AAMUSTED</h1>
            </div>
            <h1>ADMIN DASHBOARD</h1>
            <a href="adminLogin.php"><button id="logout-btn">Logout</button></a>
        </nav>

        <!-- Tab Links -->
        <div class="tab-links">
            <div class="tab-link active" data-tab="student-issues">Student Issues</div>
            <div class="tab-link" data-tab="staff-issues">Staff Issues</div>
        </div>

        <!-- Tab Contents -->
        <div id="student-issues" class="tab-content active">
            <h2>Student Issues</h2>
            <section class="ticket-table">
                <table id="student-issues-table">
                    <thead>
                        <tr>
                            <th>Index Number</th>
                            <th>Help Topic</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="student-ticket-list">
                        <?php
                        $sql = "SELECT * FROM tickets";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["student_number"] . "</td>";
                                echo "<td>" . $row["help_topic_id"] . "</td>";
                                echo "<td>" . $row["description"] . "</td>";
                                echo "<td><a href='uploads/" . $row["file_name"] . "'>" . $row["file_name"] . "</a></td>";
                                echo "<td><button onclick='openFeedbackModal(" . $row["id"] . ")'>Provide Feedback</button></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No tickets found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>

        <div id="staff-issues" class="tab-content">
            <h2>Staff Issues</h2>
            <section class="ticket-table">
                <table id="staff-issues-table">
                    <thead>
                        <tr>
                            <th>Staff ID</th>
                            <th>Help Topic</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="staff-ticket-list">
                        <!-- Staff tickets will be dynamically inserted here -->
                    </tbody>
                </table>
            </section>
        </div>
    </div>

   <!-- Feedback Modal -->
<div id="feedback-modal" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <h2>Provide Feedback</h2>
        <form id="feedback-form" method="POST" action="">
            <input type="hidden" id="student-number" name="student_number">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>
            <button type="submit">Send Feedback</button>
        </form>
    </div>
</div>

<script>
    // Assuming you have some way to open the modal and set the student number
    function openFeedbackModal(studentNumber) {
        document.getElementById('student-number').value = studentNumber;
        document.getElementById('feedback-modal').style.display = 'block';
    }

    // Close modal when clicking on the close button
    document.querySelector('.close-btn').addEventListener('click', function() {
        document.getElementById('feedback-modal').style.display = 'none';
    });

    // Close modal when clicking outside of the modal content
    window.addEventListener('click', function(event) {
        if (event.target == document.getElementById('feedback-modal')) {
            document.getElementById('feedback-modal').style.display = 'none';
        }
    });
</script>

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
