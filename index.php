<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">


<head>


<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- TemplateBeginEditable name="doctitle" -->

<title>IMCAD: Reliable training image sets</title>

<style type="text/css">
<!--
.STYLE6 {

    color: #fffef7;
    font-size: 70px;

}

.STYLE7 {

    font-size: 30px;
    color: #fffef7;

}

body, td, th {

    font-family: Georgia, Times New Roman, Times, serif;

    font-size: x-large;

    color: #000000;

}

.STYLE9 {

    font-size: 50px;

    font-family: "Times New Roman", Times, serif;

    color: #FF6600;

    font-weight: bold;

}

.STYLE10 {

    color: #000000;

}

body {

    background-color: #DFDFFF;

    margin-left: 100px;

    margin-right: 100px;

}

.STYLE20 {

    font-weight: bold;

    font-family: Times, serif;

    font-size: x-large;

    color: #0000FF;

}

.STYLE24 {

    color: #000000

}

.STYLE28 {

    color: #66FFFF

}

.STYLE31 {

    font-size: medium;

    color: #000000;

}

.STYLE32 {

    color: #FF6600;

    font-weight: bold;

    font-family: "Times New Roman", Times, serif;

    font-size: 24px;

}

.STYLE34 {

    color: #FF6600

}

.STYLE35 {

    font-size: 16px;

    color: #000000;

}

.STYLE37 {

    color: #66FFFF;

    font-size: x-large;

}

.STYLE39 {

    font-size: x-large;

}

.STYLE40 {

    font-size: 16px;

    color: #000000;

    font-weight: bold;

}

.loader {

    position: fixed;

    left: 400px;

    top: 400px;

    width: 50%;

    height: 50%;

    z-index: 9999;

    background: url('./images/page2-loading.gif') center center no-repeat #DFDFFF;

}

#overlay {

    display: none;

    position: fixed;

    background: #000;

    z-index: 2000;

}

#loading {

    padding: 10px 10px 10px 60px;

    width: 400px;

    height: 75px;

    background: url('./images/page2-loading.gif') 10px 50% no-repeat #DFDFFF;

    position: fixed;

    display: none;

    z-index: 3000;

}

#loading h3 {

    margin: 3px 0 0 0;

    padding: 0;

}

.hidden {

    display: none;

}

.rounded_edges {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: lightblue;
    border: 1px solid lightblue;
}

.round_edge2 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: limegreen;
    border: 1px solid limegreen;
}

.round_edge3 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: yellowgreen;
    border: 1px solid yellowgreen;

}

.round_edge4 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: darkgoldenrod;
    border: 1px solid darkgoldenrod;

}

.round_edge5 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: lightseagreen;
    border: 1px solid lightseagreen;

}

.round_edge6 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: darkgreen;
    border: 1px solid darkgreen;

}

.round_edge7 {
    -moz-border-radius: 15px;
    border-radius: 15px;
    background-color: deepskyblue;
    border: 1px solid deepskyblue;
}

#checkoutbutton {
    width: 67px;
    height: 40px;
    background-color: #33FF00;
    -moz-border-radius: 15px;
    -webkit-border-radius: 15px;
    border: 5px solid #009900;
    padding: 5px;
}

