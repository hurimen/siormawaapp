<table>
	<tr>
		<td width="100%" style="text-align: center;"><center><h3>LAMPIRAN II</h3></center></td>
	</tr>
</table>
<style type="text/css">
	table {
		border: 1px solid #000;
	}
	td {
		border: 1px solid #000;
	}
	thead td, thead th {
		border: 1px solid #000;
	}
</style>
<br>
<br>
<br>
<?php 
$detil = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
echo $detil['halaman_anggaran'];
?>