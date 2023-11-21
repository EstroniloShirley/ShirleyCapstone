@extends('layout')

@section('content')
@include('partials._hero')
<div class="text-center text-white p-3 lg:p-5" style="background: #085c4c">
    <h2 class="text-xl lg:text-3xl font-semibold">Services</h2>
  </div>

  <section
    style="height: 100%; width: 100%"
    class="max-w-7xl m-auto flex flex-col justify-center"
  >
    <div
      class="grid grid-cols-1 mt-10 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 items-center"
    >
      <div class="lg:mx-12 md:mx-12 mx-28 mb-10 lg:mb-10">
        <div
          class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700"
        >
          <a href="#">
            <img
              class="lg:h-60 h-52"
              src="img/profile-pic.png"
              style="width: 100%"
              alt=""
            />
          </a>
          <div class="p-5">
            <a href="#">
              <h5
                class="lg:mb-2 lg:text-xl text-base font-bold tracking-tight text-gray-900 dark:text-white"
              >
                Noteworthy technology acquisitions 2021
              </h5>
            </a>

            <div>
              <div class="lg:text-base text-sm font-mediun mt-2 lg:mt-5">
                <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
                <span class="">8:30 AM - 4:30 PM</span>
              </div>
              <div class="flex justify-between">
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-regular fa-calendar-days"></i>&nbsp;
                  <span class="font-medium">Lunes</span>
                </div>
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-solid fa-location-dot"></i>&nbsp;
                  <span>Barangay Clinic</span>
                </div>
              </div>
            </div>
            <div>
              <a
                href="#"
                class="flex w-full justify-center items-center px-3 py-2 lg:text-base text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
              >
                Book a consultation
                <svg
                  class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 14 10"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="lg:mx-12 md:mx-12 mx-28 mb-10 lg:mb-10">
        <div
          class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700"
        >
          <a href="#">
            <img
              class="lg:h-60 h-52"
              src="../img/profile-pic.png"
              style="width: 100%"
              alt=""
            />
          </a>
          <div class="p-5">
            <a href="#">
              <h5
                class="lg:mb-2 lg:text-xl text-base font-bold tracking-tight text-gray-900 dark:text-white"
              >
                Noteworthy technology acquisitions 2021
              </h5>
            </a>

            <div>
              <div class="lg:text-base text-sm font-mediun mt-2 lg:mt-5">
                <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
                <span class="">8:30 AM - 4:30 PM</span>
              </div>
              <div class="flex justify-between">
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-regular fa-calendar-days"></i>&nbsp;
                  <span class="font-medium">Lunes</span>
                </div>
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-solid fa-location-dot"></i>&nbsp;
                  <span>Barangay Clinic</span>
                </div>
              </div>
            </div>
            <div>
              <a
                href="#"
                class="flex w-full justify-center items-center px-3 py-2 lg:text-base text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
              >
                Book a consultation
                <svg
                  class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 14 10"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="lg:mx-12 md:mx-12 mx-28 mb-10 lg:mb-10">
        <div
          class="max-w-sm bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700"
        >
          <a href="#">
            <img
              class="lg:h-60 h-52"
              src="../img/profile-pic.png"
              style="width: 100%"
              alt=""
            />
          </a>
          <div class="p-5">
            <a href="#">
              <h5
                class="lg:mb-2 lg:text-xl text-base font-bold tracking-tight text-gray-900 dark:text-white"
              >
                Noteworthy technology acquisitions 2021
              </h5>
            </a>

            <div>
              <div class="lg:text-base text-sm font-mediun mt-2 lg:mt-5">
                <i class="fa-regular fa-clock font-semibold"></i>&nbsp;
                <span class="">8:30 AM - 4:30 PM</span>
              </div>
              <div class="flex justify-between">
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-regular fa-calendar-days"></i>&nbsp;
                  <span class="font-medium">Lunes</span>
                </div>
                <div class="font-mediun my-2 lg:my-5 lg:text-base text-sm">
                  <i class="fa-solid fa-location-dot"></i>&nbsp;
                  <span>Barangay Clinic</span>
                </div>
              </div>
            </div>
            <div>
              <a
                href="#"
                class="flex w-full justify-center items-center px-3 py-2 lg:text-base text-sm font-medium text-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
              >
                Book a consultation
                <svg
                  class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 14 10"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-right mr-20 font-medium hover:underline">
      <a href="services.html">View all services</a>
    </div>

  </section>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>