.header-outer {
    background: linear-gradient(135deg, rgba(37, 79, 117, 0.9) 0%, rgba(78, 129, 182, 0.9) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    padding-top: 25px;
    padding-bottom: 5px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    border: 1px solid limegreen;
}

.footer-outer {
    background: #8888bb;
    padding-top: 15px;
    padding-bottom: 10px;
    -moz-border-radius: 15px;
    border-radius: 15px;
    border: 1px solid white;
}

.footer {
    color: #fff;
    font-size: 14px;
}

.last-modify {
    float: left;
}

.univr-logo {
    float: right;
}

.vips-logo {
    float: left;
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;

#thediv {
    margin: 0 auto;
    height: 400px;
    width: 400px;
    overflow: hidden;
}

img {
    position: relative;
    left: 50%;
    top: 50%;
}


</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</head>
<center>
<body>
<div class="header-outer">
    <div class="container">
        <div class="univr-logo">
            <a href="http://vips.sci.univr.it/" target="_blank">
                <img src="./images/vipslogo.png" alt="VIPS logo" width="70px">
            </a>
        </div>
        <div class="vips-logo">
            <a href="http://www.univr.it" target="_blank">
                <img src="./images/logo-univr.png" alt="University Logo" width="170px" height="60px"> </a>
        </div>

                <span class="STYLE9">IMCAD: <span class="STYLE10"><span class="STYLE34"><span class="STYLE10"></span> IM</span>age <span
                            class="STYLE34">C</span>lassification <span class="STYLE34">A</span>utomatic <span
                            class="STYLE34">D</span>ata <span class="STYLE34"></span>Creation </span>

        <div class="STYLE6"> Vision, Image Processing & Sound Lab</div>
        <div class="STYLE7">Department of Computer Science, University of Verona (ITALY)</div>

    </div>
</div>

<form class="rounded_edges" method="post" action="index.php">
    <table class=" rounded_edges" width="1000" border="0">
        <span class="STYLE4">
          keyword: <input type="text" name="searchKeyword" placeholder="e.g., car"> bigrams: <input type="text"
                                                                                                    name="bigrams"
                                                                                                    placeholder="e.g., 5"> <br>
            images <input type="text" name="numimages" placeholder="e.g., 100"> <br>
        Filter: <i>basic</i> <input type="checkbox" style="height:20px; width:40px" name="Frequency" value="Frequency">
        <i>present participle</i> <input type="checkbox" style="height:20px; width:40px" name="Verbs" value="Verbs">
          <i>hyponymy</i> <input type="checkbox" style="height:20px; width:40px" name="Hyponymy" value="Hyponymy">
           <i>visual adjective</i>  <input type="checkbox" style="height:20px; width:40px" name="VISUALADJ"
                                           value="VISUALADJ">
            <i>fcom</i>  <input type="checkbox" style="height:20px; width:40px" name="FCOMBINATION"
                                value="FCOMBINATION">
            <div id="welcomeDiv" style="display:none;" class="loader"></div> <br/> <br/>
            Search Engine:
            Google <input type="radio" name="engine" value="google"/>
            Flickr <input type="radio" name="engine" value="flickr"/><br/>


        <br> <input type="submit" value="Search"
                    style="height:50px; width:90px; -moz-border-radius:15px;  border-radius: 15px;  border: 1px solid yellowgreen; " " />
    </span>
    </table>
</form>

<?php

// error_reporting(E_ALL);
###############################################################

#    input data

###############################################################

$queryInput = $_POST['searchKeyword'];

if (empty($queryInput)) {
    echo 'Please fill up the required fields';
    exit;
}


###############################################################

#    stop words

###############################################################

$stopwords = array("a", "about", "above", "above", "across", "after", "afterwards", "again", "against", "all", "almost", "alone", "along", "already", "also", "although", "always", "am", "among", "amongst", "amoungst", "amount", "an", "and", "another", "any", "anyhow", "anyone", "anything", "anyway", "anywhere", "are", "around", "as", "at", "back", "be", "became", "because", "become", "becomes", "becoming", "been", "before", "beforehand", "behind", "being", "below", "beside", "besides", "between", "beyond", "bill", "both", "bottom", "but", "by", "call", "can", "cannot", "cant", "co", "con", "could", "couldnt", "cry", "de", "describe", "detail", "do", "done", "down", "due", "during", "each", "eg", "eight", "either", "eleven", "else", "elsewhere", "empty", "enough", "etc", "even", "ever", "every", "everyone", "everything", "everywhere", "except", "few", "fifteen", "fify", "fill", "find", "fire", "first", "five", "for", "former", "formerly", "forty", "found", "four", "from", "front", "full", "further", "get", "give", "go", "had", "has", "hasnt", "have", "he", "hence", "her", "here", "hereafter", "hereby", "herein", "hereupon", "hers", "herself", "him", "himself", "his", "how", "however", "hundred", "ie", "if", "in", "inc", "indeed", "interest", "into", "is", "it", "its", "itself", "keep", "last", "latter", "latterly", "least", "less", "ltd", "made", "many", "may", "me", "meanwhile", "might", "mill", "mine", "more", "moreover", "most", "mostly", "move", "much", "must", "my", "myself", "name", "namely", "neither", "never", "nevertheless", "next", "nine", "no", "nobody", "none", "noone", "nor", "not", "nothing", "now", "nowhere", "of", "off", "often", "on", "once", "one", "only", "onto", "or", "other", "others", "otherwise", "our", "ours", "ourselves", "out", "over", "own", "part", "per", "perhaps", "please", "put", "rather", "re", "same", "see", "seem", "seemed", "seeming", "seems", "serious", "several", "she", "should", "show", "side", "since", "sincere", "six", "sixty", "so", "some", "somehow", "someone", "something", "sometime", "sometimes", "somewhere", "still", "such", "system", "take", "ten", "than", "that", "the", "their", "them", "themselves", "then", "thence", "there", "thereafter", "thereby", "therefore", "therein", "thereupon", "these", "they", "thickv", "thin", "third", "this", "those", "though", "three", "through", "throughout", "thru", "thus", "to", "together", "too", "top", "toward", "towards", "twelve", "twenty", "two", "un", "under", "until", "up", "upon", "us", "very", "via", "was", "we", "well", "were", "what", "whatever", "when", "whence", "photography", "whenever", "where", "whereafter", "whereas", "whereby", "wherein", "whereupon", "wherever", "whether", "which", "while", "whither", "who", "whoever", "whole", "whom", "whose", "why", "will", "with", "within", "without", "would", "yet", "you", "your", "yours", "yourself", "yourselves", "the", "spring", "string", "draw", "drawing", "portrait", "animals");

###############################################################

#    flag words

###############################################################

$flag_words = array("canon", "vintage", "nikon", "sex", "porn", "tranny");

// remove plural form of words

function depluralize($word)

{

    $rules = array(

        'ss' => false,

        'os' => 'o',

        'ies' => 'y',

        'xes' => 'x',

        'oes' => 'o',

        'ies' => 'y',

        'ves' => 'f',

        'es' => '');

    // Loop through all the rules and do the replacement.

    foreach (array_keys($rules) as $key) {

        // If the end of the word doesn't match the key,

        // it's not a candidate for replacement. Move on

        // to the next plural ending.

        if (substr($word, (strlen($key) * -1)) != $key)

            continue;

        // If the value of the key is false, stop looping

        // and return the original version of the word.

        if ($key === false)

            return $word;

        // We've made it this far, so we can do the

        // replacement.

        return substr($word, 0, strlen($word) - strlen($key)) . $rules[$key];

    }

    return $word;

}

$known_hyper = ["device", "containerful", "vehicle", "animal", "human"];
###############################################################
#    WordNet query (Synonym)
###############################################################
$cmd = 'wn ' . '' . $queryInput . ' ' . '-synsn';
$result = shell_exec($cmd);

preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*\=> [\w+\s*|\,|\-]*/', $result, $senses);
$synonBank = preg_replace('/\Sense 1/', ' ', $senses[0]);
$synonBank = preg_replace('/=>/', ',', $synonBank);
$synonBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $synonBank);
$synonBank = preg_replace('/' . $queryInput . '/', '', $synonBank);

