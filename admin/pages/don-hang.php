<?php
$smmt=$conn->prepare("SELECT * FROM donhang ORDER BY `IDDH` ASC");
$smmt->execute();
$data=$smmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
    	<th class="head-sp" scope="col">STT</th>
		<th class="head-sp" scope="col">Tên KH</th>
		<th class="head-sp" scope="col">Địa chỉ</th>
		<th class="head-sp" scope="col">Tổng tiền</th>
		<th class="head-sp" scope="col">SĐT</th>
		<th class="head-sp" scope="col">Ngày Đặt</th>		
      <!-- <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th> -->
    </tr>
  </thead>
  <tbody>
    <h1 class="func">Danh sách các đơn hàng</h1>
    <?php foreach ($data as $value) {

			?>
			<tr>

				<th scope="row"><?php echo $value["IDDH"];?></th>
				<td ><?php echo $value["Ten"];?></td>
				<td ><?php echo $value["Diachi"];?></td>
				<td ><?php echo $value["Tongtien"];?></td>
				<td ><?php echo $value["SDT"];?></td>
				<td ><?php echo $value["NGAY"];?></td>			
				
			</tr>
			<?php
		}
		?>
    
  </tbody>
</table>

