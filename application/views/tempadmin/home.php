<div class="container-fluid">
<div class="row">
	<div class="col-md-3">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">View</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
			</div>
			<div class="panel-body no-padding bg-primary text-center">
				<div class="padding-top-20 padding-bottom-20">
					<i class="fa fa-eye fa-5x"></i>
					<h3>455</h3>
				</div>
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>

	<div class="col-md-3">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title"></h3>Downloaded
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
			</div>
			<div class="panel-body no-padding bg-primary text-center">
				<div class="padding-top-20 padding-bottom-20">
					<h3>400</h3>
					<i class="fa fa-download fa-5x"></i>
				</div>
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>

	<div class="col-md-3">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Panel No Padding</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
			</div>
			<div class="panel-body no-padding bg-primary text-center">
				<div class="padding-top-20 padding-bottom-20">
					<i class="fa fa-eye fa-5x"></i>
					<h3>No Content Padding</h3>
				</div>
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>
	<div class="col-md-3">
		<!-- PANEL NO PADDING -->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Panel No Padding</h3>
				<div class="right">
					<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
					<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
				</div>
			</div>
			<div class="panel-body no-padding bg-primary text-center">
				<div class="padding-top-20 padding-bottom-20">
					<i class="fa fa-thumbs-o-up fa-5x"></i>
					<h3>No Content Padding</h3>
				</div>
			</div>
		</div>
		<!-- END PANEL NO PADDING -->
	</div>
</div>

<p class="demo-button">
	 <a data-toggle="modal" data-target=".bs-tambah-modal">
	<button type="button" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Tambah</button></a>
</p>
<div class="panel panel-headline" id="home">
	<div class="panel-body">
		<div class="row">
			<!-- untuk penulisan kode -->
	<table id="example" class="table table-bordered table-striped">
          <thead>
            <tr style="background-color:#2c3e50; color:white">
                <th>#</th>
                <th>No & Tahun</th>
                <th>Tentang</th>
                <th style="text-align:center"><i class="fa fa-cog fa-1x"></i></th>
            </tr> 
          </thead>
          <tbody>

           <?php $no=0; foreach ($query as $row):
           		$isi = $row['tentang'];
           		$ten = substr($isi, 0, 50);
           ?>
            <tr>
              <td> <?php echo ++$no;?></td>
              <td> <?php echo $row['produk_hukum'] ?></td>
              <td> <?php echo $ten ?></td>
              <td style="text-align:center">
              	<div style="margin:3px">
                  <a href="<?php echo base_url()?>">
                    <span class="glyphicon glyphicon-remove"></span></a>
                   <a href="<?php echo base_url()?>"> 
                    <span class="glyphicon glyphicon-zoom-in" style="margin-left:20px; margin-right: 20px"></span></a>
                   <a href="<?php echo base_url()?>"> 
                    <span class="glyphicon glyphicon-download"></span></a></div>
              </td>
            </tr>
        <?php endforeach; ?> 
        </tbody>
       </table>
		</div>
	</div>
</div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade bs-tambah-modal" tabindex="-1" role="dialog" aria-labelledby=" mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Produk Hukum</h4>
          </div>

          <div class="modal-body">
          <?php echo  form_open_multipart(base_url('admin/proses'))?>
			
			 <div class="form-group">
                <label>Nomor</label>
                <input type="text" name="produkhukum" class="form-control" >
             </div>

             <div class="form-group">
                <label>Tentang</label>
                <textarea name="tentang" id="" cols="30" rows="5" class="form-control"></textarea>
             </div>

            <div class="form-group">
			    <?php 
				echo form_label('Nama File', 'gambar'); 
				echo form_upload('userfile');
				?>
			</div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" name="simpan" class="btn btn-sm btn-success" value="Simpan">
            </div>

        </div>
        <?php echo  form_close()?>
    </div>
</div>
