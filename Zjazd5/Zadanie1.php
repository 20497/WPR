<html>
<body>
<?php
if (!$db = mysqli_connect("localhost", "s20497","","wpr")) 
{
	exit("Cannot connect to the DB");
}
else 
{
	echo "Connected";
}
echo "</br>";
$query = 'select * from testWPR';
if(!$result = mysqli_query($db,$query))
{
    echo "Cannot connect to the DB";
}
else
{
    echo "Connected";
}
echo "</br>";
while($rows = mysqli_fetch_row($result))
{
    foreach ($rows as $row)
    {
        echo $row;
        echo "</br>";
    }
}
$result = mysqli_query($db,$query);
while($r=mysqli_fetch_array($result))
{
echo $r['id']."<br/>";
}

if ($result = mysqli_query($db, $query)) 
{
    $row_cnt = mysqli_num_rows($result);
    printf("There are %d records in the DB\n", $row_cnt);
}

echo "</br></br>";

$insert = 'insert into testWPR (id, name) values (123, "John")';
if(mysqli_query($db, $insert))
{
    echo "New record added to the DB";
} else
{
    echo "Error, couldn't add new record to the DB, might be a duplicate";
}
echo "</br>";
$rowNumber = mysqli_affected_rows($db);
echo "Records added - $rowNumber"
?>
</body>
</html>