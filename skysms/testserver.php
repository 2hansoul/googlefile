<?php
if($_SERVER['REMOTE_ADDR'] == "114.203.239.132"){ ?>
<div>
	<table>
		<strong><li><?=$T_date;?>��</li></strong>
		<tr><td style='width:80px' align='center'>��������</td><td style='width:130px' align='center'>����</td><td style='width:130px' align='center'>total</td></tr>
		<tr><td>�ϰ�</td><td><?=$result;?></td><td><?=$result2;?></td></tr>
		<tr><td>�ְ�</td><td><?=$result3;?></td><td><?=$result4;?></td></tr>
		<tr><td>����</td><td><?=$result5;?></td><td><?=$result6;?></td></tr>
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
		<strong><li><?=$T_date;?>��</li></strong>
		<tr><td style='width:80px' align='center'>��������</td><td style='width:130px' align='center'>����</td><td style='width:130px' align='center'>total</td></tr>
		<tr><td>�ϰ�</td><td></td><td></td></tr>
		<tr><td>�ְ�</td><td></td><td></td></tr>
		<tr><td>����</td><td></td><td></td></tr>
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
