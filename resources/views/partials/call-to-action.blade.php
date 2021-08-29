@if(session()->has('success'))
@include('partials.success-message')
@endif

<div class="relative py-16">
    <div class="absolute inset-x-0 top-0 hidden bg-accent-one h-1/2 lg:block" aria-hidden="true"></div>
    <div class="mx-auto max-w-7xl 
    bg-primary 
    lg:bg-transparent lg:px-8">
      <div class="lg:grid lg:grid-cols-12">
        <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
          <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
          <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
            <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
              <img class="object-fill object-center shadow-2xl rounded-3xl" src="/img/balloon_animal.jpg" alt="">
            </div>
          </div>
        </div>
  
        <div class="relative 
        bg-primary 
        lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
          <div class="relative max-w-md px-4 py-12 mx-auto space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
            <h2 class="text-3xl font-extrabold text-white" id="join-heading">Bringing Life to the Party!</h2>
            <p class="text-lg text-white">I bring fun and advenrure to birthdays, weddings, and everything inbetween!</p>
            <a class="block w-full 
            px-5 py-3 text-base 
            font-medium text-center 
            border border-white rounded-md 
            shadow-md text-white 
            bg-yellow-500
            hover:bg-white 
            hover:text-yellow-500 
            sm:inline-block sm:w-auto" href="#">Contact Me Now!</a>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  