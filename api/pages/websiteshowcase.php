<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // retrieve the value from the hidden input element
    $myInput = $_POST['hide-title'];
    // display the value on the page

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Lavarages is a digital agency specializing in stunning websites and online solutions for businesses. Contact us for custom designs, user-friendly experiences, and search engine optimization." />
    <title>Showcase</title>
    <link rel="stylesheet" href="../../asset/css/websiteshowcase.css" />
    <script defer src="../../asset/js/morePost.js"></script>
    <!-- import start -->
    <?php include '../modules/headernav.php'; ?>
    <!-- import end -->
    <main>
        <div class="relative px-6 lg:px-8 sticky pb-52">
            <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-20 sm:pb-32 justify-center text-center flex">
                <div class="fixed">
                    <div class="text-center xxs:pb-8 md:pb-10 p-4">
                        <h1 class="xxs:text-3xl sm:text-6xl lg:text-7xl font-extrabold leading-tighter tracking-tighter mb-4 aos-init aos-animate" data-aos="zoom-y-out">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-teal-400"><?php echo $myInput ?></span>
                            <br />Showcase
                        </h1>
                        <div class="max-w-3xl mx-auto">
                            <p class="font-semibold text-xl text-gray-600 mb-8 aos-init aos-animate" data-aos="zoom-y-out" data-aos-delay="150">We put our heart and soul into every project!</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- content start -->



    <!-- <div class="bg-fixed bg-cover bg-center h-screen bg-black" style="background-image: url('https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1955&q=80');">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-4xl font-bold text-black">Parallax Example</h1>
            <p class="mt-4 text-lg text-white">Scroll down to see the effect!</p>
        </div>
    </div>
 -->

    <div class="content absolute z-10 bg-white">

        <?php $json_string = file_get_contents('../../asset/data/website.json');
        $items = json_decode($json_string, true);
        $flag = 0;

        foreach ($items[$myInput] as $items) {
        ?>
            <img class="" src="<?php echo ($items["image"]) ?>" alt="<?php echo ($items["title"]) ?>">
            <div class="content-wrap md:p-16">
                <div class="overview  xxs:w-full sm:w-2/3 sm:text-[32px] md:pb-24">
                    <div class="title text-3xl font-semibold">Overview + Objective</div>
                    <p> <?php echo ($items["overview"]) ?> </p>
                </div>
                <img src="<?php echo ($items["image"]) ?>" alt="<?php echo ($items["title"]) ?>">
            <?php
        }
            ?>
            <h1 class=""><?php echo $myInput ?> ssss</h1>

            <!-- More Project modules -->
            <?php include '../modules/moreProject.php'; ?>
            </div>
            <?php include '../modules/footer.php'; ?>
    </div>
    </body>

</html>