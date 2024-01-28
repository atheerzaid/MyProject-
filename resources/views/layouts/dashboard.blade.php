<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>


   <style>

    *{

      font-family: cairo;
      
      

    }

   </style>

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body dir="rtl">

    <div id="app">

        <nav class="navbar navbar-expand-lg " style="background-color:#d5cad2">

            <div class="container-fluid">

               
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                          <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">الرئيسية </a>
                        </li>

                        
                    </ul>
                </div>            
             
                <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav">
                        <li class="nav-item">
                         <h3 class="nav-link active text-white" aria-current="page" href="#" style="font-family: cairo;">AZ Evant Planner </h3>
                        </li>
                    </ul>
                </div>

                <div>
                    @if(Auth::guest())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                         <a class="nav-link active text-white" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="{{route('register')}}">Register</a>
                        </li>
                    </ul>
                    @else
                    <ul class="">
                        <li class="navbar-nav">
                            <a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
 
                        </li>
                    </ul>
                    @endif
                </div>

            </div>

        </nav>
        <main class="py-0">
            <div class="">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-2" style="background-color:#d5cad2">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                           
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item">
                                    <a href="{{route('controlpanel')}}" class="nav-link align-middle px-0">
                                    <i class="bi bi-balloon-heart-fill text-white"><i class="bi bi-cake text-white"></i></i> 
                                        <span class="ms-1 d-none d-sm-inline text-white">المنتجات</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('addgritem')}}" class="nav-link align-middle px-0">
                                    <i class="bi bi-plus-circle text-white"></i>
                                        <span class="ms-1 d-none d-sm-inline text-white">إضافةمجموعة</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('additem')}}" class="nav-link px-0 align-middle">
                                    <i class="bi bi-bag-plus-fill text-white"></i>
                                        <span class="ms-1 d-none d-sm-inline text-white">اضافة عنصر</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                     <i class="bi bi-receipt text-white"></i>
                                     <span class="ms-1 d-none d-sm-inline text-white">Bill</span> 
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#" class="nav-link px-0 align-middle">
                                    
                                    <i class="fs-4 bi-people text-white"></i> 
                                    <span class="ms-1 d-none d-sm-inline text-white">Customers</span> 
                                    </a>
                                </li>
                            </ul>

                          
                        </div>
                    </div>
                    <div class="col-sm-10 mt-3 ">

                        @yield('content')

                    </div>

                </div>

               

            </div>

          

          </main>

   

   

   

   

   

   

    </div>


   


</body>

</html>