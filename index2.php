<?
$title='非公式ホームページ';

ob_start();
require 'header.php';
$content = ob_get_clean();
echo $content;

require 'rss.php'; //require=phpファイルrssを呼び出す
require 'main.php';//require=phpファイルmainを呼び出す 
require 'sub1.php';
require 'sub2.php';
require 'footer.php';

?>


