<!DOCTYPE html>
<html>
<head>	
</head>
<body>
<?php 								
							//array_column
/*$records = [

[ 'id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe' ],

[ 'id' => 3245,'first_name' => 'Sally', 'last_name' => 'Smith' ],

[ 'id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones' ],

[ 'id' => 5623, 'first_name' => 'Peter', 'last_name' => 'Doe' ]

];

$first_names = array_column($records,'first_name');
var_dump($first_names);
echo "<br>";
print_r($first_names);*/

/* Çıxan nəticədən də göründüyü kimi array_column bizə array dəyəri göndərir. 
	array_column gördüyü iş isə, göndərdiyimiz "key" parametrinə uyğun bütün dəyərləri, 
	bir massiv halına gətirərək bizə geri döndürür*/


								// 2)ARRAY_MAP 
	/*array_map hər hansı bir funskiyanı və ya əməliyyat verilən arrayin bütün elementlərinə
	tətbiq edərək, alınmış nəticənidə elə ARRAY tipindən olan çoxluq kimi geri döndərir
	Yazılma syntax-ı: array_map(myfunction,array1,array2,array3...);
	bir function a eyni zamanda bir neçə array göndərə bilərik.
	*/


/*$word = “Code Academy 2016”;
$word deyişәninin uzunluğunu hesablayan funksiya yazın.*/
//Operation
// $word = "Code Academy 2016";
// print_r(strlen($word));



//Verilәn array­in artma ve ya azalma sirası ilә düzüldüyünü tәyin edәn funksiya yazın.
/*$givenArr=[1,2,3,4];
$theMin=min($givenArr);
$theMax=max($givenArr);
$result;
function counter(){
global $givenArr,$theMin,$result,$theMax;
for($i=0;$i<count($givenArr)-1;$i++){
if($givenArr[0]==$theMin && $givenArr[$i]<$givenArr[$i+1]){
	$result=1;
}
else if($givenArr[0]==$theMax && $givenArr[$i]>$givenArr[$i+1]){
	$result=0;
}
else{
	$result=2;
}
}
if($result==1){
	echo 'Artir';
}
else if($result==0){
	echo 'Azalir';
}
else if($result==2){
	echo "None";
}
}
counter();*/

// array_map function-u yuxarıda qeyd etdiyim custom functionmuzu arrayin bütün elementləri
// üçün icra edir.
?>
</body>
</html>