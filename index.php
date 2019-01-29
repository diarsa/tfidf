<?php

include "TFIDF.php";

// document sebagai percobaan
$D[0] = "Shipment gold damaged fire";
$D[1] = "Delivery silver arrived silver truck";
$D[2] = "Shipment gold arrived truck";

$ir = new TFIDF();

echo "<p><b>Corpus:</b></p>";
$ir->show_docs($D);

$ir->create_index($D);

echo "<p><b>Inverted Index:</b></p>";
$ir->show_index();

$term = "gold";  // kata yang akan menjadi pusat perhitungan
$tf  = $ir->tf($term);
$ndw = $ir->ndw($term);
$idf = $ir->idf($term);
echo "<p>";
echo "Term Frequency of '$term' is $tf<br />";
echo "Number Of Documents with $term is $ndw<br />";
echo "Inverse Document Frequency of $term is $idf";
echo "</p>";

?>