$word = strtok($synonBank[0], ',');
$myarray[] = $word;
while (false !== $word) {
    $word = strtok(',');
    $myarray[] = trim(str_replace($queryInput, '', $word));
}
$myarray = array_filter($myarray);


###############################################################
#    WordNet query (Hyponymy)
###############################################################
$cmd = 'wn ' . ' ' . $queryInput . ' -n1 ' . '-hypon';
$result2 = shell_exec($cmd);
preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s* [\=> [\w+\s*|\,|\-]*[\n]]*/', $result2, $senseshyp);
$hypoBank = preg_replace('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*/', ' ', $senseshyp[0]);
$hypoBank = preg_replace('/=>/', ',', $hypoBank);
$hypoBank = preg_replace('/^' . $queryInput . '$/', '', $hypoBank);
$hypoBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $hypoBank);
$word2 = strtok($hypoBank[0], ',');

while (false !== $word2) {
    $word2 = strtok(',');
    $myarray2[] = trim(str_replace($queryInput, '', $word2));
}
##############################################################
# WordNet Query Hypernymy
##############################################################
$cmd = 'wn ' . ' ' . $queryInput . ' -n1 ' . '-hypen';
$result2 = shell_exec($cmd);

preg_match_all('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s* [\=> [\w+\s*|\,|\-]*[\n]]*/', $result2, $senseshyp);
$hyperBank = preg_replace('/\Sense 1[\n][\w+\s*|\,|\-]*[\n]\s*/', ' ', $senseshyp[0]);
$hyperBank = preg_replace('/=>/', ',', $hyperBank);
$hyperBank = preg_replace('/^' . $queryInput . '$/', '', $hyperBank);
$hyperBank = preg_replace('/Sense 2\s[\w+\s*|\,|\-]*/', '', $hyperBank);
$word3 = strtok($hyperBank[0], ',');

while (false !== $word3) {
    $word3 = strtok(',');
    $hyperWords[] = trim(str_replace($queryInput, '', $word3));
}

$additional = array_intersect($hyperWords, $known_hyper);
foreach ($additional as $key => $value) {

}
if ($queryInput == 'mouse') {
    $addMe = 'device';
}


$bigramsinput = $_POST['bigrams'];
if (empty($bigramsinput)) {
    $bigramsinput = 10; //echo "You did not fill out the required fields.";
}


$search_count = $_POST['numimages'];
if (empty($search_count)) {
    $search_count = 30;
}

###############################################################

