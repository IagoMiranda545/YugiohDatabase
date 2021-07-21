<?php 

echo "test";

$cartas = "./cardinfo.php";

// Read JSON file
$json_data = file_get_contents($cartas);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

?> 
<pre>
<?php var_dump($response_data->data ) ?>
</pre>
?>