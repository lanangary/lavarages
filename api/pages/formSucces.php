<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lavarages Agency</title>
  <script async src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="../../asset/css/formSucces.css" />

  <!-- import start -->
  <?php include '../modules/headernav.php'; ?>
  <!-- import end -->

  <div class=" grid lg:grid-cols gap-4 place-items-center lg:p-24 xxs:mt-9 xxs:py-8">

    <div>
      <div class="font-extrabold lg:text-9xl sm:text-5xl  xxs:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-indigo-700 to-pink-500 text-center">Thank You!</div>
      <div class="pt-6 font-semibold text-xl text-center">Your form already submited, Our team will reach you soon!</div>
      <div class="pt-4 max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center aos-init aos-animate" data-aos="zoom-y-out" data-aos-delay="300">
        <div class="pt-8 text-center">
          <a class="hover:bg-gradient-to-r hover:from-indigo-700 to-orange-600 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 btn p-4 rounded-xl font-bold text-white bg-gray-900 w-full sm:w-auto sm:ml-4" href="https://lavarages.com/"> Let's Go Home! <span class="text-xl" id="timer"></span> </a>
        </div>
      </div>
    </div>

  </div>

  <!-- Content End -->
  <footer aria-label="Site Footer" class="bg-gray-900">
    <div class="max-w-screen-xl px-4 pt-16 pb-8 mx-auto sm:px-6 lg:px-8 lg:pt-24">
      <div class="text-center">
        <div class="text-3xl font-extrabold text-white sm:text-5xl">Want to Know More About Us?</div>

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

  <script>
    var timerAppend = document.getElementById("timer");
    var timer = 9;

    setInterval(function() {
      timerAppend.innerHTML = timer;
      console.log(timer);
      timer--;
      if (timer <= 0) {
        window.location = "https://www.lavarages.com";
      }
    }, 1000);
  </script>
  </body>

</html>
<!--Form Code-->