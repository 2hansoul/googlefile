<?php
if($_SERVER['REMOTE_ADDR'] == "114.203.239.132"){ ?>
<div>
	<table>
		<strong><li><?=$T_date;?>월</li></strong>
		<tr><td style='width:80px' align='center'>내아이피</td><td style='width:130px' align='center'>차단</td><td style='width:130px' align='center'>total</td></tr>
		<tr><td>일간</td><td><?=$result;?></td><td><?=$result2;?></td></tr>
		<tr><td>주간</td><td><?=$result3;?></td><td><?=$result4;?></td></tr>
		<tr><td>월간</td><td><?=$result5;?></td><td><?=$result6;?></td></tr>
	</table>
</div>
<div>
	<table>
		<tr><td>202210</td><td><input type='file'></td></tr>
		<tr><td>202209</td><td><input type='file'></td><td></td></tr>
		<tr><td>202208</td><td><input type='file'></td><td></td></tr>
	</table>
</div>   
<?php } else { ?>
    <div>
	<table>
		<strong><li><?=$T_date;?>월</li></strong>
		<tr><td style='width:80px' align='center'>내아이피</td><td style='width:130px' align='center'>차단</td><td style='width:130px' align='center'>total</td></tr>
		<tr><td>일간</td><td></td><td></td></tr>
		<tr><td>주간</td><td></td><td></td></tr>
		<tr><td>월간</td><td></td><td></td></tr>
	</table>
</div>
<div>
	<table>
		<tr><td>202210</td><td><input type='file'></td></tr>
		<tr><td>202209</td><td><input type='file'></td><td></td></tr>
		<tr><td>202208</td><td><input type='file'></td><td></td></tr>
	</table>
</div>   
<?php } ?>
