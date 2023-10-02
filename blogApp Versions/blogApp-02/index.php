<?php

    $category1 = "Macera";
    $category2 = "Dram";
    $category3 = "Komedi";
    $category4 = "Korku";

    $film1_title = "Paper Lives";
    $film1_explanation = "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
    $film1_image = "1.jpeg";
    $film1_numberLike = "1241";
    $film1_numberComment = "239";
    $film1_visionInfo = "EVET";

    $film2_title = "Walking Dead";
    $film2_explanation = "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
    $film2_image = "2.jpeg";
    $film2_numberLike = "3574";
    $film2_numberComment = "698";
    $film2_visionInfo = "HAYIR";


    $film1_explanation = strtolower($film1_explanation);
    $film1_explanation = ucfirst($film1_explanation);

    $film2_explanation = strtolower($film2_explanation);
    $film2_explanation = ucfirst($film2_explanation);

    $film1_explanation = substr($film1_explanation,0,120)."...";
    $film2_explanation = substr($film2_explanation,0,120)."...";

    $film1_url = strtolower($film1_title);
    $film1_url = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$film1_url);
    
    $film2_url = strtolower($film2_title);
    $film2_url = str_replace([" ","ç","ğ","ı","ö","ü"],["-","c","g","i","o","u"],$film2_url);

    const page_title = "Popüler Filmler";

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
                        <li class="list-group-item"><?php echo $category1 ?></li>
                        <li class="list-group-item"><?php echo $category2 ?></li>
                        <li class="list-group-item"><?php echo $category3 ?></li>
                        <li class="list-group-item"><?php echo $category4 ?></li>
                    </ul>
                </div>

                <div class="col-9">
                    <h1 class="mb-4"><?php echo page_title ?></h1>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class='img-fluid' src='img/{$film1_image}'>" ?>
                            </div>
    
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo "<a href='{$film1_url}'>{$film1_title}</a>" ?>
                                    </h5>
                                    <p class="card-text"><?php echo $film1_explanation ?></p>
                                    <div>
                                        <span class="badge bg-primary">
                                            <?php echo $film1_numberLike ?> Beğeni
                                        </span>
                                        <span class="badge bg-success">
                                            <?php echo $film1_numberComment ?> Yorum
                                        </span>
                                        <span class="badge bg-warning">
                                            Vizyonda: <?php echo $film1_visionInfo ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-3">
                                <?php echo "<img class='img-fluid' src='img/{$film2_image}'>" ?>
                            </div>
    
                            <div class="col-9">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo "<a href='{$film2_url}'>{$film2_title}</a>" ?>
                                    </h5>
                                    <p class="card-text"><?php echo $film2_explanation ?></p>
                                    <div>
                                        <span class="badge bg-primary">
                                            <?php echo $film2_numberLike ?> Beğeni
                                        </span>
                                        <span class="badge bg-success">
                                            <?php echo $film2_numberComment ?> Yorum
                                        </span>
                                        <span class="badge bg-warning">
                                            Vizyonda: <?php echo $film2_visionInfo ?>
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