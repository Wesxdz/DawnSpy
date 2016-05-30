<?php

include 'config.php';

$sql = "SELECT * FROM clickcounter1 WHERE cat='$show' ORDER BY count DESC";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$id=$row['id'];
	$url=$row['url'];
	$count=$row['count'];
	$name=$row['name'];
	$desc=$row['desc'];
	$date=$row['date'];
	$cat=$row['cat'];
?>
	<div class='icon'>
	<div class='image'>
<?php echo 
	"<a href='/click.php?id=".$id."'><img src='Games/Icon/".$url.".jpg'></a>"

?>
	
	</div>
	<div class='desc'>
		<h1 class='d1'>
	<?php echo "$name"; ?></h1>
		<p class="d2">
	<?php echo "$date"; ?></p>
		<p class="d2">
	<?php echo substr($desc, 0, 80)."..."; ?></p>
	
		<p class="d2">Plays:
	<span style="color:#00a0e3">
	<?php echo "$count"; ?>
	</span>Category:
	<span style="color:#00a0e3">
	<?php echo "$cat"; ?>
		</p>
	</div>
</div>

<?php } ?>
	
