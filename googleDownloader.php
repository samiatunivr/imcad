

<?php
header('Content-type: text/plain');
set_time_limit(0);

class google {
public function __construct() {

}



public function queryengine($query = null)
{

    $img_urls = array();
    $count_save = 1;
    $query2 = $query;
    $link = 'https://www.google.com/search?q=' . $query2 . '&safe=off&sa=X&tbm=isch&tbs=itp:photo&ei=9wTZUpiuO8LS0QXawIDABw&csl=1&ijn=';
    for ($num = 0; $num < 10; $num++) {
        $link = $link . $num;
        $homepage = file_get_contents($link);

        preg_match_all('/\bhttps?:\/\/\S+(?:png|jpg)\b/', $homepage, $matches);
        for ($i = 0; $i <= sizeof($matches[$num]); $i++) {
            $value = $matches[$num][$i];
            //  echo '<img src=" . $value. " width="104" height="142"  class="round_edge3"> ';
            if (!in_array($value) && !empty($value)) {
                $img_urls[$count_save] = $value;
                $count_save = $count_save + 1;
            }
        }
    }
    return $img_urls;
}
}
?>



