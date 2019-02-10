<?php 
include("db.php");
session_start();
$user=$_SESSION['login_user'];
          
        $fetc = "SELECT * FROM isd where username='$user' ";
        $result = mysql_query($fetc);
    

    
?>


<?php
echo "<table width='1000' border='2' >";
echo "<tr bgcolor='#33FF99'>
<td>Sr.No</td>
<td>Category</td>
<td>Sub_category</td>
<td>Topic</td>
<td>Notes/Solutions</td>
<td>Files</td>
<td>Date</td>
</tr>";
while($row1=mysql_fetch_array($result))
{
 
 $seno=$row1['seno'];
    $topic=$row1['topic'];
    $catc=$row1['cat'];
	$filename=$row1['file'];
		$subc=$row1['sub'];
	$des=$row1['des'];
	$link=$row1['link'];
	$edate=$row1['edate'];
	echo "<tr >";
	echo "<td >";
    echo $seno;
	echo "</td>";
	
	echo "<td>";
    echo $topic;
	echo "</td>";
	echo "<td>";
    echo $catc;
	echo "</td>";
	echo "<td>";
    echo $subc;
	echo "</td>";
	echo "<td>";
    echo $des;
	echo "</td>";
echo "<td>";?> <a href="<?php echo $filename?>" > <?php echo $filename; echo "</td>";
echo "<td>";
    echo $edate;
	echo "</td>";
echo "</tr>";
?>

<?php 
} 
echo "</table>";
?>