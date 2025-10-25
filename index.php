<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHEIKH</title>
  <link rel="stylesheet" href="./dist/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  
</head>
<body class="bg-[#7a5f9d] text-white mx-auto p-10"> 

  <header>
    <nav class="flex flex-wrap items-center justify-between">

      <div class="flex items-center justify-between w-full sm:w-auto">
        <img src="./assets/home.png" alt="home-icon" class="w-8 h-8">
        
        <!-- Hamburger Button (Visible on small screens) -->
        <button id="menu-btn" class="sm:hidden text-white focus:outline-none">
          <!-- Hamburger Icon -->
          <img src="./assets/menu-burger.png" alt="menu-burgericon" class="w-8 h-8">
        </button>
      </div>

      <!-- Navigation Links -->
      <ul id="menu" class="hidden flex-col sm:flex sm:flex-row sm:gap-10 text-lg font-semibold w-full sm:w-auto mt-4 sm:mt-0">
        <li class="cursor-pointer hover:text-gray-300">HOME</li>
        <li class="cursor-pointer hover:text-gray-300">ABOUT</li>
        <li class="cursor-pointer hover:text-gray-300">LAB</li>
        <li class="cursor-pointer hover:text-gray-300">CONTACT</li>
      </ul>
    </nav>
  </header>
  <script>
    // Mobile Menu Toggle Script
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
  <div class="banner mt-24 text-center sm:text-left flex flex-col items-center sm:flex-row sm:justify-center sm:gap-10">
  <!-- Text Section -->
  <div class="hero-info flex flex-col items-center sm:items-start gap-3 max-w-md">
    <p class="text-gray-200 text-sm sm:text-base">
      Hello! I am 
      <span class="text-[#1e0536] font-extrabold">ABDULLAH SHEIKH</span>
    </p>
    <p class="text-gray-300 text-base sm:text-lg">A developer who</p>
    <h2 class="text-3xl sm:text-5xl font-semibold leading-tight text-white">
      Judges a book<br>
      by its <span class="text-[#1e0536]">cover</span>...
    </h2>
    <p class="text-xs sm:text-sm text-gray-400 mt-2">
      Because if the cover does not impress you, what else can?
    </p>
  </div>

  <!-- Image Section -->
  <div class="mt-10 sm:mt-0">
    <img src="./assets/coding.png" alt="coding icon" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto sm:mx-0">
  </div>
</div>

  </div>



  </header>
<main>
  <section class="intro-sec mt-20 max-w-3xl mx-auto px-4 text-center flex flex-col items-center gap-5">
  <h2 class="text-3xl sm:text-5xl font-semibold text-white">
    I'm a <span class="text-[#1e0536]">Software Engineer</span>
  </h2>

  <div class="flex flex-col sm:flex-row items-center justify-center gap-2 text-gray-300">
    <p>Currently, I'm a Software Engineer at</p>
    <div class="flex items-center gap-2">
      <img src="./assets/facebook.png" alt="facebook icon" class="w-5 h-5">
      <a href="https://www.facebook.com/" target="_blank" class="text-[#1877F2] font-medium hover:underline">
        Facebook
      </a>
    </div>
  </div>

  <p class="text-sm sm:text-base text-gray-400 leading-relaxed max-w-2xl">
    A self-taught developer with over 3 years of experience in the industry.  
    I create meaningful and delightful digital products that balance  
    <span class="text-white font-medium">user needs</span> and  
    <span class="text-white font-medium">business goals</span>.
  </p>
</section>


  </main>
<footer>

</footer>
<script src="./scripts/main.js"></script>
</body>
</html>