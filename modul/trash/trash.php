<?php

	if($_SESSION['level']=='1') {
		echo "";
	}
	elseif ($_SESSION['level']=='2') {
		echo "";
	}
	elseif ($_SESSION['level']=='3'){
	?>
<table style="margin:10px;" width="1000">
	<tr class="page-header">
		<td width="270" style="font-size:40px;"> <h2> Sampah </h2> </td>
	</tr>
</table>
<?php } ?>