#    Load txt files (English Dictionary, CountryList,Quality word List)

###############################################################

$filename = './textfiles/corncob_lowercase.txt';
$file = fopen($filename, "r");
while (!feof($file)) {
    $members[] = strtolower(trim(fgets($file)));
}
fclose($file);


$filename = './textfiles/colorList2.txt';
$file = fopen($filename, "r");
while (!feof($file)) {
    $colorList[] = strtolower(trim(fgets($file)));
}
fclose($file);

$filename = './textfiles/nounList.txt';
$file = fopen($filename, "r");
while (!feof($file)) {
    $nounList2[] = strtolower(trim(fgets($file)));
}
fclose($file);

$filename = './textfiles/badWords.txt';
$file = fopen($filename, "r");
while (!feof($file)) {
    $badwords2[] = strtolower(trim(fgets($file)));
}
fclose($file);

// country list

$filename = './textfiles/countryList.txt';
$file = fopen($filename, "r");
while (!feof($file)) {
    $countryLists[] = strtolower(trim(fgets($file)));
}
fclose($file);


include('./flickr.php');
require_once('./wordsBreaker.php');
include_once('./downloadflickr.php');
require_once('./flickrTag.php');
require_once('./flickrTagRelated.php');
require_once('./googleDownloader.php');


$start = microtime(true);
$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
global $imgid;

###############################################################

#   Initialize Classes

###############################################################

$downloadIMAGE = new downloadIMAGE;
$Flickr = new Flickr;
$TAG = new TAG;
$FlickrRelated = new FlickrRalated;
$google = new google;

###############################################################
#   Get images ids
###############################################################
/*$keywords = ['big+backpack','white+backpack','blue+bacpack'];
for ($c=0;$c<sizeof($keywords);$c++){
    $data = $google->queryengine($keywords[$c]);
    print_r($data);
    echo '<br/><br/>';

}
exit;*/

$data = $Flickr->search($queryInput);
foreach ($data['photos']['photo'] as $photo) {
    $imgid[] = $photo["id"];
}

###############################################################
#   Get tags of each image id
###############################################################

/**
 * Output span with progress.
 *
 * @param $current integer Current progress out of total
 * @param $total   integer Total steps required to complete
 */

function outputProgress($current, $total)
{
    echo "<span style='position: absolute;z-index:$current;background:greenyellow;'>" . round($current / $total * 100) . "% </span>";
    myFlush();
    sleep(1);
}

/**
 * Flush output buffer
 */
function myFlush()
{
    echo(str_repeat(' ', 256));
    if (@ob_get_contents()) {
        @ob_end_flush();
    }
    flush();
}


$current = 0;
$img_ids = count($imgid);
echo '<div class="progress">';
foreach ($imgid as $key => $value) {

    $tg = $TAG->tagsearch($value);

    $percentage = round($current / $img_ids * 100);

    outputProgress($current, $img_ids);
    //echo "<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:'.$percentage.'%"></div>";
    $current++;


    if (!empty($tg)) {
        foreach ($tg['photo']['tags']['tag'] as $tag) {
            $tagquery = strtolower(trim($tag["raw"]));
            $data = preg_split("/\s|\,|\-|\_/", $tagquery);
            if (!empty($data)) {

                $i = 0;

                while ($i < count($data)) {

                    $tagsWord = $data[$i];

                    if (!in_array($tagsWord, $stopwords)) {

                        $class_word[$count1++] = depluralize($tagsWord);

                        $taglist[] = depluralize($tagsWord);

                    } else {

                        $junkWords[] = $tagsWord;

                    }

                    $i++;

                }

            } else {

                // remove stop words;

                if (!in_array($tagquery, $stopwords)) {

                    $class_word[$count1++] = depluralize($tagquery);

                    $taglist[] = depluralize($tagquery);

                } else {

                    $junkWords[] = $tagquery;

                }


            }

        }
    }

}

echo '</div>';


###############################################################
#   Compute Processing Time
###############################################################

//    $time_elapsed_secs = microtime(true) - $start;
//
//    echo 'Elapsed(s):' . $time_elapsed_secs;
//
//    echo ' <br><br>';

###############################################################

#  Frequency Tag calculation and refinements

###############################################################

$frequencyBank = array_intersect($class_word, $members);
$key = array_search($queryInput, $frequencyBank);

if ($key !== false) {

    unset($frequencyBank[$key]);

}

$pluralForm = $queryInput . 's';

foreach ($frequencyBank as $key => $value) {

    if ($frequencyBank[$key] == $queryInput | $frequencyBank[$key] == $pluralForm) {

        unset($frequencyBank[$key]);

    }

}

