<html>
<head>
    <link rel="stylesheet" href="insert.css" />

</head>
</html>
<h1 align='center'>C assesment test rankings</h1>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("minor", $con);
$result = mysql_query("SELECT marks FROM marks");
$unsorted = array();
$a=array();
$i=0;
$j=0;
$k=0;
while($row = mysql_fetch_array($result))
{
 $marks=$row[0];
 array_push($unsorted,$marks);
 $i++;
}

function quick_sort($array)
{
	// find array size
	$length = count($array);

	// base case test, if array of length 0 then just return array to caller
	if($length <= 1){
		return $array;
	}
	else{

		// select an item to act as our pivot point, since list is unsorted first position is easiest
		$pivot = $array[0];

		// declare our two arrays to act as partitions
		$left = $right = array();

		// loop and compare each item in the array to the pivot value, place item in appropriate partition
		for($i = 1; $i < count($array); $i++)
		{
			if($array[$i] > $pivot){
				$left[] = $array[$i];
			}
			else{
				$right[] = $array[$i];
			}
		}

		// use recursion to now sort the left and right lists
		return array_merge(quick_sort($left), array($pivot), quick_sort($right));
	}
}

$sort = quick_sort($unsorted);
$separated = implode(" ", $sort);

//array_push($a,$sort);
$i--;
$k=$i;
$i=0;
while($i<=$k)
{
$separat = explode(" ", $separated)[$i];
$result_1 = mysql_query("SELECT username FROM marks where marks='$separat'");

while($row_1 = mysql_fetch_array($result_1))
{
 $user=$row_1['username'];
 $a[$i]=$user;

}

    $i++;
}
$i--;
$i=0;
while($i<=$k)
{
 print '<table width="200" border="1" align="center">';
print '<tr>';
print '<th scope="col"><p>rank</p></th>';
print '<th scope="col"><p>username</p></th>';
print ' </tr>';
print '<tr>';
print '<th scope="row">';
    $i++;
print  "$i";
    $i--;
print  '</th>';
print '<td>';
    $user=$a[$i++];
print  "$user";
print '</td>';
print '</tr>';
print '</table>';
}

?>
