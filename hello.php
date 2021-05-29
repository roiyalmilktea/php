<?php

$n=mt_rand(1,3);

if ($n == 1){
    $message = '<script>alert(1);</script>UXデザイナー見習い';
}
elseif ($n == 2){
    $message = 'プログラミング勉強中です';
}else{
    $message = 'PHPちょっと分かる';
}



?>


<!doctype html>
<html>
    <head>
        <title>ポートフォリオ</title>
        <link rel="icon" href="favicon.ico">
        <meta name="description" content="my portforio">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="icon">
                    <img src="img/taro.png" width="120" alt="koki_icon">
                </div>
                <div class="info">
                    <h1>永井弘輝</h1>
                    <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>

                    <ul>
                        <a href="https://datinstall.com" target="_blank">
                            <img src="img/blog.png" width="20" height="20" alt="ブログサイト">
                        </a>
                    </ul>
                </div>
            </div>
        </header>
    </body>
</html>