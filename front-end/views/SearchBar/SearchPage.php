<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
    $en_json = file_get_contents('wordingUtils/en.json'); 
    $decoded_en_json = json_decode($en_json, true);
    //We get filters from the url
    if(isset($_GET["filter_upload_date"])){
        $_filters["up_date"] = $_GET["filter_upload_date"];
        echo($_filters["up_date"]);
    }
    if(isset($_GET["filter_type"])){
        $_filters["type"] = $_GET["filter_type"];
        echo($_filters["type"]);
    }
    if(isset($_GET["filter_order_by"])){
        $_filters["ord_by"] = $_GET["filter_order_by"];
        echo($_filters["ord_by"]);
    }
    ?>
</head>
<body>
    <section id="searchPage">
        <button onclick="displayFilter()" type="button" class="filterButton"><?php echo($decoded_en_json["global"]['filterButton']) ?></button>
        <div id="searchPageContent" class="row">
            <!-- Filter Menu with 3 columns: Upload date / Type / Order by -->
            <form method="GET" action="/front-end" id="searchFilterForm">
                <div id="filterBox" class="row">
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo($decoded_en_json["global"]['filterBoxTitle1']) ?></label>
                        <select name="filter_upload_date" class="filterBoxMenuButton1">
                            <option></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton1']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton1']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton2']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton2']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton3']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton3']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton4']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton4']) ?></option>
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo($decoded_en_json["global"]['filterBoxTitle2']) ?></label>
                        <select name="filter_type" class="filterBoxMenuButton2">
                            <option></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton5']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton5']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton6']) ?>"><?php echo($decoded_en_json["global"]['filterBoxBenuButton6']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton7']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton7']) ?></option>
                        </select>
                    </div>
                    <div class="column filterBoxMenu">
                        <label class="filterBoxTitle"><?php echo($decoded_en_json["global"]['filterBoxTitle3']) ?></label>
                        <select name="filter_order_by" class="filterBoxMenuButton3">
                            <option></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton8']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton8']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton9']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton9']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton10']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton10']) ?></option>
                            <option value="<?php echo($decoded_en_json["global"]['filterBoxMenuButton11']) ?>"><?php echo($decoded_en_json["global"]['filterBoxMenuButton11']) ?></option>
                        </select>
                    </div>
                    <div class="row" id="applyFilter">
                    <button type="submit" class="filterButton" id="filterButton">Apply</button>
                    </div>
                </div>
            </form>
            
            <!-- We duplicate video cards with a template video card-->
            <?php foreach($decoded_en_json['searches'] as $searched) {?>
                <div class="column searchCard">
                    <div class="row">
                        <img src="<?php echo($searched["videoImg"])?>" class="videoImg" alt="CUCUMBER POWER">
                        <div class="searchpageDescriptionSide">
                            <h3 class="filterBoxTitle videoTitle"><?php echo($searched['filterBoxTitle']) ?></h3>
                            <p class="videoText videoWatchCount"><?php echo($searched['videoWatchCount']) ?></p>
                            <div class="row">
                                <img src= "<?php echo($searched['searchpageChannelIcon'])?>" alt="channel icon" class="searchpageChannelIcon">
                                <p class="searchpageChannelName"><?php echo($searched['searchpageChannelName']) ?></p>
                            </div>
                            <p class="videoText videoDescription"><?php echo($searched['videoDescription']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>
<?php?>