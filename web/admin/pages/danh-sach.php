<?php
$smmt=$conn->prepare("SELECT * FROM danhsach ORDER BY `id` ASC");
$smmt->execute();
$data=$smmt->fetchAll(PDO::FETCH_ASSOC);
?>



<table class="danhsach">
	<thead>
		<th>STT</th>
		<th>Name</th>
		<th>Price</th>
		<th>Image</th>
		<th colspan="2">Option</th>
	</thead>
	<tbody>
		<?php foreach ($data as $value) {
				
			?>
		<tr>
			
			<td class="moto"><?php echo $value["id"];?></td>
			<td class="moto"><?php echo $value["name"];?></td>
			<td class="moto"><?php echo $value["price"];?></td>
			<td class="moto"><img src="<?php echo 'upload/'.$value["picture"];?>" style="width:100px;"></td>
			<td class="moto"><a href="index.php?t=sua&id=<?php echo $value["id"];?>" >sua</a></td>
			<td class="moto"><a href="index.php?t=xoa&id=<?php echo $value["id"];?> " onclick="return acceptRemove()">xoa</a></td>
		
		</tr>
		<?php
		}
		?>
	</tbody>
</table>