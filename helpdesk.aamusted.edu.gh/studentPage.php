<!DOCTYPE html>
<html lang="en">


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
    <div class="font-inter bg-gray-300"><!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="../fonts.googleapis.com/index.html">
      <link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
      <link href="../fonts.googleapis.com/css2f099.css?family=Inter:wght@400;500&amp;display=swap" rel="stylesheet">
      <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="modulepreload" href="build/assets/app-aaf8581a.js" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" /><script type="module" src="build/assets/app-aaf8581a.js"></script>      <link rel="preload" as="style" href="build/assets/app-9f73a0eb.css" /><link rel="stylesheet" href="build/assets/app-9f73a0eb.css" />  </head>
  <body>
    <nav class="fixed w-full z-20">
      <div class="border-t-4 border-t-red-600 flex justify-end pr-2">
        
      </div>
      <div class="">
        <div class="bg-gradient-to-b from-blue-600 via-uewBlue to-black opacity-80 w-full flex flex-wrap items-center justify-between px-4 py-2">
          <div class="inline-flex">
            <a href="index.php" class="flex items-center border-r-2 border-gray-200">
              <img src="images/logo.png" class="h-10 px-2" alt="AAMUSTED Logo" />
            </a>
            <div class='font-playfair text-white px-2'>
              <p class='text-lg font-semibold uppercase -mb-1'>AAMUSTED Help Desk</p>
              <p class='text-sm'>Directorate of ICT Services</p>
            </div>
          </div>
          <div class="hidden lg:block w-auto mr-6 self-center" id="navbar-default">
            <ul class='flex font-playfair space-x-6 text-white text-sm font-semibold'>
             
              <a href="index.php" class="relative flex group self-center">
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
                             
                
                <a href="users/faqs/create.php" class="relative flex group items-center justify-center">
                  <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                    </svg>
                    <p class="font-medium">FAQs</p>
                  </li>
                </a>
                                                  <a href="login.php" class="relative flex group text-blue-600 ">
                    <!-- <div class="absolute bg-yellow-100 opacity-0 rounded-full h-6 w-6 transition-opacity group-hover:opacity-80 inline-flex self-center -ml-2"></div> -->
                    <li class="group-hover:bg-yellow-100 hover:text-uewBlue flex space-x-2 text-white bg-uewBlue px-4 py-1 rounded-full shadow-sm shadow-blue-200">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5v-1a2 2 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693Q8.844 9.002 8 9c-5 0-6 3-6 4m7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1"/>
                      </svg>
                      <p class="font-medium">Login</p>
                    </li>
                  </a>
                                  
                  <a href="adminLogin.php" class="relative flex group text-blue-600 ">
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
                <a href="index.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-gear w-5 h-5" viewBox="0 0 16 16">
                  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                  <path d="M11.886 9.46c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.044c-.613-.181-.613-1.049 0-1.23l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                </svg>
                <span class="ml-3 font-semibold">Home</span>
                </a>
            </li>
           <!--  <li class="border-b border-gray-800">
                <a href="https://helpdesk.aamusted.edu.gh/studentPage" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
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
                <a href="index.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon w-5 h-5" viewBox="0 0 16 16">
                <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z"/>
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
              </svg>
                <span class="ml-3 font-semibold">Report Incident</span>
                </a>
            </li>
           
            <li class="border-b border-gray-800">
                <a href="users/faqs/create.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-question-circle w-5 h-5" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94"/>
                </svg>
                <span class="ml-3 font-semibold">FAQs</span>
                </a>
            </li>
            <li class="border-b border-gray-800">
                <a href="adminLogin.php" class="flex items-center justify-start p-2 rounded hover:bg-gray-300 hover:text-blue-900 group">
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
                                
            <a href="https://helpdesk.aamusted.edu.gh/gradLogin"><li class="hover:underline">Turnitin</li></a>
            <a href="https://helpdesk.aamusted.edu.gh/users/tickets/create"><li class="hover:underline">Issue Ticket</li></a>
                                      <a href="https://helpdesk.aamusted.edu.gh/login"><li class="hover:underline">View Tickets</li></a>
                                </ul>
          
        </div>
        <div class="w-10 overflow-hidden inline-block">
          <div class=" h-16 bg-yellow-400 rotate-45 transform origin-top-right"></div>
        </div>
      </div> -->
            
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
<div class="pt-16 lg:pt-0">
    <div class="w-full relative">
        <img src="images/student1.jpg" class="lg:h-2/3" alt="">
        <div class="relative">
          <div class="flex absolute bottom-0 right-0 lg:w-1/6 md:w-1/4 w-2/5">
              <div class="md:w-11 w-11 overflow-hidden inline-block relative md:-ml-10 -ml-8">
                  <div class="md:h-14 h-11 bg-yellow-500 rotate-45 transform origin-bottom-left"></div>
              </div>
              <div class="absolute bottom-0 px-4 py-2 bg-yellow-500 w-full md:h-10 h-8">
              </div>
          </div>
          <div class="flex absolute bottom-0 right-0 lg:w-1/6 md:w-1/4 w-2/5 mr-1 mb-1">
              <div class="md:w-11 w-11 overflow-hidden inline-block relative md:-ml-10 -ml-8">
                  <div class="md:h-14 h-11 bg-red-700 rotate-45 transform origin-bottom-left"></div>
              </div>
              <div class="flex items-center absolute bottom-0 px-4 bg-red-700 w-full md:h-10 h-8">
                  <h1 class="text-white font-medium text-base lg:text-xl">Student Page</h1>
              </div>
          </div>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mx-auto justify-center lg:my-5 mt-5 mb-16 lg:px-4 px-3">
        
                                <a href="users/faqs/index/171bf9ff-b3d3-4c37-8ea7-87c9f8f3154a.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Virtual Classroom
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/online.jpg" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/267e46cb-07cc-4891-b945-13c4c566c487.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        WiFi Connectivity
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/wifii.png" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/2ad2a795-da9e-42aa-a60b-a4f0a0ebe949.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Student Mail
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/1705503070.jpg" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/5a99d49f-3098-440c-87d1-a698e188a5b0.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Finance Related Issues
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/fn.jpg" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/7cda0225-ace4-488b-82a6-ccdaf9252e4a.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Student Portal
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/sp.jpg" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/8a70cf6f-3e7f-4d37-9231-d271a61b38c5.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Accessing the Help Desk
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/hd.png" alt="" class="" />
                      </div>
                  </div>
              </a>
                                          <a href="users/faqs/index/c6ab3b39-e7e7-4665-b9a5-6bcd63ee78bb.php">
                  <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
                      <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
                      <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        Course Registration
                      </h1>
                      <div class="flex mx-auto justify-center items-center">
                        <img src="storage/images/rgn.jpg" alt="" class="" />
                      </div>
                  </div>
              </a>
            </a>
            <a href="users/faqs/index/c6ab3b39-e7e7-4665-b9a5-6bcd63ee78bbAdm.php">
              <div class="relative bg-white h-52 lg:h-80 rounded transform shadow-2xl transition duration-300 overflow-hidden">
              <div class="absolute inset-0 w-full h-full bg-gray-800 bg-opacity-75"></div>
              <h1 class="text-white text-center text-lg lg:text-2xl font-semibold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              Admissions
              </h1>
              <div class="flex mx-auto justify-center items-center">
              <img src="storage/images/Adm.jpg" alt="" class="" />
              </div>
              </div>
              </a>
                  

    </div>
</div>
<script>
function toggleLibraryServicesMenu(event) {
    event.stopPropagation();
    const card = event.currentTarget;
    const faqId = card.getAttribute('data-faq-id');
    const menu = document.getElementById('library-services-menu');
    const link = document.getElementById('library-services-link');
    link.href = `/users/faqs/index/${faqId}`; // Update the href dynamically

    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
}

function closeLibraryServicesMenu(event) {
    event.stopPropagation();
    const menu = document.getElementById('library-services-menu');
    menu.classList.add('hidden');
}

// Optional: Close the menu if clicking outside of it
document.addEventListener('click', function(event) {
    const menu = document.getElementById('library-services-menu');
    const card = document.getElementById('library-services-card');
    if (!card.contains(event.target)) {
        menu.classList.add('hidden');
    }
});
</script>



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
                                                <a href="login.php" class="flex flex-col items-center text-gray-700">
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