// remove country list

foreach ($frequencyBank as $key => $value) {

    if (!in_array($value, $countryLists)) {

        $clean_words1 [] = $value;


    }


}

// remove flag words

foreach ($clean_words1 as $key => $value) {
    if (!in_array($value, $flag_words)) {
        $frequencyBank1 [] = $value;
    }


}

foreach ($frequencyBank1 as $key => $value) {
    if (!in_array($value, $badwords2)) {
        $frequencyBank2 [] = $value;
    }
}


$FreqOcc = array_count_values($frequencyBank2);
array_multisort($FreqOcc, SORT_DESC);

foreach ($FreqOcc as $key => $value) {
    $frequentWords[] = $key;
}


for ($t = 0; $t < sizeof($frequentWords); $t++) {
    $findMe = preg_match("/ing$/", $frequentWords[$t]);
    if (!empty($findMe)) {
        $partverbs [] = $frequentWords[$t];
    }
}

$frequencyBank3 = array_intersect($frequentWords, $myarray);

//array_intersect($partverbs,$nounList2);
foreach ($partverbs as $key => $value) {
    if (!in_array($value, $nounList2)) {
        $presentpart1[] = $value;
    }
}


foreach ($presentpart1 as $key => $value) {
    $cmd = 'wn ' . '' . $value . ' -n1 ' . '-hypov';
    $ch = shell_exec($cmd);
    if (!empty($ch)) {
        $met1 = preg_match("/Sense 1/", $ch);
        if (!empty($met1)) {
            $presentpart[] = $value;
        }
    }
}

###############################################################

#   visual adjective words

###############################################################
foreach ($frequentWords as $key => $value) {
    $cmd = 'wn ' . '' . $value . ' ' . '-antsa';
    //echo $value;
    $ch = shell_exec($cmd);
    $met = preg_match("/achromatism|achromia|chroma|color|texture|light/", $ch);
    if (!empty($met)) {
        $visualwords[] = $value;
    }

}


# build fcom- sets
$hypoWord = array_intersect($frequentWords, $myarray2);

$fcom1 = array_intersect($frequentWords, $myarray2); // hypo
$fcom2 = array_intersect($frequentWords, $visualwords); // visual adjective
$fcom3 = array_intersect($frequentWords, $presentpart);

$store_values = array();
if (!empty($fcom1)) {
}
foreach ($fcom1 as $key => $value) {
    $val1 = $key;
    $store_values[] = $val1;
}

if (!empty($fcom2)) {
    foreach ($fcom2 as $key => $value) {
        $val2 = $key;
        $store_values[] = $val2;
    }
}
if (!empty($fcom3)) {
    foreach ($fcom3 as $key => $value) {
        $val3 = $key;
        $store_values[] = $val3;
    }
}

sort($store_values);

for ($bi = 0; $bi <= sizeof($store_values); $bi++) {
    $fcom_grams[] = $frequentWords[$store_values[$bi]];
}

$fcom_grams = array_unique($fcom_grams, SORT_REGULAR);

/*$myFile = $queryInput . '_fcom_gram.txt';
chmod($myFile, 01777);
$fp = fopen('./' . "$myFile", "wb");
foreach ($fcom_grams as $key => $value) {
    fwrite($fp, $value . "\n");

}
fclose($fp);

$myFile = $queryInput . '_hypo_gram.txt';
chmod($myFile, 01777);
$fp = fopen('./' . "$myFile", "wb");
foreach ($fcom1 as $key => $value) {
    fwrite($fp, $value . "\n");

}
fclose($fp);
$myFile = $queryInput . '_visualadj_gram.txt';
chmod($myFile, 01777);
$fp = fopen('./' . "$myFile", "wb");
foreach ($fcom2 as $key => $value) {
    fwrite($fp, $value . "\n");

}
fclose($fp);
$myFile = $queryInput . '_prepar_gram.txt';
chmod($myFile, 01777);
$fp = fopen('./' . "$myFile", "wb");
foreach ($fcom3 as $key => $value) {
    fwrite($fp, $value . "\n");

}
fclose($fp);
exit;*/

#  Re-Query flickr for bigrams obtained by FQ

###############################################################
array_map('unlink', glob("./*.txt"));
/*    foreach (glob("./*.txt") as $file) {

//       /*** if file is 24 hours (86400 seconds) old then delete it ***/
/*       if (filemtime($file) < time() - 86400) {
           unlink($file);
       }
   }*/


################################################################
### fcom
################################################################


