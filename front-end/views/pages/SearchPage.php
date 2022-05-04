<?php  ob_start();
include_once './back-end/actions/Search.php';
?>

    <section id="searchPage">
        <button onclick="displayFilter()" type="button" class="filterButton"><?php echo ($enJson["global"]['filterButton']) ?></button>
        <div id="searchPageContent" class="row">
            <!-- Filter Menu with 3 columns: Upload date / Type / Order by -->
            <form method="post" action="back-end/actions/Search.php" id="searchFilterForm">
                <div id="filterBox" class="row">
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($enJson["global"]['filterBoxTitle1']) ?></label>
                        <select name="filter_upload_date" id="filter_upload_date" class="filterBoxMenuButton1">
                            <option><?php if (isset($_SESSION["up_date"])) {
                                        echo $_SESSION["up_date"];
                                    } ?> </option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton1']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton1']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton2']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton2']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton3']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton3']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton4']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton4']) ?></option>
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($enJson["global"]['filterBoxTitle2']) ?></label>
                        <select name="filter_type" id="filter_type" class="filterBoxMenuButton2">
                            <option><?php if (isset($_SESSION["type"])) {
                                        echo $_SESSION["type"];
                                    } ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton5']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton5']) ?></option>
                            <!--<option value="<?//php echo ($enJson["global"]['filterBoxMenuButton6']) ?>">
                                <?php //echo ($enJson["global"]['filterBoxMenuButton6']) ?></option>
                            <option value="<?php //echo ($enJson["global"]['filterBoxMenuButton7']) ?>">
                                <?php //echo ($enJson["global"]['filterBoxMenuButton7']) ?></option>-->
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo ($enJson["global"]['filterBoxTitle3']) ?></label>
                        <select name="filter_order_by" id="filter_order_by" class="filterBoxMenuButton3">
                            <option><?php if (isset($_SESSION["ord_by"])) {
                                        echo $_SESSION["ord_by"];
                                    } ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton8']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton8']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton9']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton9']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton10']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton10']) ?></option>
                            <option value="<?php echo ($enJson["global"]['filterBoxMenuButton11']) ?>">
                                <?php echo ($enJson["global"]['filterBoxMenuButton11']) ?></option>
                        </select>
                    </div>
                    <div class="row" id="applyFilter">
                        <button type="submit" class="filterButton" id="filterButton">Apply</button>
                    </div>
                </div>
            </form>
            <!-- We duplicate video cards with a template video card-->
            <?php
    for ($i = 0; $i < count($vids); $i++) {
        $creator = getCreator($vids[$i]->creator);
    ?>
                <div class="column searchCard">
                    <a href="index.php?name=Watch&id=<?= $vids[$i]->id ?>">
                        <div class="row">
                            <img src="data:image/png;base64,<?= $vids[$i]->thumbnail ?>" class="videoImg" alt="thumbnail">
                            <div class="searchpageDescriptionSide">
                                <h3 class="filterBoxTitle videoTitle"><?= $vids[$i]->title ?></h3>
                                <p class="videoText videoWatchCount"><?= $vids[$i]->viewNumber ?></p>
                                <a href="" class="row">
                                    <img src="data:image/png;base64,<?= $creator[0]->channelProfilePicture ?>" alt="channel icon" class="searchpageChannelIcon">
                                    <p class="searchpageChannelName"><?= $creator[0]->channelName; ?></p>
                                </a>
                                <p class="videoText videoDescription"><?= $vids[$i]->date ?></p>
                            </div>
                        </div>
                </a>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php $pageName = ob_get_clean();


?>