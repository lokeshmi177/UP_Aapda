<header>
  <div class="px-4 sm:px-6 md:px-10 bg-zinc-100 flex flex-wrap justify-between items-center border-b border-zinc-400 py-4">

    <div class="flex justify-center items-center gap-3">
      <img class="h-12 sm:h-16 md:h-20 rounded-full" 
           src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Seal_of_Uttar_Pradesh.svg/478px-Seal_of_Uttar_Pradesh.svg.png" 
           alt="Logo">
      <div class="text-sm sm:text-base font-semibold">
        <p>राहत आयुक्त कार्यालय</p>
        <p>उत्तर प्रदेश सरकार</p>
      </div>
    </div>


    <div class="gap-2 flex justify-center items-center mt-4 sm:mt-0 flex-wrap text-center sm:text-left">
      <div class="text-zinc-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3H4a4 4 0 0 0 2-3v-3a7 7 0 0 1 4-6"/>
          <path d="M9 17v1a3 3 0 0 0 6 0v-1"/>
        </svg>
      </div>
      <img class="w-10 h-10 rounded-full bg-zinc-600" src="" alt="Profile">
      <div class="text-xs sm:text-sm">
        <h4 class="font-semibold text-zinc-800">ADM FR Lucknow(Rluc157)</h4>
        <p class="text-zinc-600">Last Login: <span>15/09/2023 01:41 PM</span></p>
      </div>
    </div>
  </div>


  <nav class="bg-white border-b border-zinc-300 sticky">
    <div class="px-4 sm:px-6 md:px-10 flex justify-between items-center py-3">

      <button id="menu-btn" class="md:hidden p-2 border rounded text-zinc-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>


      <div class="hidden md:flex gap-6 items-center font-semibold text-zinc-700">
        <a href="#">डैशबोर्ड</a>
        <div class="relative group">
          <button class="flex items-center gap-2">नोडल/मास्टर प्रबन्धन</button>
          <div class="absolute left-0 top-full w-[180px] p-4 bg-white shadow-lg hidden group-hover:block">
            <ul class="space-y-1 text-gray-600">
              <li><a href="#" class="hover:text-blue-500">नोडल</a></li>
              <li><a href="#" class="hover:text-blue-500">मास्टर प्रबन्धन</a></li>
            </ul>
          </div>
        </div>
        <a href="#">राहत कार्य</a>
        <a href="#">अनुदान</a>
        <div class="relative group">
          <button class="flex items-center gap-2">बजट माँग/SDG व्यय</button>
          <div class="absolute left-0 top-full w-[180px] p-4 bg-white shadow-lg hidden group-hover:block">
            <ul class="space-y-1 text-gray-600">
              <li><a href="#" class="hover:text-blue-500">बजट माँग</a></li>
              <li><a href="#" class="hover:text-blue-500">SDG व्यय</a></li>
            </ul>
          </div>
        </div>
        <a href="#">प्रोफ़ाइल</a>
        <a href="#">लॉगआउट</a>
      </div>
    </div>


    <div class="md:hidden hidden flex-col gap-2 px-6 pb-4 font-semibold text-zinc-700" id="mobile-menu">
      <a href="#">डैशबोर्ड</a>


      <div>
        <button class="w-full text-left flex justify-between items-center py-2" onclick="toggleDropdown('menu1')">
          नोडल/मास्टर प्रबन्धन
          <span>+</span>
        </button>
        <div id="menu1" class="hidden pl-4 space-y-1">
          <a href="#"><p class="hover:text-blue-500">नोडल</p></a>
          <a href="#"><p class="hover:text-blue-500">मास्टर प्रबन्धन</p></a>
        </div>
      </div>

      <a href="#">राहत कार्य</a>
      <a href="#">अनुदान</a>

      <div>
        <button class="w-full text-left flex justify-between items-center py-2" onclick="toggleDropdown('menu2')">
          बजट माँग/SDG व्यय
          <span>+</span>
        </button>
        <div id="menu2" class="hidden pl-4 space-y-1">
          <a href="#"><p class="hover:text-blue-500">बजट माँग</p></a>
          <a href="#"><p class="hover:text-blue-500">SDG व्यय</p></a>
        </div>
      </div>

      <a href="#">प्रोफ़ाइल</a>
      <a href="#">लॉगआउट</a>
    </div>
  </nav>
</header>

<script>
  // Mobile menu toggle
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });

  // Dropdown toggle for mobile
  function toggleDropdown(id) {
    const el = document.getElementById(id);
    el.classList.toggle("hidden");
  }
</script>