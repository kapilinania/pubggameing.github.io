<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
   <!-- swiper js libraray -->
  

</head>
<body>
    <header>
        <a href="" class="logo"><img src="https://wstatic-prod.pubg.com/web/live/main_9276b8f/img/2256138.png" alt="" width="120" height="100"></a>
        <ul class="navbar">
            <li><a href="" class="active">Tournment</a></li>
            <li><a href="">Game</a></li>
            <li><a href="">News</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Policy</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="main">
            <!-- <a href="" class="user"><i class="ri-user-add-line"></i>Login</a>
            <a href="">Register</a> -->
            <button class="ring-2 ring-yellow-400 px-6 py-2 mx-4 rounded " data-modal-target="crypto-login" data-modal-toggle="crypto-login">
                Login   
              </button>
            <button class="ring-2 ring-yellow-500   px-6 py-2 mx-4 rounded " data-modal-target="crypto-modal" data-modal-toggle="crypto-modal">
                Register
            </button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!-- -------------------nav bar is closed here------------ -->
    <!-- --------register model is here---- -->
    <div id="crypto-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="crypto-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal header -->
                <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                        Create and account
                    </h3>
                </div>
                <!-- Modal body -->
                
                    <div class="flex flex-col items-center justify-center  mx-auto  lg:py-0">
                        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            
                                <form class="space-y-4 md:space-y-6" action="send.php" method="post">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                                        <input type="text" name="name" id="name" placeholder="Enter Your Name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    </div>
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                        </div>
                                        <div class="ml-3 text-sm">
                                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" name="send">Create an account</button>
                                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                        Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>

    <!-- -----register model is closed----- -->
    <!-- --------login model is here----- -->
    <div id="crypto-login" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="crypto-login">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    <span class="sr-only">Close modal</span>
                </button>
                <!-- Modal header -->
                <div class="px-6 py-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-base font-semibold text-gray-900 lg:text-xl dark:text-white">
                        Login Now
                    </h3>
                </div>
                <!-- Modal body -->
                
                    <div class="flex flex-col items-center justify-center  mx-auto  lg:py-0">
                        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            
                                <form class="space-y-4 md:space-y-6" action="login.php" method="post">
                                    <div>
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                        <input type="email" name="emailData" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Your Register Email" required="">
                                    </div>
                                    <div>
                                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <input type="password" name="passwordData" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                        </div>
                                        <div class="ml-3 text-sm">
                                        <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" name="send">Login Now</button>
                                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                        New User Register Now? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register Here</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    <!-- ------------login model is closed now---- -->
    
    <section>
        <div class="middle_img">
            <img src="https://wstatic-prod.pubg.com/web/live/main_9276b8f/img/aeca002.jpg" alt="" width="2560">
        </div>
    </section>
    <!-- ----------tournment section is here--- -->
    <section>
        <div class="middle_section_news">
            <h1 class="text-center text-5xl py-8 mb-11 mt-0  text-gwhite"><a href="">Tournment</a></h1>
        </div>
        <div class="max-w-[80%] mx-auto  "> 
            <div class="owl-carousel owl-theme mt-5">
                
                <div class="owl-item ">
                        <div class="boxtour">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 1 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        
                </div>
                <div class="owl-item ">
                        <div class="boxtour">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 2 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        
                </div>
                <div class="owl-item ">
                        <div class="boxtour">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 3</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        
                </div>
                <div class="owl-item ">
                        <div class="boxtour">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 4 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        
                </div>
                
                
                
                
               
               
            </div> 
        </div>
    </section>
    <!-- ------news section is here------ -->
    <section>
        <div class="middle_section_news">
            <h1 class="text-center text-5xl py-8 mb-11 mt-0  text-gwhite"><a href="">Latest News</a></h1>
        </div>
        <div class="max-w-[80%] mx-auto  ">
            <section class="text-gwhite mb-10" id="tour"> 
                    <div class=" grid lg:grid-cols-3 md:grid-cols-2 gap-6 md:px-[20px]">
                        <div class="box">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 3 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        <div class="box">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 3 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                        <div class="box">
                            <span class="borderLine"></span>
                            <form action="">
                                <div class="max-w-sm  bg-white section_shadow rounded-lg dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#" class="relative ">
                                      <img class="rounded-t-lg " src="https://www.battlegroundsmobileindia.com/data/board/2/823/11_Banner_Notice.jpg" alt=""/>
                                      
                                  </a>
                                    <div class="p-5 slide_sec" >
                                        <a href="#">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">T - 3 </h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </a>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    
                 
                
            </section>
            
      
        
            
        </div>
    </section>

    <footer class="text-white">
  <div class="mx-auto max-w-[80%]   px-4 py-16 sm:px-6 lg:px-8">
    <div class="lg:flex lg:items-start lg:gap-8">
      <div class="text-teal-600">
        
      </div>

      <div
        class="mt-8 grid grid-cols-2 gap-8 lg:mt-0 lg:grid-cols-5 lg:gap-y-16"
      >
        <div class="col-span-2">
          <div>
            <h2 class="text-2xl font-bold text-white-900">
              Get the latest news!
            </h2>

            <p class="mt-4 text-white-500">
            Feel free to reach out to me for any questions or support you may need.
            </p>
          </div>
        </div>

        <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
          <form class="w-full">
            <label for="UserEmail" class="sr-only"> Email </label>

            <div
              class="border border-gray-100 p-2 focus-within:ring sm:flex sm:items-center sm:gap-4"
            >
              <input
                type="email"
                id="UserEmail"
                placeholder="example@gmail.com"
                class="w-full border-none focus:border-transparent focus:ring-transparent sm:text-sm inputBoxIndex"
              />

              <button
                class="mt-1 w-full bg-yellow-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-white transition-none hover:bg-teal-600 sm:mt-0 sm:w-auto sm:shrink-0"
              >
                Sign Up
              </button>
            </div>
          </form>
        </div>

        <div class="col-span-2 sm:col-span-1">
          <p class="font-medium text-white-900">Services</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                1on1 Coaching
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Company Review
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Accounts Review
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                HR Consulting
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                SEO Optimisation
              </a>
            </li>
          </ul>
        </div>

        <div class="col-span-2 sm:col-span-1">
          <p class="font-medium text-white-900">Company</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                About
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Meet the Team
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Accounts Review
              </a>
            </li>
          </ul>
        </div>

        <div class="col-span-2 sm:col-span-1">
          <p class="font-medium text-white-900">Helpful Links</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Contact
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                FAQs
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Live Chat
              </a>
            </li>
          </ul>
        </div>

        <div class="col-span-2 sm:col-span-1">
          <p class="font-medium text-white-900">Legal</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Accessibility
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Returns Policy
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Refund Policy
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Hiring Statistics
              </a>
            </li>
          </ul>
        </div>

        <div class="col-span-2 sm:col-span-1">
          <p class="font-medium text-white-900">Downloads</p>

          <ul class="mt-6 space-y-4 text-sm">
            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                Marketing Calendar
              </a>
            </li>

            <li>
              <a href="#" class="text-white-700 transition hover:opacity-75">
                SEO Infographics
              </a>
            </li>
          </ul>
        </div>

        <ul
          class="col-span-2 flex justify-start gap-6 lg:col-span-5 lg:justify-end"
        >
          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-white-700 transition hover:opacity-75"
            >
              <span class="sr-only">Facebook</span>

              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-white-700 transition hover:opacity-75"
            >
              <span class="sr-only">Instagram</span>

              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-white-700 transition hover:opacity-75"
            >
              <span class="sr-only">Twitter</span>

              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-white-700 transition hover:opacity-75"
            >
              <span class="sr-only">GitHub</span>

              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="/"
              rel="noreferrer"
              target="_blank"
              class="text-white-700 transition hover:opacity-75"
            >
              <span class="sr-only">Dribbble</span>

              <svg
                class="h-6 w-6"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-8 border-t border-white-100 pt-8">
      <div class="sm:flex sm:justify-between">
        <p class="text-xs text-white-500">
          &copy; <script>document.write(new Date().getFullYear());</script>  IndianGamer.com. All rights reserved.
        </p>

        <ul
          class="mt-8 flex flex-wrap justify-start gap-4 text-xs sm:mt-0 lg:justify-end"
        >
          <li>
            <a href="#" class="text-white-500 transition hover:opacity-75">
              Terms & Conditions
            </a>
          </li>

          <li>
            <a href="#" class="text-white-500 transition hover:opacity-75">
              Privacy Policy
            </a>
          </li>

          <li>
            <a href="#" class="text-white-500 transition hover:opacity-75">
              Cookies
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
       <!-- ----slider is here------  -->
      
      
    <!-- -------slider is closed here-------   -->   
    </footer>
   <!-- swiper js is here   -->
 
    <!-- ----js script is here-------- -->

    <script src="script.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script>
        function Menu(e){
          let list = document.querySelector('ul');
          e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
        }
  //slider code is here
        $(document).ready(function () {
  var silder = $(".owl-carousel");
  silder.owlCarousel({
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    items: 1,
    stagePadding: 20,
    center: true,
    nav: false,
    margin: 50,
    dots: true,
    loop: true,

    responsive: {
      0: { items: 1 },
      480: { items: 2 },
      575: { items: 2 },
      768: { items: 2 },
      991: { items: 3 },
      1200: { items: 4 },
    },
  });
});

//slider code is closed


    </script>
</body>
</html>