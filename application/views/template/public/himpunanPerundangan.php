
<?php foreach ($query as $row):
	 $isi = $row['tentang'];
     $ten = substr($isi, 0, 90);
?>

<div class="span8" style="padding-bottom: 20px">
	<div class="about-author">
		<a href="#" class="thumbnail align-left">
			<img src="<?php echo base_url()?>template/img/avatar.png" alt="" /></a>
		<h5><strong><a href="#"><?php echo $row['produk_hukum'] ?></a></strong></h5>
		<p><?php echo $ten; ?></p>
	    <i class=" icon-download-alt">&nbsp;<span style="color:#d35400">55</span> Downloaded</i></a>
		<div class="pull-right">
			<a href="<?php echo base_url().'file/'.$row['berkas'] ?>" target ="_blank">
			 <i class="icon-cloud-download" style="font-size:15pt; color: #2980b9">&nbsp;Klik Untuk Download</i></a>
		</div>
	</div>
</div>

<?php endforeach;?>