if (isset($_POST['FCOMBINATION'])) {
// echo "<table class='round_edge3'  border='1'>";
    if ($_POST['engine'] == "google") {
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >fcom:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_fcom.txt';

        $fp = fopen('./' . "$myFile", "wb");
         for ($bi=0; $bi<=sizeof($fcom_grams);$bi++) {

            if ($i <= $bigramsinput) {
                $bi_guery = $fcom_grams[$bi] . '+' . $queryInput;

                $data = $google->queryengine($bi_guery);

                echo '<td width="150" align=center>' . $fcom_grams[$bi] . '</td>';
                foreach ($data as $key=>$value) {
                    $img_url = $value;
                    echo '<img src="' . $img_url . '" width="104" height="142">';
                    $actual_link = $img_url . "\n";

                    fwrite($fp, $actual_link);
                    $lineNumber++;

                }


                $i++;

            }
        }
        fclose($fp);


    }

    else{
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >fcom:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_fcom.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach ($fcom_grams as $key => $value) {

            if ($i <= $bigramsinput) {
                if (!empty($addMe)) {
                    $concat = '%2C' . $addMe;
                    $bi_guery = $value . '%2C' . urlencode($queryInput) . '%2B' . $addMe;


                } else {
                    $bi_guery = $value . '%2C' . urlencode($queryInput);

                }


                $searchIMG = $downloadIMAGE->search($bi_guery, $num);


                echo '<td width="150" align=center>' . $value . '</td>';

                foreach ($searchIMG['photos']['photo'] as $photo) {

                    echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="104" height="142"  class="round_edge3"> ';
                    $actual_link = 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg' . "\n";
                    $lineNumber = $lineNumber + 1;
                    fwrite($fp, $actual_link);

                }


                $i++;

            } else {


            }

        }
        fclose($fp);


    }
}

if (isset($_POST['Frequency'])) {
    if ($_POST['engine'] == "google") {
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >basic:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_fcom.txt';

        $fp = fopen('./' . "$myFile", "wb");
        for ($bi=0; $bi<=sizeof($frequentWords);$bi++) {

            if ($i <= $bigramsinput) {
                $bi_guery = $frequentWords[$bi] . '+' . $queryInput;

                $data = $google->queryengine($bi_guery);

                echo '<td width="150" align=center>' . $frequentWords[$bi] . '</td>';
                foreach ($data as $key=>$value) {
                    $img_url = $value;
                    echo '<img src="' . $img_url . '" width="104" height="142">';
                    $actual_link = $img_url . "\n";

                    fwrite($fp, $actual_link);
                    $lineNumber++;

                }


                $i++;

            }
        }
        fclose($fp);


    }
    else{
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >basic:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_fcom.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach ($frequentWords as $key => $value) {

            if ($i <= $bigramsinput) {
                if (!empty($addMe)) {
                    $concat = '%2C' . $addMe;
                    $bi_guery = $value . '%2C' . urlencode($queryInput) . '%2B' . $addMe;


                } else {
                    $bi_guery = $value . '%2C' . urlencode($queryInput);

                }


                $searchIMG = $downloadIMAGE->search($bi_guery, $num);


                echo '<td width="150" align=center>' . $value . '</td>';

                foreach ($searchIMG['photos']['photo'] as $photo) {

                    echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="104" height="142"  class="round_edge3"> ';
                    $actual_link = 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg' . "\n";
                    $lineNumber = $lineNumber + 1;
                    fwrite($fp, $actual_link);

                }


                $i++;

            } else {


            }

        }
        fclose($fp);


    }


}


###############################################################

#  re-Query flickr for bigrams obtained by QUALITY

###############################################################

if (isset($_POST['Verbs'])) {

    if ($_POST['engine'] == "google") {
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >present part:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_verb.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach($fcom3 as $key=>$value) {

            if ($i <= $bigramsinput) {
                $bi_guery = $value . '+' . $queryInput;
                $data = $google->queryengine($bi_guery);
                print_r($data);
                echo '<td width="150" align=center>' . $value . '</td>';
                foreach ($data as $key=>$value) {
                    $img_url = $value;
                    echo '<img src="' . $img_url . '" width="104" height="142">';
                    $actual_link = $img_url . "\n";

                    fwrite($fp, $actual_link);
                    $lineNumber++;

                }


                $i++;

            }
        }
        fclose($fp);


    }
    else{
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >present part:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_verb.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach ($fcom3 as $key => $value) {

            if ($i <= $bigramsinput) {
                if (!empty($addMe)) {
                    $concat = '%2C' . $addMe;
                    $bi_guery = $value . '%2C' . urlencode($queryInput) . '%2B' . $addMe;


                } else {
                    $bi_guery = $value . '%2C' . urlencode($queryInput);

                }


                $searchIMG = $downloadIMAGE->search($bi_guery, $num);


                echo '<td width="150" align=center>' . $value . '</td>';

                foreach ($searchIMG['photos']['photo'] as $photo) {

                    echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="104" height="142"  class="round_edge3"> ';
                    $actual_link = 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg' . "\n";
                    $lineNumber = $lineNumber + 1;
                    fwrite($fp, $actual_link);

                }


                $i++;

            } else {


            }

        }
        fclose($fp);


    }

}


