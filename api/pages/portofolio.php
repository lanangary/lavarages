<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Lavarages is a digital agency specializing in stunning websites and online solutions for businesses. Contact us for custom designs, user-friendly experiences, and search engine optimization." />

  <title>Document</title>
  <link rel="stylesheet" href="../../asset/css/portofolio.css" />

  <script defer src="../../asset/js/portofolio.js"></script>



  <!-- import start -->
  <?php include '../modules/headernav.php'; ?>
  <!-- import end -->
  <main>
    <div class="relative px-6 lg:px-8">
      <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-20 sm:pb-32">
        <div>
          <div class="text-center xxs:pb-8 md:pb-10 p-4">
            <h1 class="xxs:text-3xl sm:text-6xl lg:text-7xl font-extrabold leading-tighter tracking-tighter mb-4 aos-init aos-animate" data-aos="zoom-y-out">
              We Show, <br />
              <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400">Don't Tell</span>
            </h1>
            <div class="max-w-3xl mx-auto">
              <p class="font-semibold text-xl text-gray-600 mb-8 aos-init aos-animate" data-aos="zoom-y-out" data-aos-delay="150">We put our heart and soul into every project!</p>
              <!-- <div class="pt-4 max-w-xs mx-auto sm:max-w-none sm:flex sm:justify-center aos-init aos-animate" data-aos="zoom-y-out" data-aos-delay="300">
                    <div>
                      <a class="transition ease-in-out delay-150 hover:bg-gradient-to-r hover:from-blue-500 to-teal-400 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 btn p-4 rounded-xl font-bold text-white bg-gray-900 w-full sm:w-auto sm:ml-4" href="#">
                        Disccuse Now!
                      </a>
                    </div>
                  </div> -->
            </div>
          </div>
          <!-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)"
                    fill-opacity=".3"
                    d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                  <defs>
                    <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#9089FC"></stop>
                      <stop offset="1" stop-color="#FF80B5"></stop>
                    </linearGradient>
                  </defs>
                </svg>
              </div> -->
        </div>
      </div>
    </div>
  </main>
  </div>
  <!-- content start -->

  <!-- ====== Portfolio Section Start -->
  <div class="section">
    <!-- tab start -->
    <div class="text-sm font-medium text-center text-black border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
      <ul class="flex flex-wrap -mb-px justify-center">
        <li class="mr-2">
          <p class="cursor-pointer inline-block p-4 text-blue-600 border-blue-600 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" onclick="tabChanges('all');">ALL</p>
        </li>
        <li class="mr-2">
          <p class="cursor-pointer inline-block p-4 rounded-t-lg border-b-2 border-transparent text-black hover:text-gray-800 hover:border-gray-300 dark:hover:text-gray-300" onclick="tabChanges('website');">Website</p>
        </li>
        <!-- <li class="mr-2">
            <p class="cursor-pointer inline-block p-4 rounded-t-lg border-b-2 border-transparent text-black hover:text-gray-800 hover:border-gray-300 dark:hover:text-gray-300" onclick="tabChanges('sociaMedia');">Logo</p>
          </li>
          <li class="mr-2">
            <p class="cursor-pointer inline-block p-4 rounded-t-lg border-b-2 border-transparent text-black hover:text-gray-800 hover:border-gray-300 dark:hover:text-gray-300">Design</p>
          </li> -->
      </ul>
    </div>
    <!-- end tabs -->
  </div>

  <!-- sm alert -->
  <div class="text xxs:flex sm:hidden text-center justify-center">
    <div class="text-2lx font-bold p-6">
      Please Change to Desktop View <br />
      or<br />
      Open Website on Desktop
    </div>
  </div>

  <div class="section pt-12 xxs:hidden sm:flex lg:flex flex-col" id="portoParent">
    <!-- start project -->



    <form action="websiteshowcase.php" method="post">
      <input id="hide-title" type="hidden" value="index" name="hide-title">

      <?php
      $json_string = file_get_contents('../../asset/data/porto.json');
      $items = json_decode($json_string, true);
      $flag = 0;

      $numItems = count($items['items']);


      foreach ($items['items'] as $items) {


        if ($flag % 3 == 0) {
      ?>
          <div class="flex w-full text-center items-center justify-start gap-7 p-5">
          <?php
        }
        $flag++;
          ?>

          <div class=" w-4/12  portofolio group border-red-400 border overflow-hidden   cursor-pointer xxs:text-3xl font-semibold hover:bg-indigo-400 relative" id="name-<?php echo $flag ?>" data-value="<?php echo ($items["title"]) ?>">
            <div class=" group-hover:top-0 group-hover:h-full  -top-32  transition-all  text-wrapepr bg-gradient-to-r from-[#3b82f63d] to-[#2dd4bf8c] h-32 absolute w-full z-10">
              <p class="text flex justify-center items-center h-full text-white text-4xl"><?php echo ($items["title"]) ?></p>
            </div>
            <img class="group-hover:blur-sm max-w-lg w-full" src="<?php echo ($items["image"]) ?>" alt="<?php echo ($items["title"]) ?>">
          </div>
          <?php
          if ($flag == $numItems && $numItems % 3 != 0) {

            if ($numItems % 3 == 1) {
          ?>
              <div class=" w-4/12  portofolio group overflow-hidden  cursor-pointer xxs:text-3xl font-semibold hover:bg-indigo-400 relative">
              </div>
              <div class=" w-4/12  portofolio group overflow-hidden  cursor-pointer xxs:text-3xl font-semibold hover:bg-indigo-400 relative">
              </div>
            <?php
            } else {

            ?>
              <div class=" w-4/12  portofolio group overflow-hidden  cursor-pointer xxs:text-3xl font-semibold hover:bg-indigo-400 relative">
              </div>
            <?php
            }
          }
          if ($flag % 3 == 0) {
            ?>
          </div>
      <?php
          }
        }
      ?>
      <button type="submit" id="submitBtn" style="display:none;">Submit</button>
    </form>

    <!-- end -->

  </div>
  <!-- ====== Portfolio Section End -->

  <!-- Content End -->
  <?php include '../modules/footer.php'; ?>
  </body>

</html>