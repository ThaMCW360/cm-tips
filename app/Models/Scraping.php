<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spins;
use App\Models\Village;
use DOMDocument;
use DOMXpath;
// use mysql_real_escape_string;

class scraping extends Model
{

    public static function getSpins(){
        $dates =  Spins::distinct()->orderBy('date', "desc")->get("date");
        $spins = [];

for($i=0; $i<count($dates); $i++){
$spins[$i]['date'] = $dates[$i]['date'];
}

        for($i=0; $i<count($dates); $i++){
// return $dates[$i]['date'];
            array_push($spins[$i], Spins::where("date", '=' , $dates[$i]['date'])->get());
        }
return $spins;

    }


        public static function getVillagesList(){
        $villages =  Village::distinct()->orderBy('number', "asc")->get();

return $villages;

    }




public static function getSite2($href){


        $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $href);
    curl_setopt($curl, CURLOPT_REFERER, $href);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
    $str = curl_exec($curl);
    curl_close($curl);

$doc = new DOMDocument();
$res = @$doc->loadHTML($str);
$xpath = new DOMXpath($doc);
////

$entriesH3 = $xpath->query("//h3[contains(text(),'Coin Master free spins & coins')]");
$entriesOl = $xpath->query("//ol");
$h3 = [];
$ol = [];
$tmp = [];
$tmp2 = [];

foreach ($entriesH3 as $entry) {
array_push($h3, $entry);
}

for($i=0; $i<count($entriesOl); $i++){

$ol[$i] = $entriesOl[$i];
// return dd($ol[0]->childNodes[0]->childNodes[);
if(!isset($h3[0])){
   // return dd($h3);
}
// return dd($h3);
$tmp_str = $h3[$i]->nodeValue;
$tmp_str = str_replace("(","", $tmp_str);
$tmp_str = str_replace(")","", $tmp_str);
$tmp_str = str_replace("Today","", $tmp_str);
$tmp_str = str_replace("Coin Master free spins & coins","", $tmp_str);
$tmp[$i]["h3"] = date('Y-m-d', strtotime($tmp_str." 2023"));
    for($j=0; $j<count($ol[$i]->childNodes); $j++){
       $tmp[$i]["a"][$j]["text"] = trim($entriesOl[$i]->childNodes[$j]->childNodes[0]->nodeValue);
       $tmp[$i]["a"][$j]["text"] = str_replace(","," &", $tmp[$i]["a"][$j]["text"]);
       // $tmp[$i]["a"][$j]["url"] = $entriesOl[$i]->childNodes[$j]->childNodes[0]->attributes[0]->value;
       $tmp_url = $entriesOl[$i]->childNodes[$j]->childNodes[0]->attributes[0]->value;
       // $tmp_url = str_replace("/","-", $tmp_url);
       // $tmp_url = str_replace(":","#", $tmp_url);
       $tmp[$i]["a"][$j]["url"] = $tmp_url;
       if(is_null($tmp_url)){
        $tmp_url = "x";
       }
       $tmp[$i]["a"][$j]["date"] = $tmp[$i]["h3"];

        array_push($tmp2, $tmp[$i]["a"][$j]);

        if(count(Spins::where("url",$tmp[$i]["a"][$j]["url"])->get())<1){
                            $result = new Spins;
                        $result->url = $tmp[$i]["a"][$j]["url"];
                        $result->date = $tmp[$i]["a"][$j]["date"];
                        $result->text = $tmp[$i]["a"][$j]["text"];
                        $new = $result->save();
        }

    }

}

//return $tmp2;


}

public static function getSite_sub($href){


        $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $href);
    curl_setopt($curl, CURLOPT_REFERER, $href);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
    $str = curl_exec($curl);
    curl_close($curl);

$doc = new DOMDocument();
$res = @$doc->loadHTML($str);
$xpath = new DOMXpath($doc);

////
// return dd($xpath->query("//table"));
$entries = $xpath->query("//table//td");
$entriesA = $xpath->query("//table//td//a");
$h3 = [];
$ol = [];
$tmp = [];
$tmp1 = [];
$dates = [];
$qqq = "";
$tmp2 = [
];
$tmp3 = [];

foreach ($entries as $entry) {
array_push($tmp, $entry);
}

foreach ($entriesA as $entry) {
array_push($tmp1, $entry);
}

// return dd($tmp[0]->attributes[0]->value);
// date('Y-m-d', strtotime($tmp[1]->childNodes[0]->childNodes[0]->nodeValue))
// return dd();


