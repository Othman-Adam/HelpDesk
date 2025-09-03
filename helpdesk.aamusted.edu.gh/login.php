<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
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

    <title>AAMUSTED Help Desk</title>
    <link rel="icon" href="images/logo.ico"/>
</head>
<body>
    <div class="font-inter bg-white"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" />
    <link rel="modulepreload" href="build/assets/app-aaf8581a.js" />
    <link rel="stylesheet" href="build/assets/app-9f73a0eb.css" />
    <script type="module" src="build/assets/app-aaf8581a.js"></script>   
     <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" />
     <link rel="stylesheet" href="build/assets/app-9f73a0eb.css" /></head>
<body>
    
    
    <script>
        setTimeout(function() {$('.alert').fadeOut('fast');}, 6000);
    </script>
</body>


</html>

<main class="flex flex-wrap justify-center content-center md:min-h-screen bg-gradient-to-r from-blue-400 via-pink-200 to-red-300">
    <div class="h-screen md:h-full w-full lg:w-1/3 mx-auto bg-white justify-center content-center shadow-2xl rounded-md">
        
        
        <form action="log.php" method="post">

       

            <input type="hidden" name="_token" value="6JTvXHRc6CielSZTUIocVWayFWtohF4cxDpfWGYc">            
            <div class="bg-red-700 h-2 w-full"></div>
            <div class="py-4 px-6 curve h-[500px] md:h-[450px] rounded-bl-full">
                <div class="flex flex-col items-center mb-5 mt-10 text-center">
                    <h1 class='sm:text-xl text-2xl font-semibold text-white m-auto'>AAMUSTED Help Desk</h1>
                </div>
                <div class="flex place-items-center justify-center mb-10">
                    <img src="images/logo.png" alt="" class="w-16 h-16">
                    
                </div>
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                <div class="mb-7">
                    <input class="shadow appearance-none w-full py-2 px-3 text-gray-900 focus:outline-none border border-blue-200" autocomplete="off" type="text" placeholder="Index Number"  class="form-control" name="uname" autofocus>
                                        </div>
                <div class="mb-7">
                    
                    <input type="password" id="password" name="password" class="shadow appearance-none w-full py-2 px-3 text-gray-900 focus:outline-none border border-blue-200" placeholder="Password" />
                    <svg toggle="#password" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-slash-fill password-toggle text-gray-500" viewBox="0 0 16 16">
                    <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12-.708.708z"/>
                    </svg>
                                    </div>
            
                <div class="flex">
                    <button class="bg-white butta text-blueBlack py-2 md:px-8 px-12 rounded-full mx-auto mb-2 text-sm font-semibold" type="submit">
                        Sign In
                    </button>
                </div>
                <button type="button" class="text-gray-950 italic font-semibold text-sm underline upload-modal-button" data-modal="uploadModal">Forgot Password ?</button>
                
            </div>
            <div class="px-4 md:px-0">
               <div class="md:w-3/4 w-full mx-auto bg-red-100 rounded-lg px-auto my-3 p-4 border-l-4 border-red-700">
                    <p class="text-red-700 font-semibold">Note:</p>
                    <p class="text-sm">For first timers login with your student number as username and password</p>
                </div> 
            </div>
            
            <div class="flex mb-2">
                <a href="https://www.aamusted.edu.gh/" class="mx-auto text-xs text-center font-semibold text-[#010336] hover:text-blue-900">Powered By ICT Services Directorate</a>
            </div>
        </form>
        
    </div>
    <div id="uploadModal" class="upload-modal flex z-10 hidden fixed backdrop-blur-sm items-center shadow-lg justify-center h-screen w-screen top-0 left-0 bg-black bg-opacity-60">
        <div class="bg-white mx-auto w-full md:w-2/5">
            <div class="flex justify-between bg-blue-950 text-white  py-3 px-4 mb-5">
                <p class="uppercase font-semibold">Reset Password</p>
            </div>
            <form action="https://helpdesk.aamusted.edu.gh/users/userResetPassword" method="POST" class="px-5">
                <input type="hidden" name="_token" value="6JTvXHRc6CielSZTUIocVWayFWtohF4cxDpfWGYc">
                <div class="relative z-0 mb-6">
                    <input type="text" name="student_number" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Index Number</label>
                                    </div>
                <div class="flex justify-end mt-2 gap-x-2 mb-4">
                    <button type="button" class="upload-modal-close text-sm text-gray-500 border border-gray-400 px-4 py-2 uppercase">Cancel</button>
                    <button type="submit" class="text-sm bg-blue-950 text-white hover:bg-blue-800 px-6 py-2 uppercase">Reset</button>
                </div>
            </form>
        </div>
    </div>
</main>
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
        top: -30px;
        right: 0;
        margin-right: 10px;
        float: right;
        cursor: pointer;
        font-size: 25px;
        }
    .curve{
        background-color: #7f9600;
    }
    .butta{
        border-width: 1px; 
        border-color: #6b0707;
    }
    .butta:hover {
    color: #ffffff; 
    border-color: #ffffff; 
    background: #6b0707;
    }
    .error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
   text-align: center;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
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
                                                <a href="login.php" class="flex flex-col items-center text-blue-900">
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
                
                <a href="users/tickets/create.php" class="flex flex-col items-center text-gray-700">
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

                <a href="gradLogin.php" class="flex flex-col items-center text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-font w-5 h-5 mb-1" viewBox="0 0 16 16">
                    <path d="M10.943 6H5.057L5 8h.5c.18-1.096.356-1.192 1.694-1.235l.293-.01v5.09c0 .47-.1.582-.898.655v.5H9.41v-.5c-.803-.073-.903-.184-.903-.654V6.755l.298.01c1.338.043 1.514.14 1.694 1.235h.5l-.057-2z"/>
                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg>
                    <p class='text-sm'>Turnitin</p>
                </a>
                <a href="users/faqs/create.php" class="flex flex-col items-center text-gray-700">
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
