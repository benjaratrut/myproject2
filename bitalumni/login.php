<?php
//--login.php

if($username=="admin) {
echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือผู้ดูแลระบบ";
echo "<br><a href='admin/index.php'> ลิงค์ไปหน้า Backend </a>";
}

elseif($username=="benjarat) {
echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือสมาชิกชมรม";
echo "<br><a href='home/index.php'> ลิงค์ไปหน้า Frontend </a>";
}

else {
echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือผู้ใช้งานทั่วไป";
echo "<br><a href='../'>ลิงค์ไปหน้า User (myproject) </a>";
}

?>