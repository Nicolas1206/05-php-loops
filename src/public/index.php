<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
$verb = 'code';
foreach ($pronouns as $pronoun) {
    echo $pronoun . " ";
    if ($pronoun == 'He/She') {
        echo $verb . 's';
    } else {
        echo $verb;
    }

    echo "<br>";
}
$initial_number = 1;
while($initial_number <= 120){
    echo $initial_number . "<br>";
    $initial_number+=1;
}
for($initial_number = 1 ; $initial_number <= 120 ; $initial_number+=1){
    echo $initial_number . "<br>";
}
$names = array(
    "Jérôme",
    "Adeline",
    "Camille",
    "Cedric",
    "Ilias",
    "Jason",
    "Manon",
    "Nathan",
    "Marius",
    "Pauline",
    "Rui",
    "Sam",
    "Steeve",
    "Tim",
    "Youssef",
    "Corentin",
    "Sarah",
    "Clara",
    "Lucie",
    "Abdoulaye",
    "Nicolas",
    "Pietro",
    "Robin"
);
foreach($names as $name){
    echo $name . '<br>';
}
$countries = array(
    "none" => "Select a Country",
    "AL" => "Albania",
    "AD" => "Andorra",
    "AM" => "Armenia",
    "AT" => "Austria",
    "AZ" => "Azerbaijan",
    "BY" => "Belarus",
    "BE" => "Belgium",
    "BA" => "Bosnia and Herzegovina",
    "BG" => "Bulgaria",
    "HR" => "Croatia",
    "CY" => "Cyprus",
    "CZ" => "Czechia",
    "DK" => "Denmark",
    "EE" => "Estonia",
    "FI" => "Finland",
    "FR" => "France",
    "GE" => "Geoorgia",
    "DE" => "Germany",
    "GR" => "Greece",
    "HU" => "Hungary",
    "IS" => "Iceland",
    "IE" => "Ireland",
    "IT" => "Italy",
    "KZ" => "Kazakhstan",
    "LV" => "Latvia",
    "LI" => "Liechtenstein",
    "LT" => "Lithuania",
    "LU" => "Luxembourg",
    "MT" => "Malta",
    "MD" => "Moldova",
    "MC" => "Monaco",
    "ME" => "Montenegro",
    "NL" => "Netherlands",
    "MK" => "North Macedonia",
    "NO" => "Norway",
    "PL" => "Poland",
    "PT" => "Portugal",
    "RO" => "Romania",
    "RU" => "Russia",
    "SM" => "San Marino",
    "RS" => "Serbia",
    "SK" => "Slovakia",
    "SI" => "Slovenia",
    "ES" => "Spain",
    "SE" => "Sweden",
    "CH" => "Switzerland",
    "TR" => "Turkey",
    "UA" => "Ukraine",
    "UK" => "United Kingdom",
    "VA" => "Vatican City"
);
?>