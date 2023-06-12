<?php 
$detil = $this->db->query("SELECT * FROM tb_proposal WHERE id='".$_REQUEST['id']."'")->row_array();
?>
<table>
	<tr>
		<td width="100%" style="text-align: center;"><center><h3>PROPOSAL KEGIATAN <?php echo strtoupper($detil['acara']); ?></h3></center></td>
	</tr>
</table>
<br>
<br>
<div style="text-align: left;">
<?php 
echo $detil['halaman_proposal'];
?>
</div>
