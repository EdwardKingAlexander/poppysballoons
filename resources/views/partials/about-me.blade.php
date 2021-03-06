<div class="anchor" id="about-me"></div>
<div class="overflow-hidden bg-primary">
    <div class="relative px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="absolute top-0 bottom-0 hidden w-screen lg:block bg-gray-50 left-3/4"></div>
      <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
        <div>
          <h2 class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-white rocky-windsong text-shadow-accent-three sm:text-4xl">
            {{ __('lang.about-me-heading') }}
          </h2>
        </div>
      </div>
      <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
        <div class="relative lg:row-start-1 lg:col-start-2">
          <svg class="absolute top-0 right-0 hidden -mt-20 -mr-20 lg:block" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
            <defs>
              <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-yellow-500" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
          </svg>
          <div class="relative mx-auto text-base max-w-prose lg:max-w-none">
            <figure>
              <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                <img class="object-cover object-center shadow-lg rounded-3xl" src="/img/rocio.jpg" alt="Rocio showcasing her art" width="1184" height="1376">
              </div>
              <figcaption class="flex mt-3 text-sm text-white">
                <!-- Heroicon name: solid/camera -->
                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" aria-hidden="true">
                  <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2">
                  {{ __('lang.about-me-picture-caption') }}
                </span>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="mt-8 text-white lg:mt-0">
          <div class="mx-auto text-base max-w-prose lg:max-w-none text-shadow">
            <p class="text-lg ">
              {{ __('lang.about-me-text-1') }}
            </p>
          </div>
          <div class="mx-auto mt-5 prose text-white prose-indigo lg:max-w-none lg:row-start-1 lg:col-start-1">
            <p>
              {{ __('lang.about-me-text-2') }}
            </p>
            <p>
              {{ __('lang.about-me-text-3') }}
            </p>
            <p>
              {{ __('lang.about-me-text-4') }}
            </p>
            <ul role="list">
              <li>
                {{ __('lang.about-me-list-1') }}
              </li>
              <li>
                {{ __('lang.about-me-list-2') }}
              </li>
              <li>
                {{ __('lang.about-me-list-3') }}
              </li>
            </ul>
            <p>
              {{ __('lang.about-me-text-5') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  