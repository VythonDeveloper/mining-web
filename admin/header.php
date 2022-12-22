<?php 
    include "session.php";
    $script_filename =  explode('/',$_SERVER['SCRIPT_FILENAME']);
    $curr_path = $script_filename[count($script_filename)-1];
    $pageName = '';
    
    if($curr_path == 'admin-dashboard' || $curr_path == 'admin-dashboard.php'){
      $pageName = 'Dashboard';
    }
    elseif($curr_path == 'career-master' || $curr_path == 'career-master.php'){
      $pageName = 'Career Master';
    }
    elseif($curr_path == 'contact-us-master' || $curr_path == 'contact-us-master.php'){
      $pageName = "Contact Us Master";
    }
    elseif($curr_path == 'change-password' || $curr_path == 'change-password.php'){
      $pageName = "Change Password";
    }
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Equipcare - Admin</title>
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="./assets/css/index.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.6/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css" />
        <style type="text/css">
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .maxline2 {
                overflow: hidden; 
                border: none; 
                text-overflow: ellipsis; 
                display: -webkit-box; 
                -webkit-line-clamp: 2; 
                line-clamp: 2; 
                -webkit-box-orient: vertical;
            }
        </style>
    </head>
    <body>
        <div class="flex h-screen overflow-hidden bg-white">
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <div class="flex flex-col flex-grow pt-5 overflow-y-auto border-r" style="background-color:rgb(38, 38, 38);">
                    <div class="flex flex-col items-center flex-shrink-0 px-4">
                        <a href="./index.html" class="px-8 text-left focus:outline-none">
                            <h2 class="block p-2 text-xl font-medium tracking-tighter text-white transition duration-500 ease-in-out transform cursor-pointer hover:text-white">Welcome Admin</h2>
                        </a>
                        <button class="hidden rounded-lg focus:outline-none focus:shadow-outline">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                    ></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col flex-grow px-4 mt-5">
                        <nav class="flex-1 space-y-1" style="background-color:rgb(38, 38, 38);">
                            <ul>
                                <li>
                                    <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform  <?php echo $pageName == "Dashboard" ?  'bg-indigo-600' : 'border-indigo-800';?>  rounded-lg focus:shadow-outline hover:bg-indigo-600" white="" 70="" href="admin-dashboard.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                                                ></path>
                                        </svg>
                                        <span class="ml-4"> Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform  <?php echo $pageName == "Career Master" ?  'bg-indigo-600' : 'border-indigo-800';?>  rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600"
                                        href="career-master.php"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                                                ></path>
                                        </svg>
                                        <span class="ml-4">Career Master</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform  <?php echo $pageName == "Contact Us Master" ?  'bg-indigo-600' : 'border-indigo-800';?>  rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600"
                                        href="contact-us-master.php"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="ml-4">Contact Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform  <?php echo $pageName == "Change Password" ?  'bg-indigo-600' : 'border-indigo-800';?>  rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600"
                                        href="change-password.php"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16"> <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/> <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/> </svg>
                                        <span class="ml-4">Change Password</span>
                                    </a>
                                </li>
                                <li class="align-bottom">
                                    <a
                                        class="inline-flex items-center w-full px-4 py-2 mt-1 text-base text-white transition duration-500 ease-in-out transform rounded-lg hover:border-indigo-800 focus:shadow-outline hover:bg-indigo-600"
                                        href="logout.php"
                                        >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span class="ml-4">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="flex flex-shrink-0 p-4 px-4" style="background-color: rgb(23, 23, 23);">
                        <a href="#" class="flex-shrink-0 block w-full group">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block rounded-full h-9 w-9" src="../images/favicon.png" alt="" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-white">Equipcare</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
        <main class="relative flex-1 overflow-y-auto focus:outline-none">
        <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="admin-dashboard.php" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Dashboard
                    </a>
                </li>

                <?php if($pageName != "Dashboard"){?>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500"><?php echo $pageName;?></span>
                        </div>
                    </li>
                <?php } ?>
            </ol>
        </nav>