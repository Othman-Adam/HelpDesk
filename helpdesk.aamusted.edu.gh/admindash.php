<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="#view-tickets">View Tickets</a></li>
                <li><a href="#send-feedback">Send Feedback</a></li>
                <li><a href="#ticket-status">Ticket Status</a></li>
                <li><a href="#categorize-tickets">Categorize Tickets</a></li>
            </ul>
        </aside>
        <main class="main-content">
            <section id="view-tickets">
                <h3>View Tickets</h3>
                <div id="tickets-table"></div>
            </section>
            <section id="send-feedback">
                <h3>Send Feedback</h3>
                <form id="feedback-form">
                    <label for="ticket-id">Ticket ID:</label>
                    <input type="text" id="ticket-id" name="ticket-id" required>
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" required></textarea>
                    <button type="submit">Send Feedback</button>
                </form>
            </section>
            <section id="ticket-status">
                <h3>Ticket Status</h3>
                <div id="status-table"></div>
            </section>
            <section id="categorize-tickets">
                <h3>Categorize Tickets</h3>
                <div id="categories-table"></div>
            </section>
        </main>
    </div>
    <script src="scripts.js"></script>
</body>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    flex-wrap: wrap;
}

.sidebar {
    background-color: #2c3e50;
    color: #ecf0f1;
    padding: 20px;
    width: 250px;
}

.sidebar h2 {
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #ecf0f1;
    text-decoration: none;
}

.main-content {
    flex: 1;
    padding: 20px;
}

.main-content section {
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .sidebar {
        width: 100%;
    }
    .main-content {
        width: 100%;
    }
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    loadTickets();
    loadTicketStatus();
    loadCategories();

    document.getElementById('feedback-form').addEventListener('submit', function (e) {
        e.preventDefault();
        sendFeedback();
    });
});

function loadTickets() {
    // Use AJAX to load tickets from the database and display them
}

function loadTicketStatus() {
    // Use AJAX to load ticket statuses and display them
}

function loadCategories() {
    // Use AJAX to load ticket categories and display them
}

function sendFeedback() {
    // Use AJAX to send feedback to the server
    const ticketId = document.getElementById('ticket-id').value;
    const feedback = document.getElementById('feedback').value;
    
    // Example AJAX call
    fetch('send_feedback.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ ticketId, feedback }),
    })
    .then(response => response.json())
    .then(data => {
        alert('Feedback sent successfully');
        // Optionally reload the tickets or feedback section
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

</script>
</html>
