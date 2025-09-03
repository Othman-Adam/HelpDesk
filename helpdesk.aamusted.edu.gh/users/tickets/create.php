<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "helpdesk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_number = $_POST['student_number'];
    $student_email = $_POST['student_email'];
    $help_topic_id = $_POST['help_topic_id'];
    $department_id = isset($_POST['department_id']) ? $_POST['department_id'] : NULL;
    $academic_year = isset($_POST['academic_year']) ? implode(',', $_POST['academic_year']) : NULL;
    $semester = isset($_POST['semester']) ? implode(',', $_POST['semester']) : NULL;
    $description = $_POST['description'];
    $file_name = NULL;

    // Handle file upload
    if (isset($_FILES['file_name']) && $_FILES['file_name']['error'] == UPLOAD_ERR_OK) {
        $file_name = basename($_FILES['file_name']['name']);
        $target_dir = "uploads/";
        $target_file = $target_dir . $file_name;

        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)) {
            echo "The file ". htmlspecialchars($file_name). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO tickets (student_number, student_email, help_topic_id, department_id, academic_year, semester, description, file_name)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $student_number, $student_email, $help_topic_id, $department_id, $academic_year, $semester, $description, $file_name);

    if ($stmt->execute()) {
        echo "Ticket created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>





<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" />
    <link rel="modulepreload" href="../../build/assets/app-aaf8581a.js" />
    <link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" />
    <script type="module" src="../../build/assets/app-aaf8581a.js"></script>    
    <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" />
    <link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" />

    <title>AAMUSTED Help Desk</title>
    <link rel="icon" href="C:\Users\Zahra\Desktop\Project Work\HelpDesk\helpdesk.aamusted.edu.gh\images\logo.ico"/>
</head>
<body>
 <script>   
const form = document.getElementById('myForm');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  // Basic input validation (add more checks as needed)
  const studentNumber = document.getElementById('student_number').value;
  const studentEmail = document.getElementById('student_email').value;
  const helpTopicId = document.getElementById('help_topic_id').value;

  if (studentNumber === '' || studentEmail === '' || helpTopicId === '') {
    alert('Please fill in all required fields');
    return;
  }

  // Add more validation checks as needed

  // If validation passes, submit the form
  form.submit();
});
</script>

    <script>
        setTimeout(function() {$('.alert').fadeOut('fast');}, 6000);
    </script>
</body>


</html>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../../../unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link rel="stylesheet" href="../../style.css" type="text/css">
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="../../js/jquery.min.html"></script>
    <script src="../../js/Chart.min.html"></script>
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
    <link href="../../../fonts.googleapis.com/css2ed52.css?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" /><link rel="modulepreload" href="../../build/assets/app-aaf8581a.js" /><link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" /><script type="module" src="../../build/assets/app-aaf8581a.js"></script>    <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" /><link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" />    <link href="../../../cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="../../../cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../../../cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
<link href="../../../cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />

    <title>AAMUSTED - Create Ticket</title>
    <link rel="icon" href="helpdesk.aamusted.edu.gh/images/logo.ico"/>
