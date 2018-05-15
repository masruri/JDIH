<div class="col-md-8">
    <div class="row">
      <div class="panel">
         <div class="modal-header"  class="btn btn-sm" style="background-color:#2c3e50; color:white">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Kategori</h4>
        </div>
	<div class="panel-body">
			<!-- untuk penulisan kode -->
     <?php echo form_open('kategori/proses/'.$query->id_kategori) ?>
        <div class="form-group">
          <label for="">Kategori</label>
          <input type="hidden" name="kategori" value="<?php echo $query->id_kategori; ?>">
          <input type="text" class="form-control" name="kategori" value="<?php echo $query->nama_kategori; ?>">
        </div>

        <p class="demo-button">
          <button type="button" class="btn btn-default" style="background-color:#2c3e50; color:white" onClick="self.history.back()">Kembali</button>
          <input type="submit" name="Edit" value="Edit" class="btn btn-default" style="background-color:#2c3e50; color:white">
        </p>
      </form>
      
		</div>
	</div>
</div>
</div>