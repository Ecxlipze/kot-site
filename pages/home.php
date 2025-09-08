<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOT ENTERPRISES</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/styles.css" />
  <link rel="stylesheet" href="../assets/styles/style.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style></style>
  </head>
  <body class="overflow-x-hidden">
    <!-- Pattern Background -->
<!-- header area start here -->
<!-- class="overflow-x-hidden"> -->
    <!-- Pattern Background -->
    <div class="hero-pattern"></div>

    <!-- Navigation Bar -->
    <nav id="main-navbar" class="navbar px-4 py-2 flex items-center justify-between">
      <!-- Left: Logo -->
      <div class="flex items-center">
        <a href="#" class="logo flex items-center text-xl">
          <img src="../assets/images/Logo.png">
        </a>
      </div>

      <!-- Add hamburger icon after logo -->
      <div class="lg:hidden flex items-center ml-4 cursor-pointer" onclick="toggleMenu()">
        <i class="fas fa-bars text-xl"></i>
      </div>

      <!-- Center: Navigation Items -->
      <div class="hidden lg:flex space-x-1">
        <div class="dropdown nav-item">
          <div class="flex items-center">
            Corporate <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >About Us</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Leadership</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Partners</a
            >
          </div>
        </div>

        <div class="dropdown nav-item">
          <div class="flex items-center">
            Careers <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Open Positions</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Culture</a
            >
          </div>
        </div>

        <div class="dropdown nav-item">
          <div class="flex items-center">
            Services <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Consulting</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Development</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Support</a
            >
          </div>
        </div>

        <div class="dropdown nav-item">
          <div class="flex items-center">
            Consultancy <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >IT Strategy</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Business Analysis</a
            >
          </div>
        </div>

        <div class="dropdown nav-item">
          <div class="flex items-center">
            Marketplace <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Products</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Solutions</a
            >
          </div>
        </div>

        <div class="dropdown nav-item">
          <div class="flex items-center">
            Programs <i class="fas fa-chevron-down ml-2 text-xs"></i>
          </div>
          <div
            class="dropdown-menu absolute top-full left-0 mt-2 py-2 rounded-md shadow-lg"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Training</a
            >
            <a
              href="#"
              class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800"
              >Workshops</a
            >
          </div>
        </div>
      </div>

      <!-- Right: User Actions -->
      <div class="flex items-center space-x-4">
        <div class="dropdown relative">
          <div class="flex items-center text-sm cursor-pointer" onclick="toggleDropdown(this)">
            <img id="selected-flag" src="https://www.worldometers.info/img/flags/uk-flag.gif" alt="English" class="h-4 w-auto mr-2" />
            <span id="selected-lang">English</span> <i class="fas fa-chevron-down ml-1 text-xs"></i>
          </div>
          <div class="dropdown-menu hidden absolute top-full right-0 mt-2 py-2 rounded-md shadow-lg bg-gray-900 min-w-max">
            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-800" onclick="changeLanguage('English', 'https://www.worldometers.info/img/flags/uk-flag.gif')">
              <img src="https://www.worldometers.info/img/flags/uk-flag.gif" alt="English" class="h-4 w-auto mr-2" /> English
            </a>
            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-800" onclick="changeLanguage('Chinese', 'https://www.worldometers.info/img/flags/ch-flag.gif')">
              <img src="https://www.worldometers.info/img/flags/ch-flag.gif" alt="Chinese" class="h-4 w-auto mr-2" /> Chinese
            </a>
            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-300 hover:bg-gray-800" onclick="changeLanguage('French', 'https://www.worldometers.info/img/flags/fr-flag.gif')">
              <img src="https://www.worldometers.info/img/flags/fr-flag.gif" alt="French" class="h-4 w-auto mr-2" /> French
            </a>
          </div>
        </div>

        <div class="cursor-pointer" onclick="toggleSearch()">
          <i class="fas fa-search text-lg"></i>
        </div>

        <div class="cursor-pointer relative">
          <i class="fas fa-shopping-cart text-lg"></i>
          <span class="cart-badge">1</span>
        </div>

        <div class="cursor-pointer">
          <div class="dropdown relative cursor-pointer">
            <div onclick="toggleDropdown(this)">
              <i class="fas fa-user-circle text-lg"></i>
            </div>
            <div class="dropdown-menu hidden absolute top-full right-0 mt-2 py-2 rounded-md shadow-lg bg-gray-900 min-w-max">
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Logout</a>
            </div>
          </div>

        <div class="cursor-pointer">
          <div class="dropdown relative cursor-pointer">
            <div onclick="toggleDropdown(this)">
              <i class="fas fa-ellipsis-v text-lg"></i>
            </div>
            <div class="dropdown-menu hidden absolute top-full right-0 mt-2 py-4 px-6 rounded-md shadow-lg bg-gray-900 w-screen max-w-5xl grid grid-cols-4 gap-8">
              <!-- Column 1: App Script -->
              <div class="space-y-1">
                <h3 class="font-bold text-white mb-2">App Script</h3>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Native Mobile App (Android)</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Native Mobile App (iOS)</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Flutter App</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">App Script</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Software as a Service</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Port of Sales Systems</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Learning Management Systems</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Enterprise Resource Planning Systems</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Human Resource Management Systems</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Start a product a Gateway Selling</a>
              </div>
              <!-- Column 2: Digital -->
              <div class="space-y-1">
                <h3 class="font-bold text-white mb-2">Digital</h3>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Search Engine Optimization</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Social Media Marketing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Pay Per Click Marketing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Email Marketing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Branding & Audit</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Traditional Marketing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Merchandise</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Custom Store Development</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Payment Gateway Integration</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Multichannel Selling</a>
              </div>
              <!-- Column 3: Graphira -->
              <div class="space-y-1">
                <h3 class="font-bold text-white mb-2">Graphira</h3>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Logo & Brand Identity Design</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Print Design</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Web & UI/UX Design</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Illustration</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Packaging Designing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Consulting and Strategy</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Venture Coaching</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Mentoring & Advisory</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Networking and Partnership</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Funding and Investment Support</a>
              </div>
              <!-- Column 4: Web Sculptures -->
              <div class="space-y-1">
                <h3 class="font-bold text-white mb-2">Web Sculptures</h3>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Custom Website Development</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Research & UI/UX Designing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">API Integration Development</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Website Maintenance and Support</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Market Research & Analysis</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Branding and Marketing</a>
                <a href="#" class="block text-sm text-gray-300 hover:text-white py-1">Operational Management</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    

    <!-- Hero Section -->
    <body class="relative min-h-screen">
      <!-- Background Image with Overlay -->
      <!-- <div class="absolute inset-0 bg-black opacity-80"></div> -->
    <div id="mobile-menu" class="hidden lg:hidden flex flex-col space-y-4 mt-4 px-4">
      <div class="dropdown nav-item">
        <div class="flex items-center justify-between" onclick="toggleDropdown(this)">
          Corporate <i class="fas fa-chevron-down ml-2 text-xs"></i>
        </div>
        <div class="dropdown-menu hidden mt-2 py-2 rounded-md shadow-lg bg-gray-900">
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">About Us</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Leadership</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Partners</a>
        </div>
      </div>

      <div class="dropdown nav-item">
        <div class="flex items-center justify-between" onclick="toggleDropdown(this)">
          Careers <i class="fas fa-chevron-down ml-2 text-xs"></i>
        </div>
        <div class="dropdown-menu hidden mt-2 py-2 rounded-md shadow-lg bg-gray-900">
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Open Positions</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Culture</a>
        </div>
      </div>


      <div class="dropdown nav-item">
        <div class="flex items-center justify-between" onclick="toggleDropdown(this)">
          Services <i class="fas fa-chevron-down ml-2 text-xs"></i>
        </div>
        <div class="dropdown-menu hidden mt-2 py-2 rounded-md shadow-lg bg-gray-900">
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Consulting</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Development</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Support</a>
        </div>
      </div>

    </div>
    <!-- Search Menu Overlay -->
    <div id="search-menu" class="hidden fixed top-0 left-0 w-full bg-black bg-opacity-90 z-50 py-2 px-4">
        <div class="flex items-center justify-between">
            <img src="../assets/images/Logo.png" alt="KOT Enterprises Logo" class="h-8 mr-4" />
            <input type="text" placeholder="Search KOT Enterprises" class="flex-grow bg-gray-800 text-white border-none px-4 py-2 rounded-md focus:outline-none">
            <button onclick="toggleSearch()" class="ml-4 text-white font-medium">Cancel</button>
        </div>
        <div class="mt-4 space-y-0">
            <a href="#" class="search-suggestion block text-gray-300 hover:text-white">Graphics</a>
            <a href="#" class="search-suggestion block text-gray-300 hover:text-white">Web Sculptures</a>
            <a href="#" class="search-suggestion block text-gray-300 hover:text-white">Projects</a>
        </div>
    </div>

