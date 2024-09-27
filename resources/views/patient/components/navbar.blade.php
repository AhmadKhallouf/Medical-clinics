<style>
    /* Example CSS styling */
   
  
    /* Navbar styling */
    .navbar {
      background-color: #333;
      color: #fff;
      padding: 10px;
    }
  
    .navbar h1 {
      margin: 0;
      font-size: 24px;
      display: inline-block;
    }
  
    .navbar .dropdown {
      position: relative;
      display: inline-block;
    }
  
    .navbar .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
  
    .navbar .dropdown:hover .dropdown-content {
      display: block;
    }
  
    .navbar .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
  
    .navbar .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark position-fixed w-100" style="z-index: 2;opacity: 0.8;" >
        <div class="container-fluid">
          <img src="{{  asset('image/logo.png') }}" alt="logo" width="110" height="70">
          <a class="navbar-brand ms-3 hvr-float-shadow text-warning fs-2" href="{{ route('redirect') }}">Home</a>
          
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('about') }}"
                   aria-expanded="false">
                  About
                </a>
               
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('clinics_page') }}" id="navbarDropdown" 
                   aria-expanded="false">
                  Clinics
                </a>
               
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('my_dates_page') }}" id="navbarDropdown" 
                   aria-expanded="false">
                  My Dates
                </a>
               
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="{{ route('cart_page') }}" id="navbarDropdown" 
                   aria-expanded="false">
                  My Carts
                </a>
               
              </li>

             

              @auth
            
          <li class="nav-item dropdown" style="margin-left: 500px">
           <a class="nav-link  hvr-underline-from-center text-warning fs-4" href="#" id="navbarDropdown" 
               aria-expanded="false">
                <div class="dropdown">
                  <span>{{ Auth::user()->first_name }}</span> &nbsp; <i class="fas fa-angle-down"></i>
                  <div class="dropdown-content">
                    <a href="{{ route('profile.edit') }}">Profile</a>
                    <form action="{{ route('logout') }}" method="POST">
                      @csrf
                    <button type="submit" style="color: #333; padding: 12px 16px; text-decoration: none; display: block; width:120px; hight:48px">Logout</button> 
                  </form>
                  </div>
                </div>
            </a>  
          </li>
          @endauth
             
          </div>
        </div>
      </nav>  
  </body>