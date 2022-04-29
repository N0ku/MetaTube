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
    }
    if(isset($_GET["filter_type"])){
        $_filters["type"] = $_GET["filter_type"];
    }
    if(isset($_GET["filter_order_by"])){
        $_filters["ord_by"] = $_GET["filter_order_by"];
    }
    try{
        echo($_filters["up_date"]);
        echo($_filters["type"]);
        echo($_filters["ord_by"]);
    }
    catch(e){

    }

    ?>
</head>
<body>
    <section id="search-page">
        <button onclick="displayFilter()" type="button" class="filter-button"><?php echo($enJson["global"]['filter-button']) ?></button>
        <div id="search-page-content" class="row">
            <!-- Filter Menu with 3 columns: Upload date / Type / Order by -->
            <form method="GET" action="/front-end" id="search-filter-form">
                <div id="filter-box" class="row">
                    <div class="column filter-box-menu">
                        <label class="filter-box-title"><?php echo($enJson["global"]['filter-box-title1']) ?></label>
                        <select name="filter_upload_date" class="filter-box-menu-button1">
                            <option></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button1']) ?>"><?php echo($enJson["global"]['filter-box-menu-button1']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button2']) ?>"><?php echo($enJson["global"]['filter-box-menu-button2']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button3']) ?>"><?php echo($enJson["global"]['filter-box-menu-button3']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button4']) ?>"><?php echo($enJson["global"]['filter-box-menu-button4']) ?></option>
                        </select>
                    </div>
                    <div class="column filter-box-menu">
                        <label class="filter-box-title"><?php echo($enJson["global"]['filter-box-title2']) ?></label>
                        <select name="filter_type" class="filter-box-menu-button2">
                            <option></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button5']) ?>"><?php echo($enJson["global"]['filter-box-menu-button5']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button6']) ?>"><?php echo($enJson["global"]['filter-box-menu-button6']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button7']) ?>"><?php echo($enJson["global"]['filter-box-menu-button7']) ?></option>
                        </select>
                    </div>
                    <div class="column filter-box-menu">
                        <label class="filter-box-title"><?php echo($enJson["global"]['filter-box-title3']) ?></label>
                        <select name="filter_order_by" class="filter-box-menu-button3">
                            <option></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button8']) ?>"><?php echo($enJson["global"]['filter-box-menu-button8']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button9']) ?>"><?php echo($enJson["global"]['filter-box-menu-button9']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button10']) ?>"><?php echo($enJson["global"]['filter-box-menu-button10']) ?></option>
                            <option value="<?php echo($enJson["global"]['filter-box-menu-button11']) ?>"><?php echo($enJson["global"]['filter-box-menu-button11']) ?></option>
                        </select>
                    </div>
                    <div class="row" id="apply-filter">
                    <button type="submit" class="filter-button" id="filter-button">Apply</button>
                    </div>
                </div>
            </form>
            
            <!-- We duplicate video cards with a template video card-->
            <?php foreach($decoded_en_json['searches'] as $searched) {?>
                <div class="column search-card">
                    <div class="row">
                        <img src="<?php echo($searched["video-img"])?>" class="video-img" alt="CUCUMBER POWER">
                        <div class="searchpage-description-side">
                            <h3 class="filter-box-title video-title"><?php echo($searched['filter-box-title']) ?></h3>
                            <p class="video-text video-watch-count"><?php echo($searched['video-watch-count']) ?></p>
                            <div class="row">
                                <img src= "<?php echo($searched['searchpage-channel-icon'])?>" alt="channel icon" class="searchpage-channel-icon">
                                <p class="searchpage-channel-name"><?php echo($searched['searchpage-channel-name']) ?></p>
                            </div>
                            <p class="video-text video-description"><?php echo($searched['video-description']) ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>
<?php?>