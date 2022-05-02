<head>
    <?php
    $en_json = file_get_contents('./wordingUtils/en.json');
    $decoded_en_json = json_decode($en_json, true);
    session_start();
    ?>
</head>

<body>
    <section id="searchPage">
        <button onclick="displayFilter()" type="button" class="filterButton"><?php echo ($decoded_en_json["global"]['filterButton']) ?></button>
        <div id="searchPageContent" class="row">
            <!-- Filter Menu with 3 columns: Upload date / Type / Order by -->
            <form method="post" action="./back-end/actions/filters.php" id="searchFilterForm">
                <div id="filterBox" class="row">
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($decoded_en_json["global"]['filterBoxTitle1']) ?></label>
                        <select name="filter_upload_date" class="filterBoxMenuButton1">
                            <option><?php if (isset($_SESSION["up_date"])) {
                                        echo $_SESSION["up_date"];
                                    } ?> </option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton1']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton1']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton2']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton2']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton3']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton3']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton4']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton4']) ?></option>
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($decoded_en_json["global"]['filterBoxTitle2']) ?></label>
                        <select name="filter_type" class="filterBoxMenuButton2">
                            <option><?php if (isset($_SESSION["type"])) {
                                        echo $_SESSION["type"];
                                    } ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton5']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton5']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton6']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton6']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton7']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton7']) ?></option>
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($decoded_en_json["global"]['filterBoxTitle3']) ?></label>
                        <select name="filter_order_by" class="filterBoxMenuButton3">
                            <option><?php if (isset($_SESSION["ord_by"])) {
                                        echo $_SESSION["ord_by"];
                                    } ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton8']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton8']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton9']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton9']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton10']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton10']) ?></option>
                            <option value="<?php echo ($decoded_en_json["global"]['filterBoxMenuButton11']) ?>"><?php echo ($decoded_en_json["global"]['filterBoxMenuButton11']) ?></option>
                        </select>
                    </div>
                    <div class="row" id="applyFilter">
                        <button type="submit" class="filterButton" id="filterButton">Apply</button>
                    </div>
                </div>
            </form>

            <?php

            ?>

            <!-- We duplicate video cards with a template video card-->
            <?php foreach ($decoded_en_json['searches'] as $searched) { ?>
                <div class="column searchCard">
                    <div class="row">
                        <img src="<?php echo ($searched["videoImg"]) ?>" class="videoImg" alt="CUCUMBER POWER">
                        <div class="searchpageDescriptionSide">
                            <h3 class="filterBoxTitle videoTitle"><?php echo ($searched['filterBoxTitle']) ?></h3>
                            <p class="videoText videoWatchCount"><?php echo ($searched['videoWatchCount']) ?></p>
                            <a href="" class="row">
                                <img src="<?php echo ($searched['searchpageChannelIcon']) ?>" alt="channel icon" class="searchpageChannelIcon">
                                <p class="searchpageChannelName"><?php echo ($searched['searchpageChannelName']) ?></p>
                            </a>
                            <p class="videoText videoDescription"><?php echo ($searched['videoDescription']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>

</html>