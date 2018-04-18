<?php

form_open();

echo form_open('registracija/registriraj');
echo "Vnesite uporabnisko ime: ".form_input('uporabnik','vnesite ime');
echo "<br>";
echo "Vnesite geslo: ".form_input('geslo','vnesite geslo');

echo "<br>";
echo "Vnesite naslov: ".form_input('naslov','vnesite naslov');

echo "<br>";
echo "Vnesite obcino: ".form_input('obcina','vnesite obcino');
echo form_submit('poslji','poslji!');
#echo '<a href="' .base_url.'registracija">sdgsdg</a>';
?>