</head>
<body>
    <div class="font-inter bg-white"><!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
      <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
      <link href="../../../fonts.googleapis.com/css2f099.css?family=Inter:wght@400;500&amp;display=swap" rel="stylesheet">
      <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" /><link rel="modulepreload" href="../../build/assets/app-aaf8581a.js" /><link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" /><script type="module" src="../../build/assets/app-aaf8581a.js"></script>      <link rel="preload" as="style" href="../../build/assets/app-9f73a0eb.css" /><link rel="stylesheet" href="../../build/assets/app-9f73a0eb.css" />  </head>
  <body>
    <nav class="fixed w-full z-20">
      <div class="border-t-4 border-t-red-600 flex justify-end pr-2">
        
      </div>
      <div class="">
      <div style="background: linear-gradient(to bottom, #800000, #4B0000, #000000); opacity: 0.8; width: 100%;" class="flex flex-wrap items-center justify-between px-4 py-2">
          <div class="inline-flex">
            <a href="../../index.php" class="flex items-center border-r-2 border-gray-200">
              <img src="../../images/logo.png" class="h-10 px-2" alt="AAMUSTED Logo" />
            </a>
            <div class='font-playfair text-white px-2'>
              <p class='text-lg font-semibold uppercase -mb-1'>AAMUSTED Help Desk</p>
              <p class='text-sm'>Directorate of ICT Services</p>
            </div>
          </div>
          <div class="hidden lg:block w-auto mr-6 self-center" id="navbar-default">
            <ul class='flex font-playfair space-x-6 text-white text-sm font-semibold'>
             
              <a href="../../index.php" class="relative flex group self-center">
                <!-- <div class="absolute bg-yellow-200 self-center opacity-0 transition-opacity group-hover:opacity-80 inline-flex -ml-2"></div> -->
                <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-down-fill" viewBox="0 0 16 16">
                    <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7m.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.707l-.646.646V10.5a.5.5 0 0 0-1 0v2.793l-.646-.646a.5.5 0 0 0-.708.707l1.5 1.5a.5.5 0 0 0 .708 0"/>
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                    <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293z"/>
                  </svg>
                  <p class="font-medium">Home</p>
                </li>
              </a>
             <!--  <button class="relative flex group self-end upload-modal-button" data-modal="uploadModal">
                <div class="absolute bg-yellow-100 self-center opacity-0 rounded-full h-6 w-6 transition-opacity group-hover:opacity-80 inline-flex -ml-2"></div>
                <li class="group-hover:text-yellow-300 text-white">Staff Page</li>
              </button> -->

              <!-- Hide button when on Staff Page -->
                             
                
                <a href="../faqs/create.php" class="relative flex group items-center justify-center">
                  <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                    </svg>
                    <p class="font-medium">FAQs</p>
                  </li>
                </a>
                                                  <a href="../../login.php" class="relative flex group text-blue-600 ">
                    <!-- <div class="absolute bg-yellow-100 opacity-0 rounded-full h-6 w-6 transition-opacity group-hover:opacity-80 inline-flex self-center -ml-2"></div> -->
                    <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
                      </svg>
                      <p class="font-medium">Login</p>
                    </li>
                  </a>
                                  
                  <a href="../../adminLogin.php" class="relative flex group text-blue-600 ">
                    <!-- <div class="absolute bg-yellow-100 opacity-0 rounded-full h-6 w-6 transition-opacity group-hover:opacity-80 inline-flex self-center -ml-2"></div> -->
                    <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                      <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                    </svg>
                      <p class="font-medium">Admin</p>
                    </li>
                  </a>
                            <!-- Show Staff Login Button -->
                            <!-- End of Staff Login -->
              
              
            </ul>
          </div>
          <button id="menuIcon" type="button" class="lg:hidden items-center p-2 w-10 h-10 text-sm text-gray-100 hover:text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list w-6 h-6" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </button>
        </div>
        
        <div id="sideBar" class="fixed z-40 hidden transform transition-transform duration-700 ease-in-out px-2 min-h-screen bg-gray-900 w-full top-0 text-gray-400 right-0" id="navbar-default">
          <div class="float-right mt-4 mr-2 cursor-pointer hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" id="closeIcon" class="bi bi-x-square w-6 h-6" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
          
          <ul class="mt-32 space-y-2">
            <li class="border-b border-gray-800">
                <a href="../../index.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-gear w-5 h-5" viewBox="0 0 16 16">
                  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                  <path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.044c-.613-.181-.613-1.049 0-1.23l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                </svg>
                <span class="ml-3 font-semibold">Home</span>
                </a>
            </li>
           <!--  <li class="border-b border-gray-800">
                <a href="https://helpdesk.aamusted.gh/studentPage" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people w-5 h-5" viewBox="0 0 16 16">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                </svg>
                <span class="ml-3 font-semibold">Student Page</span>
                </a>
            </li> -->
            <!-- <li class="border-b border-gray-800">
                <button type="button" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group upload-modal-button" data-modal="uploadModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-gear w-5 h-5" viewBox="0 0 16 16">
                  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                </svg>
                <span class="ml-3 font-semibold">Staff Page</span>
                </button>
            </li> -->
            <li class="border-b border-gray-800">
                <a href="../../index.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon w-5 h-5" viewBox="0 0 16 16">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
              </svg>
                <span class="ml-3 font-semibold">Report Incident</span>
                </a>
            </li>
           
            <li class="border-b border-gray-800">
                <a href="../faqs/create.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle w-5 h-5" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                </svg>
                <span class="ml-3 font-semibold">FAQs</span>
                </a>
            </li>
            <li class="border-b border-gray-800">
                <a href="../../adminLogin.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-left w-6 h-6" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                  </svg>
                  <span class="ml-3 font-semibold">Admin Login</span>
                </a>
            </li>
            
          </ul>
        </div>
      </div>
            <!-- <div class="lg:flex hidden h-8">
        <div class="bg-yellow-400 w-1/3 px-6">
          <ul class="flex text-sm space-x-6 mt-1 float-right font-semibold text-blue-900">
                                
          <a href="https://helpdesk.aamusted.edu.gh/gradLogin.php"><li class="hover:underline">Turnitin</li></a>
          <a href="https://helpdesk.aamusted.edu.gh/tickets/create.php"><li class="hover:underline">Issue Ticket</li></a>
          <a href="login.php"><li class="hover:underline">View Tickets</li></a>
                                </ul>
          
        </div> -->
        <div class="w-10 overflow-hidden inline-block">
          <div class=" h-16 bg-yellow-400 rotate-45 transform origin-top-right"></div>
        </div>
      </div>
            
    </nav>
    <div id="uploadModal" class="upload-modal flex z-10 hidden fixed backdrop-blur-sm items-center shadow-lg justify-center h-screen w-screen top-0 left-0 bg-black bg-opacity-60">
        <div class="bg-white mx-auto w-full md:w-2/5">
            <div class="flex justify-between bg-blue-950 text-white  py-3 px-4 mb-5">
              <p class="uppercase font-medium">Enter your Staff ID</p>
            </div>
            <form action="https://helpdesk.aamusted.edu.gh/staffPageLogin" method="POST" class="px-5">
                <input type="hidden" name="_token" value="z1fA95asJGAE0y1mYVEtLL78eGRNnAISdQ8lLKLE">
                <div class="relative z-0 mb-6">
                    <input type="text" name="staff_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Staff ID</label>
                                    </div>
                <div class="flex justify-end mt-2 gap-x-2 mb-4">
                    <button type="button" class="upload-modal-close text-sm text-gray-500 border border-gray-400 px-4 py-2 uppercase">Cancel</button>
                    <button type="submit" class="text-sm bg-blue-950 text-white hover:bg-blue-800 px-6 py-2 uppercase">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div id="uploadModal" class="upload-modal flex hidden z-10 fixed backdrop-blur-sm items-center shadow-lg px-2 justify-center h-screen w-screen top-0 left-0 bg-black bg-opacity-60">
        <div class="bg-white mx-auto w-full md:w-2/5">
            <div class="flex justify-between bg-blue-950 text-white  py-3 px-4 mb-5">
                <p class="uppercase font-semibold">Enter your Staff ID</p>
            </div>
            <form action="https://helpdesk.aamusted.edu.gh/staffPageLogin" method="POST" class="px-5">
                <input type="hidden" name="_token" value="z1fA95asJGAE0y1mYVEtLL78eGRNnAISdQ8lLKLE">
                <div class="relative z-0 mb-6">
                    <input type="text" name="staff_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Staff ID</label>
                                    </div>
                <div class="flex justify-end mt-2 gap-x-2 mb-4">
                    <button type="button" class="upload-modal-close text-sm text-gray-500 border border-gray-400 px-4 py-2 uppercase">Cancel</button>
                    <button type="submit" class="text-sm bg-blue-950 text-white hover:bg-blue-800 px-6 py-2 uppercase">Submit</button>
                </div>
            </form>
        </div>
    </div> 
  </body>
