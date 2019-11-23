<?php 

$trenutnaGodina = date("Y");
$godinaRodjenja = 1985;

$brojGodina = $trenutnaGodina - $godinaRodjenja;
echo "Korisnik ima " . $brojGodina . " godina!";

// Jednostruki i dvostruki navodnici
echo "<br>";
$varijabla = "25";

// Dvostruki interpoliraju varijable, jednostruki ne
echo "Ja imam" . $varijabla . " godina!";
echo 'Ja imam' . $varijabla . ' godina!';

echo "Ja imam $varijabla godina!";
echo 'Ja imam $varijabla godina!';

echo "Ja imam [$varijabla] godina!";
echo 'Ja imam [$varijabla] godina!';

echo "Ja imam {$varijabla} godina!";
echo 'Ja imam {$varijabla} godina!';

?>