for($i=1; $i<count($tmp); $i++){

    $qqq = $tmp[1]->childNodes[0]->nodeValue;
    $tmp2["text"] = $qqq;
    if($i==2){
        // return dd($tmp[$i]->childNodes[0]->attributes[0]->value);
        // $tmp2["url"] = $tmp[$i]->childNodes[0]->childNodes[0]->attributes[0]->value;
        $tmp2["url"] = $tmp1[0]->attributes[0]->value;
        // return in_array('https://static.moonactive.net/static/coinmaster/reward/reward2.html?c=pe_TWIlGoMht_20230106', iterator_to_array($tmp[$i]));
    }
    // return $qqq;
    // if(@$tmp[2]->childNodes[0]->childNodes[0]->attributes[0]->value!=null && strpos(@$tmp[2]->childNodes[0]->childNodes[0]->attributes[0]->value, 'static.moonactive.net/static/coinmaster/reward')>0){
    //     $tmp2[$i]["url"] = $tmp[$i]->childNodes[0]->childNodes[0]->attributes[0]->value;
    //     $qqq = $tmp[$i]->childNodes[0]->childNodes[0]->attributes[0]->value;
    // } else {
    //     $tmp2[$i]["url"] = null;
    // }
// $qqq = $tmp[2]->childNodes[0]->childNodes[0]->attributes[0]->value;
$tmp2["date"] = date('Y-m-d', strtotime($tmp[0]->childNodes[0]->nodeValue));
// array_push($dates, $tmp2["date"]);
}

$tmp2 = array_merge($tmp2);

// return Spins::where("url",$tmp2["url"])->get();
        if(count(Spins::where("url",$tmp2["url"])->get())<1){
                            $result = new Spins;
                        $result->url = $tmp2["url"];
                        $result->date = $tmp2["date"];
                        // $tmp2["text"] = str_replace("Free ","", $qqq);
                        $tmp2["text"] = str_replace("10 Free Spins","10 spins & coins", $tmp2["text"]);
                        $result->text = $tmp2["text"];
                        $new = $result->save();
        }


// return $result;

}




public static function getSite($href){


        $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $href);
    curl_setopt($curl, CURLOPT_REFERER, $href);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
    $str = curl_exec($curl);
    curl_close($curl);

$doc = new DOMDocument();
$res = @$doc->loadHTML($str);
$xpath = new DOMXpath($doc);

////

$entries = $xpath->query("//table//tr");
// $entriesOl = $xpath->query("//ol");
$h3 = [];
$ol = [];
$tmp = [];
$dates = [];
$qqq = "";
$tmp2 = [
];
$tmp3 = [];

foreach ($entries as $entry) {
array_push($tmp, $entry);
}


// date('Y-m-d', strtotime($tmp[1]->childNodes[0]->childNodes[0]->nodeValue))
// return dd();


for($i=1; $i<count($tmp); $i++){

    $qqq = $tmp[$i]->childNodes[1]->childNodes[0]->nodeValue;
$qqq = str_replace("ink – ","", $qqq);
$qqq = str_replace("Free ","", $qqq);
$qqq = str_replace("Million","million", $qqq);
// if(strpos($qqq, "10 m")>0){
//     return $tmp[$i];
// }

if(strpos($qqq, "Coin Craze")>0){
    $qqq = explode(".L", $qqq);
// return $qqq;
} else {
    $qqq = explode(". L", $qqq);
    //return $qqq;
    // return dd($tmp2);
}
// $qqq = explode(". C", $qqq);
// return dd($qqq[1]);
$tmp2[$i]["number"] = $qqq[0];
// if(!isset($qqq[1])){
//     return dd($tmp2);
// }
$tmp2[$i]["text"] = $qqq[1];
    if(@$tmp[$i]->childNodes[2]->childNodes[0]->attributes[0]->value!=null && strpos(@$tmp[$i]->childNodes[2]->childNodes[0]->attributes[0]->value, 'for-the-coin-master')>0){
    $tmp2[$i]["url"] = $tmp[$i]->childNodes[2]->childNodes[0]->attributes[0]->value;
} else {
    $tmp2[$i]["url"] = null;
}

$tmp2[$i]["date"] = date('Y-m-d', strtotime($tmp[$i]->childNodes[0]->childNodes[0]->nodeValue));
array_push($dates, $tmp2[$i]["date"]);
}

$tmp2 = array_merge($tmp2);

