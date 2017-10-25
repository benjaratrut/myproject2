<?php
//--if03.php
$name="manager";
if ($name=="manager")
  {
      echo"ยินดีต้อนรับคุณ <font color='red'> $name </font> คุณคือผู้จัดการ <br>";
	  echo "<a href='http://www.benjarat.com'> GOTO Arnut.com </a>";
	  
	  
  }elseif($name=="admin")
  {
      echo"ยินดีต้อนรับคุณ <font color='green'> $name </font> คุณคือผู้ดูแลระบบ";
	  
	  
	  
	  
  }elseif($name=="webmster")
  {
      echo"ยินดีต้อนรับคุร <font color='blue'> $name </font>  คุณคือผู้ดูแลเว็ปไซต์";
  }else
  {
      echo"ยินดีต้อนรับคุณ<font color='pink'> $name </font> คุณคือผู้ใช้งาน";
  }
  
?>