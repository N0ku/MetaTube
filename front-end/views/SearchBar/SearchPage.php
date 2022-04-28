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
    ?>
</head>
<body>
    <section id="search-page">
        <button onclick="displayFilter()" type="button" id="filter-button"><?php echo($enJson["global"]['filter-button']) ?></button>
        <div id="search-page-content" class="row">
            <div id="filter-box" class="row">
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php echo($enJson["global"]['filter-box-title1']) ?></h3>
                    <input type="radio" onclick="" name="filter-box-menu-button1" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button1']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button1" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button2']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button1" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button3']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button1" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button4']) ?></input>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php echo($enJson["global"]['filter-box-title2']) ?></h3>
                    <input type="radio" onclick="" name="filter-box-menu-button2" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button5']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button2" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button6']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button2" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button7']) ?></input>
                </div>
                <div class="column filter-box-menu">
                    <h3 class="filter-box-title"><?php echo($enJson["global"]['filter-box-title3']) ?></h3>
                    <input type="radio" onclick="" name="filter-box-menu-button3" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button8']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button3" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button9']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button3" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button10']) ?></input>
                    <input type="radio" onclick="" name="filter-box-menu-button3" class="filter-box-menu-button"><?php echo($enJson["global"]['filter-box-menu-button11']) ?></input>
                </div>
            </div>
            
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
<?php //src(unknown)?>