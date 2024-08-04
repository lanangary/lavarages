<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../asset/css/contact.css" />
  <script defer src="../../asset/js/contact.js"></script>
  <title>Contact Us</title>


  <!-- import start -->
  <?php include '../modules/headernav.php'; ?>
  <!-- import end -->
  <div class="isolate bg-white z-20">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC"></stop>
            <stop offset="1" stop-color="#FF80B5"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <main>
      <div class="relative px-6 lg:px-8">
        <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-20 sm:pb-24 xxs:pb-0">
          <div>
            <div class="text-center xxs:pb-8 md:pb-10 p-4">
              <h1 class="xxs:text-3xl sm:text-6xl lg:text-7xl font-extrabold leading-tighter tracking-tighter mb-4 aos-init aos-animate" data-aos="zoom-y-out">
                Let's, <br />
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400">Be Friends</span>
              </h1>
              <div class="max-w-3xl mx-auto">
                <p class="font-semibold text-xl text-gray-600 mb-8 aos-init aos-animate" data-aos="zoom-y-out" data-aos-delay="150">Just drop us a message, Our team will be reach you soon!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- content start -->
  <section>
    <!-- <div class="font-bold text-2xl text-center pb-9">
        Contact Us Directly By Whatsapp <br />
        Or <br />
        Fill the email form below
      </div> -->
    <div class="lg:grid grid-cols-2 xxs:block">
      <div class="justify-center p-8">
        <div class="lg:text-6xl xxs:text-4xl font-bold text-left pb-7">Contact Us</div>

        <form action="https://formsubmit.co/lanangarik10@gmail.com" method="post">
          <!-- honeypot -->
          <input type="text" name="_honey" style="display: none" />
          <!-- disable captcha -->
          <input type="hidden" name="_captcha" value="false" />

          <input type="hidden" name="_next" value="https://lavarages.com/pages/formSucces.html" />

          <input type="hidden" name="_subject" value="Request Quotes" />

          <div class="relative z-0 w-full mb-6 group">
            <select id="floating_service" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder="hii">
              <option value="disabled"></option>
              <option value="Web Developer">Web Developer</option>
              <option value="Ads">Ads</option>
            </select>
            <label for="floating_service" id="floating_service_label" class="peer-focus:font-medium absolute lg:text-2xl sm:text-sm text-gray-500 duration-300 transform -translate-y-26 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Select Service</label>
          </div>

          <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="first_name" id="floating_name" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
              <label for="first_name" class="peer-focus:font-medium absolute lg:text-lg sm:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <input type="tel" name="last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black dark:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
              <label for="floating_last_name" class="peer-focus:font-medium absolute lg:text-lg sm:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
            </div>
          </div>

          <div class="relative z-0 w-full mb-6 group">
            <input type="email" name="email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
            <label for="floating_email" class="peer-focus:font-medium absolute lg:text-lg sm:text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-600 peer-focus:dark:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
          </div>
          <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="company" id="floating_company" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black dark:focus:border-indigo-500 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
            <label for="floating_company" class="peer-focus:font-medium absolute lg:text-lg sm:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Company Name</label>
          </div>

          <div class="relative z-0 w-full mb-6 group">
            <input type="tel" name="phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-none text-black dark:border-indigo-600 focus:outline-none focus:ring-0 focus:border-indigo-600 peer" placeholder=" " required />
            <label for="floating_phone" class="peer-focus:font-medium absolute lg:text-lg sm:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-indigo-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
          </div>

          <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full group col-span-2 pb-4">
              <label for="message" class="block mb-2 text-2xl font-medium text-gray-900">Describe Your Thought</label>
              <textarea id="message" name="message" rows="4" class="block p-2.5 w-full lg:text-lg sm:text-sm bg-transparent rounded-lg border border-gray-300 dark:placeholder-gray-400 text-black focus:ring-indigo-500 focus:border-indigo-500" placeholder="What can we help you . . ."></textarea>
            </div>
          </div>

          <button type="submit" class="text-white bg-gray-700 hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2xl w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
      </div>
      <div class="left-form p-8">
        <div class="justify-center text-center lg:pb-8">
          <div class="lg:text-6xl xxs:text-4xl font-bold pb-4">WhatsApp</div>

          <div class="div lg:flex lg:flex-col justify-center gap-4 p-5 xxs:block">
            <div class="flex justify-center">
              <a href="https://api.whatsapp.com/send/?phone=6281337180384&text&type=phone_number&app_absent=0">
                <button type="button" data-mdb-ripple="true" href="https://api.whatsapp.com/send/?phone=6281337180384&text&type=phone_number&app_absent=0" data-mdb-ripple-color="light" class="gap-5 px-6 py-2.5 mb-2 hover:text-white font-medium lg:text-xl xxs:text-sm leading-tight uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out flex items-center bg-transparent text-black border border-gray-700 hover:bg-black ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="lg:w-7 xxs:w-5 h-auto">
                    <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                  </svg>
                  WhatsApp
                </button>
              </a>
            </div>
          </div>
        </div>

        <div class="text px-6"></div>
      </div>
    </div>
  </section>

  <!-- Content End -->
  <footer aria-label="Site Footer" class="bg-gray-900">
    <div class="max-w-screen-xl px-4 pt-16 pb-8 mx-auto sm:px-6 lg:px-8 lg:pt-24">
      <div class="text-center">
        <div class="text-3xl font-extrabold text-white sm:text-5xl">Let's Be Friends!</div>

        <p class="max-w-md mx-auto mt-4 text-gray-500 dark:text-gray-400">Don't be shy, just drop us a message and let's get to know each other! We're loved to make new friends and discuss how we can help bring your business.</p>
        <a href="https://www.linkedin.com/in/i-gusti-lanang-ary-kresnawan-0519b8156/" class="inline-block px-12 py-3 mt-8 text-sm font-medium bg-indigo-600 border border-indigo-600 rounded-full hover:bg-white hover:text-indigo-500 text-white focus:outline-none focus:ring active:bg-indigo-500"> Let's be Friends </a>
      </div>

      <div class="pt-8 mt-16 border-t border-gray-700 sm:flex sm:items-center sm:justify-center lg:mt-24">
        <nav aria-label="Footer Navigation - Support">
          <ul class="flex flex-wrap justify-center gap-4 text-xs lg:justify-end">
            <li>
              <a href="#" class="text-gray-400 transition hover:opacity-75"> Copyright © 2023 All rights reserved by Lavarages Digital Agencies</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </footer>
  </body>

</html>