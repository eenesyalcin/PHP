<?php

    # DİZİ FONKSİYONLARI


    $categories = array("Macera","Dram","Komedi","Korku");
    array_push($categories,"Bilim Kurgu");
    sort($categories);

    $films = array(
        "1" => array(
            "title"         => "Paper Lives",
            "explanation"   => "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "image"         => "1.jpeg",
            "numberLike"    => "1241",
            "numberComment" => "239",
            "visionInfo"    => "EVET"
        ), 
        "2" => array(
            "title"         => "Walking Dead",
            "explanation"   => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "image"         => "2.jpeg",
            "numberLike"    => "3574",
            "numberComment" => "698",
            "visionInfo"    => "HAYIR"
        ),

    );

    $newFilm = array(
        "title"         => "New Film",
        "explanation"   => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "image"         => "2.jpeg",
        "numberLike"    => "3574",
        "numberComment" => "698",
        "visionInfo"    => "HAYIR"
    );

    $films["0"] = $newFilm;
    ksort($films);


    shuffle($films);


    $films["1"]["explanation"] = strtolower($films["1"]["explanation"]);
    $films["1"]["explanation"] = ucfirst($films["1"]["explanation"]);

    $films["2"]["explanation"] = strtolower($films["2"]["explanation"]);
    $films["2"]["explanation"] = ucfirst($films["2"]["explanation"]);

    $films["1"]["explanation"] = substr($films["1"]["explanation"],0,120)."...";
    $films["2"]["explanation"] = substr($films["2"]["explanation"],0,120)."...";

    $films["0"]["url"] = strtolower($films["0"]["title"]);
    $films["0"]["url"] = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$films["0"]["url"]);

    $films["1"]["url"] = strtolower($films["1"]["title"]);
    $films["1"]["url"] = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$films["1"]["url"]);
    
    $films["2"]["url"] = strtolower($films["2"]["title"]);
    $films["2"]["url"] = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$films["2"]["url"]);

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
                        <li class="list-group-item"><?php echo $categories[4] ?></li>
                    </ul>
                </div>

                <div class="col-9">
                    <h1 class="mb-4"><?php echo page_title ?></h1>
                    <p class="text-muted"><?php echo $info ?></p>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class='img-fluid' src='img/{$films["0"]["image"]}'>" ?>
                            </div>
    
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo "<a href='{$films["0"]["url"]}'>{$films["0"]["title"]}</a>" ?>
                                    </h5>
                                    <p class="card-text"><?php echo $films["0"]["explanation"] ?></p>
                                    <div>
                                        <span class="badge bg-primary">
                                            <?php echo $films["0"]["numberLike"] ?> Beğeni
                                        </span>
                                        <span class="badge bg-success">
                                            <?php echo $films["0"]["numberComment"] ?> Yorum
                                        </span>
                                        <span class="badge bg-warning">
                                            Vizyonda: <?php echo $films["0"]["visionInfo"] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                    <p class="card-text"><?php echo $films["1"]["explanation"] ?></p>
                                    <div>
                                        <span class="badge bg-primary">
                                            <?php echo $films["1"]["numberLike"] ?> Beğeni
                                        </span>
                                        <span class="badge bg-success">
                                            <?php echo $films["1"]["numberComment"] ?> Yorum
                                        </span>
                                        <span class="badge bg-warning">
                                            Vizyonda: <?php echo $films["1"]["visionInfo"] ?>
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
                                    <p class="card-text"><?php echo $films["2"]["explanation"] ?></p>
                                    <div>
                                        <span class="badge bg-primary">
                                            <?php echo $films["2"]["numberLike"] ?> Beğeni
                                        </span>
                                        <span class="badge bg-success">
                                            <?php echo$films["2"]["numberComment"] ?> Yorum
                                        </span>
                                        <span class="badge bg-warning">
                                            Vizyonda: <?php echo $films["2"]["visionInfo"] ?>
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