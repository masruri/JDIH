<p class="demo-button">
	 <a data-toggle="modal" data-target=".bs-tambah-modal">
	<button type="button" class="btn btn-sm"  class="btn btn-sm" style="background-color:#2c3e50; color:white"><i class="fa fa-plus"></i>&nbsp;Tambah</button></a>
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
        
                   <a href="<?php echo base_url().'produkhukum/delete/'.$row['id_produk_hukum']; ?>"
                    onClick="return confirm('Anda yakin ingin menghapus data ini?')">
                       <span class="glyphicon glyphicon-remove"></span>
                   </a>

                   <a href="<?php echo base_url().'produkhukum/update/'.$row['id_produk_hukum']; ?>">
                       <span class="glyphicon glyphicon-pencil" style="margin-left:20px; margin-right: 20px"></span>
                   </a>


                   <a href="<?php echo base_url()?>"> 
                    <span class="glyphicon glyphicon-download"></span>
                   </a>
               </div>
              </td>
            </tr>
        <?php endforeach; ?> 
        </tbody>
       </table>
		</div>
	</div>
</div>
</div>

<!-- Modal Edit Data -->
<div class="modal fade bs-edit-modal" tabindex="-1" role="dialog" aria-labelledby=" mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
        
          <div class="modal-header"  class="btn btn-sm" style="background-color:#2c3e50; color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Produk Hukum</h4>
          </div>
          <div class="modal-body">
          <?php echo  form_open_multipart(base_url('Produkhukum/proses/'.$row['id_produk_hukum']))?>
            
             <div class="form-group">
                <label>Nomor</label>
                 <input type="hidden" name="id_produk_hukum"  value="<?php echo $row['id_produk_hukum'];?>">
                <input type="text" name="produkhukum" class="form-control" value="<?php echo $row['produk_hukum'];?>">
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
                <button type="submit" class="btn btn-sm" class="btn btn-sm" style="background-color:#2c3e50; color:white" data-dismiss="modal">Close</button>
                <input type="submit" name="Edit" class="btn btn-sm" style="background-color:#2c3e50; color:white" value="Edit">
            </div>

        </div>
        <?php echo  form_close()?>
    </div>
</div>   


<!-- Modal Tambah Data -->
<div class="modal fade bs-tambah-modal" tabindex="-1" role="dialog" aria-labelledby=" mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header"  class="btn btn-sm" style="background-color:#2c3e50; color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Produk Hukum</h4>
          </div>

          <div class="modal-body">
          <?php echo  form_open_multipart(base_url('Produkhukum/proses'))?>
			
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
                <button type="submit" class="btn btn-sm" class="btn btn-sm" style="background-color:#2c3e50; color:white" data-dismiss="modal">Close</button>
                <input type="submit" name="Simpan" class="btn btn-sm" style="background-color:#2c3e50; color:white" value="Simpan">
            </div>

        </div>
        <?php echo  form_close()?>
    </div>
</div>
