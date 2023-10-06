<?php

    # IF-ELSE


    $categories = array("Macera","Dram","Komedi","Korku");

    $films = array(
        "1" => array(
            "title"         => "Paper Lives",
            "explanation"   => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "image"         => "1.jpeg",
            "numberLike"    => "1241",
            "numberComment" => "0",
            "visionInfo"    => true
        ), 
        "2" => array(
            "title"         => "Walking Dead",
            "explanation"   => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "image"         => "2.jpeg",
            "numberLike"    => "3574",
            "numberComment" => "698",
            "visionInfo"    => false
        ),

    );

    $films["1"]["url"] = strtolower($films["1"]["title"]);
    $films["1"]["url"] = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$films["1"]["url"]);
    
    $films["2"]["url"] = strtolower($films["2"]["title"]);
    $films["2"]["url"] = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$films["2"]["url"]);

    const limit = 100;

    const page_title = "Popüler Filmler";

    $numberOfCategories = count($categories);
    $numberOfFilms = count($films);
    $info = "$numberOfCategories KATEGORİDE $numberOfFilms FİLM LİSTELENDİ.";

?>





<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Blog App 1</title>
    </head>

    <body>

        <div class="container my-5"> 
            <div class="row">
                <div class="col-3">
                    <ul>
                        <li class="list-group-item"><?php echo $categories[0] ?></li>
                        <li class="list-group-item"><?php echo $categories[1] ?></li>
                        <li class="list-group-item"><?php echo $categories[2] ?></li>
                        <li class="list-group-item"><?php echo $categories[3] ?></li>
                    </ul>
                </div>

                <div class="col-9">
                    <h1 class="mb-4"><?php echo page_title ?></h1>
                    <p class="text-muted"><?php echo $info ?></p>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class='img-fluid' src='img/{$films["1"]["image"]}'>" ?>
                            </div>
    
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo "<a href='{$films["1"]["url"]}'>{$films["1"]["title"]}</a>" ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                            if(strlen($films["1"]["explanation"]) > limit){
                                                echo substr($films["1"]["explanation"],0,limit)."...";
                                            }else{
                                                echo $films["1"]["explanation"];
                                            }
                                        ?>
                                    </p>
                                    <div>
                                        <?php
                                            if($films["1"]["numberLike"] > 0){
                                                echo "<span class=\"badge bg-primary\">{$films["1"]["numberLike"]} Beğeni</span>";
                                            }
                                        ?>
                                        <?php
                                            if($films["1"]["numberComment"] > 0){
                                                echo "<span class=\"badge bg-success\">{$films["1"]["numberComment"]} Yorum</span>";
                                            }
                                        ?>
                                        <span class="badge bg-warning">
                                            <?php
                                                if($films["1"]["visionInfo"]){
                                                    echo "VİZYONDA";
                                                }else{
                                                    echo "VİZYONDA DEĞİL";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class='img-fluid' src='img/{$films["2"]["image"]}'>" ?>
                            </div>
    
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo "<a href='{$films["2"]["url"]}'>{$films["2"]["title"]}</a>" ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php
                                            if(strlen($films["2"]["explanation"]) > limit){
                                                echo substr($films["2"]["explanation"],0,limit)."...";
                                            }else{
                                                echo $films["2"]["explanation"];
                                            }
                                        ?>
                                    </p>
                                    <div>
                                        <?php
                                            if($films["2"]["numberLike"] > 0){
                                                echo "<span class=\"badge bg-primary\">{$films["2"]["numberLike"]} Beğeni</span>";
                                            }
                                        ?>
                                        <?php
                                            if($films["2"]["numberComment"] > 0){
                                                echo "<span class=\"badge bg-success\">{$films["2"]["numberComment"]} Yorum</span>";
                                            }
                                        ?>
                                        <span class="badge bg-warning">
                                            <?php
                                                if($films["2"]["visionInfo"]){
                                                    echo "VİZYONDA";
                                                }else{
                                                    echo "VİZYONDA DEĞİL";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>