###############################################################

#  re-Query flickr for bigrams obtained by HYPNOMY

###############################################################

if (!empty($myarray2)) {

    if (isset($_POST['Hyponymy'])) {
        if ($_POST['engine'] == "google") {
            echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

            echo "<tr style='font-weight: bold;'>";

            echo "<td width='400' align='center' >hypo:  $queryInput </td>";

            echo "</tr>";
            $i = 1;
            $num = round($search_count / $bigramsinput);
            $lineNumber = 1;

            $myFile = $queryInput . '_hypo.txt';

            $fp = fopen('./' . "$myFile", "wb");
            foreach($fcom1 as $key=>$value) {

                if ($i <= $bigramsinput) {
                    $bi_guery = $value . '+' . $queryInput;

                    $data = $google->queryengine($bi_guery);

                    echo '<td width="150" align=center>' . $value. '</td>';
                    foreach ($data as $key => $value) {
                        $img_url = $value;
                        echo '<img src="' . $img_url . '" width="104" height="142">';
                        $actual_link = $img_url . "\n";

                        fwrite($fp, $actual_link);
                        $lineNumber++;

                    }


                    $i++;

                }
            }
            fclose($fp);
        }
         else {
            echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

            echo "<tr style='font-weight: bold;'>";

            echo "<td width='400' align='center' >hypo:  $queryInput </td>";

            echo "</tr>";
            $i = 1;
            $num = round($search_count / $bigramsinput);
            $lineNumber = 1;

            $myFile = $queryInput . '_verb.txt';

            $fp = fopen('./' . "$myFile", "wb");
            foreach ($fcom1 as $key => $value) {

                if ($i <= $bigramsinput) {
                    if (!empty($addMe)) {
                        $concat = '%2C' . $addMe;
                        $bi_guery = $value . '%2C' . urlencode($queryInput) . '%2B' . $addMe;


                    } else {
                        $bi_guery = $value . '%2C' . urlencode($queryInput);

                    }


                    $searchIMG = $downloadIMAGE->search($bi_guery, $num);


                    echo '<td width="150" align=center>' . $value . '</td>';

                    foreach ($searchIMG['photos']['photo'] as $photo) {

                        echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="104" height="142"  class="round_edge3"> ';
                        $actual_link = 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg' . "\n";
                        $lineNumber = $lineNumber + 1;
                        fwrite($fp, $actual_link);

                    }


                    $i++;

                } else {


                }

            }
            fclose($fp);

        }
    }
}

###############################################################

#  re-Query flickr for bigrams obtained by VISUAL ADJECTIVE

###############################################################

if (isset($_POST['VISUALADJ'])) {


    if ($_POST['engine'] == "google") {
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >visual adj:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_visadj.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach ($fcom3 as $key=>$value) {

            if ($i <= $bigramsinput) {
                $bi_guery = $value . '+' . $queryInput;

                $data = $google->queryengine($bi_guery);

                echo '<td width="150" align=center>' . $value . '</td>';
                foreach ($data as $key => $value) {
                    $img_url = $value;
                    echo '<img src="' . $img_url . '" width="104" height="142">';
                    $actual_link = $img_url . "\n";

                    fwrite($fp, $actual_link);
                    $lineNumber++;

                }


                $i++;

            }
        }
        fclose($fp);
    }
    else {
        echo "<table border='1' style='border-collapse:

           collapse;border-color: black;color: black'>";

        echo "<tr style='font-weight: bold;'>";

        echo "<td width='400' align='center' >visual adj:  $queryInput </td>";

        echo "</tr>";
        $i = 1;
        $num = round($search_count / $bigramsinput);
        $lineNumber = 1;

        $myFile = $queryInput . '_verb.txt';

        $fp = fopen('./' . "$myFile", "wb");
        foreach ($fcom2 as $key => $value) {

            if ($i <= $bigramsinput) {
                if (!empty($addMe)) {
                    $concat = '%2C' . $addMe;
                    $bi_guery = $value . '%2C' . urlencode($queryInput) . '%2B' . $addMe;


                } else {
                    $bi_guery = $value . '%2C' . urlencode($queryInput);

                }


                $searchIMG = $downloadIMAGE->search($bi_guery, $num);


                echo '<td width="150" align=center>' . $value . '</td>';

                foreach ($searchIMG['photos']['photo'] as $photo) {

                    echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg" width="104" height="142"  class="round_edge3"> ';
                    $actual_link = 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg' . "\n";
                    $lineNumber = $lineNumber + 1;
                    fwrite($fp, $actual_link);

                }


                $i++;

            } else {


            }

        }
        fclose($fp);
    }

}


