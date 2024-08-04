    <link rel="stylesheet" href="../../asset/css/moreProject.css" />

    <div class="more-post">
        <div class="wrap" id='wrap'>

            <div class="h2 text-3xl font-bold py-12 ">More Projects</div>


            <form action="websiteshowcase.php" method="post">
                <div class="grid grid-cols-2 gap-4">
                    <input id="hide-title" type="hidden" value="index" name="hide-title">

                    <?php
                    $json_string = file_get_contents('../../asset/data/website.json');
                    $items = json_decode($json_string, true);

                    // Check if JSON decoding was successful
                    if (is_null($items)) {
                        echo "Error decoding JSON: " . json_last_error_msg();
                        exit;
                    }

                    // Extract all the values from the associative array containing the items
                    $items_array = array_values($items);

                    // Combine all items from different arrays into a single array
                    $combined_items = array();
                    foreach ($items_array as $item) {
                        $combined_items = array_merge($combined_items, $item);
                    }

                    // Shuffle the combined items array randomly
                    shuffle($combined_items);

                    // Select the first two items from the shuffled array
                    $random_items = array_slice($combined_items, 0, 2);

                    // Loop through the random items and display their image and title

                    foreach ($random_items as $item) {
                    ?>
                        <div class="more-post-item" data-value="<?php echo ($item["title"]) ?>">
                            <img class="image-item" src="<?php echo ($item["image"]) ?>" alt="<?php echo ($item["title"]) ?>">
                            <div class="content">
                                <div class="block max-w-0 group-hover:max-w-full transition-all duration-500 h-0.5 bg-sky-600 title text-2xl py-3 hover:text-blue-500 hover:underline"><?php echo ($item["title"]) ?></div>
                                <div class="excerpt"><?php echo ($item["overview"]) ?></div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <button type="submit" id="submitBtn" style="display:none;">Submit</button>
            </form>




        </div>
    </div>