<!-- header area end here -->
  <!-- IUTP-section-start -->
<div class="container-fluid iutp-bg-image mb-4 " >
   <!-- Marquee Section with Side Images on Left & Right -->
<div class="marquee-wrapper  position-relative d-flex align-items-center overflow-hidden" style="height: 60px;">
  
  <!-- Left Image -->
  <div class="position-absolute start-0 top-0 bottom-0 z-2 d-flex align-items-center px-2 ">
    <img src="../assets/images/marquee-left-image.png" alt="Left" class="marqueeajust" />
  </div>

  <!-- Scrolling Text -->
  <div class="marquee-text-container flex-grow-1 px-5">
  <div class="marquee-text-track">
    <div class="marquee-text fw-bold">
      <span>
        <img src="../assets/images/marquee.png" alt="">
      </span>
      KOT Enterprises priorities cultural values and well being of work spaces. Therefore staff will be visiting Siran Valley.
    </div>
    <div class="marquee-text fw-bold">
      <span>
        <img src="../assets/images/marquee.png" alt="">
      </span>
      KOT Enterprises priorities cultural values and well being of work spaces. Therefore staff will be visiting Siran Valley.
    </div>
  </div>
</div>


  <!-- Right Image -->
  <div class="position-absolute end-0 top-0 bottom-0 z-2 d-flex align-items-center px-2 ">
    <img src="../assets/images/marquee-right-image.png" alt="Right" class="marqueeajustright" style="margin-right: 11%;"/>
  </div>

