<html>
<head>
<title>
20171120作業
</title>
</head>
<body>
<!---下面是for寫法-->
<table border="1">
<tr>
	<th colspan="3">輸出結果</th>
</tr>
<tr>
	<th>Name</th>
	<th>Stock</th>
	<th>Sold</th>
</tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

for($i=0; $i<count($data); $i++){
	echo "<tr>";
	for($j=0; $j<count($data[$i]); $j++){
		echo "<td>".$data[$i][$j]."</td>";
	}
	echo "</tr>";
}
?>
</table>
<hr color="#00FFFF" size="3">
<!---下面是foreach寫法-->
<table border="1">
<tr>
	<th colspan="3">輸出結果</th>
</tr>
<tr>
	<th>Name</th>
	<th>Stock</th>
	<th>Sold</th>
</tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

foreach ($data as $key => $value){
	echo "<tr>";
	foreach ($value as $keyin => $valuein) {
		echo "<td>".$valuein."</td>";
	}
	echo "</tr>";
}
?>
</table>
<hr color="#00FFFF" size="3">
<!---下面是array_map + join寫法-->
<table border="1">
<tr>
	<th colspan="3">輸出結果</th>
</tr>
<tr>
	<th>Name</th>
	<th>Stock</th>
	<th>Sold</th>
</tr>
<?php
$data=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)   
);

function tranform($x){
	echo "<tr>";
	echo "<td>".$x[0]."</td>";
	echo "<td>".$x[1]."</td>";
	echo "<td>".$x[2]."</td>";
	echo "</tr>";
}

array_map("tranform", $data);
?>
</table>
</body>
</html>
