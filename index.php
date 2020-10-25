<?php
$var1 = 'abdourazak';
$Var = 'ISMAN';

echo "je m'appele $var1 $Var <br />";


$films = array("ne le dis a persone", "films2", "film3", "film4","les bronzes");

echo "mon tableau contient les films suivants: $films[0]. $films[1]. $films[2]. $films[3].$films[4]. <br /> ";

echo "mon tableau contient ".count($films)." films.";

for ($x = 0; $x < count($films); $x++) {
echo "le film ".($x + 1)." est $films[$x]<br/>";
}
$age=18;

if($age>=18 ) {
echo "majeur";
}
else {
echo "mineur";
}

?>



