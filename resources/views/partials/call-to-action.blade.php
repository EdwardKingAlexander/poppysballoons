@if(session()->has('success'))
@include('partials.success-message')
@endif

@if($errors->any())
@include('partials.form-issues')
@endif

<div class="relative py-16">
    <div class="absolute inset-x-0 top-0 hidden bg-accent-one h-1/2 lg:block" aria-hidden="true"></div>
    <div class="mx-auto max-w-7xl bg-primary lg:bg-transparent lg:px-8">
      <div class="lg:grid lg:grid-cols-12">
        <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
          <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
          <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
            <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
              <img class="object-fill object-center shadow-2xl rounded-3xl" src="/img/balloon_animal.jpg" alt="{{ __('lang.call-to-action-picture') }}">
            </div>
          </div>
        </div>
  
        <div class="relative bg-primary lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
          <div class="relative max-w-md px-4 py-12 mx-auto space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
            <h2 class="text-4xl font-semibold text-white rocky-windsong" id="join-heading">
              {{ __('lang.call-to-action-title') }}
            </h2>
            <p class="text-lg text-white">
              {{ __('lang.call-to-action-description') }}
            </p>
            <a class="block w-full px-5 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-yellow-500 border border-white rounded-md shadow-md hover:-translate-y-1 hover:scale-110 hover:bg-white hover:text-yellow-500 hover:font-extrabold sm:inline-block sm:w-auto" href="tel:7193547012">
              {{ __('lang.call-to-action-button') }}
            </a>
          
          </div>
        </div>
      </div>
    </div>
  </div>
  