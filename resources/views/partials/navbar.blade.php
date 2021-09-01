<div
x-data="{show: false}" 
id="navbar" 
class="sticky top-0 bg-primary">
    <header>
      <div class="relative">
        <div class="flex items-center justify-between px-4 py-6 mx-auto rocky-windsong max-w-7xl sm:px-6 md:justify-start md:space-x-10 lg:px-8">
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#" class="hover:text-secondary">
              <span class="sr-only">Poppy's Balloons</span>
              <img class="w-auto h-8 sm:h-10" src="/img/balloons.png" alt="">
            </a>
            <a href="#" class="text-xl font-medium text-white">Poppy's Balloons</a>
          </div>
  
          <div 
          @click="show = true"
          class="-my-2 -mr-2 md:hidden">
            <button 
            type="button"
           
            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md bg-primary hover: hover:bg-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500" aria-expanded="false">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="white" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
  
          <nav class="hidden space-x-10 md:flex">
  
            <a href="#services" class="text-base font-medium text-white nav-link drop-shadow hover:text-secondary">
              Party Services
            </a>

            <a href="#portfolio" class="text-base font-medium text-white nav-link hover:text-secondary">
                Portfolio
              </a>
  
            <a href="#about-me" class="text-base font-medium text-white nav-link hover:text-secondary">
              About Me
            </a>
  
            <a href="#contact" class="text-base font-medium text-white nav-link hover:text-secondary">
              Contact Me
            </a>
            
        
  
  
          </nav>
         
        </div>
  
  
  
  
  
  
  


        <!--
          Mobile menu, show/hide based on mobile menu state.
        -->
        <div class="absolute inset-x-0 top-0 z-30 p-2 transition origin-top-right transform rocky-windsong md:hidden"
        :class="{'hidden': !show}">
          <div class="divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-primary divide-gray-50">
            <div 
            
            class="px-5 pt-5 pb-6">
              <div class="flex items-center justify-between">

                  {{-- Logo start --}}
                <div class="block">
                    <a href="">
                  <img class="w-auto h-8" src="/img/balloons.png" alt="Poppy's Balloons">
                    </a>
                  <a href="#" class="text-xl font-medium text-white">Poppy's Balloons</a>
                </div>
                {{-- Logo End --}}
  
                <div class="-mr-2"
                @click="show = false"
                @click.away="show = false"
                >
                  <button   
                  type="button" 
                  class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md bg-primary hover: hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Close menu</span>

                    <!-- Heroicon name: outline/x -->
                    <svg 
                    
                    class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
  
              <div class="mt-6" 
              >
                <nav class="grid grid-cols-1 gap-7">
                    
                  <a href="#services" class="flex items-center p-3 -m-3 text-white rounded-lg hover:bg-gray-50">
                    <div class="ml-4 text-base font-medium text-white hover:text-black">
                      Party Services
                    </div>
                  </a>
  
                  <a href="#about-me" class="flex items-center p-3 -m-3 text-white rounded-lg hover:bg-gray-50">
                    <div class="ml-4 text-base font-medium text-white hover:text-black">
                      About Me
                    </div>
                  </a>
  
                  <a href="#contact" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="ml-4 text-base font-medium text-white hover:text-black">
                      Contact Me
                    </div>
                  </a>
  
                  
                  <a href="" class="">
                    <span class="inline-flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="white">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /> 
                    </svg>
                    <p class="pl-1 text-base font-medium text-white hover:text-black">Call Now: 719-354-7012</p>
                  </span>
                  </a>
  
                </nav>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </header>
  </div>
  