</div>
<!-- marquee area end here -->
 <div class="home-main-container">
<div class="stmcs-main-text">
<div class="text-stmcs">
<h1>
    Where Smart Technology Meets Customer Success
    
</h1>
<p class="stmcs-p1" >Tech that empowers, service that delights</p>
<div class="text-stmcs-p">
    <p>Looking for a platform that adapts according to your needs? Where your creativity gets a boost? Look no further. We at KOT are determined to help our clients reach their goals in the most efficient manner.</p>
</div>
</div>
<div class="text-btn">
    <div class="text-stmcs-btn-1">
     <div class="">
        EXPLORE
     </div>
    </div>
    <div class="text-stmcs-btn-2">
          <div class="">
        
            CONTACT US
            
     </div>
    </div>
</div>
</div>

<div class="stmcs-bg-image">
<img src="../assets/images/home/home-bg-group.png" alt="">
</div>

 </div>


 </div>

<!-- end-Where Smart Technology Meets Customer Success -->


<!-- What We Offer-start -->
 <div class="wwo-main-container">
    <div class="wwo-main-container-text">
     <h1>What We Offer</h1>
     <p>KOT Enterprises was established in 2018. The idea behind its inauguration was to build a software house that not only provides the best solutions to your technological problems but also to humanize them. In this era of AI, KOT is determined to provide services that are ethically aligned. Discover the world of KOT by clicking below</p>
      <div class="btn-blue-img">
        <div class="">
        
            SEE ALL SERVICES
            
     </div>
      </div>
    </div>
    <div class="who-main-container-card">
        <div class="who-main-card-1">
       <div class="who-card-main-text-img-1">
        <div class="card-logo-img-1">
          <img src="../assets/images/home/AllLogos-1.png" alt="">
        </div>
        <div class="card-logo-bg-1">
          <p>An advanced Software Quality Assurance (SQA) and Software Quality Engineering and Control (SQEC) dedicated to your business to achieve the highest standard of software performance, reliability and security.</p>
        </div>
        <div class="card-logo-text-1">
           <a href="#" class="explore-btn-1">
                Explore <span class="arrow">→</span>
            </a>
        </div>
       </div>
        </div>
        <div class="who-main-card-2">
        <div class="who-card-main-text-img-2">
        <div class="card-logo-img-2">
          <img src="../assets/images/home/AllLogos3.png" alt="">
        </div>
        <div class="card-logo-bg-2">
            <p>An advanced e-commerce platform development service focused on building scalable, customized online stores, that drive customer satisfaction and maximize business growth.</p>
        </div>
        <div class="card-logo-text-2">
            <a href="#" class="explore-btn-2">
              Explore <span class="arrow">→</span>
            </a>
        </div>
       </div>
        </div>
        <div class="who-main-card-3">
            <div class="who-card-main-text-img-3">
        <div class="card-logo-img-3">
          <img src="../assets/images/home/AllLogos-2.png" alt="">
        </div>
        <div class="card-logo-bg-3">
           <p>An advanced Software Quality Assurance (SQA) and Software Quality Engineering and Control (SQEC) dedicated to your business to achieve the highest standard of software performance, reliability and security.</p>
        </div>
        <div class="card-logo-text-3">
            <a href="#" class="explore-btn-3">
                Explore <span class="arrow">→</span>
            </a>
        </div>
       </div>
        </div>
    </div>
 </div>
 <!-- check-our-product start -->
  <div class="container-fluid  ouc-main-bg-ouc mt-4">
  <h5 class="ouc-heading">Check our</h5>
  <h2 class=" mb-4">Products</h2>

  <div class="ouc-slider-section">
  

    <!-- Swiper Slider -->
    <div class="ouc-swiper-container swiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide ouc-swiper-slide">
          <div class="ouc-big">
            <div class="ouc-slide-img-wrapper">
              <img src="../assets/images/culture-image/slider-swiper-front-img.png" class="ouc-slide-img" alt="Front Image Missing">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide ouc-swiper-slide">
          <div class="ouc-big">
            <div class="ouc-slide-img-wrapper">
              <img src="../assets/images/culture-image/slider-swiper-front-img.png" class="ouc-slide-img" alt="Front Image Missing">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide ouc-swiper-slide">
          <div class="ouc-big">
            <div class="ouc-slide-img-wrapper">
              <img src="../assets/images/culture-image/slider-swiper-front-img.png" class="ouc-slide-img" alt="Front Image Missing">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Images -->
    <img src="../assets/images/our-benifits-images/wcb-left-slider-image.png" class="ouc-slider-side-image ouc-left-image" alt="">
    <img src="../assets/images/our-benifits-images/wcb-right-slider-image.png" class="ouc-slider-side-image ouc-right-image" alt="">

    <!-- Navigation Buttons -->
    <div class="ouc-swiper-button-prev swiper-button-prev"></div>
    <div class="ouc-swiper-button-next swiper-button-next"></div>
  </div>
