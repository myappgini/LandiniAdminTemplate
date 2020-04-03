<?php

//An arry with codes and corresponding languages
//https://www.phptutorial.info/scripts/languagesscript.html

$languajes_array = array(
"af" => "Afrikaans",
"sq" => "Albanian",
"eu" => "Basque",
"bg" => "Bulgarian",
"be" => "Byelorussian",
"ca" => "Catalan",
"zh" => "Chinese",
"zh-cn" => "Chinese/China",
"zh-tw" => "Chinese/Taiwan",
"zh-hk" => "Chinese/Hong Kong",
"zh-sg" => "Chinese/singapore",
"hr" => "Croatian",
"cs" => "Czech",
"da" => "Danish",
"nl" => "Dutch",
"nl-be" => "Dutch/Belgium",
"en" => "English",
"en-gb" => "English/United Kingdom",
"en-us" => "English/United Satates",
"en-au" => "English/Australian",
"en-ca" => "English/Canada",
"en-nz" => "English/New Zealand",
"en-ie" => "English/Ireland",
"en-za" => "English/South Africa",
"en-jm" => "English/Jamaica",
"en-bz" => "English/Belize",
"en-tt" => "English/Trinidad",
"et" => "Estonian",
"fo" => "Faeroese",
"fa" => "Farsi",
"fi" => "Finnish",
"fr" => "French",
"fr-be" => "French/Belgium",
"fr-fr" => "French/France",
"fr-ch" => "French/Switzerland",
"fr-ca" => "French/Canada",
"fr-lu" => "French/Luxembourg",
"gd" => "Gaelic",
"gl" => "Galician",
"de" => "German",
"de-at" => "German/Austria",
"de-de" => "German/Germany",
"de-ch" => "German/Switzerland",
"de-lu" => "German/Luxembourg",
"de-li" => "German/Liechtenstein",
"el" => "Greek",
"hi" => "Hindi",
"hu" => "Hungarian",
"is" => "Icelandic",
"id" => "Indonesian",
"in" => "Indonesian",
"ga" => "Irish",
"it" => "Italian",
"it-ch" => "Italian/ Switzerland",
"ja" => "Japanese",
"ko" => "Korean",
"lv" => "Latvian",
"lt" => "Lithuanian",
"mk" => "Macedonian",
"ms" => "Malaysian",
"mt" => "Maltese",
"no" => "Norwegian",
"pl" => "Polish",
"pt" => "Portuguese",
"pt-br" => "Portuguese/Brazil",
"rm" => "Rhaeto-Romanic",
"ro" => "Romanian",
"ro-mo" => "Romanian/Moldavia",
"ru" => "Russian",
"ru-mo" => "Russian /Moldavia",
"gd" => "Scots Gaelic",
"sr" => "Serbian",
"sk" => "Slovack",
"sl" => "Slovenian",
"sb" => "Sorbian",
"es" => "Spanish",
"es-do" => "Spanish",
"es-ar" => "Spanish/Argentina",
"es-AR" => "Spanish/Argentina",
"es-co" => "Spanish/Colombia",
"es-mx" => "Spanish/Mexico",
"es-es" => "Spanish/Spain",
"es-gt" => "Spanish/Guatemala",
"es-cr" => "Spanish/Costa Rica",
"es-pa" => "Spanish/Panama",
"es-ve" => "Spanish/Venezuela",
"es-pe" => "Spanish/Peru",
"es-ec" => "Spanish/Ecuador",
"es-cl" => "Spanish/Chile",
"es-uy" => "Spanish/Uruguay",
"es-py" => "Spanish/Paraguay",
"es-bo" => "Spanish/Bolivia",
"es-sv" => "Spanish/El salvador",
"es-hn" => "Spanish/Honduras",
"es-ni" => "Spanish/Nicaragua",
"es-pr" => "Spanish/Puerto Rico",
"sx" => "Sutu",
"sv" => "Swedish",
"sv-fi" => "Swedish/Findland",
"ts" => "Thai",
"tn" => "Tswana",
"tr" => "Turkish",
"uk" => "Ukrainian",
"ur" => "Urdu",
"vi" => "Vietnamese",
"xh" => "Xshosa",
"ji" => "Yiddish",
"zu" => "Zulu"
);

//Get list of languajes selected in the browser
$Languajes_from_browser=$_SERVER["HTTP_ACCEPT_LANGUAGE"];

//Get position of ";" in languajes (in case value is like "en,es;q=0.5")
$pos=strpos($Languajes_from_browser,";");  

//Eliminate from "en,es;q=0.5" the last past (";q=0.5"), which starts in $pos 
if ($pos>0){$Languajes_from_browser=substr($Languajes_from_browser,0,$pos);}

//Get an array of languajes and print the corresponding value from $languajes_array
$languajes=explode(",",$Languajes_from_browser);
foreach ($languajes as $key => $value){
        if($languajes_array[$value]!=""){
            if (file_exists("config.json")){
                $config_lang = file_get_contents("config.json");
                $config_lang = json_decode($config_lang, true);
            }
            $lang_detected = $languajes_array[$value];
        }else{
            $value = 'en';
        }
}

?>

<li class="dropdown task-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="fa fa-language">&nbsp&nbsp<?php echo strtoupper($value); ?> </span>
        <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li class="heder">
            <h2>
            <p class="">
                <span class="es" <?php echo $value == "es" ? "" : "hidden" ; ?>>Hola mundo</span>
                <span class="fr" <?php echo $value == "fr" ? "" : "hidden" ; ?>>Bonjour le monde</span>
                <span class="it" <?php echo $value == "it" ? "" : "hidden" ; ?>>Ciao mondo</span>
                <span class="br" <?php echo $value == "br" ? "" : "hidden" ; ?>>Olá, Mundo</span>
                <span class="ru" <?php echo $value == "ru" ? "" : "hidden" ; ?>>Здравствуй, мир</span>
                <span class="ru" <?php echo $value == "en" ? "" : "hidden" ; ?>>Hello World</span>
                <?php
                //echo $lang_detected;
                //var_dump ($languajes);
                ?>
                </span>
            </p>
            </h2>
        </li>
        <li class="user-body">
            <button type="button" class="btn dropdown-content"><strong class="en">English</strong></button>
            <?php 
                $dir = dirname(__FILE__) . "/langs";
                $views = array_diff(scandir($dir), array('.', '..'));
                foreach ($views as $lng){
                    $res[] = $lng;
                    $data = explode("-",$lng);
                    if ( !strpos($lng,"admin")){
                        ?>
                        <button type="button" class="btn dropdown-content"><strong class="<?php echo $data[0]; ?>"><?php echo $data[1]; ?></strong></button>
                        <?php
                    }
                }
                //var_dump ($res);
            ?>
            <button type="button" class="btn dropdown-content"><strong class="text-info">Español</strong><span class="text-info glyphicon glyphicon-ok"></span></button>
        </li>
    </ul>
</li>