for($i=0; $i<count($tmp2); $i++){
    if($tmp2[$i]["url"]==null){
        unset($tmp2[$i]);
    }
}
$tmp2 = array_merge($tmp2);
// return $tmp2[0];
// for($i=0; $i<2; $i++){
// return $tmp2[1]["url"];
// Scraping::getSite_sub('https://freegametips.com/06-01-2023-5-link-10-free-spins-for-the-coin-master/');
// return "x";
for($i=0; $i<5; $i++){
    Scraping::getSite_sub($tmp2[$i]["url"]);
}
// return true;
// $tmp2 = array_merge($tmp2);
// $dates = array_merge(array_unique($dates));

// for($j=0; $j<count($dates); $j++){
//     $tmp3[$j] = [];
// }

// for($i=0; $i<count($tmp2); $i++){
//     for($j=0; $j<count($dates); $j++){
//         if($dates[$j] ==
//          $tmp2[$i]["date"]){
//             array_push($tmp3[$j], $tmp2[$i]);
//         }
//     }
// }
// return $tmp2;
// for($i=0; $i<count($tmp2); $i++){

//         if(count(Spins::where("url",$tmp2[$i]["url"])->get())<1){
//                             $result = new Spins;
//                         $result->url = $tmp2[$i]["url"];
//                         $result->date = $tmp2[$i]["date"];
//                         $result->text = $tmp2[$i]["text"];
//                         // $result->number = $tmp2[$i]["number"];
//                         $new = $result->save();
//         }
//         // return $tmp2[$i]["url"];
//         // Scraping::getSite_sub($tmp2[$i]["url"]);
// }

// return $tmp3;

}


public static function getVillages($href){


        $curl = curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_URL, $href);
    curl_setopt($curl, CURLOPT_REFERER, $href);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.125 Safari/533.4");
    $str = curl_exec($curl);
    curl_close($curl);

$doc = new DOMDocument();
$res = @$doc->loadHTML($str);
$xpath = new DOMXpath($doc);
////

$entries = $xpath->query("//table//tr");
// $entriesOl = $xpath->query("//ol");
$h3 = [];
$ol = [];
$tmp = [];
$tmp2 = [
];

foreach ($entries as $entry) {
array_push($tmp, $entry);
}


// $tmp_str = $h3[$i]->nodeValue;
// $tmp_str = str_replace("(","", $tmp_str);
// $tmp_str = str_replace(")","", $tmp_str);
// $tmp_str = str_replace("Today","", $tmp_str);
// $tmp_str = str_replace("Coin Master free spins & coins","", $tmp_str);
// $tmp[$i]["h3"] = date('Y-m-d', strtotime($tmp_str." 2022"));

// return count($tmp);
// return $tmp[432]->childNodes[1]->nodeValue;
// return $tmp[300]->childNodes[1]->nodeValue;


    foreach ($tmp as $key => $value) {
        if($key>0){
if($tmp[$key]->childNodes[0]->nodeValue!='' && is_numeric(intval($tmp[$key]->childNodes[0]->nodeValue))){
    if(strpos($tmp[$key]->childNodes[0]->nodeValue, 'gamescoinpro')==0){
    $tmp2[$key]["number"] = @intval($tmp[$key]->childNodes[0]->nodeValue);
    $tmp2[$key]["name"] = @$tmp[$key]->childNodes[1]->nodeValue;
    $str = $tmp[$key]->childNodes[2]->nodeValue;
    $str = str_replace(',', '', $str);
    // $tmp2[$key]["cost_ratio"] = substr($str, strpos($str, 'million'),length)
    if(strpos($str, 'million')>0){
        $tmp2[$key]["cost_ratio"] = 0;
    } elseif (strpos($str, 'billion')>0) {
        $tmp2[$key]["cost_ratio"] = 1;
    } elseif (strpos($str, 'trillion')>0) {
        $tmp2[$key]["cost_ratio"] = 2;
    } else {
        $tmp2[$key]["cost_ratio"] = null;
    }

    // $str = str_replace('million', '*1000000', $str);
    // $str = str_replace('billion', '*1000000000', $str);
    // $str = str_replace('trillion', '*1000000000000', $str);


    $tmp2[$key]["cost"] =floatval($str);

        if(count(Village::where("number",$tmp2[$key]["number"])->get())<1){
                            $result = new Village;
                        $result->number = $tmp2[$key]["number"];
                        $result->name = addslashes($tmp2[$key]["name"]);
                        $result->cost = $tmp2[$key]["cost"];
                        $result->cost_ratio = $tmp2[$key]["cost_ratio"];
                        $new = $result->save();
        }




    }

}



    }




}
$tmp2 = array_merge($tmp2);
return $tmp2;


}



//


}
