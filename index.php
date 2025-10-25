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
    I'm a <span class="text-[#1e0536]">Web Developer</span>
  </h2>

  <div class="flex flex-col sm:flex-row items-center justify-center gap-2 text-gray-300">
    <p>Currently, I'm a Web Developer at</p>
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


<section class="mt-24 px-4 max-w-4xl mx-auto text-white">
  <h2 class="text-3xl sm:text-5xl font-semibold mb-10 text-center">
    Work <span class="text-[#1e0536]">Experience</span>
  </h2>

  <div class="grid gap-8 sm:gap-10 sm:flex sm:jusrtify-center">
    <!-- Facebook -->
    <div class="bg-[#1e0536]/10 border border-[#1e0536]/20 rounded-2xl p-6 sm:p-8 shadow-md hover:shadow-lg transition-all duration-300">
      <h3 class="text-xl sm:text-2xl font-semibold text-[#e5e5e5]">
        Web Developer at <span class="text-[#1877F2]">Facebook</span>
      </h3>
      <p class="text-gray-400 text-sm sm:text-base mt-1">Jan 2021 – Present</p>
      <ul class="list-disc list-inside mt-3 text-gray-300 space-y-2 text-sm sm:text-base">
        <li>Developed and maintained web applications using React and Node.js.</li>
        <li>Collaborated with cross-functional teams to design user-friendly interfaces.</li>
        <li>Optimized application performance, achieving a 20% faster load time.</li>
      </ul>
    </div>

    <!-- Google -->
    <div class="bg-[#1e0536]/10 border border-[#1e0536]/20 rounded-2xl p-6 sm:p-8 shadow-md hover:shadow-lg transition-all duration-300">
      <h3 class="text-xl sm:text-2xl font-semibold text-[#e5e5e5]">
        Frontend Developer at <span class="text-[#DB4437]">Google</span>
      </h3>
      <p class="text-gray-400 text-sm sm:text-base mt-1">Jun 2018 – Dec 2020</p>
      <ul class="list-disc list-inside mt-3 text-gray-300 space-y-2 text-sm sm:text-base">
        <li>Implemented responsive designs using HTML, CSS, and JavaScript.</li>
        <li>Worked closely with designers to maintain brand consistency.</li>
        <li>Conducted user testing and refined UI/UX based on feedback.</li>
      </ul>
    </div>
  </div>
</section>


<section class="skill-sec mt-32 px-6 max-w-5xl mx-auto text-center">
  <!-- Heading -->
  <h2 class="text-xl sm:text-2xl md:text-3xl font-medium text-gray-200 leading-relaxed">
    I'm currently looking to join a cross-functional team that values improving people's lives through 
    <span class="text-[#1e0536] font-semibold">accessible design</span>.
  </h2>

  <!-- Skill Icons Row 1 -->
  <div class="flex flex-wrap justify-center gap-6 mt-12">
    <img src="./assets/js.png" alt="JavaScript" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/cpp.png" alt="C++" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/java.png" alt="Java" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/python.png" alt="Python" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/html-5.png" alt="HTML" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/coding (1).png" alt="Coding" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/skill.png" alt="Skills" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
  </div>

  <!-- Skill Icons Row 2 -->
  <div class="flex flex-wrap justify-center gap-6 mt-6">
    <img src="./assets/responsive.png" alt="Responsive Design" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/ml.png" alt="Machine Learning" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/figma.png" alt="Figma" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/css-3.png" alt="CSS" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
    <img src="./assets/artificial-intelligence.png" alt="AI" class="w-10 h-10 sm:w-12 sm:h-12 hover:scale-110 transition-transform duration-300">
  </div>
</section>



  </main>
<footer>

</footer>
<script src="./scripts/main.js"></script>
</body>
</html>