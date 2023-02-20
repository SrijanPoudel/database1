
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display pre added questiions</title>
</head>
	<body>
		<table border = "2">

		<tr>
			<th>Question number</th>
			<th>Questions</th>




		<?php
include("db.php");

$query = "select * from questions";
$data = mysqli_query($connection,$query);
$total = mysqli_num_rows($data);

echo $result['question_number']." ".$result['question_text'];
//echo "$total";

if($total!=0){
	while(($result=mysqli_fetch_assoc($data))){
		echo "
		<tr>
		<td>".$result['question_number']."</td>
		<td>".$result['question_text']."</td>
		";

	}
}

else{
	
	echo "no records found";
}
?>
</table>
</body>
</html>