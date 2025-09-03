

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ensure the username and password fields are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "helpdesk";

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get form data
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows > 0) {
            // Redirect to admin dashboard
            header("Location: dashb.php");
        } else {
            echo "Invalid username or password.";
        
        }

        // Close connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Username and password are required.";
        
    }
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="../unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="js/jquery.min.html"></script>
    <script src="js/Chart.min.html"></script>
    <link rel="preconnect" href="../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
    <link href="../fonts.googleapis.com/css2ed52.css?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="modulepreload" href="build/assets/app-aaf8581a.js" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" /><script type="module" src="build/assets/app-aaf8581a.js"></script>    <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" />    <link href="../cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="../cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
<link href="../cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />

    <title>AAMUSTED - Login</title>
    <link rel="icon" href="images/logo.ico"/>
</head>
<body>
    <div class="font-inter bg-white"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="modulepreload" href="build/assets/app-aaf8581a.js" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" /><script type="module" src="build/assets/app-aaf8581a.js"></script>    <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" /></head>
<body>
    
    
    <script>
        setTimeout(function() {$('.alert').fadeOut('fast');}, 6000);
    </script>
</body>

</html>

<div class="flex justify-center items-center mx-auto w-full bg-ivory h-screen md:px-6 2xl:px-28 relative">
    <img src="images/top.png" alt="" class="absolute right-0 bottom-0 max-h-screen object-contain">
    <div class="flex z-20 bg-blue-900 w-full lg:w-4/5 h-full md:h-auto rounded-3xl shadow-md shadow-gray-500">
        <div class="md:w-1/2 w-full md:pb-10 md:px-4 lg:px-10 bg-white md:rounded-l-3xl">
            <form method="POST" action="">

            

                <input type="hidden" name="_token" value="6JTvXHRc6CielSZTUIocVWayFWtohF4cxDpfWGYc">                <div class="relative md:hidden w-full h-36 rounded-b-full mb-20">
                    <div class="flex absolute inset-x-0 rounded-md items-center justify-center mx-auto w-28 h-28 mt-24">
                        <img src="images/logo.png" alt="" width="80px" height="80px">
                    </div>
                </div>
                
                <div class="text-center text-yellow-100">
                    <div class="flex items-center justify-center mx-auto w-20 h-20 md:block hidden">
                        <img src="images/user_support.png" alt="" width="80px" height="80px">
                    </div>
                    <p class=" font-semibold uppercase md:text-lg text-base text-blue-800">Admin Login</p>
                </div>
                <div class="relative md:my-10 my-8 mx-5 md:mx-0">
                    <input type="text" name="username" class="block rounded-full px-2.5 pb-1 pt-5 pl-10 w-full text-sm text-gray-900 bg-yellow-50 border border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" require/>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person w-5 h-5" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                    </div>
                    <label for="floating_filled" class="absolute text-sm text-gray-500 duration-300 pl-10 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Username</label>
                                    </div>
                <div class="relative md:my-10 my-8 mx-5 md:mx-0">
                    <input type="password" id="password" name="password" class="block rounded-full pr-6 pb-1 pt-5 pl-10 w-full text-sm text-gray-900 bg-yellow-50 border border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" require />
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"> 
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lock w-5 h-5" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                        </svg>
                    </div>
                    <svg toggle="#password" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash password-toggle text-gray-800 pt-0.5" viewBox="0 0 16 16">
                    <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                    <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                    <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                    </svg>
                    <label for="floating_filled" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 pl-10 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-gray-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
                                    </div>
                <div class="md:px-0 px-5">
                    <button class="w-full text-white bg-blue-800 rounded-full py-2.5 hover:bg-blue-900 md:mb-1 mb-5 text-sm uppercase font-semibold">Login</button>
                </div>
                <p class="text-center text-xs font-semibold text-gray-600">Forgotten Password? Click Here</p>
                
                <div class="flex flex-col mx-auto w-full justify-center items-center absolute bottom-1 md:hidden md:mx-0 text-gray-500">
                    <p class="text-xs text-center">Copyright © <span id="year"></span> Designed & Developed by <a href="https://wa.link/amllbv" class="text-blue-700">Directorate of ICT Services</a></p>
                    <p class="text-xs text-center">All Rights Reserved</p>
                </div>
            </form>
        </div>
        <div class="md:inline-flex md:w-1/2 hidden relative">
            
            <img src="images/dotted.png" alt="" class="absolute md:h-60 lg:h-72 bottom-0 right-0"> 
            <div class="w-64 overflow-hidden inline-block absolute mt-16">
            <div class=" h-96 bg-blue-900 rotate-45 transform origin-top-right shadow-xl shadow-black"></div>
            </div>
            <div class="w-64 overflow-hidden inline-block absolute">
            <div class=" h-96 bg-blue-800 rotate-45 transform origin-top-right shadow-xl shadow-black"></div>
            </div>
            <div class="mt-16 mx-auto md:w-4/5 text-center z-10">
                <p class="text-white text-xl">Welcome to AAMUSTED Help Desk</p>
                <p class="font-thin text-sm text-gray-300">Effortlessly connect, resolve issues, and access resources for students and staff. Your one-stop solution for seamless support and assistance.</p>
            </div>
                <img src="images/svglt.png" alt="" class="absolute md:h-80 bottom-0 right-10 xl:right-24">
        </div>
    </div>
</div>

    <script>
        const passwordToggle = document.querySelector('.password-toggle');
        const password = document.querySelector('#password');

        passwordToggle.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('active');
        });

    </script>
    <style>
        .password-toggle {
        position: relative;
        top: -35px;
        right: 0;
        margin-right: 10px;
        float: right;
        cursor: pointer;
        font-size: 25px;
        }
    </style>
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
            <a href="index.php" class="flex flex-col items-center text-gray-700">
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
<script src="../cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="../cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
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

<script src="../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="../cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="../code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="../cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script> -->
<script src="../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="../cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="../cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script src="../cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

</html>
