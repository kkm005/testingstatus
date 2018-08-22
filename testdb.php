<?php
require('./db/connect-db.php'); //คำสั่งเรียกใช้ไฟล์
$sql_office = "SELECT * FROM tbl_office";
$query_office = mysqli_query($conn,$sql_office);
while ($obj = mysqli_fetch_array($query_office))
{
	echo $obj["office_name"]."<br>"; //จุด คือการเชื่อมข้อความ , "<br>" คือการขึ้นบรรทัดใหม่
	
}

?>
