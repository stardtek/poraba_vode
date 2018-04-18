
<img src="<?php echo base_url(); ?>img/logotip.png"> 
<h1>prijava v sistem</h1>

<?php
#codeigniter forms
echo form_open('prijava/vstop', array('method'=>'get')); #<form action="https.../prijava/vstop.php" method="post">
echo "Vnesite uporabnisko ime: ".form_input('uporabnik','vnesite ime');
echo "<br>";
echo "Vnesite geslo: ".form_input('geslo','vnesite geslo');
echo form_submit('poslji','poslji!');

echo '<a href="' .base_url().'index.php/registracija">registracija</a>';


?>