</div>

<!--  -->

<!-- slider -->
 <div class="container-fluid main-two-slider-image mt-4">


<div class="dual-slider-container">
  <!-- Top Button -->
    <button class="v-up-btn">
      <img src="../assets/images/home/up.png" alt="Up">
    </button>

  <!-- 30% Vertical Slider -->
  <div class="vertical-slider">

    <!-- Top Button -->
    <!-- <button class="v-up-btn">
      <img src="../assets/images/home/up.png" alt="Up">
    </button> -->

    <!-- Slider Track -->
    <div class="v-slider-track">
      <div class="v-card"> 
        <h3>5+</h3>
        <p>Awards Won</p>
      </div>
      <div class="v-card"> 
        <h3>145+</h3>
        <p>Happy Customer</p>
      </div>
      <div class="v-card"> 
        <h3>352+</h3>
        <p>After Sales Support</p>
      </div>
    </div>

    <!-- Bottom Button -->
   

    <!-- Side Images -->
    <img src="../assets/images/home/home-fade-left.png" class="v-top-img" alt="">
    <img src="../assets/images/home/slider-left.png" class="v-left-img" alt="">
    <img src="../assets/images/home/slider-right.png" class="v-right-img" alt="">
    <img src="../assets/images/home/home-fade-right.png" class="v-bottom-img" alt="">

  </div>
 <button class="v-down-btn">
      <img src="../assets/images/home/down.png" alt="Down">
    </button>
  <!-- 70% Horizontal Slider -->
   <button class="left-btn"> < </button>
  <div class="horizontal-slider-wrapper">

    <!-- Left Button -->
    

    <!-- Left Blur -->
    <div class="h-blur-left">
      <img src="../assets/images/home/home-fade-left.png" alt="">
    </div> 

    <!-- Slider Track -->
    <div class="h-slider-track">
      <div class="h-card">
        <p>Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.</p>
        <p class="author">Ayesha Malik <br> <span  class="author-text" >Founder, InnovaCrafts</span> </p>
      </div>
      <div class="h-card">
        <p>Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.</p>
       <p class="author">Ayesha Malik <br> <span  class="author-text" >Founder, InnovaCrafts</span> </p>
      </div>
      <div class="h-card">
      <p>Working with KOT Enterprises has been a game changer for us. Their platform didn’t just adapt to our needs it anticipated them. Our team is now more productive, our customers are more engaged, and our processes have never been smoother. It truly feels like the technology is working with us, not just for us.</p>
        <p class="author">Ayesha Malik <br> <span  class="author-text" >Founder, InnovaCrafts</span> </p>
      </div>
    </div>

    <!-- Right Blur -->
    <div class="h-blur-right">
      <img src="../assets/images/home/home-fade-right.png" alt="">
    </div> 

  </div>
  
    
