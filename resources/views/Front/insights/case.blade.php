<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSIV - case studies</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
   @vite('resources/css/app.css')
   @vite('resources/js/app.js')
  <body>
     <header class="">
      <nav
        class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
        aria-label="Global"
      >
        <div class="flex lg:flex-1">
          <!-- <a href="{{ route('home') }}" class="-m-1.5 p-1.5"> -->
          <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
            <span class="sr-only">LSIV</span>
            <img
              class="h-16 w-auto"
              src="{{ asset('Images/LSIV-Logo.png') }}"
              alt="LSIV LOGO"
            />
          </a>
        </div>
        <div class="flex lg:hidden">
          <button
            id="mobile-menu-toggle"
            type="button"
            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true"
              data-slot="icon"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <div class="relative group">
            <button
              type="button"
              class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 font-opensans"
            >
              About us
            </button>

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-48 bg-white rounded-md shadow-lg"
            >
              <ul class="py-1 text-sm text-gray-700">
                <li>
                  <!-- href="{{ url('About-WhoWeAre') }}" -->
                  <a
                    href="{{ url('About-WhoWeAre') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Who we are <span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <!-- href="{{ url('About-OurJouney') }}" -->
                  <a
                    href="{{ url('About-OurJouney') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Our Jouney<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <a
                    href="{{ url('About-Thematics') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Our Thematic areas<span class="hover-arrow"
                      >&rarr;</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    href="{{ url('About-OurJouney') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >About the Founder<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="relative group inline-block">
            <a
              href="#"
              class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
              >Work with us</a
            >

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-40 bg-white rounded-md shadow-lg"
            >
              <ul class="py-1 text-sm text-gray-700">
                <li>
                  <a
                    href="{{ url('Work-Services') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Services<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <a
                    href="{{ url('Work-Work') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >How we work<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
              </ul>
            </div>
          </div>

          <a
            href="{{ url('Initiatives-Initiatives') }}"
            class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
            >Our initiatives</a
          >
          <div class="relative group inline-block">
            <a
              href="#"
              class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
              >Insights</a
            >

            <!-- Dropdown menu -->
            <div
              class="absolute hidden group-hover:block mt-2 w-52 bg-white rounded-md shadow-lg"
            >
              <ul class="py-1 text-sm text-gray-700">
                <li>
                  <a
                    href="{{ url('Insights-Caee') }}"
                    class="block px-4 py-2 hover-effect-arrow"
                    >Case studies<span class="hover-arrow">&rarr;</span></a
                  >
                </li>
                <li>
                  <a href="{{ url('Insights-Media') }}" class="block px-4 py-2 hover-effect-arrow"
                    >Media & Knowledge Hub<span class="hover-arrow"
                      >&rarr;</span
                    ></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a
            href="#"
            class="text-sm font-semibold leading-6 text-gray-900 font-opensans"
          >
            <!-- Button HTML -->
            <button class="btn-bg-animation">
              <span class="btn-text">Contact us</span>
            </button>
          </a>
        </div>
      </nav>

      <!-- Mobile menu -->
      <div
        id="mobile-menu"
        class="lg:hidden hidden"
        role="dialog"
        aria-modal="true"
      >
        <div class="fixed inset-0 z-10"></div>
        <div
          class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
        >
          <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">LSIV</span>
              <img
                class="h-8 w-auto"
                src="{{ asset('Images/LSIV-Logo.png') }}"
                alt="LSIV LOGO"
              />
            </a>
            <button
              id="close-menu"
              type="button"
              class="-m-2.5 rounded-md p-2.5 text-gray-700"
            >
              <span class="sr-only">Close menu</span>
              <svg
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                aria-hidden="true"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6 18 18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <!-- About us with dropdown -->
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="about-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('about-dropdown')"
                  >
                    About us
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="about-dropdown" class="dropdown-content pl-6">
                    <a
                      href="{{ url('About-WhoWeAre') }}"
                      class="block px-4 py-2 hover-effect-arrow"
                      >Who we are <span class="hover-arrow">&rarr;</span></a
                    >
                    <a
                      href="{{ url('About-OurJouney') }}"
                      class="block px-4 py-2 hover-effect-arrow"
                      >Our Jouney<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('About-Thematics') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Our Thematic areas<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                    <a href="{{ url('About-Founder') }}" class="block px-4 py-2 hover-effect-arrow"
                      >About the Founder<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                  </div>
                </div>

                <!-- Work with us -->
                <a
                  href="#"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                ></a>
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="insights-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('work-dropdown')"
                  >
                    Work with us
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="insights-dropdown" class="dropdown-content pl-6">
                    <a href="{{ url('Work-Services') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Services<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('Work-Work') }}" class="block px-4 py-2 hover-effect-arrow"
                      >How we work<span class="hover-arrow">&rarr;</span></a
                    >
                  </div>
                </div>

                <!-- Insights with dropdown -->
                <div class="-mx-3">
                  <button
                    type="button"
                    class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                    aria-controls="insights-dropdown"
                    aria-expanded="false"
                    onclick="toggleDropdown('insights-dropdown')"
                  >
                    Insights
                    <svg
                      class="h-5 w-5 flex-none"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="1.5"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19 9l-7 7-7-7"
                      />
                    </svg>
                  </button>
                  <div id="insights-dropdown" class="dropdown-content pl-6">
                    <a href="{{ url('Insights-Case') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Case studies<span class="hover-arrow">&rarr;</span></a
                    >
                    <a href="{{ url('Insights-Media') }}" class="block px-4 py-2 hover-effect-arrow"
                      >Media & Knowledge Hub<span class="hover-arrow"
                        >&rarr;</span
                      ></a
                    >
                  </div>
                </div>

                <a
                  href="{{ url('Initiatives-Initiatives') }}"
                  class="-mx-3 block rounded-lg px-3 py-2 text-base font-bold leading-7 text-gray-900 hover:bg-gray-50"
                  >Our initiatives</a
                >
              </div>
              <div class="py-6">
                <a
                  href="#"
                  class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                >
                  <button class="btn-bg-animation">
                    <span class="btn-text">Contact us</span>
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <!-- our work in action -->
      <section class="bg-white py-16 rounded">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
          <h1
            class="md:text-5xl lg:text-7xl text-3xl mb-6 font-playfair font-semibold md:w-1/2 leading-normal"
          >
            A collection of our <span class="text-primary"> impact </span>
            in action
          </h1>
            <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 my-8"
          >
            <!-- Card  -->
            @foreach($blogs as $blog)
             <a href="{{ url('client/blog', $blog->id) }}">
            <div
              class="bg-white rounded-lg overflow-hidden w-full relative group flex flex-col items-start"
            >
              <img
                src="{{ asset($blog->cover_image) }}"
                alt="{{ $blog->title }}"
                class="w-full h-96 object-cover rounded-lg transition duration-500 group-hover:filter group-hover:grayscale group-hover:brightness-50"
              />
              <div
                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500"
              >
                <span
                  class="text-white font-bold text-xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-500 ease-in-out"
                  >Read Case Study</span
                >
              </div>
              <div class="p-0">
                <h2 class="font-semibold text-2xl impact-styles">
                  {{ $blog->title }}
                </h2>
              </div>
            </div>
          </a>
            @endforeach

          </div>
          </div>
      </section>
    </main>
    <footer class="bg-accentTextLight py-8">
      <div class="container mx-auto px-4">
        <!-- Top section -->
        <div
          class="grid grid-cols-1 md:grid-cols-5 gap-4 text-center md:text-left"
        >
          <!-- Logo and description -->
          <div class="md:col-span-1">
            <img
              src="{{ asset('Images/LSIV-Logo.png') }}"
              alt="LSIV Logo"
              class="w-24 mx-auto md:mx-0 mb-4"
            />
            <p
              class="text-gray-700 text-base"
              style="font-weight: 400; line-height: 26px"
            >
              A strategic advocacy and communications agency dedicated to
              creating a more equitable world.
            </p>
            <p
              class="text-gray-700 mt-2 text-base"
              style="font-weight: 400; line-height: 26px"
            >
              To partner with us on a project,<br />
              reach us at:
              <a href="mailto:info@lsiv.org" class="text-black-600 font-bold"
                >info@lsiv.org</a
              >
            </p>
          </div>

          <!-- About us section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              About us
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('About-WhoWeAre') }}" class="hover:text-orange-600"
                  >Who we are</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-orange-600"
                  >Our History and Milestones</a
                >
              </li>
              <li>
                <a
                  href="{{ url('About-Thematics') }}"
                  class="hover:text-orange-600"
                  >Our Thematic areas</a
                >
              </li>
              <li>
                <a href="{{ url('About-Founder') }}" class="hover:text-orange-600"
                  >About the Founder</a
                >
              </li>
              <li>
                <a href="#" class="hover:text-orange-600">Meet the Team</a>
              </li>
            </ul>
          </div>

          <!-- Initiatives section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Initiatives
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a
                  href="{{ url('Initiatives-MyBodyIsMine') }}"
                  class="hover:text-orange-600"
                  >MyBodyIsMine</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-MyBodyIsMine') }}"
                  class="hover:text-orange-600"
                  >Adopt a Community</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Nodaysoff') }}"
                  class="hover:text-orange-600"
                  >No Day Off</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Conversation') }}"
                  class="hover:text-orange-600"
                  >The Conversation</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Storiesunhear') }}"
                  class="hover:text-orange-600"
                  >Stories Untold</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Initiatives-Lolocythia') }}"
                  class="hover:text-orange-600"
                  >The Lolo Cynthia Show</a
                >
              </li>
            </ul>
          </div>

          <!-- Work with us section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Work with us
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('Work-Services') }}" class="hover:text-orange-600"
                  >Services</a
                >
              </li>
              <li>
                <a
                  href="{{ url('Work-Work') }}"
                  class="hover:text-orange-600"
                  >How we Work</a
                >
              </li>
            </ul>
          </div>

          <!-- Insights section -->
          <div>
            <h3 class="text-gray-800 font-bold mb-3 footer-text-header">
              Insights
            </h3>
            <ul class="text-gray-600 space-y-2">
              <li>
                <a href="{{ url('Insights-Case') }}" class="hover:text-orange-600"
                  >Case studies</a
                >
              </li>
              <li>
                <a href="{{ url('Insights-Media') }}" class="hover:text-orange-600"
                  >Media & Knowledge Hub</a
                >
              </li>
            </ul>
          </div>
        </div>

        <!-- Bottom section -->
        <div class="flex space-x-4 mt-4 md:mt-0 justify-end">
          <!-- Social icons (replace with actual icons or images) -->
          <a href="#" class="text-dark-600 hover:text-orange-600">
            <!-- YouTube Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M23.5 6.6c-.2-1.5-1.5-2.7-3-2.9C17.6 3 12 3 12 3s-5.6 0-8.5.7c-1.5.2-2.8 1.4-3 2.9-.4 2-.4 6-.4 6s0 4 .4 6c.2 1.5 1.5 2.7 3 2.9 2.9.7 8.5.7 8.5.7s5.6 0 8.5-.7c1.5-.2 2.8-1.4 3-2.9.4-2 .4-6 .4-6s0-4-.4-6zM9.8 15.5v-7l6.3 3.5-6.3 3.5z"
              />
            </svg>
          </a>

          <a href="#" class="text-dark-600 hover:text-orange-600">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11.27 20h-2.72v-9h2.72v9zm-1.36-10.3c-.87 0-1.57-.7-1.57-1.57s.7-1.57 1.57-1.57 1.57.7 1.57 1.57-.7 1.57-1.57 1.57zm12.63 10.3h-2.72v-4.75c0-1.13-.04-2.58-1.57-2.58-1.57 0-1.81 1.23-1.81 2.49v4.84h-2.72v-9h2.61v1.23h.04c.36-.69 1.25-1.42 2.57-1.42 2.75 0 3.26 1.81 3.26 4.17v5.02z"
              />
            </svg>
          </a>
          <a href="#" class="text-dark-600 hover:text-orange-600 icon-hover">
            <!-- Twitter (X) Icon -->
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="currentColor"
            >
              <path
                d="M18.3265 1.9043H21.7L14.33 10.3278L23 21.7903H16.2115L10.894 14.8383L4.81 21.7903H1.4345L9.3175 12.7803L1 1.9043H7.961L12.7675 8.2588L18.3265 1.9043ZM17.1425 19.7703H19.0115L6.9455 3.8173H4.9395L17.1425 19.7703Z"
              />
            </svg>
          </a>
          <a href="#" class="text-dark-600 hover:text-orange-600">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-6 w-6"
            >
              <path
                d="M12 0c3.3 0 3.7 0 5.1.1 1.4.1 2.3.3 2.9.6.7.3 1.2.7 1.7 1.3.5.5 1 .9 1.3 1.7.3.6.5 1.5.6 2.9.1 1.4.1 1.8.1 5.1s0 3.7-.1 5.1c-.1 1.4-.3 2.3-.6 2.9-.3.7-.7 1.2-1.3 1.7-.5.5-.9 1-1.7 1.3-.6.3-1.5.5-2.9.6-1.4.1-1.8.1-5.1.1s-3.7 0-5.1-.1c-1.4-.1-2.3-.3-2.9-.6-.7-.3-1.2-.7-1.7-1.3-.5-.5-.9-1-1.3-1.7-.3-.6-.5-1.5-.6-2.9C0 15.7 0 15.3 0 12s0-3.7.1-5.1c.1-1.4.3-2.3.6-2.9.3-.7.7-1.2 1.3-1.7.5-.5 1-.9 1.7-1.3.6-.3 1.5-.5 2.9-.6 1.4-.1 1.8-.1 5.1-.1zm0 2.2c-3.2 0-3.6 0-4.9.1-1.1.1-1.7.2-2.1.4-.5.2-.8.4-1.1.7-.3.3-.6.6-.7 1.1-.2.4-.3 1-.4 2.1-.1 1.3-.1 1.7-.1 4.9s0 3.6.1 4.9c.1 1.1.2 1.7.4 2.1.2.5.4.8.7 1.1.3.3.6.6 1.1.7.4.2 1 .3 2.1.4 1.3.1 1.7.1 4.9.1s3.6 0 4.9-.1c1.1-.1 1.7-.2 2.1-.4.5-.2.8-.4 1.1-.7.3-.3.6-.6.7-1.1.2-.4.3-1 .4-2.1.1-1.3.1-1.7.1-4.9s0-3.6-.1-4.9c-.1-1.1-.2-1.7-.4-2.1-.2-.5-.4-.8-.7-1.1-.3-.3-.6-.6-1.1-.7-.4-.2-1-.3-2.1-.4-1.3-.1-1.7-.1-4.9-.1zm0 4.1c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4zm0 1.8c-1.2 0-2.2 1-2.2 2.2s1 2.2 2.2 2.2 2.2-1 2.2-2.2-1-2.2-2.2-2.2zm5.3-.7c.5 0 .9.4.9.9s-.4.9-.9.9-.9-.4-.9-.9.4-.9.9-.9z"
              />
            </svg>
          </a>
        </div>

        <div
          class="border-t border-dark-400 mt-8 pt-4 flex flex-col md:flex-row justify-between items-center text-gray-600 before-inner-footer"
        >
          <p class="text-sm">©2024 LSIV. All rights reserved</p>
          <div class="text-sm mt-4 md:mt-0 last-footer">
            <a href="#" class="hover:text-orange-600 text-gray-800"
              >Privacy Policy</a
            >
            | <a href="#" class="hover:text-orange-600">Terms & Conditions</a> |
            <a href="#" class="hover:text-orange-600">Cookies Policy</a>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