</html>

<script>
  var menuIcon = document.getElementById('menuIcon');
  var closeIcon = document.getElementById('closeIcon');
  var sideBar = document.getElementById('sideBar');

  menuIcon.addEventListener('click', function() {
    sideBar.classList.toggle('hidden');
    menuIcon.style.display = "none";
    closeIcon.style.display = "block";
  });
  closeIcon.addEventListener('click', function() {
    sideBar.classList.toggle('hidden');
    menuIcon.style.display = "block";
    closeIcon.style.display = "none";

  });
</script>
<div class="bg-bgCream flex flex-col min-h-screen md:pb-0 pb-24 px-0 pt-20 lg:pt-24">
    <main class="w-full md:w-2/3 lg:w-1/2 xl:mx-auto my-4 mx-1 shadow-lg shadow-gray-400 bg-white">
        <div class="bg-red-600 text-white mb-6 py-2 px-4">
            <p class="text-xl font-semibold text-blueBlack uppercase">Issue a new ticket</p>
            <p class="text-xs">Please fill in the form below to open a new ticket.</p>
        </div>

        <form class="w-full px-1 md:px-8 pb-12 bg-white" method="POST" action="" enctype="multipart/form-data" onsubmit="submitButton.disabled = true; return true;">
            <input type="hidden" name="_token" value="z1fA95asJGAE0y1mYVEtLL78eGRNnAISdQ8lLKLE">
            <div class="relative mb-4">
                <input type="text" id="student_number" name="student_number" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border border-blue-200 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Index Number</label>
                            </div>
                            <input type="hidden" name="_token" value="z1fA95asJGAE0y1mYVEtLL78eGRNnAISdQ8lLKLE">
            <div class="relative mb-4">
                <input type="text" id="student_email" name="student_email" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent border border-blue-200 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="default_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 start-1 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email Address</label>
                            </div>
            <div class="relative mb-4">
                <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="help_topic_id" name="help_topic_id" required>
                    <option value="" selected>Select help topic</option>
                                        <option value="0c0f73be-4eb2-4135-a251-b09bdce04dd4">WiFi Connectivity</option>
                                        <option value="122921aa-4cf9-4b99-889c-687f05d4a910">Course Registration</option>
                                        <option value="16e33bda-9797-4692-a1c6-a7a6a538b1e1">School fees</option>
                                        <option value="2f8f1d1d-46b2-4139-af2c-f0dbac2d9394">Missing Results</option>
                                        <option value="5373f323-288a-4a7e-836c-e53f7d12d527">Student Portal</option>
                                        <option value="55e015d1-e81d-4349-82bb-fdeab3ed060e">V-Class</option>
                                        <option value="6873d906-2d8b-44b7-b973-8ccbf9135be0">Finance related issues</option>
                                        <option value="6d847614-5b07-4ec0-b985-ef6ba6b0d8a1">Graduation</option>
                                        <option value="84f15731-53fb-4a0c-b4d9-f72cbb3ce1c6">Library</option>
                                        <option value="926180d8-81b7-430a-93eb-090c793fbbe5">Medical Examination</option>
                                        <option value="bc98950b-2c27-40f5-88da-555cc8ff768a">Credentials reset</option>
                                        <option value="d4504a65-c437-4463-bce0-35ef15028737">Academic Results</option>
                                        <option value="ddb8b0b8-111a-4fc9-addc-0ff91852cf4f">Others</option>
                                        <option value="e9d21055-797b-4314-bb84-0161e4527c99">Transcript and Payments</option>
                                        <option value="f4f3f807-bfb6-40e3-8a62-e3a9abb6dd6c">Student Email</option>
                                        <option value="f4f3f807-bfb6-40e3-8a62-e3a9abb6dd6c">Admission</option>
                                    </select>
                            </div>
            <div class="relative mb-4" id="department_dropdown" style="display:none;">
                <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="department" name="department_id">
                    <option value="" selected>Select department</option>
                                        <option value="b137f3fc-9ba5-43d6-9bea-3d03c45ccee7">Department of Information Technology Education</option>
                                        <option value="641232e2-113f-4761-b724-9b97d7cb8999">Department Of  Mathematics Education</option>
                                        <option value="4fdce132-3b7d-4f38-98c0-815c9e9d1669">Department Of Accounting Studies</option>
                                        <option value="3bcecb00-12f1-473f-834b-b46d03976482">Department Of Management Studies</option>
                                        <option value="6eea6ce2-8042-41bc-8cd9-ef05beff48c7">Department Of Construction Technology and Management Education</option>
                                        <option value="c02f51ef-56b5-457b-b7ef-901c0c92643c">Department Of Wood Science and Technology Education</option>
                                        <option value="ccc8edda-6c2d-44ea-a260-b0d318b6cdbf">Department Of Architecture and Civil Engineering</option>
                                        <option value="2ac3ebed-71eb-4136-abe0-74a12520971e">Department Of Automotive & Mechnical Technology Education</option>
                                        <option value="8b5c765a-92a7-4f3f-9ff9-6d7d06490501">Department Of Electrical & Electronic Technology Education</option>
                                        <option value="bc5b6624-6fe1-4577-b5c9-96e7ec449272">Department Of Catering & Hospitality Education</option>
                                        <option value="28a36686-34ef-4a02-8956-c7675193aea5">Department Of Fashion & Textiles Design Education</option>
                                        <option value="ca0f9c72-a7b4-47fe-a22a-1d9344a250d4">Department Of Languages Education</option>
                                        <option value="2900f166-3afa-49cc-9a93-e1c50d12bd8e">Department of Interdisciplinary Studies</option>
                                        <option value="2152ecec-d910-4758-8505-945d697387ba">Department Of Centre for Competency-Based Training & Research (CCBTR)</option>
                                        <option value="f9bf28d8-1086-4db5-b3dc-746a47aa1af2">Department of Development Communication</option>
                                        <option value="a6937736-439c-40e6-a3ea-3acb0c1546a7">Department Of Economics Education</option>
                                        
                                    </select>
                            </div>

            <div id="semester_sets_container">
                <div class="semester-set">
                    <div class="flex space-x-2">
                        <div class="relative mb-4 w-full" id="academic_year_container" style="display:none;">
                            <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="academic_year" name="academic_year[]">
                                <option value="" selected>Select Academic Year of Missing Results</option>
                                <option value="2021/2022">2019/2020</option>
                                <option value="2022/2023">2020/2021</option>
                                <option value="2023/2024">2022/2023</option>
                                <option value="2023/2024">2023/2024</option>
                                <option value="2023/2024">2024/2025</option>
                            </select>
                        </div>
                        <div class="relative mb-4 w-full" id="semester_container" style="display:none;">
                            <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="semester" name="semester[]">
                                <option value="" selected>Select Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                    </div>
                    <table class="table w-full overflow-auto bg-blue-400 -mt-4 mb-5" id="course_table" style="display:none;">
                        <thead class="bg-gray-900 text-white uppercase text-sm">
                            <tr>
                                <td width="10%" style="font-size: 13px" class="py-3 px-2 border-r border-gray-600">Course Code</td>
                                <td style="font-size: 13px" class="py-3 px-5 border-r border-gray-600">Course Title</td>
                                <td style="font-size: 13px" width="20%" class="py-3 px-2 border-r border-gray-600">Course Type</td>
                                <td width="10%">
                                    <svg id="addInitBtn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-auto w-6 h-6 cursor-pointer">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                    </svg>
                                </td>
                            </tr>
                        </thead>
                        <tbody id="InputContainer">
                            <tr>
                                <td><input id=course_code name="course_code[0][]" class="px-2 block appearance-none w-16 xl:w-24 py-2 mx-1 xl:mx-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                                <td><input id=course_title name="course_title[0][]" class="px-2 block w-full appearance-none py-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                                <td><select id="course_type" name="course_type[0][]" class="px-2 block appearance-none w-20 xl:w-28 py-2 my-1 xl:ml-2 text-base leading-normal bg-gray-50 text-gray-800 border border-gray-200 rounded"><option value="" selected disabled>Select Type</option><option value="Major">Liberal Studies</option><option value="Minor">African Studies</option><option value="Education">Education</option><option value="General">Departmental</option></select></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="relative" id="Description">
                <p class="mb-1 font-medium text-sm">Describe your problem</p>
                <textarea minlength="5" maxlength="500" name="description" class="w-full focus:border-blue-600 focus:outline-none px-3 text-sm md:px-5 py-3 mb-5 border border-blue-200" rows="3" placeholder="Eg. what do I do when I get invalid login...."></textarea>
                            </div>
            <div class="relative mb-4 -mt-1" id="FileAttach">
                <label class="block mb-1 text-sm font-medium text-gray-900" for="file_input">Attach a file (optional)</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none" name="file_name" type="file">
            </div>
            <div class="float-right flex gap-x-1">
                <a href="../../studentPage.php" class="border border-blue-700 py-2 px-4 hover:bg-blue-100 text-sm text-blue-700 uppercase">Cancel</a>
                <button type="button" id="add_new_semester_button" class="bg-blue-700 text-white py-2 px-4 hover:bg-blue-800 text-sm uppercase" hidden>Add Semester</button>
                <button type="submit" id="submitButton" name="submitButton" class="bg-blue-700 text-white py-2 px-4 hover:bg-blue-800 text-sm uppercase">Send</button>
            </div>
        </form>

    



        <script>
            document.addEventListener('DOMContentLoaded', function() {

            const helpTopicSelect = document.getElementById('help_topic_id');
            const academicYearContainer = document.getElementById('academic_year_container');
            const semesterContainer = document.getElementById('semester_container');
            const courseTable = document.getElementById('course_table');
            const addBtn = document.getElementById('addBtn');
            const inputContainer = document.getElementById('InputContainer');
            const fileAttach = document.getElementById('FileAttach');
            const description = document.getElementById('Description');
            const addNewSemesterButton = document.getElementById('add_new_semester_button');
            const courseType = document.getElementById('course_type');
            const courseCode = document.getElementById('course_code');
            const courseTitle = document.getElementById('course_title');
            const formContainer = document.getElementById('form-container');
            let semesterIndex = 1;

            helpTopicSelect.addEventListener('change', function() {
                const selectedOption = helpTopicSelect.options[helpTopicSelect.selectedIndex].text;
                const isMissingResults = selectedOption === 'Missing Results';

                academicYearContainer.style.display = isMissingResults ? 'block' : 'none';
                semesterContainer.style.display = isMissingResults ? 'block' : 'none';
                courseTable.style.display = isMissingResults ? 'block' : 'none';
                addNewSemesterButton.style.display = isMissingResults ? 'block' : 'none';
                fileAttach.style.display = isMissingResults ? 'none' : 'block';
                description.style.display = isMissingResults ? 'none' : 'block';

                if (isMissingResults) {
                    courseCode.setAttribute('required', 'required');
                    courseType.setAttribute('required', 'required');
                    courseTitle.setAttribute('required', 'required');
                    academicYearContainer.setAttribute('required', 'required');
                    semesterContainer.setAttribute('required', 'required');
                    descriptionTextarea.removeAttribute('required');
                } else {
                    descriptionTextarea.setAttribute('required', 'required');
                    courseTitle.removeAttribute('required');
                    courseType.removeAttribute('required');
                    courseCode.removeAttribute('required');
                    academicYearContainer.removeAttribute('required');
                    semesterContainer.removeAttribute('required');
                }

            });

            
            addNewSemesterButton.addEventListener('click', function() {
                const formContainer = document.getElementById('semester_sets_container');
                const newSemesterSet = document.createElement('div');
                newSemesterSet.className = 'semester-set';
                newSemesterSet.innerHTML = `
                    <div class="flex space-x-2">
                        <div class="relative mb-4 w-full">
                            <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="academic_year[]" required>
                                <option value="" selected>Select Academic Year of Missing Results</option>
                                <option value="2019/2020">2021/2022</option>
                                <option value="2020/2021">2022/2023</option>
                                <option value="2021/2022">2023/2024</option>
                                <option value="2022/2023">2023/2024</option>
                                <option value="2023/2024">2023/2024</option>
                                <option value="2024/2025">2023/2024</option>
                            </select>
                        </div>
                        <div class="relative mb-4 w-full">
                            <select class="form-select block w-full px-3 mb-3 py-3 border border-blue-200 text-sm text-gray-700 bg-white bg-clip-padding bg-no-repeat transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="semester[]" required>
                                <option value="" selected>Select Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                    </div>
                    <table class="table w-full overflow-auto bg-blue-400 -mt-4 mb-5">
                        <thead class="bg-gray-900 text-white uppercase text-sm">
                            <tr>
                                <td width="10%" style="font-size: 13px" class="py-3 px-2 border-r border-gray-600">Course Code</td>
                                <td style="font-size: 13px" class="py-3 px-5 border-r border-gray-600">Course Title</td>
                                <td style="font-size: 13px" width="20%" class="py-3 px-2 border-r border-gray-600">Course Type</td>
                                <td width="10%">
                                    <svg class="add-course-btn mx-auto w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
                                    </svg>
                                </td>
                            </tr>
                        </thead>
                        <tbody class="InputContainer-${semesterIndex}">
                            <tr>
                                <td><input required name="course_code[${semesterIndex}][]" class="px-2 block appearance-none w-16 xl:w-24 py-2 mx-1 xl:mx-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                                <td><input required name="course_title[${semesterIndex}][]" class="px-2 block w-full appearance-none py-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                                <td><select required name="course_type[${semesterIndex}][]" class="px-2 block appearance-none w-20 xl:w-28 py-2 my-1 ml-1 xl:ml-2 text-base leading-normal bg-gray-50 text-gray-800 border border-gray-200 rounded"><option value="" selected disabled>Select Type</option><option value="Major">Major</option><option value="Minor">Minor</option><option value="Education">Education</option><option value="General">General</option></select></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                `;
                formContainer.appendChild(newSemesterSet);

                const semesterContainer = newSemesterSet.querySelector(`.InputContainer-${semesterIndex}`);
                semesterIndex++;

                const addCourseBtn = newSemesterSet.querySelector('.add-course-btn');
                addCourseBtn.addEventListener('click', function() {
                    addCourseRow(semesterContainer, semesterIndex - 1);
                });

            
            });

            function addCourseRow(container, index) {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><input required name="course_code[${index}][]" class="px-2 block appearance-none w-16 xl:w-24 py-2 mx-1 xl:mx-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                    <td><input required name="course_title[${index}][]" class="px-2 block w-full appearance-none py-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>
                    <td><select required name="course_type[${index}][]" class="px-2 block appearance-none w-20 xl:w-28 py-2 my-1 ml-1 xl:ml-2 text-base leading-normal bg-gray-50 text-gray-800 border border-gray-200 rounded"><option value="" selected disabled>Select Type</option><option value="Major">Major</option><option value="Minor">Minor</option><option value="Education">Education</option><option value="General">General</option></select></td>
                    <td>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle-fill w-6 h-6 mx-auto text-red-600 remove-course-btn" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                        </svg>
                    </td>
                `;
                container.appendChild(newRow);

                const removeCourseBtn = newRow.querySelector('.remove-course-btn');
                removeCourseBtn.addEventListener('click', function() {
                    const row = removeCourseBtn.closest('tr');
                    row.remove();
                });
            }

            
        });

        </script>
        <script>
            $(function () {
                $("#addInitBtn").bind("click", function () {
                    var div = $("<tr />");
                    div.html(GetDynamicInput(""));
                    $("#InputContainer").append(div);
                });
                $("body").on("click", ".remove", function () {
                    $(this).closest("tr").remove();
                });
            });
            function GetDynamicInput(value) {
                return '<td><input required name="course_code[0][]" class="px-2 block appearance-none w-16 xl:w-24 py-2 mx-1 xl:mx-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>'
                + '<td><input required name="course_title[0][]" class="px-2 block w-full appearance-none py-2 my-1 text-base bg-gray-50 text-gray-800 border border-gray-200 rounded" /></td>'
                + '<td><select required name="course_type[0][]" class="px-2 block appearance-none w-20 xl:w-28 py-2 my-1 ml-1 xl:ml-2 text-base leading-normal bg-gray-50 text-gray-800 border border-gray-200 rounded"><option value="" selected disabled>Select Type</option><option value="Major">Major</option><option value="Minor">Minor</option><option value="Education">Education</option><option value="General">General</option></select></td>'
                + '<td><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-circle-fill w-6 h-6 text-red-600 remove mx-auto cursor-pointer" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg></td>'
            }
        </script>
        
       
        
        <script>
        $(document).ready(function() {
            $('#student_number').blur(function() {
                var studentNumber = $(this).val();
                if (studentNumber) {
                    $.ajax({
                        url: 'https://helpdesk.aamusted.edu.gh/check-student/' + studentNumber,
                        method: 'GET',
                        success: function(response) {
                            if (response.department_id === null) {
                                $('#department_dropdown').show();
                                $('#department').attr('required', true);
                            } else {
                                $('#department_dropdown').hide();
                                $('#department').removeAttr('required');
                            }
                        },
                        error: function() {
                            $('#department_dropdown').hide();
                            $('#department').removeAttr('required');
                        }
                    });
                } else {
                    $('#department_dropdown').hide();
                    $('#department').removeAttr('required');
                }
            });
        });
    </script>
    </main>
</div>
</div>
    <!-- <a href="https://wa.link/6o91me" target="_blank">
        <div class="fixed bottom-16 md:bottom-5 lg:right-5 right-2 w-36 z-10">
            <div class="bg-gray-100 text-xl shadow-lg shadow-gray-900 text-gray-900 hover:cursor-pointer rounded-full px-4 py-2">
                <div class="w-8 h-8 flex items-center">
                    <img src="https://helpdesk.aamusted.edu.gh/images/whatsapp.png" alt="">
                    <p class="text-sm ml-1 font-semibold">Admissions Office</p>
                </div>
            </div>
        </div>
    </a> -->
        <div class="flex md:hidden fixed bottom-0 right-0 w-full bg-gray-100 pt-2 pb-1 items-center rounded-t-2xl border-t-2 border-blue-600">
        <div class="flex w-full justify-between items-center px-4">
            <a href="../../index.php" class="flex flex-col items-center text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-gear w-5 h-5 mb-1" viewBox="0 0 16 16">
                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                <path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.044c-.613-.181-.613-1.049 0-1.23l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                </svg>
                <p class='text-sm'>Home</p>
            </a>
             <!-- Home Mobile Navigation -->
                         <!-- End of Home Mobile Navigation -->

            
            <!-- Staff Mobile Navigation -->
                        <!-- End of Staff Mobile Navigation -->

             <!-- Student Mobile Navigation -->
                                                <a href="../../login.php" class="flex flex-col items-center text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-folder2-open w-5 h-5 mb-1" viewBox="0 0 16 16">
                    <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7z"/>
                    </svg>
                        <p class='text-sm'>My Tickets</p>
                    </a>
                                
                
                <!-- <div class="absolute w-full -ml-3">
                    <a href="https://helpdesk.aamusted.edu.gh/users/tickets/create" class="flex mx-auto items-center justify-center text-gray-100 bg-gradient-to-r from-blue-600 to-red-500 rounded-full h-16 w-16 -mt-16">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-lg w-8 h-8" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                        </svg>
                    </a>
                </div> -->
                
                <a href="create.php" class="flex flex-col items-center text-blue-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-send-plus w-5 h-5 mb-1" viewBox="0 0 16 16">
                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178 1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494-1.895 4.738a.5.5 0 1 0 .928.372zm-2.54 1.183L5.93 9.363 1.591 6.602z"/>
                <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
                </svg>    
                    <p class='text-sm'>Issue Ticket</p>
                </a>
                <!-- <a href="https://helpdesk.aamusted.edu.gh/staff/incident_reports/create" class="flex flex-col items-center text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-exclamation-octagon w-5 h-5 mb-1" viewBox="0 0 16 16">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                </svg>
                    <p class='text-sm'>Report Incident</p>
                </a> -->

                <a href="../../gradLogin.php" class="flex flex-col items-center text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-font w-5 h-5 mb-1" viewBox="0 0 16 16">
                    <path d="M10.943 6H5.057L5 8h.5c.18-1.096.356-1.192 1.694-1.235l.293-.01v5.09c0 .47-.1.582-.898.655v.5H9.41v-.5c-.803-.073-.903-.184-.903-.654V6.755l.298.01c1.338.043 1.514.14 1.694 1.235h.5l-.057-2z"/>
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg>
                    <p class='text-sm'>Turnitin</p>
                </a>
                <a href="../faqs/create.php" class="flex flex-col items-center text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-octagon w-5 h-5 mb-1" viewBox="0 0 16 16">
                    <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                    </svg>
                    <p class='text-sm'>FAQs</p>
                </a>
            
                
                        <!-- End of Student Mobile Navigation -->
            
            
        </div>
    </div>
        
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

<!--Datatables -->
<script src="../../../cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="../../../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="../../../cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalButton = document.querySelector('.upload-modal-button');
        const modal = document.getElementById('uploadModal');
        const closeButton = document.querySelector('.upload-modal-close');
        modalButton.addEventListener('click', function () {
            modal.classList.toggle('hidden');
        });

        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!modal.contains(event.target) && !modalButton.contains(event.target)) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalButton = document.querySelector('.mob-modal-button');
        const modal = document.getElementById('mobModal');
        const closeButton = document.querySelector('.mob-modal-close');
        modalButton.addEventListener('click', function () {
            modal.classList.toggle('hidden');
        });

        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!modal.contains(event.target) && !modalButton.contains(event.target)) {
                modal.classList.add('hidden');
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalButton = document.querySelector('.delete-button');
        const modal = document.getElementById('createClassModal');
        const closeButton = document.querySelector('.delete-modal-close');

        modalButton.addEventListener('click', function () {
            modal.classList.toggle('hidden');
        });

        closeButton.addEventListener('click', function () {
            modal.classList.add('hidden');
        });

        document.addEventListener('click', function (event) {
            if (!modal.contains(event.target) && !modalButton.contains(event.target)) {
                modal.classList.add('hidden');
            }
        });
    });
</script>



<!-- Table -->
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({
                pageLength: 20,
                "order": [[0, "desc"]],
                responsive: true,
                dom: 'Bfrtip',
                buttons: {
                    buttons: []
                },
                searching: false
            })
            .columns.adjust().responsive.recalc();
            
    });
</script>


<script>
    const x = document.getElementsByTagName('BODY')[0];
    const modalButtons = document.querySelectorAll('.edit-button');
    const deleteButtons = document.querySelectorAll('.delete-button');
    const modals = document.querySelectorAll('.modal');
    const deleteModals = document.querySelectorAll('.delete-modal');
    const modalClose = document.querySelectorAll('.modal-close');
    const deleteModalClose = document.querySelectorAll('.delete-modal-close');

    function showModal(targetModal) {
        targetModal.style.display = 'flex'; // Show the target modal
        x.style.overflow = 'hidden'; // Disable scroll on body
    }

    function hideModal(targetModal) {
        targetModal.style.display = 'none'; // Hide the target modal
        x.style.overflow = 'auto'; // Enable scroll on body
    }

    modalButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetModalId = this.getAttribute('data-modal');
            const targetModal = document.getElementById(targetModalId);
            showModal(targetModal);
        });
    });

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetDeleteModalId = this.getAttribute('data-delete-modal');
            const targetDeleteModal = document.getElementById(targetDeleteModalId);
            showModal(targetDeleteModal);
        });
    });

    // Select and trigger all close buttons for edit modals
    modalClose.forEach(closeButton => {
        closeButton.addEventListener('click', function () {
            const targetModal = this.closest('.modal');
            hideModal(targetModal);
        });
    });

    // Select and trigger all close buttons for delete modals
    deleteModalClose.forEach(closeButton => {
        closeButton.addEventListener('click', function () {
            const targetDeleteModal = this.closest('.delete-modal');
            hideModal(targetDeleteModal);
        });
    });

    // Close modals when clicking away from modals
    window.onclick = function (event) {
        modals.forEach(modal => {
            if (event.target == modal) {
                hideModal(modal);
            }
        });

        deleteModals.forEach(deleteModal => {
            if (event.target == deleteModal) {
                hideModal(deleteModal);
            }
        });
    };
</script>

<script>
    $(document).ready(function() {

        var table = $('#example2').DataTable({
                pageLength: 20,
                "order": [[0, "desc"]],
                responsive: true,
                dom: 'Bfrtip',
                buttons: [{
                extend: 'excel',
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    var title = document.title; // Get the browser title
                    $('sheet', sheet).attr('name', title); // Set the title
                },
                filename: function() {
                return document.title; // Set filename as browser title
                }
                }, {
                extend: 'print',
                customize: function(win) {
                $(win.document.body).find('table').addClass('print-body')
                $(win.document.body).find('title').text(document.title);
                var $table = $(win.document.body).find('table').first();
                
                }
                }]
            })
            .columns.adjust()
            .responsive.recalc();
            
    });
</script>

<script src="../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="../../../cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="../../../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../../cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="../../../cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="../../../cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="../../../cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="../../../cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

</html>
