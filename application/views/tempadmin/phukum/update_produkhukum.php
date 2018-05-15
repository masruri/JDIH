<div class="col-md-8">
    <div class="row">
      <div class="panel">
         <div class="modal-header"  class="btn btn-sm" style="background-color:#2c3e50; color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Produk Hukum</h4>
        </div>
	<div class="panel-body">
			<!-- untuk penulisan kode -->
     <?php echo form_open('produkhukum/update/'.$query->id_produk_hukum) ?>
        <div class="form-group">
          <label for="">Produk Hukum</label>
          <input type="text" class="form-control" name="produkhukum" value="<?php echo $query->produk_hukum; ?>">
        </div>

        <div class="form-group">
          <label for="">Kategori</label>
          <input type="text" class="form-control" name="produkhukum" value="<?php echo $query->nama_kategori; ?>">
        </div>

        <div class="form-group">
          <label for="">Tentang</label>
          <textarea name="tentang" class="form-control" cols="30" rows="10"><?php echo $query->tentang; ?></textarea>
        </div>
        
        <div class="form-group">
            <?php 
            echo form_label('Nama File', 'gambar'); 
            echo form_upload('userfile');
            ?>
        </div>

        <p class="demo-button">
          <button type="button" class="btn btn-default" style="background-color:#2c3e50; color:white" onClick="self.history.back()">Kembali</button>
          <button type="button" class="btn btn-default" style="background-color:#2c3e50; color:white">Edit</button>
        </p>
      </form>
      
		</div>
	</div>
</div>
</div>