###########################################################
##          Display files
###########################################################
$directory = dir('.');
# If you want to turn on Extension Filter, then uncomment this:
//$allowed_ext = array(".sample", ".png", ".jpg", ".jpeg", ".txt", ".doc", ".xls");

$allowed_ext = array(".txt");
## Description of the soft: list_dir_files.php

## Major credits: phpDIRList 2.0 -(c)2005 Ulrich S. Kapp :: Systemberatung ::


$do_link = TRUE;

$sort_what = 0; //0- by name; 1 - by size; 2 - by date

$sort_how = 0; //0 - ASCENDING; 1 - DESCENDING


# # #

function dir_list($dir)
{

    $i = 0;

    $dl = array();

    if ($hd = opendir($dir)) {

        while ($sz = readdir($hd)) {

            if (preg_match("/^\./", $sz) == 0) $dl[] = $sz;
            $i .= 1;

        }

        closedir($hd);

    }

    asort($dl);

    return $dl;

}

if ($sort_how == 0) {

    function compare0($x, $y)
    {

        if ($x[0] == $y[0]) return 0;

        else if ($x[0] < $y[0]) return -1;

        else return 1;

    }

    function compare1($x, $y)
    {

        if ($x[1] == $y[1]) return 0;

        else if ($x[1] < $y[1]) return -1;

        else return 1;

    }

    function compare2($x, $y)
    {

        if ($x[2] == $y[2]) return 0;

        else if ($x[2] < $y[2]) return -1;

        else return 1;

    }

} else {

    function compare0($x, $y)
    {

        if ($x[0] == $y[0]) return 0;

        else if ($x[0] < $y[0]) return 1;

        else return -1;

    }

    function compare1($x, $y)
    {

        if ($x[1] == $y[1]) return 0;

        else if ($x[1] < $y[1]) return 1;

        else return -1;

    }

    function compare2($x, $y)
    {

        if ($x[2] == $y[2]) return 0;

        else if ($x[2] < $y[2]) return 1;

        else return -1;

    }


}


##################################################

#    We get the information here

##################################################


$i = 0;

while ($file = $directory->read()) {

    $file = strtolower($file);

    $ext = strrchr($file, '.');

    if (isset($allowed_ext) && (!in_array($ext, $allowed_ext))) {

        // dump

    } else {

        $temp_info = stat($file);

        $new_array[$i][0] = $file;

        $new_array[$i][1] = $temp_info[7];

        $new_array[$i][2] = $temp_info[9];

        $new_array[$i][3] = date("F d, Y", $new_array[$i][2]);

        $i = $i + 1;

    }

}

$directory->close();


##################################################

# We sort the information here

#################################################


switch ($sort_what) {

    case 0:

        usort($new_array, "compare0");

        break;

    case 1:

        usort($new_array, "compare1");

        break;

    case 2:

        usort($new_array, "compare2");

        break;

}


###############################################################

#    We display the infomation here

###############################################################
echo '<br> <br>';

$i2 = count($new_array);

$i = 0;

echo "<table class='footer-outer'  border='1' align='center'>

                <tr>

                    <td width=400> File Download</td>

                    <td width=400> File Size</td>

                    <td width=400>Last Modified</td>

                </tr>";


/*** if file is 24 hours (86400 seconds) old then delete it ***/


for ($i = 0; $i < $i2; $i++) {

    if (!$do_link) {

        $line = "<tr><td align=left>" .

            $new_array[$i][0] .

            "</td><td align=left>" .

            number_format(($new_array[$i][1] / 1024)) .

            "k";

        $line = $line . "</td><td align=left>" . $new_array[$i][3] . "</td></tr>";

    } else {

        $line = '<tr><td align=left><A  target="_blank" HREF="' .

            $new_array[$i][0] . '" download>' .

            $new_array[$i][0] .

            "</A></td><td align=left>";

        $line = $line . number_format(($new_array[$i][1] / 1024)) .

            "k" . "</td><td align=left>" .

            $new_array[$i][3] . "</td></tr>";
//            if ( filetime($new_array[$i][3]) < time() - 960) {
//                unlink($new_array[$i][3]);
//            }

    }


    echo $line;

}


?>


</body>
</center>

</html>