</div>
<!-- Right Button -->
    <button class="right-btn"> > </button>
 </div>
<!-- our blog-start -->
 <!-- Our Blogs Section -->
<section class="our-blog-section mt-4">
  <div class="our-blog-container">
    <h1 class="our-blog-heading">Our Blogs</h1>

    <div class="our-blog-card-wrapper">

      <!-- Card 1 -->
      <div class="our-blog-card">
        <h2>The Human Side of <br> Smart Tech: Why Ethics Matter in Innovation</h2>
        <p>
          In a world driven by algorithms and automation, ethical innovation is no longer optional it's
          essential. At KOT Enterprises, we believe that technology should serve people, not replace them.
          This blog dives into how human-centered design.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="our-blog-card">
        <h2>Ways Smart Tech is Revolutionizing Customer Experience</h2>
        <p>
          Customers today expect more than just service they expect smart service. In this article, we
          explore how AI, automation, and intelligent platforms are transforming customer journeys. From
          personalized interactions to real-time support, discover five practical ways businesses.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="our-blog-card">
        <h2>Building Solutions That Evolve with You: Inside KOT’s Development Philosophy</h2>
        <p>
          At KOT Enterprises, we don’t just create software — we build adaptable ecosystems designed to
          grow with your business. This blog offers a behind-the-scenes look at our agile development
          process, where flexibility, user feedback, and scalability guide.
        </p>
      </div>

    </div>
  </div>
</section>
<!-- our-blog-end -->

<!-- Your Journey Starts Here!-start -->
 <div class="yjs-contact-slider-section">
  <!-- Left Side Text -->
  <div class="yjs-contact-left">
    <h2>Your Journey Starts <br> Here!</h2>
    <p class="yjs-subtitle">SMART SOLUTIONS ARE JUST A CLICK AWAY</p>
    <p>
      Are you looking for top-quality Business solutions tailored to your needs? Reach out to us.
    </p>
 <div class="yjs-contact-info-section">
  <!-- Email Section -->
  <div class="yjs-contact-item">
    <img src="../assets/images/home/envelop.png" alt="Email Icon" class="yjs-icon">
    <div class="yjs-contact-text">
      <p class="yjs-label">Email</p>
      <p><a href="mailto:meerannasir@kot-e.com">meerannasir@kot-e.com</a></p>
    </div>
  </div>

  <!-- Phone Section -->
  <div class="yjs-contact-item">
    <img src="../assets/images/home/phone.png" alt="Phone Icon" class="yjs-icon-2">
    <div class="yjs-contact-text">
      <p class="yjs-label">Phone Number</p>
      <p><a href="tel:+16317781880">+1 631 778 1880</a></p>
    </div>
  </div>
</div>


  </div>

  <!-- Right Side: Vertical Slider + AI Robot -->
  <div class="yjs-contact-right">

    <!-- Vertical Slider Container -->
    <div class="yjs-vertical-slider-container">

      <!-- Up Button -->
      <button class="yjs-v-up-btn">
        <img src="../assets/images/home/up.png" alt="Up Button">
      </button>

      <!-- Fade Top as Image -->
      <img src="../assets/images/home/home-fade-left.png" class="yjs-v-fade-top" alt="Fade Top">

      <!-- Slider Track -->
      <div class="yjs-v-slider-track">
          <div class="yjs-v-slide-1"><p>Hey there! 👋 I’m KOT’s smart 
  assistant, here to guide you through anything you need fast, simple, and stress-free. Whether you’re curious about our services, need support, or just want to say hi, I’ve got you covered! 
  ➡️ How can I help today?</p></div>
        <div class="yjs-v-slide-2"><p>
          Type Here....
        </p></div>
       
      </div>

      <!-- Fade Bottom as Image -->
      <img src="../assets/images/home/home-fade-right.png" class="yjs-v-fade-bottom" alt="Fade Bottom">

      <!-- Down Button -->
      <button class="yjs-v-down-btn">
        <img src="../assets/images/home/down.png" alt="Down Button">
      </button>

    </div>

    <!-- AI Robot -->
    <div class="yjs-ai-robot">
      <img src="../assets/images/home/yjs-Ai-robot.png" alt="AI Robot">
    </div>

  </div>
</div>
<!-- Your Journey end Here!  -->

<!-- footer-section start -->
 <footer class="footer">
      <div class="container-fluid foot ">
        <div class="col-md-4">
   <p style="font-size: 10px;
    margin-top: 20px; font-weight: 700;
">
          This website is authorized for office use externally or internally
          marked or addressed medium copying or posting is an infringement. This
          website may not be addressed or otherwise reproduced, posted or
          transmitted, without the permission of the Chief Executive Officer at
          KOT ENTERPRISES (PRIVATE) LIMITED.
        </p>
        </div>
        <div class="col-md-4"
        style="    align-content: center;
    margin-left: 8%;">
  <p>&copy; 2019 KOT Enterprises. All rights reserved.</p>
        </div>
        <div class="col-md-4" style="    align-content: center;
    margin-left: 16%;
">
 <i class="fab fa-facebook-f social-icon"></i>
        <i class="fab fa-instagram social-icon"></i>
        <i class="fab fa-twitter social-icon"></i>
        <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
     // single image slider
    var oucSwiper = new Swiper('.ouc-swiper-container', {
  loop: true,
  autoplay: { delay: 2000 },
  speed: 2000,
  slidesPerView: 1.2,
  spaceBetween: 50,
  navigation: {
    nextEl: '.ouc-swiper-button-next',
    prevEl: '.ouc-swiper-button-prev'
  }
});

// ===== Horizontal Slider =====
const hTrack = document.querySelector(".h-slider-track");
const hCards = document.querySelectorAll(".h-card");

// Duplicate content for infinite scroll
hTrack.innerHTML += hTrack.innerHTML;

let hPosition = 0;
function horizontalMarquee() {
  hPosition -= 0.5; // speed (smaller = slower)
  if (Math.abs(hPosition) >= hTrack.scrollWidth / 2) {
    hPosition = 0;
  }
  hTrack.style.transform = `translateX(${hPosition}px)`;
  requestAnimationFrame(horizontalMarquee);
}
horizontalMarquee();

// ===== Vertical Slider =====
const vTrack = document.querySelector(".v-slider-track");
vTrack.innerHTML += vTrack.innerHTML;

let vPosition = 0;
function verticalMarquee() {
  vPosition -= 0.3; // speed
  if (Math.abs(vPosition) >= vTrack.scrollHeight / 2) {
    vPosition = 0;
  }
  vTrack.style.transform = `translateY(${vPosition}px)`;
  requestAnimationFrame(verticalMarquee);
}
verticalMarquee();


const sliderTrack = document.querySelector(".yjs-v-slider-track");
  const slides = sliderTrack.children;
  const totalSlides = slides.length;
  let currentIndex = 0;

  function scrollToSlide(index) {
    const slideTop = slides[index].offsetTop;
    sliderTrack.scrollTo({
      top: slideTop,
      behavior: "smooth"
    });
  }

  // Down Button
  document.querySelector(".yjs-v-down-btn").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    scrollToSlide(currentIndex);
  });

  // Up Button
  document.querySelector(".yjs-v-up-btn").addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    scrollToSlide(currentIndex);
  });

  // Auto Scroll Every 5 seconds
  setInterval(() => {
    currentIndex = (currentIndex + 1) % totalSlides;
    scrollToSlide(currentIndex);
  }, 5000);
</script>

</body>
</html>